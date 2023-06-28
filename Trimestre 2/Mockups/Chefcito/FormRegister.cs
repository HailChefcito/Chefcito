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
            if (TbxPassword.Text == TbxConfirmPassword.Text)
            {
                if (Class.AccountDAL.CreateAccount(TbxPhone.Text, TbxName.Text, TbxEmail.Text, TbxPassword.Text) > 0)
                {
                    MessageBox.Show("Bro tu cuenta fue creada con el exito de Dio");
                }
                else
                {
                    MessageBox.Show("Pana ocurrio un error");
                }
            }
            else
                MessageBox.Show("Pana las contraseñas no coinciden");
            
        }

        private void BtnBack_Click(object sender, EventArgs e)
        {
            FormLogin Back = new FormLogin();
            this.Hide();
            Back.Show();
        }
    }
}
