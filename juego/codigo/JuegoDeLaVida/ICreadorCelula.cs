using System;
using System.Collections.Generic;
using System.Linq;
using System.Text;
using System.Threading.Tasks;

namespace JuegoDeLaVida {
     interface ICreadorCelula {

          Celula CrearCelula(Tablero tablero, int id);

     }
}
