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
            const string theGenerator = "ISA";
            const string theRequiredCA = "N16K8V4^4-3^1-2^3t2.ca";
            const int theSeed = 1;
            const string theParameters = "500 500";

            var myAlgorithm = new AlgoritmoParalelo(theGenerator, theRequiredCA,
                                              theSeed, theParameters);
            
            var sol = myAlgorithm.Ejecutar();
            var sol2 = sol.Fitness;
             // Console.WriteLine(sol.MiCA.ToString());
              //Console.WriteLine("Fitness = " + sol.Fitness);
             // Console.ReadKey();

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
    }
}
