using System;
using System.Threading;
using System.Threading.Tasks;
using MediatR;
using Optimizer.Services.Commands;

namespace Optimizer.Services.BusinessLogic
{
    public class OptimizerLogic : INotificationHandler<CasSeekertoOptimizer>
    {
        
            public Task Handle(CasSeekertoOptimizer notification, CancellationToken cancellationToken)
            {
                throw new NotImplementedException();
            }
        
    }
}
