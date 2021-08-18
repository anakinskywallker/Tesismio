using System.ComponentModel.DataAnnotations;

namespace Generator.Domain
{
    public class CAN_Repository
    {
        [Key]
        public int IDMCAG { get; set; } //Id de arreglo
        public int Columns { get; set; } //Columnas
        public int Strength { get; set; } // fuerza
        public int Alphabet { get; set; } //Alfabeto
        public int OptimeRows { get; set; } //Columnas
        
        
    }
}
