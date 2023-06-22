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
            this.TbxUserName = new System.Windows.Forms.TextBox();
            this.TbxEmail = new System.Windows.Forms.TextBox();
            this.LblUser = new System.Windows.Forms.Label();
            this.LblUserName = new System.Windows.Forms.Label();
            this.LblPhone = new System.Windows.Forms.Label();
            this.LblEmail = new System.Windows.Forms.Label();
            this.BtnRegister = new System.Windows.Forms.Button();
            this.BtnBack = new System.Windows.Forms.Button();
            this.panel1 = new System.Windows.Forms.Panel();
            this.panel2 = new System.Windows.Forms.Panel();
            this.panel1.SuspendLayout();
            this.SuspendLayout();
            // 
            // TbxPhone
            // 
            this.TbxPhone.BorderStyle = System.Windows.Forms.BorderStyle.None;
            this.TbxPhone.Location = new System.Drawing.Point(104, 283);
            this.TbxPhone.Name = "TbxPhone";
            this.TbxPhone.Size = new System.Drawing.Size(440, 13);
            this.TbxPhone.TabIndex = 2;
            // 
            // TbxName
            // 
            this.TbxName.BorderStyle = System.Windows.Forms.BorderStyle.None;
            this.TbxName.Location = new System.Drawing.Point(104, 139);
            this.TbxName.Name = "TbxName";
            this.TbxName.Size = new System.Drawing.Size(440, 13);
            this.TbxName.TabIndex = 3;
            // 
            // TbxUserName
            // 
            this.TbxUserName.BorderStyle = System.Windows.Forms.BorderStyle.None;
            this.TbxUserName.Location = new System.Drawing.Point(104, 215);
            this.TbxUserName.Name = "TbxUserName";
            this.TbxUserName.Size = new System.Drawing.Size(440, 13);
            this.TbxUserName.TabIndex = 4;
            // 
            // TbxEmail
            // 
            this.TbxEmail.BorderStyle = System.Windows.Forms.BorderStyle.None;
            this.TbxEmail.Location = new System.Drawing.Point(104, 357);
            this.TbxEmail.Name = "TbxEmail";
            this.TbxEmail.Size = new System.Drawing.Size(440, 13);
            this.TbxEmail.TabIndex = 5;
            this.TbxEmail.TextChanged += new System.EventHandler(this.textBox3_TextChanged);
            // 
            // LblUser
            // 
            this.LblUser.AutoSize = true;
            this.LblUser.Font = new System.Drawing.Font("ISOCPEUR", 9.75F, System.Drawing.FontStyle.Regular, System.Drawing.GraphicsUnit.Point, ((byte)(0)));
            this.LblUser.Location = new System.Drawing.Point(111, 119);
            this.LblUser.Name = "LblUser";
            this.LblUser.Size = new System.Drawing.Size(56, 17);
            this.LblUser.TabIndex = 6;
            this.LblUser.Text = "NOMBRE ";
            this.LblUser.Click += new System.EventHandler(this.LblUser_Click);
            // 
            // LblUserName
            // 
            this.LblUserName.AutoSize = true;
            this.LblUserName.Font = new System.Drawing.Font("ISOCPEUR", 9.75F, System.Drawing.FontStyle.Regular, System.Drawing.GraphicsUnit.Point, ((byte)(0)));
            this.LblUserName.Location = new System.Drawing.Point(111, 195);
            this.LblUserName.Name = "LblUserName";
            this.LblUserName.Size = new System.Drawing.Size(120, 17);
            this.LblUserName.TabIndex = 7;
            this.LblUserName.Text = "NOMBRE DE USUARIO";
            this.LblUserName.Click += new System.EventHandler(this.label1_Click);
            // 
            // LblPhone
            // 
            this.LblPhone.AutoSize = true;
            this.LblPhone.Font = new System.Drawing.Font("ISOCPEUR", 9.75F, System.Drawing.FontStyle.Regular, System.Drawing.GraphicsUnit.Point, ((byte)(0)));
            this.LblPhone.Location = new System.Drawing.Point(111, 263);
            this.LblPhone.Name = "LblPhone";
            this.LblPhone.Size = new System.Drawing.Size(60, 17);
            this.LblPhone.TabIndex = 8;
            this.LblPhone.Text = "TELEFONO";
            this.LblPhone.Click += new System.EventHandler(this.label2_Click);
            // 
            // LblEmail
            // 
            this.LblEmail.AutoSize = true;
            this.LblEmail.Font = new System.Drawing.Font("ISOCPEUR", 9.75F, System.Drawing.FontStyle.Regular, System.Drawing.GraphicsUnit.Point, ((byte)(0)));
            this.LblEmail.Location = new System.Drawing.Point(111, 337);
            this.LblEmail.Name = "LblEmail";
            this.LblEmail.Size = new System.Drawing.Size(39, 17);
            this.LblEmail.TabIndex = 9;
            this.LblEmail.Text = "EMAIL";
            // 
            // BtnRegister
            // 
            this.BtnRegister.BackColor = System.Drawing.Color.FromArgb(((int)(((byte)(157)))), ((int)(((byte)(105)))), ((int)(((byte)(77)))));
            this.BtnRegister.Cursor = System.Windows.Forms.Cursors.Hand;
            this.BtnRegister.ForeColor = System.Drawing.SystemColors.ControlText;
            this.BtnRegister.Location = new System.Drawing.Point(228, 398);
            this.BtnRegister.Name = "BtnRegister";
            this.BtnRegister.Size = new System.Drawing.Size(166, 35);
            this.BtnRegister.TabIndex = 10;
            this.BtnRegister.Text = "REGISTRO";
            this.BtnRegister.UseVisualStyleBackColor = false;
            this.BtnRegister.Click += new System.EventHandler(this.BtnRegister_Click);
            // 
            // BtnBack
            // 
            this.BtnBack.Cursor = System.Windows.Forms.Cursors.Hand;
            this.BtnBack.Location = new System.Drawing.Point(114, 404);
            this.BtnBack.Name = "BtnBack";
            this.BtnBack.Size = new System.Drawing.Size(23, 23);
            this.BtnBack.TabIndex = 17;
            this.BtnBack.UseVisualStyleBackColor = true;
            this.BtnBack.Click += new System.EventHandler(this.BtnBack_Click);
            // 
            // panel1
            // 
            this.panel1.Controls.Add(this.panel2);
            this.panel1.Controls.Add(this.BtnBack);
            this.panel1.Controls.Add(this.BtnRegister);
            this.panel1.Controls.Add(this.LblEmail);
            this.panel1.Controls.Add(this.LblPhone);
            this.panel1.Controls.Add(this.LblUserName);
            this.panel1.Controls.Add(this.LblUser);
            this.panel1.Controls.Add(this.TbxEmail);
            this.panel1.Controls.Add(this.TbxUserName);
            this.panel1.Controls.Add(this.TbxName);
            this.panel1.Controls.Add(this.TbxPhone);
            this.panel1.Location = new System.Drawing.Point(211, 69);
            this.panel1.Name = "panel1";
            this.panel1.Size = new System.Drawing.Size(874, 535);
            this.panel1.TabIndex = 18;
            // 
            // panel2
            // 
            this.panel2.Location = new System.Drawing.Point(639, 0);
            this.panel2.Name = "panel2";
            this.panel2.Size = new System.Drawing.Size(234, 534);
            this.panel2.TabIndex = 18;
            // 
            // FormRegister
            // 
            this.AutoScaleDimensions = new System.Drawing.SizeF(6F, 13F);
            this.AutoScaleMode = System.Windows.Forms.AutoScaleMode.Font;
            this.ClientSize = new System.Drawing.Size(1264, 681);
            this.Controls.Add(this.panel1);
            this.Name = "FormRegister";
            this.Text = "0";
            this.panel1.ResumeLayout(false);
            this.panel1.PerformLayout();
            this.ResumeLayout(false);

        }

        #endregion

        private System.Windows.Forms.TextBox TbxPhone;
        private System.Windows.Forms.TextBox TbxName;
        private System.Windows.Forms.TextBox TbxUserName;
        private System.Windows.Forms.TextBox TbxEmail;
        private System.Windows.Forms.Label LblUser;
        private System.Windows.Forms.Label LblUserName;
        private System.Windows.Forms.Label LblPhone;
        private System.Windows.Forms.Label LblEmail;
        private System.Windows.Forms.Button BtnRegister;
        private System.Windows.Forms.Button BtnBack;
        private System.Windows.Forms.Panel panel1;
        private System.Windows.Forms.Panel panel2;
    }
}