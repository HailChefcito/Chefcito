namespace Chefcito
{
    partial class FormRegister
    {
        /// <summary>
        /// Required designer variable.
        /// </summary>
        private System.ComponentModel.IContainer components = null;

        /// <summary>
        /// Clean up any resources being used.
        /// </summary>
        /// <param name="disposing">true if managed resources should be disposed; otherwise, false.</param>
        protected override void Dispose(bool disposing)
        {
            if (disposing && (components != null))
            {
                components.Dispose();
            }
            base.Dispose(disposing);
        }

        #region Windows Form Designer generated code

        /// <summary>
        /// Required method for Designer support - do not modify
        /// the contents of this method with the code editor.
        /// </summary>
        private void InitializeComponent()
        {
            this.TbxPhone = new System.Windows.Forms.TextBox();
            this.TbxName = new System.Windows.Forms.TextBox();
            this.TbxEmail = new System.Windows.Forms.TextBox();
            this.LblUser = new System.Windows.Forms.Label();
            this.LblPhone = new System.Windows.Forms.Label();
            this.LblEmail = new System.Windows.Forms.Label();
            this.BtnRegister = new System.Windows.Forms.Button();
            this.BtnBack = new System.Windows.Forms.Button();
            this.LblConfirmPassword = new System.Windows.Forms.Label();
            this.LblPassword = new System.Windows.Forms.Label();
            this.TbxConfirmPassword = new System.Windows.Forms.TextBox();
            this.TbxPassword = new System.Windows.Forms.TextBox();
            this.SuspendLayout();
            // 
            // TbxPhone
            // 
            this.TbxPhone.BorderStyle = System.Windows.Forms.BorderStyle.None;
            this.TbxPhone.Location = new System.Drawing.Point(353, 232);
            this.TbxPhone.Name = "TbxPhone";
            this.TbxPhone.Size = new System.Drawing.Size(425, 13);
            this.TbxPhone.TabIndex = 2;
            // 
            // TbxName
            // 
            this.TbxName.BorderStyle = System.Windows.Forms.BorderStyle.None;
            this.TbxName.Location = new System.Drawing.Point(353, 154);
            this.TbxName.Name = "TbxName";
            this.TbxName.Size = new System.Drawing.Size(425, 13);
            this.TbxName.TabIndex = 3;
            // 
            // TbxEmail
            // 
            this.TbxEmail.BorderStyle = System.Windows.Forms.BorderStyle.None;
            this.TbxEmail.Location = new System.Drawing.Point(353, 306);
            this.TbxEmail.Name = "TbxEmail";
            this.TbxEmail.Size = new System.Drawing.Size(425, 13);
            this.TbxEmail.TabIndex = 5;
            this.TbxEmail.TextChanged += new System.EventHandler(this.textBox3_TextChanged);
            // 
            // LblUser
            // 
            this.LblUser.AutoSize = true;
            this.LblUser.Font = new System.Drawing.Font("Microsoft Sans Serif", 9.75F, System.Drawing.FontStyle.Regular, System.Drawing.GraphicsUnit.Point, ((byte)(0)));
            this.LblUser.Location = new System.Drawing.Point(360, 134);
            this.LblUser.Name = "LblUser";
            this.LblUser.Size = new System.Drawing.Size(70, 16);
            this.LblUser.TabIndex = 6;
            this.LblUser.Text = "NOMBRE ";
            this.LblUser.Click += new System.EventHandler(this.LblUser_Click);
            // 
            // LblPhone
            // 
            this.LblPhone.AutoSize = true;
            this.LblPhone.Font = new System.Drawing.Font("Microsoft Sans Serif", 9.75F, System.Drawing.FontStyle.Regular, System.Drawing.GraphicsUnit.Point, ((byte)(0)));
            this.LblPhone.Location = new System.Drawing.Point(360, 212);
            this.LblPhone.Name = "LblPhone";
            this.LblPhone.Size = new System.Drawing.Size(80, 16);
            this.LblPhone.TabIndex = 8;
            this.LblPhone.Text = "TELEFONO";
            this.LblPhone.Click += new System.EventHandler(this.label2_Click);
            // 
            // LblEmail
            // 
            this.LblEmail.AutoSize = true;
            this.LblEmail.Font = new System.Drawing.Font("Microsoft Sans Serif", 9.75F, System.Drawing.FontStyle.Regular, System.Drawing.GraphicsUnit.Point, ((byte)(0)));
            this.LblEmail.Location = new System.Drawing.Point(360, 286);
            this.LblEmail.Name = "LblEmail";
            this.LblEmail.Size = new System.Drawing.Size(47, 16);
            this.LblEmail.TabIndex = 9;
            this.LblEmail.Text = "EMAIL";
            // 
            // BtnRegister
            // 
            this.BtnRegister.BackColor = System.Drawing.Color.FromArgb(((int)(((byte)(157)))), ((int)(((byte)(105)))), ((int)(((byte)(77)))));
            this.BtnRegister.Cursor = System.Windows.Forms.Cursors.Hand;
            this.BtnRegister.ForeColor = System.Drawing.SystemColors.ControlText;
            this.BtnRegister.Location = new System.Drawing.Point(477, 480);
            this.BtnRegister.Name = "BtnRegister";
            this.BtnRegister.Size = new System.Drawing.Size(165, 35);
            this.BtnRegister.TabIndex = 10;
            this.BtnRegister.Text = "REGISTRO";
            this.BtnRegister.UseVisualStyleBackColor = false;
            this.BtnRegister.Click += new System.EventHandler(this.BtnRegister_Click);
            // 
            // BtnBack
            // 
            this.BtnBack.Cursor = System.Windows.Forms.Cursors.Hand;
            this.BtnBack.Location = new System.Drawing.Point(363, 486);
            this.BtnBack.Name = "BtnBack";
            this.BtnBack.Size = new System.Drawing.Size(22, 23);
            this.BtnBack.TabIndex = 17;
            this.BtnBack.UseVisualStyleBackColor = true;
            // 
            // LblConfirmPassword
            // 
            this.LblConfirmPassword.AutoSize = true;
            this.LblConfirmPassword.Font = new System.Drawing.Font("Microsoft Sans Serif", 9.75F, System.Drawing.FontStyle.Regular, System.Drawing.GraphicsUnit.Point, ((byte)(0)));
            this.LblConfirmPassword.Location = new System.Drawing.Point(360, 428);
            this.LblConfirmPassword.Name = "LblConfirmPassword";
            this.LblConfirmPassword.Size = new System.Drawing.Size(185, 16);
            this.LblConfirmPassword.TabIndex = 21;
            this.LblConfirmPassword.Text = "CONFIRMAR CONTRASEÑA";
            // 
            // LblPassword
            // 
            this.LblPassword.AutoSize = true;
            this.LblPassword.Font = new System.Drawing.Font("Microsoft Sans Serif", 9.75F, System.Drawing.FontStyle.Regular, System.Drawing.GraphicsUnit.Point, ((byte)(0)));
            this.LblPassword.Location = new System.Drawing.Point(360, 354);
            this.LblPassword.Name = "LblPassword";
            this.LblPassword.Size = new System.Drawing.Size(102, 16);
            this.LblPassword.TabIndex = 20;
            this.LblPassword.Text = "CONTRASEÑA";
            // 
            // TbxConfirmPassword
            // 
            this.TbxConfirmPassword.BorderStyle = System.Windows.Forms.BorderStyle.None;
            this.TbxConfirmPassword.Location = new System.Drawing.Point(353, 448);
            this.TbxConfirmPassword.Name = "TbxConfirmPassword";
            this.TbxConfirmPassword.Size = new System.Drawing.Size(415, 13);
            this.TbxConfirmPassword.TabIndex = 19;
            // 
            // TbxPassword
            // 
            this.TbxPassword.BorderStyle = System.Windows.Forms.BorderStyle.None;
            this.TbxPassword.Location = new System.Drawing.Point(353, 374);
            this.TbxPassword.Name = "TbxPassword";
            this.TbxPassword.Size = new System.Drawing.Size(415, 13);
            this.TbxPassword.TabIndex = 18;
            // 
            // FormRegister
            // 
            this.AutoScaleDimensions = new System.Drawing.SizeF(6F, 13F);
            this.AutoScaleMode = System.Windows.Forms.AutoScaleMode.Font;
            this.BackgroundImage = global::Chefcito.Properties.Resources.UntitledBackgroundRegister;
            this.ClientSize = new System.Drawing.Size(1263, 681);
            this.Controls.Add(this.LblConfirmPassword);
            this.Controls.Add(this.LblPassword);
            this.Controls.Add(this.TbxConfirmPassword);
            this.Controls.Add(this.TbxPassword);
            this.Controls.Add(this.BtnBack);
            this.Controls.Add(this.BtnRegister);
            this.Controls.Add(this.TbxName);
            this.Controls.Add(this.LblEmail);
            this.Controls.Add(this.TbxPhone);
            this.Controls.Add(this.LblPhone);
            this.Controls.Add(this.TbxEmail);
            this.Controls.Add(this.LblUser);
            this.Name = "FormRegister";
            this.Text = "0";
            this.ResumeLayout(false);
            this.PerformLayout();

        }

        #endregion

        private System.Windows.Forms.TextBox TbxPhone;
        private System.Windows.Forms.TextBox TbxName;
        private System.Windows.Forms.TextBox TbxEmail;
        private System.Windows.Forms.Label LblUser;
        private System.Windows.Forms.Label LblPhone;
        private System.Windows.Forms.Label LblEmail;
        private System.Windows.Forms.Button BtnRegister;
        private System.Windows.Forms.Button BtnBack;
        private System.Windows.Forms.Label LblConfirmPassword;
        private System.Windows.Forms.Label LblPassword;
        private System.Windows.Forms.TextBox TbxConfirmPassword;
        private System.Windows.Forms.TextBox TbxPassword;
    }
}