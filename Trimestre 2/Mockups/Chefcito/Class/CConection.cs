using System;
using System.Collections.Generic;
using System.Linq;
using System.Text;
using System.Threading.Tasks;
using System.Data.SqlClient;

namespace Areas01.Class
{
    class CConection
    {
        public static SqlConnection JoinConnection()
        {
            SqlConnection conn = new SqlConnection("Data source = Sworer\\SQLEXPRESS; Initial catalog=DatosPersonas;integrated security = true");
            conn.Open();

            return conn;
        }
    }
}
