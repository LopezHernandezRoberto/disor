using System.Collections.Generic;

namespace JuegoDeLaVida {
     class Reglas {
          private List<int> nace;
          private List<int> vive;

          public Reglas(List<int> nace, List<int> vive) {
               this.nace = nace;
               this.vive = vive;
          }

          public List<int> Vive { get => vive; set => vive = value; }
          public List<int> Nace { get => nace; set => nace = value; }
     }
}