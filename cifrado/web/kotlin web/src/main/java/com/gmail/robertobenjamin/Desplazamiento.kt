class Desplazamiento {

    fun desplazar(cadena: String, desplazamiento: Int): String {
        var busqueda= BusquedaLetra()
        var texto = ""
        for (i in 0 until cadena.length) {
            if (Character.isUpperCase(cadena[i]))
                texto += busqueda.buscarLetra(cadena[i], desplazamiento)
            else
                texto += (busqueda.buscarLetra((cadena[i] + "").toUpperCase()[0], desplazamiento) + "").toLowerCase()
        }

        return texto

    }
    fun desplazarInversa(cadena: String, desplazamiento: Int): String {
        var busqueda=BusquedaLetra()
        var texto = ""
        for (i in 0 until cadena.length) {
            if (Character.isUpperCase(cadena[i]))
                texto += busqueda.inversa(cadena[i], desplazamiento)
            else
                texto += (busqueda.inversa((cadena[i] + "").toUpperCase()[0], desplazamiento) + "").toLowerCase()
        }
        return texto
    }


}