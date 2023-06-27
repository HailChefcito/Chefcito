using System;
using System.Collections.Generic;
using System.Linq;
using System.Text;
using System.Threading.Tasks;
using System.Data.SqlClient;

namespace Areas01.Class
{
    class AccountDAL
    {
        public static int CreateAccount(string pName, string pUserName,string pPhone, string pEmail, string pPassword)
        {
            int result = 0;
            SqlConnection conn = CConection.JoinConnection();
            {
                SqlCommand command = new SqlCommand(string.Format("Insert into cuentadeusuario(IdUsuario, NombreDeUsuario, Email, Contraseña, NumeroCelular, RangoDeUsuario)values (Hashbytes('MD5','{0}'),'{1}','{2}',Hashbytes('MD5','{3}'),'{4}',Hashbytes('MD5','{5}'))", pName, pUserName, pPhone, pEmail, pPassword), conn);
                result = command.ExecuteNonQuery();

            } return result;

        }

        public static int PassAccount(string pUserId, string pPassword)
        {
            int result = -1;
            SqlConnection conn = CConection.JoinConnection();
            {
                SqlCommand command = new SqlCommand(string.Format("Select * from Usuarios where(Documento='{0}' and Contraseña= Hashbytes('Md5','{1}'))", pUserId, pPassword), conn);
                SqlDataReader reader = command.ExecuteReader();
                while (reader.Read())
                {
                    result = 50;
                }
                conn.Close();
                return result;
            }
        }

        //  internal static int CreateAccount(string p1, string p2, string p3, string p4)
        // {
        //    throw new NotImplementedException();
        // }
    }
}