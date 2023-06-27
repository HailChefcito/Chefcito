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
    public partial class FormPassword : Form
    {
        public FormPassword()
        {
            InitializeComponent();
        }

        private void BtnBack_Click(object sender, EventArgs e)
        {
            FormRegister Back = new FormRegister();
            this.Hide();
            Back.Show();
        }

        private void BtnSave_Click(object sender, EventArgs e)
        {

        }
    }
}
