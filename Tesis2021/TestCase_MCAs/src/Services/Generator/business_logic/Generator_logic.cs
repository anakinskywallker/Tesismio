using Generator.Services.Commands;
using Generator.Services.Proxies.Seeker;
using Generator.Services.Proxies.Seeker.Commands;
using MediatR;
using System;
using System.Threading;
using System.Threading.Tasks;

namespace Generator.Services.business_logic
{
    public class Generator_logic : INotificationHandler<CasSeekertoGeneratorlogic>
    {
        private readonly ISeekerProxy _seekerProxy;
        // inyeccion dependencias de la clase seekerProxy
        public Generator_logic(
            ISeekerProxy seekerProxy
            )
        {
            _seekerProxy = seekerProxy;
        }

        public async Task Handle(CasSeekertoGeneratorlogic notification, CancellationToken cancellationToken)
        {
            string Alphabet = constructAlphabet(notification.Alphabet);
            string strContruct = "N" + notification.Rows + "K" + notification.Columns + "V" + Alphabet + "t" + notification.Strength + ".ca";
            const string theGenerator = "ISA";
            string theRequiredCA = strContruct;
            const int theSeed = 1;
            const string theParameters = "500 500";

            var myAlgorithm = new AlgoritmoParalelo(theGenerator, theRequiredCA,
                                              theSeed, theParameters);
            
            var sol = myAlgorithm.Ejecutar();
            var sol2 = sol.Fitness;
            

            var command = new CasCreateCommandSeeker()
            {
                
                Columns = notification.Columns,
                Strength = notification.Strength,
                Alphabet = notification.Alphabet,
                Rows = 4,
                CA_notes = sol.MiCA.ToString()

            };

            await _seekerProxy.SendCasAsync(command);
        }
        public string constructAlphabet(string Alphabet) {
            
            String[] Variables = Alphabet.Split(',');
            int num_Variables = Variables.Length;
            String concatenado = "";

            for (int i = 0; i < Variables.Length; i++)
            {

                concatenado = concatenado + Variables[i] + "^";
                if (i < (Variables.Length - 1))
                {
                    concatenado = concatenado + "1-";
                }
                else
                {
                    concatenado = concatenado + "1";
                }
            }
            return concatenado;
        }
    }
}
