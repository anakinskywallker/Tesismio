using API.Seeker.Data;
using MediatR;
using Microsoft.AspNetCore.Mvc;
using Seeker.Services.Send.Commands;
using System.Threading.Tasks;

namespace Api.Seeker.Controllers
{
    [ApiController]
    [Route("Cas/Opt")]
    public class CasOptimizer : ControllerBase
    {
        private readonly APIContext _context;
        private readonly IMediator _mediator;
        public CasOptimizer(
            IMediator mediator,
            APIContext context)
        {
            _context = context;
            _mediator = mediator;
        }

        [HttpGet]
        public string Get()
        {
            return "TestCase Controlador de Optimizador";
        }

        [HttpPost]
        public async Task<IActionResult> Create(CasOptimizerCommand command)
        {
            await _mediator.Publish(command);
            return Ok();
        }
    }

}














//private readonly APIContext _context;

//public CasController(APIContext context)
//{
//    _context = context;
//}


//[HttpGet]
//public string Get()
//{
//    return "TestCase Universidad del cauca";
//}

//[HttpGet]
//public async Task<ActionResult<IEnumerable<CaRepository>>> GetCaRepositorybaseoncondicion(string condicion,
//    int totalcolum, int stregth)
//{
//    condicion = "[56789],[456789],[3456789],[23456789]%";
//    totalcolum = 4;
//    stregth = 2;
//    var par1 = new SqlParameter("@par1", condicion);
//    var par2 = new SqlParameter("@par2", totalcolum);
//    var par3 = new SqlParameter("@par3", stregth);

//    string sql = "listarCAs @par1, @par2, @par3";

//    return _context.CaRepository.FromSqlRaw(sql, par1, par2, par3).ToList();
//}// funcional 
//    }
//}
