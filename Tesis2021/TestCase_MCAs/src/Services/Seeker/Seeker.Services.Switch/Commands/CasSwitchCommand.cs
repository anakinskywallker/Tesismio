﻿using MediatR;

namespace Seeker.Services.Switch.Commands
{
    public class CasSwitchCommand : INotification

    {
        public int Columns { get; set; } //Columnas
        public int Strength { get; set; } // fuerza
        public string Alphabet { get; set; } //Alfabeto
       
    }
}
