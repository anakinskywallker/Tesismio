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
        private int cont = 1;
       

        // inyeccion dependencias de la clase seekerProxy
        public Generator_logic(
            ISeekerProxy seekerProxy
            )
        {
            _seekerProxy = seekerProxy;
        }

        public async Task Handle(CasSeekertoGeneratorlogic notification, CancellationToken cancellationToken)
        {
            
            String Alphabet = notification.Alphabet;
            String[] Variables = Alphabet.Split(',');
            int num_Variables = Variables.Length;
            String concatenado = "";

            for (int i = 0; i < Variables.Length; i++) {

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

            string strContruct = "N" + notification.Rows+ "K" + notification.Columns + "V" + concatenado + "t" + notification.Strength + ".ca";
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
                Rows = notification.Rows,
                CA_notes = sol.MiCA.ToString(),
                Aux = sol2

            };

            await _seekerProxy.SendCasAsync(command);
        }
    }
}
