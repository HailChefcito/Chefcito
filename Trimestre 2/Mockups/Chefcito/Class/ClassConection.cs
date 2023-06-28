using System;
using System.Collections.Generic;
using System.Linq;
using System.Text;
using System.Threading.Tasks;
using System.Data.SqlClient;

namespace Chefcito.Class
{
    class ClassConection
    {
        public static SqlConnection JoinConnection()
        {
            SqlConnection conn = new SqlConnection("Data source = DESKTOP-R21HQD6\\SQLEXPRESS; Initial catalog=ChefsitoV2;integrated security = true");
            conn.Open();

            return conn;
        }

    }
}