using System;
using System.Collections.Generic;
using System.ComponentModel;
using System.Data;
using System.Drawing;
using System.Linq;
using System.Text;
using System.Threading.Tasks;
using System.Windows.Forms;

namespace Chefcito
{
    public partial class FormRegister : Form
    {
        public FormRegister()
        {
            InitializeComponent();
        }

        private void label1_Click(object sender, EventArgs e)
        {

        }

        private void LblUser_Click(object sender, EventArgs e)
        {

        }

        private void label2_Click(object sender, EventArgs e)
        {

        }

        private void textBox3_TextChanged(object sender, EventArgs e)
        {

        }

        private void BtnRegister_Click(object sender, EventArgs e)
        {
           if(class.UsuarioDAL.CreateAccount(TbxName,TbxUserName, TbxPhone, TbxEmail)>0) 
            {
                FormPassword Pass = new FormPassword();
                this.Hide();
                Pass.Show();

            }
            else
            
                MessageBox.Show("Pana ocurrio un error");
            
        }

        private void BtnBack_Click(object sender, EventArgs e)
        {
            FormLogin Back = new FormLogin();
            this.Hide();
            Back.Show();
        }
    }
}
