using System;
using System.Collections.Generic;
using System.Text;

namespace Generator.Services.Proxies.Seeker.Commands
{
    public class CasCreateCommandSeeker 
    {
        public int CAID { get; set; } //Id de arreglo
        public int Columns { get; set; } //Columnas
        public int Strength { get; set; } // fuerza
        public string Alphabet { get; set; } //Alfabeto
        public int Rows { get; set; } //Columnas
        public string CA_notes { get; set; } // Arreglo de covertura
        

        //atributos
        //public long ca_id { get; set; } //Id de arreglo
        //public string ca_name { get; set; } //Columnas
        //public string ca_columns { get; set; } // fuerza 
        //public string ca_notes { get; set; } //Alfabeto
        //public int ca_rows { get; set; } //Columnas
        //public int ca_stregth { get; set; } // Arreglo de covertura
        //public int ca_total_columns { get; set; } //auxiliar
    }
}
