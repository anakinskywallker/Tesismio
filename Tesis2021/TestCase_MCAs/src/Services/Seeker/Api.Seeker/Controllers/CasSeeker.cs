using API.Seeker.Data;
using API.Seeker.Models;
using MediatR;
using Microsoft.AspNetCore.Mvc;
using Microsoft.Data.SqlClient;
using Microsoft.EntityFrameworkCore;
using Seeker.Services.Switch.Commands;
using System.Collections.Generic;
using System.Linq;
using System.Threading.Tasks;



namespace Api.Seeker.Controllers
{
    [ApiController]
    [Route("/")]
    public class CasSekeer : ControllerBase
    {

        private readonly APIContext _context;
        private readonly IMediator _mediator;
        public CasSekeer(
            IMediator mediator,
            APIContext context)
        {
            _context = context;
            _mediator = mediator;
        }

        [HttpGet]
        public string Get()
        {
            return "TestCase Controlador de Busqueda Especializada";
        }

        [HttpPost]
        public async Task<IActionResult> Create(CasSwitchCommand command)
        {
            await _mediator.Publish(command);
            return Ok();
        }

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
        //}
    }
}
