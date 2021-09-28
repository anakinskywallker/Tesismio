using MediatR;
using Seeker.Services.Proxies.Generator;
using Seeker.Services.Proxies.Generator.Commands;
using Seeker.Services.Switch.Commands;
using System;
using System.Threading;
using System.Threading.Tasks;

namespace Seeker.Services.Switch
{
    public class SeekerSwitch : INotificationHandler<CasSeekerSwitchCommand>
    {
        private readonly ISeekerProxy _seekerProxy;
        // inyeccion dependencias de la clase seekerProxy
        public SeekerSwitch (
            ISeekerProxy seekerProxy
            )
        {
            _seekerProxy = seekerProxy;
        }
        public async Task Handle(CasSeekerSwitchCommand notification, CancellationToken cancellationToken)
        {
            int Columns = notification.Columns;
            int Strength = notification.Strength;
            String Alphabet = strConstruct(notification.Alphabet);

            // Aqui va la logica para discrimiar el envio ya sea a Genrator o a Optimizer 

            // Logica para ir a Generator 
            var command = new CasSeekerCommandProxies()
            {
                Columns = notification.Columns,
                Strength = notification.Strength,
                Alphabet = notification.Alphabet
            };
            await _seekerProxy.SendCasToGeneratorAsync(command);

            //Logica para ir a Posoptimizador 
        }
        public string strConstruct(String Alphabet)
        {

            String[] Variables = Alphabet.Split(',');
            int[] num_Variables = new int[Variables.Length];
            String concatenado = "";

            for (int i = 0; i < Variables.Length; i++)
            {
                num_Variables[i] = Int32.Parse(Variables[i]);
                concatenado = concatenado + "[";
                for (int j = num_Variables[i]; j <= 9; j++)
                {
                    concatenado = concatenado + j;
                }
                if (i < Variables.Length - 1)
                {
                    concatenado = concatenado + "],";
                }
            }
            concatenado = concatenado + "]%";
            return concatenado;

        }
    }
}
