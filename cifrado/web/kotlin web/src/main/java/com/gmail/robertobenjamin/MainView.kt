package com.gmail.robertobenjamin

import com.vaadin.flow.component.button.Button
import com.vaadin.flow.component.notification.Notification
import com.vaadin.flow.component.orderedlayout.VerticalLayout
import com.vaadin.flow.router.Route
import com.vaadin.flow.server.PWA



/**
 * The main view contains a button and a click listener.
 */
@Route("")
@PWA(name = "Project Base for Vaadin Flow", shortName = "Project Base")
class MainView : VerticalLayout() {
    init {
        var desplazamiento= Desplazamiento()
        var agrupacion= Agrupacion()
        var busquedaLetra= BusquedaLetra()

        var  texto= textField("texto a cifrar"){
        }

        var desplazamiento = comboBox<Int>("desplazamiento") {
            setItems((0..10).toList())
            isEmptySelectionAllowed = false
            value = 1
        }
        var resultadoCesar = textField("cifrado"){
            value = desplazamiento.desplazar(texto)
        }

        var resultado invertido = textField("Resultado invertido"){
            value = desplazamiento.desplazarInversa(texto)
        }
        var agrupacionReverseG = comboBox<Int>("Agrupacion") {
            setItems((1..10).toList())
            isEmptySelectionAllowed = false
            value = 0
        }
        var agrupaciones = textField("Resultado agrupado"){
            value = agrupacion.agrupacionInversa
        }



        }
    }
}
