using System;
using System.Collections.Generic;
using System.Linq;
using System.Threading.Tasks;
using Microsoft.AspNetCore.Http;
using Microsoft.AspNetCore.Mvc;
using Microsoft.EntityFrameworkCore;
using Generator;
using Generator.Domain;

namespace Generator.Api.Controllers
{
    [Route("api/[controller]")]
    [ApiController]
    public class CAN_RepositoryController : ControllerBase
    {
        private readonly ApiContext _context;

        public CAN_RepositoryController(ApiContext context)
        {
            _context = context;
        }

        // GET: api/CAN_Repository
        [HttpGet]
        public async Task<ActionResult<IEnumerable<CAN_Repository>>> GetCAN_Repository()
        {
            return await _context.CAN_Repository.ToListAsync();
        }

        // GET: api/CAN_Repository/5
        [HttpGet("{id}")]
        public async Task<ActionResult<CAN_Repository>> GetCAN_Repository(int id)
        {
            var cAN_Repository = await _context.CAN_Repository.FindAsync(id);

            if (cAN_Repository == null)
            {
                return NotFound();
            }

            return cAN_Repository;
        }

        // PUT: api/CAN_Repository/5
        // To protect from overposting attacks, see https://go.microsoft.com/fwlink/?linkid=2123754
        [HttpPut("{id}")]
        public async Task<IActionResult> PutCAN_Repository(int id, CAN_Repository cAN_Repository)
        {
            if (id != cAN_Repository.IDMCAG)
            {
                return BadRequest();
            }

            _context.Entry(cAN_Repository).State = EntityState.Modified;

            try
            {
                await _context.SaveChangesAsync();
            }
            catch (DbUpdateConcurrencyException)
            {
                if (!CAN_RepositoryExists(id))
                {
                    return NotFound();
                }
                else
                {
                    throw;
                }
            }

            return NoContent();
        }

        // POST: api/CAN_Repository
        // To protect from overposting attacks, see https://go.microsoft.com/fwlink/?linkid=2123754
        [HttpPost]
        public async Task<ActionResult<CAN_Repository>> PostCAN_Repository(CAN_Repository cAN_Repository)
        {
            _context.CAN_Repository.Add(cAN_Repository);
            await _context.SaveChangesAsync();

            return CreatedAtAction("GetCAN_Repository", new { id = cAN_Repository.IDMCAG }, cAN_Repository);
        }

        // DELETE: api/CAN_Repository/5
        [HttpDelete("{id}")]
        public async Task<IActionResult> DeleteCAN_Repository(int id)
        {
            var cAN_Repository = await _context.CAN_Repository.FindAsync(id);
            if (cAN_Repository == null)
            {
                return NotFound();
            }

            _context.CAN_Repository.Remove(cAN_Repository);
            await _context.SaveChangesAsync();

            return NoContent();
        }

        private bool CAN_RepositoryExists(int id)
        {
            return _context.CAN_Repository.Any(e => e.IDMCAG == id);
        }
    }
}
