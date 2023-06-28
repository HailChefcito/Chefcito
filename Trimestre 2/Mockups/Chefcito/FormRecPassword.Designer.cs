namespace Chefcito
{
    partial class FormRecPassword
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
            this.BtnBack = new System.Windows.Forms.Button();
            this.BtnSave = new System.Windows.Forms.Button();
            this.LblConfirmPassword = new System.Windows.Forms.Label();
            this.LblRecPassword = new System.Windows.Forms.Label();
            this.TbxConfirmPassword = new System.Windows.Forms.TextBox();
            this.TbxRecPassword = new System.Windows.Forms.TextBox();
            this.SuspendLayout();
            // 
            // BtnBack
            // 
            this.BtnBack.Location = new System.Drawing.Point(422, 396);
            this.BtnBack.Name = "BtnBack";
            this.BtnBack.Size = new System.Drawing.Size(23, 23);
            this.BtnBack.TabIndex = 22;
            this.BtnBack.UseVisualStyleBackColor = true;
            this.BtnBack.Click += new System.EventHandler(this.BtnBack_Click);
            // 
            // BtnSave
            // 
            this.BtnSave.BackColor = System.Drawing.Color.FromArgb(((int)(((byte)(157)))), ((int)(((byte)(105)))), ((int)(((byte)(77)))));
            this.BtnSave.ForeColor = System.Drawing.SystemColors.ControlText;
            this.BtnSave.Location = new System.Drawing.Point(536, 390);
            this.BtnSave.Name = "BtnSave";
            this.BtnSave.Size = new System.Drawing.Size(166, 35);
            this.BtnSave.TabIndex = 21;
            this.BtnSave.Text = "GUARDAR";
            this.BtnSave.UseVisualStyleBackColor = false;
            // 
            // LblConfirmPassword
            // 
            this.LblConfirmPassword.AutoSize = true;
            this.LblConfirmPassword.Font = new System.Drawing.Font("Microsoft Sans Serif", 9.75F, System.Drawing.FontStyle.Regular, System.Drawing.GraphicsUnit.Point, ((byte)(0)));
            this.LblConfirmPassword.Location = new System.Drawing.Point(419, 329);
            this.LblConfirmPassword.Name = "LblConfirmPassword";
            this.LblConfirmPassword.Size = new System.Drawing.Size(185, 16);
            this.LblConfirmPassword.TabIndex = 20;
            this.LblConfirmPassword.Text = "CONFIRMAR CONTRASEÑA";
            // 
            // LblRecPassword
            // 
            this.LblRecPassword.AutoSize = true;
            this.LblRecPassword.Font = new System.Drawing.Font("Microsoft Sans Serif", 9.75F, System.Drawing.FontStyle.Regular, System.Drawing.GraphicsUnit.Point, ((byte)(0)));
            this.LblRecPassword.Location = new System.Drawing.Point(419, 255);
            this.LblRecPassword.Name = "LblRecPassword";
            this.LblRecPassword.Size = new System.Drawing.Size(152, 16);
            this.LblRecPassword.TabIndex = 19;
            this.LblRecPassword.Text = "NUEVA CONTRASEÑA";
            // 
            // TbxConfirmPassword
            // 
            this.TbxConfirmPassword.BorderStyle = System.Windows.Forms.BorderStyle.None;
            this.TbxConfirmPassword.Location = new System.Drawing.Point(412, 349);
            this.TbxConfirmPassword.Name = "TbxConfirmPassword";
            this.TbxConfirmPassword.Size = new System.Drawing.Size(440, 13);
            this.TbxConfirmPassword.TabIndex = 18;
            // 
            // TbxRecPassword
            // 
            this.TbxRecPassword.BorderStyle = System.Windows.Forms.BorderStyle.None;
            this.TbxRecPassword.Location = new System.Drawing.Point(412, 275);
            this.TbxRecPassword.Name = "TbxRecPassword";
            this.TbxRecPassword.Size = new System.Drawing.Size(440, 13);
            this.TbxRecPassword.TabIndex = 17;
            // 
            // FormRecPassword
            // 
            this.AutoScaleDimensions = new System.Drawing.SizeF(6F, 13F);
            this.AutoScaleMode = System.Windows.Forms.AutoScaleMode.Font;
            this.BackgroundImage = global::Chefcito.Properties.Resources.UntitledBackgroundLogin;
            this.ClientSize = new System.Drawing.Size(1264, 681);
            this.Controls.Add(this.BtnBack);
            this.Controls.Add(this.BtnSave);
            this.Controls.Add(this.LblConfirmPassword);
            this.Controls.Add(this.LblRecPassword);
            this.Controls.Add(this.TbxConfirmPassword);
            this.Controls.Add(this.TbxRecPassword);
            this.Name = "FormRecPassword";
            this.Text = "FormRecPassword";
            this.ResumeLayout(false);
            this.PerformLayout();

        }

        #endregion

        private System.Windows.Forms.Button BtnBack;
        private System.Windows.Forms.Button BtnSave;
        private System.Windows.Forms.Label LblConfirmPassword;
        private System.Windows.Forms.Label LblRecPassword;
        private System.Windows.Forms.TextBox TbxConfirmPassword;
        private System.Windows.Forms.TextBox TbxRecPassword;
    }
}