using Microsoft.EntityFrameworkCore;

namespace Bai_thi_ASPcore.Models
{
    public class EmployeeDBContext : DbContext
    {
        public EmployeeDBContext() { }

        public EmployeeDBContext(DbContextOptions<EmployeeDBContext> options)
          : base(options)
        {
        }

        protected override void OnConfiguring(DbContextOptionsBuilder optionsBuilder)
        {
            optionsBuilder.UseSqlServer("Data Source=DESKTOP-RNHMD3P\\SQLEXPRESS;Initial Catalog=APSCoreMVC;Persist Security Info=True;User ID=sa;Password=531999;Encrypt=False");
        }

        public DbSet<Department> Departments { get; set; }
        public DbSet<Employee> Employees { get; set; }
    }
}
