using MediatR;
using Seeker.Services.Switch.Commands;
using System;
using System.Threading;
using System.Threading.Tasks;

namespace Seeker.Services.Switch
{
    public class SeekerSwitch : INotificationHandler<CasSwitchCommand>
    {
        public Task Handle(CasSwitchCommand notification, CancellationToken cancellationToken)
        {
            int Columns = notification.Columns;
            int Strength = notification.Strength;
            String Alphabet = notification.Alphabet;

            String[] Variables = Alphabet.Split(',');
            int[] num_Variables = new int[Variables.Length];
            String concatenado = "";

            for (int i = 0; i < Variables.Length; i++) {
                num_Variables[i] = Int32.Parse(Variables[i]);
                concatenado = concatenado + "[";
                for (int j = num_Variables[i]; j <= 9; j++) {
                    concatenado = concatenado + j;
                }
                    if (i < Variables.Length - 1) {
                    concatenado = concatenado + "],";
                    }
            }
            concatenado = concatenado + "]%";
            String strFinal = concatenado;


            throw new NotImplementedException();
        }
    }
}
