load 'Cifrar.rb'
load "AlfabetoMay.rb"
load "AlfabetoMin.rb"
require "gtk3"

cifrar = Cifrar.new
alfabetoMay = AlfabetoMay.new
alfabetoMin = AlfabetoMin.new

builder_file = "#{File.expand_path(File.dirname(__FILE__))}/builder.ui"

# Construct a Gtk::Builder instance and load our UI description
builder = Gtk::Builder.new(:file => builder_file)

# Connect signal handlers to the constructed widgets
window = builder.get_object("window")
window.signal_connect("destroy") { Gtk.main_quit }


text1 = builder.get_object("text")
displacement = builder.get_object("displacement")
cifrado = builder.get_object("cifrado")
textInvert = builder.get_object("textInvert")
text1.signal_connect("key-release-event") do |w, e|
  textInvert.set_markup(text1.text.reverse)
  p "#{e.keyval}, Gdk::Keyval::GDK_#{Gdk::Keyval.to_name(e.keyval)}"

  if displacement.text != "" && displacement.text.to_i > 0 && text1.text != ""
    cifrado.set_markup(cifrar.cifrado(text1.text, displacement.text.to_i, alfabetoMay, alfabetoMin))
  elsif displacement.text == ""
    cifrado.set_markup("No ingreso desplazamiento")
  elsif text1.text == ""
    cifrado.set_markup("No ingreso texto a cifrar")
  elsif displacement.text.to_i == 0
    cifrado.set_markup("Ingrese un numero de desplazamiento")
  end


end

displacement.signal_connect("value-changed")  {
  puts "#{displacement.text.to_i}"
  if displacement.text != "" && displacement.text.to_i > 0 && text1.text != ""
    cifrado.set_markup(cifrar.cifrado(text1.text, displacement.text.to_i, alfabetoMay, alfabetoMin))
  elsif displacement.text == ""
    cifrado.set_markup("No ingreso desplazamiento")
  elsif text1.text == ""
    cifrado.set_markup("No ingreso texto a cifrar")
  elsif displacement.text.to_i == 0
    cifrado.set_markup("Ingrese un numero de desplazamiento")
  end


}

Gtk.main
