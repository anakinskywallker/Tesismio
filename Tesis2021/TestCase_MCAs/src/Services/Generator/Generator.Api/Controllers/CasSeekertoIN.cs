using MediatR;
using Microsoft.AspNetCore.Mvc;
using Microsoft.Extensions.Logging;
using System;
using System.Collections.Generic;
using System.Linq;
using System.Threading.Tasks;
using Generator.Servies.SendtoSeeker;
using Generator.Servies.SendtoSeeker.Commands;
using Generator.Services.Commands;

namespace Generator.Api.Controllers
{
    [ApiController]
    [Route("/Seeker")]
    public class CasSeekertoIN : ControllerBase
    {
        private readonly IMediator _mediator;
        public CasSeekertoIN(
            IMediator mediator
            )
        {
            _mediator = mediator;
        }


        [HttpPost]
        public async Task<IActionResult> Create(CasSeekertoGeneratorlogic command)
        {
            await _mediator.Publish(command);
            return Ok();
        }

        

        //---------------
        [HttpGet]
        public string Get()
        {
            return "Estamos en Receptor de Seeker o Api gateway";
        }
    }
}
