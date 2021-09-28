using MediatR;
using Microsoft.AspNetCore.Mvc;
using Microsoft.Extensions.Logging;
using System;
using System.Collections.Generic;
using System.Linq;
using System.Threading.Tasks;
using Optimizer.Services.EventHandlers.Commands;
using Optimizer.Services.Commands;

namespace Optimizer.Api.Controllers
{
    [ApiController]
    [Route("/Oprimizer")]
    public class CasOptimizerLogic : ControllerBase
    {

        private readonly IMediator _mediator;
        public CasOptimizerLogic(
            IMediator mediator
            )
        {
            _mediator = mediator;
        }


        [HttpPost]
        public async Task<IActionResult> Create(CasSeekertoOptimizer command)
        {
            await _mediator.Publish(command);
            return Ok();
        }


        [HttpGet]
        public string Get()
        {
            return " Logica para Optimizador ";
        }
    }
}
