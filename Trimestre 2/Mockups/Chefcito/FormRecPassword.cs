﻿using System;
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
    public partial class FormRecPassword : Form
    {
        public FormRecPassword()
        {
            InitializeComponent();
        }

        private void BtnBack_Click(object sender, EventArgs e)
        {
            FormLogin Back = new FormLogin();
            this.Hide();
            Back.Show();
        }
    }
}
