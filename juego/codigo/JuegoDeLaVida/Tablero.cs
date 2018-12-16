using System;
using System.Collections.Generic;
using System.Linq;
using System.Text;
using System.Threading.Tasks;

namespace JuegoDeLaVida {
     class Tablero {

          List<Celula> celulas;
          int generacion;
          Historial historial;

          public bool SiguienteGeneracion() {
               return true;
          }

          public bool Existe(int id) {
               return true;
          }
     }
}
