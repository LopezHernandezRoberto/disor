#encoding: utf-8

class Cifrar

  def cifrado(texto, desplazamiento, alfabetoMay, alfabetoMin)
    cifrado = ""
    texto.each_char { |c|
      if alfabetoMin.alfabeto.index(c) != nil || alfabetoMay.alfabeto.index(c) != nil
        cifrado += (alfabetoMin.alfabeto.index(c) != nil) ? alfabetoMin.alfabeto[((alfabetoMin.alfabeto.index(texto[texto.split("").index(c)]))+desplazamiento)%alfabetoMin.alfabeto.length] : alfabetoMay.alfabeto[((alfabetoMay.alfabeto.index(text[texto.index(c)]))+desplazamiento)%alfabetoMay.alfabeto.length]
      else
        cifrado += c
      end
    }
    return cifrado
  end

end
