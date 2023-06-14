namespace Chefcito
{
    partial class FormLogin
    {
        /// <summary>
        /// Variable del diseñador requerida.
        /// </summary>
        private System.ComponentModel.IContainer components = null;

        /// <summary>
        /// Limpiar los recursos que se estén utilizando.
        /// </summary>
        /// <param name="disposing">true si los recursos administrados se deben eliminar; false en caso contrario.</param>
        protected override void Dispose(bool disposing)
        {
            if (disposing && (components != null))
            {
                components.Dispose();
            }
            base.Dispose(disposing);
        }

        #region Código generado por el Diseñador de Windows Forms

        /// <summary>
        /// Método necesario para admitir el Diseñador. No se puede modificar
        /// el contenido del método con el editor de código.
        /// </summary>
        private void InitializeComponent()
        {
            System.ComponentModel.ComponentResourceManager resources = new System.ComponentModel.ComponentResourceManager(typeof(FormLogin));
            this.LblUser = new System.Windows.Forms.Label();
            this.TbxUser = new System.Windows.Forms.TextBox();
            this.LblPassword = new System.Windows.Forms.Label();
            this.TbxPassword = new System.Windows.Forms.TextBox();
            this.BtnLogin = new System.Windows.Forms.Button();
            this.BtnRecovery = new System.Windows.Forms.Button();
            this.LblLine = new System.Windows.Forms.Label();
            this.PbxLogo = new System.Windows.Forms.PictureBox();
            this.BtnRegister = new System.Windows.Forms.Button();
            ((System.ComponentModel.ISupportInitialize)(this.PbxLogo)).BeginInit();
            this.SuspendLayout();
            // 
            // LblUser
            // 
            this.LblUser.AutoSize = true;
            this.LblUser.Font = new System.Drawing.Font("ISOCPEUR", 9.75F, System.Drawing.FontStyle.Regular, System.Drawing.GraphicsUnit.Point, ((byte)(0)));
            this.LblUser.Location = new System.Drawing.Point(406, 237);
            this.LblUser.Name = "LblUser";
            this.LblUser.Size = new System.Drawing.Size(120, 17);
            this.LblUser.TabIndex = 0;
            this.LblUser.Text = "NOMBRE DE USUARIO";
            this.LblUser.Click += new System.EventHandler(this.LblUser_Click);
            // 
            // TbxUser
            // 
            this.TbxUser.BorderStyle = System.Windows.Forms.BorderStyle.None;
            this.TbxUser.Location = new System.Drawing.Point(399, 277);
            this.TbxUser.Name = "TbxUser";
            this.TbxUser.Size = new System.Drawing.Size(440, 13);
            this.TbxUser.TabIndex = 1;
            // 
            // LblPassword
            // 
            this.LblPassword.AutoSize = true;
            this.LblPassword.Font = new System.Drawing.Font("ISOCPEUR", 9.75F, System.Drawing.FontStyle.Regular, System.Drawing.GraphicsUnit.Point, ((byte)(0)));
            this.LblPassword.Location = new System.Drawing.Point(406, 343);
            this.LblPassword.Name = "LblPassword";
            this.LblPassword.Size = new System.Drawing.Size(78, 17);
            this.LblPassword.TabIndex = 2;
            this.LblPassword.Text = "CONTRASEÑA";
            // 
            // TbxPassword
            // 
            this.TbxPassword.BorderStyle = System.Windows.Forms.BorderStyle.None;
            this.TbxPassword.Location = new System.Drawing.Point(399, 376);
            this.TbxPassword.Name = "TbxPassword";
            this.TbxPassword.PasswordChar = '~';
            this.TbxPassword.Size = new System.Drawing.Size(440, 13);
            this.TbxPassword.TabIndex = 3;
            // 
            // BtnLogin
            // 
            this.BtnLogin.BackColor = System.Drawing.Color.FromArgb(((int)(((byte)(157)))), ((int)(((byte)(105)))), ((int)(((byte)(77)))));
            this.BtnLogin.Cursor = System.Windows.Forms.Cursors.Hand;
            this.BtnLogin.Font = new System.Drawing.Font("ISOCTEUR", 9.75F, System.Drawing.FontStyle.Regular, System.Drawing.GraphicsUnit.Point, ((byte)(0)));
            this.BtnLogin.Location = new System.Drawing.Point(399, 430);
            this.BtnLogin.Name = "BtnLogin";
            this.BtnLogin.Size = new System.Drawing.Size(200, 50);
            this.BtnLogin.TabIndex = 4;
            this.BtnLogin.Text = "INICIAR";
            this.BtnLogin.UseVisualStyleBackColor = false;
            this.BtnLogin.Click += new System.EventHandler(this.button1_Click);
            // 
            // BtnRecovery
            // 
            this.BtnRecovery.BackColor = System.Drawing.Color.FromArgb(((int)(((byte)(157)))), ((int)(((byte)(105)))), ((int)(((byte)(77)))));
            this.BtnRecovery.Cursor = System.Windows.Forms.Cursors.Hand;
            this.BtnRecovery.Font = new System.Drawing.Font("ISOCTEUR", 8.25F, System.Drawing.FontStyle.Regular, System.Drawing.GraphicsUnit.Point, ((byte)(0)));
            this.BtnRecovery.Location = new System.Drawing.Point(639, 430);
            this.BtnRecovery.Name = "BtnRecovery";
            this.BtnRecovery.Size = new System.Drawing.Size(200, 50);
            this.BtnRecovery.TabIndex = 5;
            this.BtnRecovery.Text = "RECUPERAR CONTRASEÑA";
            this.BtnRecovery.UseVisualStyleBackColor = false;
            this.BtnRecovery.Click += new System.EventHandler(this.button2_Click);
            // 
            // LblLine
            // 
            this.LblLine.AutoSize = true;
            this.LblLine.Location = new System.Drawing.Point(303, 509);
            this.LblLine.Name = "LblLine";
            this.LblLine.Size = new System.Drawing.Size(640, 13);
            this.LblLine.TabIndex = 7;
            this.LblLine.Text = resources.GetString("LblLine.Text");
            this.LblLine.Click += new System.EventHandler(this.label1_Click);
            // 
            // PbxLogo
            // 
            this.PbxLogo.Image = global::Chefcito.Properties.Resources.IMG_20230613_WA0025;
            this.PbxLogo.Location = new System.Drawing.Point(509, 44);
            this.PbxLogo.Name = "PbxLogo";
            this.PbxLogo.Size = new System.Drawing.Size(216, 147);
            this.PbxLogo.SizeMode = System.Windows.Forms.PictureBoxSizeMode.Zoom;
            this.PbxLogo.TabIndex = 8;
            this.PbxLogo.TabStop = false;
            // 
            // BtnRegister
            // 
            this.BtnRegister.Cursor = System.Windows.Forms.Cursors.Hand;
            this.BtnRegister.Font = new System.Drawing.Font("ISOCTEUR", 8.25F, System.Drawing.FontStyle.Regular, System.Drawing.GraphicsUnit.Point, ((byte)(0)));
            this.BtnRegister.Location = new System.Drawing.Point(399, 543);
            this.BtnRegister.Name = "BtnRegister";
            this.BtnRegister.Size = new System.Drawing.Size(440, 50);
            this.BtnRegister.TabIndex = 9;
            this.BtnRegister.Text = "REGISTRARSE";
            this.BtnRegister.UseVisualStyleBackColor = true;
            this.BtnRegister.Click += new System.EventHandler(this.button1_Click_1);
            // 
            // FormLogin
            // 
            this.AutoScaleDimensions = new System.Drawing.SizeF(6F, 13F);
            this.AutoScaleMode = System.Windows.Forms.AutoScaleMode.Font;
            this.ClientSize = new System.Drawing.Size(1264, 681);
            this.Controls.Add(this.BtnRegister);
            this.Controls.Add(this.PbxLogo);
            this.Controls.Add(this.LblLine);
            this.Controls.Add(this.BtnRecovery);
            this.Controls.Add(this.BtnLogin);
            this.Controls.Add(this.TbxPassword);
            this.Controls.Add(this.LblPassword);
            this.Controls.Add(this.TbxUser);
            this.Controls.Add(this.LblUser);
            this.Name = "FormLogin";
            this.Text = "Login";
            ((System.ComponentModel.ISupportInitialize)(this.PbxLogo)).EndInit();
            this.ResumeLayout(false);
            this.PerformLayout();

        }

        #endregion

        private System.Windows.Forms.Label LblUser;
        private System.Windows.Forms.TextBox TbxUser;
        private System.Windows.Forms.Label LblPassword;
        private System.Windows.Forms.TextBox TbxPassword;
        private System.Windows.Forms.Button BtnLogin;
        private System.Windows.Forms.Button BtnRecovery;
        private System.Windows.Forms.Label LblLine;
        private System.Windows.Forms.PictureBox PbxLogo;
        private System.Windows.Forms.Button BtnRegister;
    }
}

