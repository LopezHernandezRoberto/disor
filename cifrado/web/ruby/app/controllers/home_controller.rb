load 'Cifrar.rb'
load "AlfabetoMay.rb"
load "AlfabetoMin.rb"
class HomeController < ApplicationController

  def index
    respond_to do |format|
      format.html
    end
  end

  def cifrado
    cifrar = Cifrar.new
    alfabetoMay = AlfabetoMay.new
    alfabetoMin = AlfabetoMin.new
    @text = params[:text]
    @displacement = params[:displacement]
    @ci = cifrar.cifrado(@text.to_s, @displacement.to_i, alfabetoMay, alfabetoMin)
    @invert = @text.to_s.reverse
    render json: {encryption: @ci, invert: @invert}
  end

  
end
