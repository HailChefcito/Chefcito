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
    public partial class FormLogin : Form
    {
        public FormLogin()
        {
            InitializeComponent();
        }

        private void LblUser_Click(object sender, EventArgs e)
        {

        }

        private void label1_Click(object sender, EventArgs e)
        {

        }

        private void pictureBox1_Click(object sender, EventArgs e)
        {

        }

        private void button1_Click(object sender, EventArgs e)
        {
            FormIndex Ind = new FormIndex();
            this.Hide();
            Ind.Show();
        }

        private void button2_Click(object sender, EventArgs e)
        {
            FormRecPassword Rec = new FormRecPassword();
            this.Hide();
            Rec.Show();
        }

        private void button1_Click_1(object sender, EventArgs e)
        {
            FormRegister ForRegs = new FormRegister();
            this.Hide();
            ForRegs.Show();

        }

        private void FormLogin_Load(object sender, EventArgs e)
        {

        }
    }
}
