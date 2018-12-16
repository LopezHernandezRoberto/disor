using System;
using System.Collections.Generic;
using System.Linq;
using System.Text;
using System.Threading.Tasks;

namespace JuegoDeLaVida {
     abstract class Dibujador {

          Tablero tablero;
          int zoom;
          ICreadorCelula creadorCelulas;

          public abstract void Dibujartablero();

          public abstract void EnciendeCelula();

          public void AvanzarGeneracion() {

          }

     }
}
