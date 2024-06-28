
namespace Event_Sales
{
    partial class frmPizzaOrders
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
            this.groupBox1 = new System.Windows.Forms.GroupBox();
            this.groupBox4 = new System.Windows.Forms.GroupBox();
            this.lblPhoneCaption = new System.Windows.Forms.Label();
            this.txtPhoneNumber = new System.Windows.Forms.TextBox();
            this.rdoDelivery = new System.Windows.Forms.RadioButton();
            this.rdoPickUp = new System.Windows.Forms.RadioButton();
            this.lblStreetCaption = new System.Windows.Forms.Label();
            this.txtStreet = new System.Windows.Forms.TextBox();
            this.label2 = new System.Windows.Forms.Label();
            this.txtLastName = new System.Windows.Forms.TextBox();
            this.label1 = new System.Windows.Forms.Label();
            this.txtFirstName = new System.Windows.Forms.TextBox();
            this.label3 = new System.Windows.Forms.Label();
            this.lstCrustStyles = new System.Windows.Forms.ListBox();
            this.groupBox3 = new System.Windows.Forms.GroupBox();
            this.rdoNoCheese = new System.Windows.Forms.RadioButton();
            this.rdoMozzarella = new System.Windows.Forms.RadioButton();
            this.chkGreenPeppers = new System.Windows.Forms.CheckBox();
            this.chkMushrooms = new System.Windows.Forms.CheckBox();
            this.chkOnions = new System.Windows.Forms.CheckBox();
            this.chkSausage = new System.Windows.Forms.CheckBox();
            this.chkHam = new System.Windows.Forms.CheckBox();
            this.chkPepperoni = new System.Windows.Forms.CheckBox();
            this.groupBox2 = new System.Windows.Forms.GroupBox();
            this.lstPizzaSize = new System.Windows.Forms.ListBox();
            this.label4 = new System.Windows.Forms.Label();
            this.txtPizzaOrders = new System.Windows.Forms.TextBox();
            this.tolButtons = new System.Windows.Forms.ToolStrip();
            this.tolbtnSubmit = new System.Windows.Forms.ToolStripButton();
            this.toolStripSeparator1 = new System.Windows.Forms.ToolStripSeparator();
            this.tolbtnCancel = new System.Windows.Forms.ToolStripButton();
            this.toolStripSeparator2 = new System.Windows.Forms.ToolStripSeparator();
            this.tolbtnExit = new System.Windows.Forms.ToolStripButton();
            this.lblErrorMessage = new System.Windows.Forms.ToolStripLabel();
            this.statusStrip1 = new System.Windows.Forms.StatusStrip();
            this.toolStripStatusLabel1 = new System.Windows.Forms.ToolStripStatusLabel();
            this.lblPizzaCount = new System.Windows.Forms.ToolStripStatusLabel();
            this.toolStripStatusLabel2 = new System.Windows.Forms.ToolStripStatusLabel();
            this.lblPickupCount = new System.Windows.Forms.ToolStripStatusLabel();
            this.toolStripStatusLabel4 = new System.Windows.Forms.ToolStripStatusLabel();
            this.lblDeliveryCount = new System.Windows.Forms.ToolStripStatusLabel();
            this.toolStripStatusLabel6 = new System.Windows.Forms.ToolStripStatusLabel();
            this.lblTotalPizzaSalesNoTax = new System.Windows.Forms.ToolStripStatusLabel();
            this.groupBox1.SuspendLayout();
            this.groupBox4.SuspendLayout();
            this.groupBox3.SuspendLayout();
            this.groupBox2.SuspendLayout();
            this.tolButtons.SuspendLayout();
            this.statusStrip1.SuspendLayout();
            this.SuspendLayout();
            // 
            // groupBox1
            // 
            this.groupBox1.Controls.Add(this.groupBox4);
            this.groupBox1.Controls.Add(this.label2);
            this.groupBox1.Controls.Add(this.txtLastName);
            this.groupBox1.Controls.Add(this.label1);
            this.groupBox1.Controls.Add(this.txtFirstName);
            this.groupBox1.Location = new System.Drawing.Point(20, 28);
            this.groupBox1.Name = "groupBox1";
            this.groupBox1.Size = new System.Drawing.Size(339, 290);
            this.groupBox1.TabIndex = 0;
            this.groupBox1.TabStop = false;
            this.groupBox1.Text = "Customer";
            // 
            // groupBox4
            // 
            this.groupBox4.Controls.Add(this.lblPhoneCaption);
            this.groupBox4.Controls.Add(this.txtPhoneNumber);
            this.groupBox4.Controls.Add(this.rdoDelivery);
            this.groupBox4.Controls.Add(this.rdoPickUp);
            this.groupBox4.Controls.Add(this.lblStreetCaption);
            this.groupBox4.Controls.Add(this.txtStreet);
            this.groupBox4.Location = new System.Drawing.Point(6, 112);
            this.groupBox4.Name = "groupBox4";
            this.groupBox4.Size = new System.Drawing.Size(327, 170);
            this.groupBox4.TabIndex = 4;
            this.groupBox4.TabStop = false;
            this.groupBox4.Text = "Order Type";
            // 
            // lblPhoneCaption
            // 
            this.lblPhoneCaption.AutoSize = true;
            this.lblPhoneCaption.Location = new System.Drawing.Point(0, 124);
            this.lblPhoneCaption.Name = "lblPhoneCaption";
            this.lblPhoneCaption.Size = new System.Drawing.Size(82, 21);
            this.lblPhoneCaption.TabIndex = 4;
            this.lblPhoneCaption.Text = "&Phone no.:";
            this.lblPhoneCaption.Visible = false;
            // 
            // txtPhoneNumber
            // 
            this.txtPhoneNumber.Location = new System.Drawing.Point(87, 121);
            this.txtPhoneNumber.Name = "txtPhoneNumber";
            this.txtPhoneNumber.Size = new System.Drawing.Size(226, 29);
            this.txtPhoneNumber.TabIndex = 5;
            this.txtPhoneNumber.Visible = false;
            // 
            // rdoDelivery
            // 
            this.rdoDelivery.AutoSize = true;
            this.rdoDelivery.Location = new System.Drawing.Point(214, 28);
            this.rdoDelivery.Name = "rdoDelivery";
            this.rdoDelivery.Size = new System.Drawing.Size(85, 25);
            this.rdoDelivery.TabIndex = 1;
            this.rdoDelivery.Text = "&Delivery";
            this.rdoDelivery.UseVisualStyleBackColor = true;
            this.rdoDelivery.Click += new System.EventHandler(this.rdoDelivery_Click);
            // 
            // rdoPickUp
            // 
            this.rdoPickUp.AutoSize = true;
            this.rdoPickUp.Location = new System.Drawing.Point(117, 27);
            this.rdoPickUp.Name = "rdoPickUp";
            this.rdoPickUp.Size = new System.Drawing.Size(80, 25);
            this.rdoPickUp.TabIndex = 0;
            this.rdoPickUp.Text = "Pick-&up";
            this.rdoPickUp.UseVisualStyleBackColor = true;
            this.rdoPickUp.Click += new System.EventHandler(this.rdoPickUp_Click);
            // 
            // lblStreetCaption
            // 
            this.lblStreetCaption.AutoSize = true;
            this.lblStreetCaption.Location = new System.Drawing.Point(6, 76);
            this.lblStreetCaption.Name = "lblStreetCaption";
            this.lblStreetCaption.Size = new System.Drawing.Size(53, 21);
            this.lblStreetCaption.TabIndex = 2;
            this.lblStreetCaption.Text = "&Street:";
            this.lblStreetCaption.Visible = false;
            // 
            // txtStreet
            // 
            this.txtStreet.Location = new System.Drawing.Point(87, 73);
            this.txtStreet.Name = "txtStreet";
            this.txtStreet.Size = new System.Drawing.Size(224, 29);
            this.txtStreet.TabIndex = 3;
            this.txtStreet.Visible = false;
            // 
            // label2
            // 
            this.label2.AutoSize = true;
            this.label2.Location = new System.Drawing.Point(11, 71);
            this.label2.Name = "label2";
            this.label2.Size = new System.Drawing.Size(84, 21);
            this.label2.TabIndex = 2;
            this.label2.Text = "&Last name:";
            // 
            // txtLastName
            // 
            this.txtLastName.Location = new System.Drawing.Point(130, 62);
            this.txtLastName.Name = "txtLastName";
            this.txtLastName.Size = new System.Drawing.Size(191, 29);
            this.txtLastName.TabIndex = 3;
            // 
            // label1
            // 
            this.label1.AutoSize = true;
            this.label1.Location = new System.Drawing.Point(11, 31);
            this.label1.Name = "label1";
            this.label1.Size = new System.Drawing.Size(86, 21);
            this.label1.TabIndex = 0;
            this.label1.Text = "&First name:";
            // 
            // txtFirstName
            // 
            this.txtFirstName.Location = new System.Drawing.Point(130, 27);
            this.txtFirstName.Name = "txtFirstName";
            this.txtFirstName.Size = new System.Drawing.Size(191, 29);
            this.txtFirstName.TabIndex = 1;
            // 
            // label3
            // 
            this.label3.AutoSize = true;
            this.label3.Location = new System.Drawing.Point(6, 24);
            this.label3.Name = "label3";
            this.label3.Size = new System.Drawing.Size(94, 21);
            this.label3.TabIndex = 0;
            this.label3.Text = "&Crust Styles:";
            // 
            // lstCrustStyles
            // 
            this.lstCrustStyles.FormattingEnabled = true;
            this.lstCrustStyles.ItemHeight = 21;
            this.lstCrustStyles.Location = new System.Drawing.Point(106, 28);
            this.lstCrustStyles.Name = "lstCrustStyles";
            this.lstCrustStyles.Size = new System.Drawing.Size(204, 109);
            this.lstCrustStyles.TabIndex = 1;
            // 
            // groupBox3
            // 
            this.groupBox3.Controls.Add(this.rdoNoCheese);
            this.groupBox3.Controls.Add(this.rdoMozzarella);
            this.groupBox3.Controls.Add(this.chkGreenPeppers);
            this.groupBox3.Controls.Add(this.chkMushrooms);
            this.groupBox3.Controls.Add(this.chkOnions);
            this.groupBox3.Controls.Add(this.chkSausage);
            this.groupBox3.Controls.Add(this.chkHam);
            this.groupBox3.Controls.Add(this.chkPepperoni);
            this.groupBox3.Location = new System.Drawing.Point(692, 28);
            this.groupBox3.Name = "groupBox3";
            this.groupBox3.Size = new System.Drawing.Size(250, 293);
            this.groupBox3.TabIndex = 2;
            this.groupBox3.TabStop = false;
            this.groupBox3.Text = "Toppings";
            // 
            // rdoNoCheese
            // 
            this.rdoNoCheese.AutoSize = true;
            this.rdoNoCheese.Location = new System.Drawing.Point(43, 55);
            this.rdoNoCheese.Name = "rdoNoCheese";
            this.rdoNoCheese.Size = new System.Drawing.Size(100, 25);
            this.rdoNoCheese.TabIndex = 1;
            this.rdoNoCheese.Text = "N&o cheese";
            this.rdoNoCheese.UseVisualStyleBackColor = true;
            // 
            // rdoMozzarella
            // 
            this.rdoMozzarella.AutoSize = true;
            this.rdoMozzarella.Location = new System.Drawing.Point(43, 24);
            this.rdoMozzarella.Name = "rdoMozzarella";
            this.rdoMozzarella.Size = new System.Drawing.Size(154, 25);
            this.rdoMozzarella.TabIndex = 0;
            this.rdoMozzarella.Text = "Mo&zzarella cheese";
            this.rdoMozzarella.UseVisualStyleBackColor = true;
            // 
            // chkGreenPeppers
            // 
            this.chkGreenPeppers.AutoSize = true;
            this.chkGreenPeppers.Location = new System.Drawing.Point(43, 258);
            this.chkGreenPeppers.Name = "chkGreenPeppers";
            this.chkGreenPeppers.Size = new System.Drawing.Size(165, 25);
            this.chkGreenPeppers.TabIndex = 7;
            this.chkGreenPeppers.Text = "&Green Peppers (.60)";
            this.chkGreenPeppers.UseVisualStyleBackColor = true;
            // 
            // chkMushrooms
            // 
            this.chkMushrooms.AutoSize = true;
            this.chkMushrooms.Location = new System.Drawing.Point(43, 227);
            this.chkMushrooms.Name = "chkMushrooms";
            this.chkMushrooms.Size = new System.Drawing.Size(148, 25);
            this.chkMushrooms.TabIndex = 6;
            this.chkMushrooms.Text = "&Mushrooms (.65)";
            this.chkMushrooms.UseVisualStyleBackColor = true;
            // 
            // chkOnions
            // 
            this.chkOnions.AutoSize = true;
            this.chkOnions.Location = new System.Drawing.Point(43, 196);
            this.chkOnions.Name = "chkOnions";
            this.chkOnions.Size = new System.Drawing.Size(114, 25);
            this.chkOnions.TabIndex = 5;
            this.chkOnions.Text = "&Onions (.65)";
            this.chkOnions.UseVisualStyleBackColor = true;
            // 
            // chkSausage
            // 
            this.chkSausage.AutoSize = true;
            this.chkSausage.Location = new System.Drawing.Point(43, 163);
            this.chkSausage.Name = "chkSausage";
            this.chkSausage.Size = new System.Drawing.Size(122, 25);
            this.chkSausage.TabIndex = 4;
            this.chkSausage.Text = "Sa&usage (.80)";
            this.chkSausage.UseVisualStyleBackColor = true;
            // 
            // chkHam
            // 
            this.chkHam.AutoSize = true;
            this.chkHam.Location = new System.Drawing.Point(43, 128);
            this.chkHam.Name = "chkHam";
            this.chkHam.Size = new System.Drawing.Size(97, 25);
            this.chkHam.TabIndex = 3;
            this.chkHam.Text = "&Ham (.70)";
            this.chkHam.UseVisualStyleBackColor = true;
            // 
            // chkPepperoni
            // 
            this.chkPepperoni.AutoSize = true;
            this.chkPepperoni.Location = new System.Drawing.Point(43, 91);
            this.chkPepperoni.Name = "chkPepperoni";
            this.chkPepperoni.Size = new System.Drawing.Size(134, 25);
            this.chkPepperoni.TabIndex = 2;
            this.chkPepperoni.Text = "Pepperon&i (.75)";
            this.chkPepperoni.UseVisualStyleBackColor = true;
            // 
            // groupBox2
            // 
            this.groupBox2.Controls.Add(this.lstPizzaSize);
            this.groupBox2.Controls.Add(this.label4);
            this.groupBox2.Controls.Add(this.lstCrustStyles);
            this.groupBox2.Controls.Add(this.label3);
            this.groupBox2.Location = new System.Drawing.Point(365, 28);
            this.groupBox2.Name = "groupBox2";
            this.groupBox2.Size = new System.Drawing.Size(321, 293);
            this.groupBox2.TabIndex = 1;
            this.groupBox2.TabStop = false;
            this.groupBox2.Text = "Pizza Crust";
            // 
            // lstPizzaSize
            // 
            this.lstPizzaSize.FormattingEnabled = true;
            this.lstPizzaSize.ItemHeight = 21;
            this.lstPizzaSize.Location = new System.Drawing.Point(106, 154);
            this.lstPizzaSize.Name = "lstPizzaSize";
            this.lstPizzaSize.Size = new System.Drawing.Size(204, 109);
            this.lstPizzaSize.TabIndex = 3;
            // 
            // label4
            // 
            this.label4.AutoSize = true;
            this.label4.Location = new System.Drawing.Point(6, 156);
            this.label4.Name = "label4";
            this.label4.Size = new System.Drawing.Size(78, 21);
            this.label4.TabIndex = 2;
            this.label4.Text = "Pizza si&ze:";
            // 
            // txtPizzaOrders
            // 
            this.txtPizzaOrders.Location = new System.Drawing.Point(20, 327);
            this.txtPizzaOrders.Multiline = true;
            this.txtPizzaOrders.Name = "txtPizzaOrders";
            this.txtPizzaOrders.ReadOnly = true;
            this.txtPizzaOrders.ScrollBars = System.Windows.Forms.ScrollBars.Both;
            this.txtPizzaOrders.Size = new System.Drawing.Size(922, 387);
            this.txtPizzaOrders.TabIndex = 3;
            // 
            // tolButtons
            // 
            this.tolButtons.Font = new System.Drawing.Font("Segoe UI", 12F, System.Drawing.FontStyle.Regular, System.Drawing.GraphicsUnit.Point);
            this.tolButtons.Items.AddRange(new System.Windows.Forms.ToolStripItem[] {
            this.tolbtnSubmit,
            this.toolStripSeparator1,
            this.tolbtnCancel,
            this.toolStripSeparator2,
            this.tolbtnExit,
            this.lblErrorMessage});
            this.tolButtons.Location = new System.Drawing.Point(0, 0);
            this.tolButtons.Name = "tolButtons";
            this.tolButtons.Size = new System.Drawing.Size(947, 28);
            this.tolButtons.TabIndex = 5;
            this.tolButtons.Text = "toolStrip1";
            this.tolButtons.ItemClicked += new System.Windows.Forms.ToolStripItemClickedEventHandler(this.tolButtons_ItemClicked);
            // 
            // tolbtnSubmit
            // 
            this.tolbtnSubmit.DisplayStyle = System.Windows.Forms.ToolStripItemDisplayStyle.Text;
            this.tolbtnSubmit.ImageTransparentColor = System.Drawing.Color.Magenta;
            this.tolbtnSubmit.Name = "tolbtnSubmit";
            this.tolbtnSubmit.Size = new System.Drawing.Size(109, 25);
            this.tolbtnSubmit.Text = "Submit Order";
            this.tolbtnSubmit.ToolTipText = "Submit Order";
            // 
            // toolStripSeparator1
            // 
            this.toolStripSeparator1.Name = "toolStripSeparator1";
            this.toolStripSeparator1.Size = new System.Drawing.Size(6, 28);
            // 
            // tolbtnCancel
            // 
            this.tolbtnCancel.DisplayStyle = System.Windows.Forms.ToolStripItemDisplayStyle.Text;
            this.tolbtnCancel.ImageTransparentColor = System.Drawing.Color.Magenta;
            this.tolbtnCancel.Name = "tolbtnCancel";
            this.tolbtnCancel.Size = new System.Drawing.Size(60, 25);
            this.tolbtnCancel.Text = "Cancel";
            // 
            // toolStripSeparator2
            // 
            this.toolStripSeparator2.Name = "toolStripSeparator2";
            this.toolStripSeparator2.Size = new System.Drawing.Size(6, 28);
            // 
            // tolbtnExit
            // 
            this.tolbtnExit.DisplayStyle = System.Windows.Forms.ToolStripItemDisplayStyle.Text;
            this.tolbtnExit.ImageTransparentColor = System.Drawing.Color.Magenta;
            this.tolbtnExit.Name = "tolbtnExit";
            this.tolbtnExit.Size = new System.Drawing.Size(38, 25);
            this.tolbtnExit.Text = "Exit";
            // 
            // lblErrorMessage
            // 
            this.lblErrorMessage.ForeColor = System.Drawing.Color.Red;
            this.lblErrorMessage.Name = "lblErrorMessage";
            this.lblErrorMessage.Size = new System.Drawing.Size(0, 25);
            // 
            // statusStrip1
            // 
            this.statusStrip1.Items.AddRange(new System.Windows.Forms.ToolStripItem[] {
            this.toolStripStatusLabel1,
            this.lblPizzaCount,
            this.toolStripStatusLabel2,
            this.lblPickupCount,
            this.toolStripStatusLabel4,
            this.lblDeliveryCount,
            this.toolStripStatusLabel6,
            this.lblTotalPizzaSalesNoTax});
            this.statusStrip1.Location = new System.Drawing.Point(0, 717);
            this.statusStrip1.Name = "statusStrip1";
            this.statusStrip1.Size = new System.Drawing.Size(947, 22);
            this.statusStrip1.TabIndex = 4;
            this.statusStrip1.Text = "statusStrip1";
            // 
            // toolStripStatusLabel1
            // 
            this.toolStripStatusLabel1.Name = "toolStripStatusLabel1";
            this.toolStripStatusLabel1.Size = new System.Drawing.Size(70, 17);
            this.toolStripStatusLabel1.Text = "Pizza count:";
            // 
            // lblPizzaCount
            // 
            this.lblPizzaCount.AutoSize = false;
            this.lblPizzaCount.BorderSides = ((System.Windows.Forms.ToolStripStatusLabelBorderSides)((((System.Windows.Forms.ToolStripStatusLabelBorderSides.Left | System.Windows.Forms.ToolStripStatusLabelBorderSides.Top) 
            | System.Windows.Forms.ToolStripStatusLabelBorderSides.Right) 
            | System.Windows.Forms.ToolStripStatusLabelBorderSides.Bottom)));
            this.lblPizzaCount.Name = "lblPizzaCount";
            this.lblPizzaCount.Size = new System.Drawing.Size(50, 17);
            this.lblPizzaCount.TextAlign = System.Drawing.ContentAlignment.MiddleLeft;
            // 
            // toolStripStatusLabel2
            // 
            this.toolStripStatusLabel2.Name = "toolStripStatusLabel2";
            this.toolStripStatusLabel2.Size = new System.Drawing.Size(114, 17);
            this.toolStripStatusLabel2.Text = "Total Pick-up Orders";
            // 
            // lblPickupCount
            // 
            this.lblPickupCount.AutoSize = false;
            this.lblPickupCount.BorderSides = ((System.Windows.Forms.ToolStripStatusLabelBorderSides)((((System.Windows.Forms.ToolStripStatusLabelBorderSides.Left | System.Windows.Forms.ToolStripStatusLabelBorderSides.Top) 
            | System.Windows.Forms.ToolStripStatusLabelBorderSides.Right) 
            | System.Windows.Forms.ToolStripStatusLabelBorderSides.Bottom)));
            this.lblPickupCount.Name = "lblPickupCount";
            this.lblPickupCount.Size = new System.Drawing.Size(50, 17);
            this.lblPickupCount.TextAlign = System.Drawing.ContentAlignment.MiddleLeft;
            // 
            // toolStripStatusLabel4
            // 
            this.toolStripStatusLabel4.Name = "toolStripStatusLabel4";
            this.toolStripStatusLabel4.Size = new System.Drawing.Size(115, 17);
            this.toolStripStatusLabel4.Text = "Total Delivery Orders";
            // 
            // lblDeliveryCount
            // 
            this.lblDeliveryCount.AutoSize = false;
            this.lblDeliveryCount.BorderSides = ((System.Windows.Forms.ToolStripStatusLabelBorderSides)((((System.Windows.Forms.ToolStripStatusLabelBorderSides.Left | System.Windows.Forms.ToolStripStatusLabelBorderSides.Top) 
            | System.Windows.Forms.ToolStripStatusLabelBorderSides.Right) 
            | System.Windows.Forms.ToolStripStatusLabelBorderSides.Bottom)));
            this.lblDeliveryCount.Name = "lblDeliveryCount";
            this.lblDeliveryCount.Size = new System.Drawing.Size(50, 17);
            this.lblDeliveryCount.TextAlign = System.Drawing.ContentAlignment.MiddleLeft;
            // 
            // toolStripStatusLabel6
            // 
            this.toolStripStatusLabel6.Name = "toolStripStatusLabel6";
            this.toolStripStatusLabel6.Size = new System.Drawing.Size(137, 17);
            this.toolStripStatusLabel6.Text = "Total Pizza Sales w/o Tax:";
            // 
            // lblTotalPizzaSalesNoTax
            // 
            this.lblTotalPizzaSalesNoTax.AutoSize = false;
            this.lblTotalPizzaSalesNoTax.BorderSides = ((System.Windows.Forms.ToolStripStatusLabelBorderSides)((((System.Windows.Forms.ToolStripStatusLabelBorderSides.Left | System.Windows.Forms.ToolStripStatusLabelBorderSides.Top) 
            | System.Windows.Forms.ToolStripStatusLabelBorderSides.Right) 
            | System.Windows.Forms.ToolStripStatusLabelBorderSides.Bottom)));
            this.lblTotalPizzaSalesNoTax.Name = "lblTotalPizzaSalesNoTax";
            this.lblTotalPizzaSalesNoTax.Size = new System.Drawing.Size(50, 17);
            this.lblTotalPizzaSalesNoTax.TextAlign = System.Drawing.ContentAlignment.MiddleLeft;
            // 
            // frmPizzaOrders
            // 
            this.AutoScaleDimensions = new System.Drawing.SizeF(9F, 21F);
            this.AutoScaleMode = System.Windows.Forms.AutoScaleMode.Font;
            this.ClientSize = new System.Drawing.Size(947, 739);
            this.ControlBox = false;
            this.Controls.Add(this.statusStrip1);
            this.Controls.Add(this.tolButtons);
            this.Controls.Add(this.txtPizzaOrders);
            this.Controls.Add(this.groupBox2);
            this.Controls.Add(this.groupBox3);
            this.Controls.Add(this.groupBox1);
            this.Font = new System.Drawing.Font("Segoe UI", 12F, System.Drawing.FontStyle.Regular, System.Drawing.GraphicsUnit.Point);
            this.Name = "frmPizzaOrders";
            this.Text = "Pizza Orders";
            this.Load += new System.EventHandler(this.frmPizzaOrders_Load);
            this.groupBox1.ResumeLayout(false);
            this.groupBox1.PerformLayout();
            this.groupBox4.ResumeLayout(false);
            this.groupBox4.PerformLayout();
            this.groupBox3.ResumeLayout(false);
            this.groupBox3.PerformLayout();
            this.groupBox2.ResumeLayout(false);
            this.groupBox2.PerformLayout();
            this.tolButtons.ResumeLayout(false);
            this.tolButtons.PerformLayout();
            this.statusStrip1.ResumeLayout(false);
            this.statusStrip1.PerformLayout();
            this.ResumeLayout(false);
            this.PerformLayout();

        }

        #endregion
        private System.Windows.Forms.GroupBox groupBox1;
        private System.Windows.Forms.Label label3;
        private System.Windows.Forms.ListBox lstCrustStyles;
        private System.Windows.Forms.Label label2;
        private System.Windows.Forms.TextBox txtLastName;
        private System.Windows.Forms.Label label1;
        private System.Windows.Forms.TextBox txtFirstName;
        private System.Windows.Forms.GroupBox groupBox3;
        private System.Windows.Forms.GroupBox groupBox2;
        private System.Windows.Forms.TextBox txtPizzaOrders;
        private System.Windows.Forms.ToolStrip tolButtons;
        private System.Windows.Forms.ToolStripButton tolbtnSubmit;
        private System.Windows.Forms.ToolStripSeparator toolStripSeparator1;
        private System.Windows.Forms.ToolStripButton tolbtnCancel;
        private System.Windows.Forms.ToolStripSeparator toolStripSeparator2;
        private System.Windows.Forms.ToolStripButton tolbtnExit;
        private System.Windows.Forms.CheckBox chkOnions;
        private System.Windows.Forms.CheckBox chkSausage;
        private System.Windows.Forms.CheckBox chkHam;
        private System.Windows.Forms.CheckBox chkPepperoni;
        private System.Windows.Forms.ListBox lstPizzaSize;
        private System.Windows.Forms.Label label4;
        private System.Windows.Forms.StatusStrip statusStrip1;
        private System.Windows.Forms.ToolStripStatusLabel toolStripStatusLabel1;
        private System.Windows.Forms.ToolStripStatusLabel lblPizzaCount;
        private System.Windows.Forms.ToolStripStatusLabel toolStripStatusLabel2;
        private System.Windows.Forms.GroupBox groupBox4;
        private System.Windows.Forms.Label lblPhoneCaption;
        private System.Windows.Forms.TextBox txtPhoneNumber;
        private System.Windows.Forms.RadioButton rdoDelivery;
        private System.Windows.Forms.RadioButton rdoPickUp;
        private System.Windows.Forms.Label lblStreetCaption;
        private System.Windows.Forms.TextBox txtStreet;
        private System.Windows.Forms.RadioButton rdoNoCheese;
        private System.Windows.Forms.RadioButton rdoMozzarella;
        private System.Windows.Forms.CheckBox chkGreenPeppers;
        private System.Windows.Forms.CheckBox chkMushrooms;
        private System.Windows.Forms.ToolStripStatusLabel lblPickupCount;
        private System.Windows.Forms.ToolStripStatusLabel toolStripStatusLabel4;
        private System.Windows.Forms.ToolStripStatusLabel lblDeliveryCount;
        private System.Windows.Forms.ToolStripStatusLabel toolStripStatusLabel6;
        private System.Windows.Forms.ToolStripStatusLabel lblTotalPizzaSalesNoTax;
        private System.Windows.Forms.ToolStripLabel lblErrorMessage;
    }
}

