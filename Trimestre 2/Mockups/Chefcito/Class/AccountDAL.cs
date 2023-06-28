using System;
using System.Collections.Generic;
using System.Linq;
using System.Text;
using System.Threading.Tasks;
using System.Data.SqlClient;

namespace Chefcito.Class
{
    class AccountDAL
    {
        public static int CreateAccount(string pPhone, string pUserName, string pEmail, string pPassword)
        {
            int result = 0;
            SqlConnection conn = ClassConection.JoinConnection();
            {
                SqlCommand command = new SqlCommand(string.Format("Insert into CuentaUsuario(IdTelefono, NombreUsuario, Email, Contraseña)values (Hashbytes('MD5','{0}'),'{1}',Hashbytes('MD5','{2}'),Hashbytes('MD5','{3}'))", pPhone, pUserName, pEmail, pPassword), conn);
                result = command.ExecuteNonQuery();

            } return result;

        }

        public static int PassAccount(string pUserId, string pPassword)
        {
            int result = -1;
            SqlConnection conn = ClassConection.JoinConnection();
            {
                SqlCommand command = new SqlCommand(string.Format("Select * from CuentaUsuario where(IdTelefono='{0}' and Contraseña= Hashbytes('Md5','{1}'))", pUserId, pPassword), conn);
                SqlDataReader reader = command.ExecuteReader();
                while (reader.Read())
                {
                    result = 50;
                }
                conn.Close();
                return result;
            }
        }
    }

}
