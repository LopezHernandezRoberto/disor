class Agrupacion {

    fun reverso(cadena: String): String {
        return cadena.reversed()
    }

    fun agrupacionInversa(cadena: String, separacion:Int): String {
        var cadenaDividida=""
        var token=""
        if (separacion!=0) {
            for (i in 0 until cadena.length step separacion) {
                println(cadenaDividida)
                token=""
                for (j in i..(i + separacion-1)) {
                    if (j<cadena.length)
                        token += cadena[j]
                    println(token)
                }
                cadenaDividida += reverso(token)+" "
                println(cadenaDividida)
            }

        }
        return cadenaDividida
    }
}