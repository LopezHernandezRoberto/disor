class BusquedaLetra {

    fun buscarLetra(letra: Char, avance: Int): Char {
        var alfabeto=Alfabeto().getalfabeto()
        for (i in alfabeto.indices) {
            if (alfabeto[i] == ' ')
                return ' '
            else if (alfabeto[i] == letra) {
                return if (i + avance >= alfabeto.size)
                    alfabeto[i + avance - alfabeto.size]
                else
                    alfabeto[i + avance]
            }
        }
        return ' '
    }
    fun inversa(letra: Char, avance: Int): Char {
        var alfabeto=Alfabeto().getalfabeto()
        for (i in alfabeto.indices) {
            if (alfabeto[i] == ' ')
                return ' '
            else if (alfabeto[i] == letra) {
                return if (i - avance < 0)
                    alfabeto[alfabeto.size - avance]
                else
                    alfabeto[i - avance]
            }
        }
        return ' '
    }
}