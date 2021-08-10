using Generator.Services.Commands;
using MediatR;
using System;
using System.Threading;
using System.Threading.Tasks;

namespace Generator.Services.business_logic
{
    public class Generator_logic : INotificationHandler<CasSeekertoGeneratorlogic>
    {

        public Task Handle(CasSeekertoGeneratorlogic notification, CancellationToken cancellationToken)
        {
            const string theGenerator = "ISA";
            const string theRequiredCA = "N16K8V4^4-3^1-2^3t2.ca";
            const int theSeed = 1;
            const string theParameters = "500 500";

            var myAlgorithm = new AlgoritmoParalelo(theGenerator, theRequiredCA,
                                              theSeed, theParameters);
            var sol = myAlgorithm.Ejecutar();
            var sol2 = sol.Fitness;
            //  Console.WriteLine(sol.MiCA.ToString());
            //  Console.WriteLine("Fitness = " + sol.Fitness);
            //  Console.ReadKey();
            throw new NotImplementedException();
        }
    }
}
