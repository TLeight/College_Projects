namespace Assignment01
{
    partial class frmPaintStore
    {
        /// <summary>
        ///  Required designer variable.
        /// </summary>
        private System.ComponentModel.IContainer components = null;

        /// <summary>
        ///  Clean up any resources being used.
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
        ///  Required method for Designer support - do not modify
        ///  the contents of this method with the code editor.
        /// </summary>
        private void InitializeComponent()
        {
            this.lblCustomerInformation = new System.Windows.Forms.Label();
            this.lblFirstName = new System.Windows.Forms.Label();
            this.lblLastName = new System.Windows.Forms.Label();
            this.txtFirstName = new System.Windows.Forms.TextBox();
            this.txtLastName = new System.Windows.Forms.TextBox();
            this.lblAddress = new System.Windows.Forms.Label();
            this.txtAddress = new System.Windows.Forms.TextBox();
            this.btnClear = new System.Windows.Forms.Button();
            this.btnExit = new System.Windows.Forms.Button();
            this.lblBrush = new System.Windows.Forms.Label();
            this.lblFinishPaint = new System.Windows.Forms.Label();
            this.txtBrushes = new System.Windows.Forms.TextBox();
            this.txtFinishPaint = new System.Windows.Forms.TextBox();
            this.lblPrimerPaint = new System.Windows.Forms.Label();
            this.lblTrimTape = new System.Windows.Forms.Label();
            this.lblListSelection = new System.Windows.Forms.Label();
            this.txtTrimTape = new System.Windows.Forms.TextBox();
            this.txtPrimerPaint = new System.Windows.Forms.TextBox();
            this.lblEmployeesList = new System.Windows.Forms.Label();
            this.lblJuniorPainter = new System.Windows.Forms.Label();
            this.lblSeniorPainter = new System.Windows.Forms.Label();
            this.txtJuniorPainter = new System.Windows.Forms.TextBox();
            this.txtSeniorPainters = new System.Windows.Forms.TextBox();
            this.btnCalculate = new System.Windows.Forms.Button();
            this.groupBox1 = new System.Windows.Forms.GroupBox();
            this.lblOutput = new System.Windows.Forms.Label();
            this.txtPriceInformation = new System.Windows.Forms.TextBox();
            this.txtexplnproj = new System.Windows.Forms.TextBox();
            this.lblTitle = new System.Windows.Forms.Label();
            this.groupBox1.SuspendLayout();
            this.SuspendLayout();
            // 
            // lblCustomerInformation
            // 
            this.lblCustomerInformation.AutoSize = true;
            this.lblCustomerInformation.Font = new System.Drawing.Font("Segoe UI", 15F, System.Drawing.FontStyle.Bold, System.Drawing.GraphicsUnit.Point);
            this.lblCustomerInformation.Location = new System.Drawing.Point(332, 27);
            this.lblCustomerInformation.Name = "lblCustomerInformation";
            this.lblCustomerInformation.Size = new System.Drawing.Size(221, 28);
            this.lblCustomerInformation.TabIndex = 2;
            this.lblCustomerInformation.Text = "Customer Information";
            // 
            // lblFirstName
            // 
            this.lblFirstName.Font = new System.Drawing.Font("Segoe UI", 9.75F, System.Drawing.FontStyle.Regular, System.Drawing.GraphicsUnit.Point);
            this.lblFirstName.Location = new System.Drawing.Point(332, 78);
            this.lblFirstName.Name = "lblFirstName";
            this.lblFirstName.Size = new System.Drawing.Size(74, 19);
            this.lblFirstName.TabIndex = 3;
            this.lblFirstName.Text = "First Name";
            // 
            // lblLastName
            // 
            this.lblLastName.Font = new System.Drawing.Font("Segoe UI", 9.75F, System.Drawing.FontStyle.Regular, System.Drawing.GraphicsUnit.Point);
            this.lblLastName.Location = new System.Drawing.Point(332, 111);
            this.lblLastName.Name = "lblLastName";
            this.lblLastName.Size = new System.Drawing.Size(74, 19);
            this.lblLastName.TabIndex = 5;
            this.lblLastName.Text = "Last Name";
            // 
            // txtFirstName
            // 
            this.txtFirstName.Font = new System.Drawing.Font("Segoe UI", 9.75F, System.Drawing.FontStyle.Regular, System.Drawing.GraphicsUnit.Point);
            this.txtFirstName.Location = new System.Drawing.Point(462, 74);
            this.txtFirstName.Name = "txtFirstName";
            this.txtFirstName.Size = new System.Drawing.Size(100, 25);
            this.txtFirstName.TabIndex = 4;
            this.txtFirstName.TextChanged += new System.EventHandler(this.txtFirstName_TextChanged);
            // 
            // txtLastName
            // 
            this.txtLastName.Font = new System.Drawing.Font("Segoe UI", 9.75F, System.Drawing.FontStyle.Regular, System.Drawing.GraphicsUnit.Point);
            this.txtLastName.Location = new System.Drawing.Point(462, 111);
            this.txtLastName.Name = "txtLastName";
            this.txtLastName.Size = new System.Drawing.Size(100, 25);
            this.txtLastName.TabIndex = 6;
            this.txtLastName.TextChanged += new System.EventHandler(this.txtFirstName_TextChanged);
            // 
            // lblAddress
            // 
            this.lblAddress.Font = new System.Drawing.Font("Segoe UI", 9.75F, System.Drawing.FontStyle.Regular, System.Drawing.GraphicsUnit.Point);
            this.lblAddress.Location = new System.Drawing.Point(332, 145);
            this.lblAddress.Name = "lblAddress";
            this.lblAddress.Size = new System.Drawing.Size(74, 19);
            this.lblAddress.TabIndex = 7;
            this.lblAddress.Text = "Address";
            // 
            // txtAddress
            // 
            this.txtAddress.Font = new System.Drawing.Font("Segoe UI", 9.75F, System.Drawing.FontStyle.Regular, System.Drawing.GraphicsUnit.Point);
            this.txtAddress.Location = new System.Drawing.Point(462, 145);
            this.txtAddress.Name = "txtAddress";
            this.txtAddress.Size = new System.Drawing.Size(100, 25);
            this.txtAddress.TabIndex = 8;
            this.txtAddress.TextChanged += new System.EventHandler(this.txtFirstName_TextChanged);
            // 
            // btnClear
            // 
            this.btnClear.Location = new System.Drawing.Point(427, 516);
            this.btnClear.Name = "btnClear";
            this.btnClear.Size = new System.Drawing.Size(75, 23);
            this.btnClear.TabIndex = 25;
            this.btnClear.Text = "&Clear";
            this.btnClear.UseVisualStyleBackColor = true;
            this.btnClear.Click += new System.EventHandler(this.btnClear_Click);
            // 
            // btnExit
            // 
            this.btnExit.Location = new System.Drawing.Point(523, 516);
            this.btnExit.Name = "btnExit";
            this.btnExit.Size = new System.Drawing.Size(75, 23);
            this.btnExit.TabIndex = 26;
            this.btnExit.Text = "&Exit";
            this.btnExit.UseVisualStyleBackColor = true;
            this.btnExit.Click += new System.EventHandler(this.btnExit_Click);
            // 
            // lblBrush
            // 
            this.lblBrush.AutoEllipsis = true;
            this.lblBrush.Font = new System.Drawing.Font("Segoe UI", 9.75F, System.Drawing.FontStyle.Regular, System.Drawing.GraphicsUnit.Point);
            this.lblBrush.Location = new System.Drawing.Point(332, 222);
            this.lblBrush.Name = "lblBrush";
            this.lblBrush.Size = new System.Drawing.Size(74, 23);
            this.lblBrush.TabIndex = 10;
            this.lblBrush.Text = "Brushes";
            // 
            // lblFinishPaint
            // 
            this.lblFinishPaint.Font = new System.Drawing.Font("Segoe UI", 9.75F, System.Drawing.FontStyle.Regular, System.Drawing.GraphicsUnit.Point);
            this.lblFinishPaint.Location = new System.Drawing.Point(332, 251);
            this.lblFinishPaint.Name = "lblFinishPaint";
            this.lblFinishPaint.Size = new System.Drawing.Size(74, 23);
            this.lblFinishPaint.TabIndex = 12;
            this.lblFinishPaint.Text = "Finish Paint";
            // 
            // txtBrushes
            // 
            this.txtBrushes.Font = new System.Drawing.Font("Segoe UI", 9.75F, System.Drawing.FontStyle.Regular, System.Drawing.GraphicsUnit.Point);
            this.txtBrushes.Location = new System.Drawing.Point(462, 220);
            this.txtBrushes.Name = "txtBrushes";
            this.txtBrushes.Size = new System.Drawing.Size(100, 25);
            this.txtBrushes.TabIndex = 11;
            this.txtBrushes.TextChanged += new System.EventHandler(this.txtFirstName_TextChanged);
            // 
            // txtFinishPaint
            // 
            this.txtFinishPaint.Font = new System.Drawing.Font("Segoe UI", 9.75F, System.Drawing.FontStyle.Regular, System.Drawing.GraphicsUnit.Point);
            this.txtFinishPaint.Location = new System.Drawing.Point(462, 251);
            this.txtFinishPaint.Name = "txtFinishPaint";
            this.txtFinishPaint.Size = new System.Drawing.Size(100, 25);
            this.txtFinishPaint.TabIndex = 13;
            this.txtFinishPaint.TextChanged += new System.EventHandler(this.txtFirstName_TextChanged);
            // 
            // lblPrimerPaint
            // 
            this.lblPrimerPaint.Font = new System.Drawing.Font("Segoe UI", 9.75F, System.Drawing.FontStyle.Regular, System.Drawing.GraphicsUnit.Point);
            this.lblPrimerPaint.Location = new System.Drawing.Point(332, 284);
            this.lblPrimerPaint.Name = "lblPrimerPaint";
            this.lblPrimerPaint.Size = new System.Drawing.Size(100, 23);
            this.lblPrimerPaint.TabIndex = 14;
            this.lblPrimerPaint.Text = "Primer Paint";
            // 
            // lblTrimTape
            // 
            this.lblTrimTape.Font = new System.Drawing.Font("Segoe UI", 9.75F, System.Drawing.FontStyle.Regular, System.Drawing.GraphicsUnit.Point);
            this.lblTrimTape.Location = new System.Drawing.Point(332, 318);
            this.lblTrimTape.Name = "lblTrimTape";
            this.lblTrimTape.Size = new System.Drawing.Size(100, 23);
            this.lblTrimTape.TabIndex = 16;
            this.lblTrimTape.Text = "Trim Tape";
            // 
            // lblListSelection
            // 
            this.lblListSelection.AutoSize = true;
            this.lblListSelection.Font = new System.Drawing.Font("Segoe UI Semibold", 12F, System.Drawing.FontStyle.Bold, System.Drawing.GraphicsUnit.Point);
            this.lblListSelection.Location = new System.Drawing.Point(332, 185);
            this.lblListSelection.Name = "lblListSelection";
            this.lblListSelection.Size = new System.Drawing.Size(133, 21);
            this.lblListSelection.TabIndex = 9;
            this.lblListSelection.Text = "Products Chosen";
            // 
            // txtTrimTape
            // 
            this.txtTrimTape.Font = new System.Drawing.Font("Segoe UI", 9.75F, System.Drawing.FontStyle.Regular, System.Drawing.GraphicsUnit.Point);
            this.txtTrimTape.Location = new System.Drawing.Point(462, 316);
            this.txtTrimTape.Name = "txtTrimTape";
            this.txtTrimTape.Size = new System.Drawing.Size(100, 25);
            this.txtTrimTape.TabIndex = 17;
            this.txtTrimTape.TextChanged += new System.EventHandler(this.txtFirstName_TextChanged);
            // 
            // txtPrimerPaint
            // 
            this.txtPrimerPaint.Font = new System.Drawing.Font("Segoe UI", 9.75F, System.Drawing.FontStyle.Regular, System.Drawing.GraphicsUnit.Point);
            this.txtPrimerPaint.Location = new System.Drawing.Point(462, 280);
            this.txtPrimerPaint.Name = "txtPrimerPaint";
            this.txtPrimerPaint.Size = new System.Drawing.Size(100, 25);
            this.txtPrimerPaint.TabIndex = 15;
            this.txtPrimerPaint.TextChanged += new System.EventHandler(this.txtFirstName_TextChanged);
            // 
            // lblEmployeesList
            // 
            this.lblEmployeesList.Font = new System.Drawing.Font("Segoe UI Semibold", 12F, System.Drawing.FontStyle.Bold, System.Drawing.GraphicsUnit.Point);
            this.lblEmployeesList.Location = new System.Drawing.Point(332, 359);
            this.lblEmployeesList.Name = "lblEmployeesList";
            this.lblEmployeesList.Size = new System.Drawing.Size(132, 23);
            this.lblEmployeesList.TabIndex = 18;
            this.lblEmployeesList.Text = "Painters Needed";
            // 
            // lblJuniorPainter
            // 
            this.lblJuniorPainter.Font = new System.Drawing.Font("Segoe UI", 9.75F, System.Drawing.FontStyle.Regular, System.Drawing.GraphicsUnit.Point);
            this.lblJuniorPainter.Location = new System.Drawing.Point(332, 427);
            this.lblJuniorPainter.Name = "lblJuniorPainter";
            this.lblJuniorPainter.Size = new System.Drawing.Size(100, 23);
            this.lblJuniorPainter.TabIndex = 21;
            this.lblJuniorPainter.Text = "Junior Painters";
            // 
            // lblSeniorPainter
            // 
            this.lblSeniorPainter.Font = new System.Drawing.Font("Segoe UI", 9.75F, System.Drawing.FontStyle.Regular, System.Drawing.GraphicsUnit.Point);
            this.lblSeniorPainter.Location = new System.Drawing.Point(332, 400);
            this.lblSeniorPainter.Name = "lblSeniorPainter";
            this.lblSeniorPainter.Size = new System.Drawing.Size(100, 23);
            this.lblSeniorPainter.TabIndex = 19;
            this.lblSeniorPainter.Text = "Senior Painters";
            // 
            // txtJuniorPainter
            // 
            this.txtJuniorPainter.Location = new System.Drawing.Point(438, 429);
            this.txtJuniorPainter.Name = "txtJuniorPainter";
            this.txtJuniorPainter.Size = new System.Drawing.Size(100, 23);
            this.txtJuniorPainter.TabIndex = 22;
            this.txtJuniorPainter.TextChanged += new System.EventHandler(this.txtFirstName_TextChanged);
            // 
            // txtSeniorPainters
            // 
            this.txtSeniorPainters.Location = new System.Drawing.Point(438, 400);
            this.txtSeniorPainters.Name = "txtSeniorPainters";
            this.txtSeniorPainters.Size = new System.Drawing.Size(100, 23);
            this.txtSeniorPainters.TabIndex = 20;
            this.txtSeniorPainters.TextChanged += new System.EventHandler(this.txtFirstName_TextChanged);
            // 
            // btnCalculate
            // 
            this.btnCalculate.Location = new System.Drawing.Point(332, 516);
            this.btnCalculate.Name = "btnCalculate";
            this.btnCalculate.Size = new System.Drawing.Size(75, 23);
            this.btnCalculate.TabIndex = 24;
            this.btnCalculate.Text = "&Calculate";
            this.btnCalculate.UseVisualStyleBackColor = true;
            this.btnCalculate.Click += new System.EventHandler(this.btnCalculaye_Click);
            // 
            // groupBox1
            // 
            this.groupBox1.Controls.Add(this.lblOutput);
            this.groupBox1.Controls.Add(this.txtPriceInformation);
            this.groupBox1.Font = new System.Drawing.Font("Segoe UI", 12F, System.Drawing.FontStyle.Bold, System.Drawing.GraphicsUnit.Point);
            this.groupBox1.Location = new System.Drawing.Point(614, 27);
            this.groupBox1.Name = "groupBox1";
            this.groupBox1.Size = new System.Drawing.Size(419, 481);
            this.groupBox1.TabIndex = 23;
            this.groupBox1.TabStop = false;
            this.groupBox1.Text = "Price Information";
            // 
            // lblOutput
            // 
            this.lblOutput.Font = new System.Drawing.Font("Segoe UI", 10F, System.Drawing.FontStyle.Regular, System.Drawing.GraphicsUnit.Point);
            this.lblOutput.Location = new System.Drawing.Point(0, 212);
            this.lblOutput.Name = "lblOutput";
            this.lblOutput.Size = new System.Drawing.Size(413, 248);
            this.lblOutput.TabIndex = 1;
            // 
            // txtPriceInformation
            // 
            this.txtPriceInformation.BackColor = System.Drawing.SystemColors.Control;
            this.txtPriceInformation.Font = new System.Drawing.Font("Segoe UI", 9.75F, System.Drawing.FontStyle.Regular, System.Drawing.GraphicsUnit.Point);
            this.txtPriceInformation.ForeColor = System.Drawing.SystemColors.ControlText;
            this.txtPriceInformation.Location = new System.Drawing.Point(6, 42);
            this.txtPriceInformation.Multiline = true;
            this.txtPriceInformation.Name = "txtPriceInformation";
            this.txtPriceInformation.ScrollBars = System.Windows.Forms.ScrollBars.Horizontal;
            this.txtPriceInformation.Size = new System.Drawing.Size(407, 128);
            this.txtPriceInformation.TabIndex = 0;
            // 
            // txtexplnproj
            // 
            this.txtexplnproj.BackColor = System.Drawing.SystemColors.Control;
            this.txtexplnproj.Font = new System.Drawing.Font("Segoe UI", 10F, System.Drawing.FontStyle.Regular, System.Drawing.GraphicsUnit.Point);
            this.txtexplnproj.Location = new System.Drawing.Point(21, 111);
            this.txtexplnproj.Multiline = true;
            this.txtexplnproj.Name = "txtexplnproj";
            this.txtexplnproj.Size = new System.Drawing.Size(258, 376);
            this.txtexplnproj.TabIndex = 1;
            // 
            // lblTitle
            // 
            this.lblTitle.Font = new System.Drawing.Font("Segoe UI", 15F, ((System.Drawing.FontStyle)((System.Drawing.FontStyle.Italic | System.Drawing.FontStyle.Underline))), System.Drawing.GraphicsUnit.Point);
            this.lblTitle.ForeColor = System.Drawing.SystemColors.ControlText;
            this.lblTitle.Location = new System.Drawing.Point(21, 38);
            this.lblTitle.Name = "lblTitle";
            this.lblTitle.Size = new System.Drawing.Size(258, 59);
            this.lblTitle.TabIndex = 0;
            // 
            // frmPaintStore
            // 
            this.AcceptButton = this.btnCalculate;
            this.AutoScaleDimensions = new System.Drawing.SizeF(7F, 15F);
            this.AutoScaleMode = System.Windows.Forms.AutoScaleMode.Font;
            this.ClientSize = new System.Drawing.Size(1063, 551);
            this.Controls.Add(this.lblTitle);
            this.Controls.Add(this.txtexplnproj);
            this.Controls.Add(this.groupBox1);
            this.Controls.Add(this.btnCalculate);
            this.Controls.Add(this.txtSeniorPainters);
            this.Controls.Add(this.txtJuniorPainter);
            this.Controls.Add(this.lblSeniorPainter);
            this.Controls.Add(this.lblJuniorPainter);
            this.Controls.Add(this.lblEmployeesList);
            this.Controls.Add(this.txtPrimerPaint);
            this.Controls.Add(this.txtTrimTape);
            this.Controls.Add(this.lblListSelection);
            this.Controls.Add(this.lblTrimTape);
            this.Controls.Add(this.lblPrimerPaint);
            this.Controls.Add(this.txtFinishPaint);
            this.Controls.Add(this.txtBrushes);
            this.Controls.Add(this.lblFinishPaint);
            this.Controls.Add(this.lblBrush);
            this.Controls.Add(this.btnExit);
            this.Controls.Add(this.btnClear);
            this.Controls.Add(this.txtAddress);
            this.Controls.Add(this.lblAddress);
            this.Controls.Add(this.txtLastName);
            this.Controls.Add(this.txtFirstName);
            this.Controls.Add(this.lblLastName);
            this.Controls.Add(this.lblFirstName);
            this.Controls.Add(this.lblCustomerInformation);
            this.FormBorderStyle = System.Windows.Forms.FormBorderStyle.None;
            this.Name = "frmPaintStore";
            this.StartPosition = System.Windows.Forms.FormStartPosition.CenterScreen;
            this.Text = "Paint World";
            this.Load += new System.EventHandler(this.frmPaintStore_Load);
            this.groupBox1.ResumeLayout(false);
            this.groupBox1.PerformLayout();
            this.ResumeLayout(false);
            this.PerformLayout();

        }

        #endregion

        private Label lblCustomerInformation;
        private Label lblFirstName;
        private Label lblLastName;
        private TextBox txtFirstName;
        private TextBox txtLastName;
        private Label lblAddress;
        private TextBox txtAddress;
        private Button btnClear;
        private Button btnExit;
        private Label lblBrush;
        private Label lblFinishPaint;
        private TextBox txtBrushes;
        private TextBox txtFinishPaint;
        private Label lblPrimerPaint;
        private Label lblTrimTape;
        private Label lblListSelection;
        private TextBox txtTrimTape;
        private TextBox txtPrimerPaint;
        private Label lblEmployeesList;
        private Label lblJuniorPainter;
        private Label lblSeniorPainter;
        private TextBox txtJuniorPainter;
        private TextBox txtSeniorPainters;
        private Button btnCalculate;
        private GroupBox groupBox1;
        private TextBox txtPriceInformation;
        private Label lblOutput;
        private TextBox txtexplnproj;
        private Label lblTitle;
    }
}