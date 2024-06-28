namespace Assignment03
{
    partial class frmPaperRockScissors
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
            System.ComponentModel.ComponentResourceManager resources = new System.ComponentModel.ComponentResourceManager(typeof(frmPaperRockScissors));
            this.picRock = new System.Windows.Forms.PictureBox();
            this.picPaper = new System.Windows.Forms.PictureBox();
            this.picScissors = new System.Windows.Forms.PictureBox();
            this.grpYourChoice = new System.Windows.Forms.GroupBox();
            this.pgbRounds = new System.Windows.Forms.ProgressBar();
            this.btnPlay = new System.Windows.Forms.Button();
            this.rdoScissors = new System.Windows.Forms.RadioButton();
            this.rdoPaper = new System.Windows.Forms.RadioButton();
            this.rdoRock = new System.Windows.Forms.RadioButton();
            this.cboRounds = new System.Windows.Forms.ComboBox();
            this.label4 = new System.Windows.Forms.Label();
            this.grbGameStart = new System.Windows.Forms.GroupBox();
            this.btnExit = new System.Windows.Forms.Button();
            this.btnStartGame = new System.Windows.Forms.Button();
            this.txtYourName = new System.Windows.Forms.TextBox();
            this.label6 = new System.Windows.Forms.Label();
            this.txtOpponentName = new System.Windows.Forms.TextBox();
            this.label5 = new System.Windows.Forms.Label();
            this.grpPlayingGame = new System.Windows.Forms.GroupBox();
            this.picYourPlay = new System.Windows.Forms.PictureBox();
            this.picOpponentPlay = new System.Windows.Forms.PictureBox();
            this.lblYourName = new System.Windows.Forms.Label();
            this.lblOpponentName = new System.Windows.Forms.Label();
            this.label2 = new System.Windows.Forms.Label();
            this.label1 = new System.Windows.Forms.Label();
            ((System.ComponentModel.ISupportInitialize)(this.picRock)).BeginInit();
            ((System.ComponentModel.ISupportInitialize)(this.picPaper)).BeginInit();
            ((System.ComponentModel.ISupportInitialize)(this.picScissors)).BeginInit();
            this.grpYourChoice.SuspendLayout();
            this.grbGameStart.SuspendLayout();
            this.grpPlayingGame.SuspendLayout();
            ((System.ComponentModel.ISupportInitialize)(this.picYourPlay)).BeginInit();
            ((System.ComponentModel.ISupportInitialize)(this.picOpponentPlay)).BeginInit();
            this.SuspendLayout();
            // 
            // picRock
            // 
            this.picRock.Image = ((System.Drawing.Image)(resources.GetObject("picRock.Image")));
            this.picRock.InitialImage = null;
            this.picRock.Location = new System.Drawing.Point(3, 1162);
            this.picRock.Margin = new System.Windows.Forms.Padding(5, 6, 5, 6);
            this.picRock.Name = "picRock";
            this.picRock.Size = new System.Drawing.Size(87, 178);
            this.picRock.SizeMode = System.Windows.Forms.PictureBoxSizeMode.AutoSize;
            this.picRock.TabIndex = 0;
            this.picRock.TabStop = false;
            this.picRock.Visible = false;
            // 
            // picPaper
            // 
            this.picPaper.Image = ((System.Drawing.Image)(resources.GetObject("picPaper.Image")));
            this.picPaper.InitialImage = null;
            this.picPaper.Location = new System.Drawing.Point(163, 1162);
            this.picPaper.Margin = new System.Windows.Forms.Padding(5, 6, 5, 6);
            this.picPaper.Name = "picPaper";
            this.picPaper.Size = new System.Drawing.Size(92, 180);
            this.picPaper.SizeMode = System.Windows.Forms.PictureBoxSizeMode.AutoSize;
            this.picPaper.TabIndex = 1;
            this.picPaper.TabStop = false;
            this.picPaper.Visible = false;
            // 
            // picScissors
            // 
            this.picScissors.Image = ((System.Drawing.Image)(resources.GetObject("picScissors.Image")));
            this.picScissors.InitialImage = null;
            this.picScissors.Location = new System.Drawing.Point(331, 1162);
            this.picScissors.Margin = new System.Windows.Forms.Padding(5, 6, 5, 6);
            this.picScissors.Name = "picScissors";
            this.picScissors.Size = new System.Drawing.Size(90, 182);
            this.picScissors.SizeMode = System.Windows.Forms.PictureBoxSizeMode.AutoSize;
            this.picScissors.TabIndex = 2;
            this.picScissors.TabStop = false;
            this.picScissors.Visible = false;
            // 
            // grpYourChoice
            // 
            this.grpYourChoice.Controls.Add(this.pgbRounds);
            this.grpYourChoice.Controls.Add(this.btnPlay);
            this.grpYourChoice.Controls.Add(this.rdoScissors);
            this.grpYourChoice.Controls.Add(this.rdoPaper);
            this.grpYourChoice.Controls.Add(this.rdoRock);
            this.grpYourChoice.Location = new System.Drawing.Point(14, 490);
            this.grpYourChoice.Name = "grpYourChoice";
            this.grpYourChoice.Size = new System.Drawing.Size(455, 184);
            this.grpYourChoice.TabIndex = 2;
            this.grpYourChoice.TabStop = false;
            this.grpYourChoice.Text = "Your Choice Before Play";
            // 
            // pgbRounds
            // 
            this.pgbRounds.Location = new System.Drawing.Point(244, 134);
            this.pgbRounds.Name = "pgbRounds";
            this.pgbRounds.Size = new System.Drawing.Size(104, 24);
            this.pgbRounds.TabIndex = 4;
            // 
            // btnPlay
            // 
            this.btnPlay.BackColor = System.Drawing.Color.Silver;
            this.btnPlay.Location = new System.Drawing.Point(239, 65);
            this.btnPlay.Name = "btnPlay";
            this.btnPlay.Size = new System.Drawing.Size(110, 60);
            this.btnPlay.TabIndex = 3;
            this.btnPlay.Text = "Pla&y";
            this.btnPlay.UseVisualStyleBackColor = false;
            this.btnPlay.Click += new System.EventHandler(this.btnPlay_Click);
            // 
            // rdoScissors
            // 
            this.rdoScissors.AutoSize = true;
            this.rdoScissors.ForeColor = System.Drawing.Color.FromArgb(((int)(((byte)(0)))), ((int)(((byte)(0)))), ((int)(((byte)(192)))));
            this.rdoScissors.Location = new System.Drawing.Point(46, 118);
            this.rdoScissors.Name = "rdoScissors";
            this.rdoScissors.Size = new System.Drawing.Size(106, 34);
            this.rdoScissors.TabIndex = 2;
            this.rdoScissors.TabStop = true;
            this.rdoScissors.Text = "&Scissors";
            this.rdoScissors.UseVisualStyleBackColor = true;
            // 
            // rdoPaper
            // 
            this.rdoPaper.AutoSize = true;
            this.rdoPaper.ForeColor = System.Drawing.Color.FromArgb(((int)(((byte)(0)))), ((int)(((byte)(0)))), ((int)(((byte)(192)))));
            this.rdoPaper.Location = new System.Drawing.Point(46, 78);
            this.rdoPaper.Name = "rdoPaper";
            this.rdoPaper.Size = new System.Drawing.Size(86, 34);
            this.rdoPaper.TabIndex = 1;
            this.rdoPaper.TabStop = true;
            this.rdoPaper.Text = "&Paper";
            this.rdoPaper.UseVisualStyleBackColor = true;
            // 
            // rdoRock
            // 
            this.rdoRock.AutoSize = true;
            this.rdoRock.ForeColor = System.Drawing.Color.FromArgb(((int)(((byte)(0)))), ((int)(((byte)(0)))), ((int)(((byte)(192)))));
            this.rdoRock.Location = new System.Drawing.Point(46, 38);
            this.rdoRock.Name = "rdoRock";
            this.rdoRock.Size = new System.Drawing.Size(77, 34);
            this.rdoRock.TabIndex = 0;
            this.rdoRock.TabStop = true;
            this.rdoRock.Text = "&Rock";
            this.rdoRock.UseVisualStyleBackColor = true;
            // 
            // cboRounds
            // 
            this.cboRounds.DropDownStyle = System.Windows.Forms.ComboBoxStyle.DropDownList;
            this.cboRounds.FormattingEnabled = true;
            this.cboRounds.Location = new System.Drawing.Point(290, 61);
            this.cboRounds.Name = "cboRounds";
            this.cboRounds.Size = new System.Drawing.Size(70, 38);
            this.cboRounds.TabIndex = 1;
            // 
            // label4
            // 
            this.label4.Location = new System.Drawing.Point(60, 32);
            this.label4.Margin = new System.Windows.Forms.Padding(5, 0, 5, 0);
            this.label4.Name = "label4";
            this.label4.Size = new System.Drawing.Size(222, 67);
            this.label4.TabIndex = 0;
            this.label4.Text = "Number of rounds to determine winner:";
            // 
            // grbGameStart
            // 
            this.grbGameStart.Controls.Add(this.btnExit);
            this.grbGameStart.Controls.Add(this.btnStartGame);
            this.grbGameStart.Controls.Add(this.txtYourName);
            this.grbGameStart.Controls.Add(this.label6);
            this.grbGameStart.Controls.Add(this.txtOpponentName);
            this.grbGameStart.Controls.Add(this.label5);
            this.grbGameStart.Controls.Add(this.label4);
            this.grbGameStart.Controls.Add(this.cboRounds);
            this.grbGameStart.Location = new System.Drawing.Point(12, 12);
            this.grbGameStart.Name = "grbGameStart";
            this.grbGameStart.Size = new System.Drawing.Size(455, 474);
            this.grbGameStart.TabIndex = 0;
            this.grbGameStart.TabStop = false;
            this.grbGameStart.Text = "Game Start";
            // 
            // btnExit
            // 
            this.btnExit.BackColor = System.Drawing.Color.Silver;
            this.btnExit.Location = new System.Drawing.Point(218, 384);
            this.btnExit.Name = "btnExit";
            this.btnExit.Size = new System.Drawing.Size(131, 60);
            this.btnExit.TabIndex = 7;
            this.btnExit.Text = "E&xit";
            this.btnExit.UseVisualStyleBackColor = false;
            this.btnExit.Click += new System.EventHandler(this.btnExit_Click);
            // 
            // btnStartGame
            // 
            this.btnStartGame.BackColor = System.Drawing.Color.Silver;
            this.btnStartGame.Location = new System.Drawing.Point(60, 384);
            this.btnStartGame.Name = "btnStartGame";
            this.btnStartGame.Size = new System.Drawing.Size(131, 60);
            this.btnStartGame.TabIndex = 6;
            this.btnStartGame.Text = "Start &Game";
            this.btnStartGame.UseVisualStyleBackColor = false;
            this.btnStartGame.Click += new System.EventHandler(this.btnStartGame_Click);
            // 
            // txtYourName
            // 
            this.txtYourName.Location = new System.Drawing.Point(66, 286);
            this.txtYourName.Name = "txtYourName";
            this.txtYourName.Size = new System.Drawing.Size(294, 36);
            this.txtYourName.TabIndex = 5;
            // 
            // label6
            // 
            this.label6.AutoSize = true;
            this.label6.Location = new System.Drawing.Point(66, 244);
            this.label6.Name = "label6";
            this.label6.Size = new System.Drawing.Size(121, 30);
            this.label6.TabIndex = 4;
            this.label6.Text = "Your name:";
            // 
            // txtOpponentName
            // 
            this.txtOpponentName.Location = new System.Drawing.Point(66, 177);
            this.txtOpponentName.Name = "txtOpponentName";
            this.txtOpponentName.Size = new System.Drawing.Size(294, 36);
            this.txtOpponentName.TabIndex = 3;
            // 
            // label5
            // 
            this.label5.AutoSize = true;
            this.label5.Location = new System.Drawing.Point(66, 135);
            this.label5.Name = "label5";
            this.label5.Size = new System.Drawing.Size(177, 30);
            this.label5.TabIndex = 2;
            this.label5.Text = "Opponent name:";
            // 
            // grpPlayingGame
            // 
            this.grpPlayingGame.Controls.Add(this.picYourPlay);
            this.grpPlayingGame.Controls.Add(this.picOpponentPlay);
            this.grpPlayingGame.Controls.Add(this.lblYourName);
            this.grpPlayingGame.Controls.Add(this.lblOpponentName);
            this.grpPlayingGame.Controls.Add(this.label2);
            this.grpPlayingGame.Controls.Add(this.label1);
            this.grpPlayingGame.Location = new System.Drawing.Point(14, 12);
            this.grpPlayingGame.Name = "grpPlayingGame";
            this.grpPlayingGame.Size = new System.Drawing.Size(455, 474);
            this.grpPlayingGame.TabIndex = 1;
            this.grpPlayingGame.TabStop = false;
            // 
            // picYourPlay
            // 
            this.picYourPlay.BackColor = System.Drawing.Color.White;
            this.picYourPlay.BorderStyle = System.Windows.Forms.BorderStyle.FixedSingle;
            this.picYourPlay.ErrorImage = null;
            this.picYourPlay.InitialImage = null;
            this.picYourPlay.Location = new System.Drawing.Point(279, 288);
            this.picYourPlay.Name = "picYourPlay";
            this.picYourPlay.Size = new System.Drawing.Size(91, 180);
            this.picYourPlay.TabIndex = 14;
            this.picYourPlay.TabStop = false;
            // 
            // picOpponentPlay
            // 
            this.picOpponentPlay.BackColor = System.Drawing.Color.White;
            this.picOpponentPlay.BorderStyle = System.Windows.Forms.BorderStyle.FixedSingle;
            this.picOpponentPlay.InitialImage = null;
            this.picOpponentPlay.Location = new System.Drawing.Point(279, 44);
            this.picOpponentPlay.Name = "picOpponentPlay";
            this.picOpponentPlay.Size = new System.Drawing.Size(91, 180);
            this.picOpponentPlay.TabIndex = 13;
            this.picOpponentPlay.TabStop = false;
            // 
            // lblYourName
            // 
            this.lblYourName.AutoSize = true;
            this.lblYourName.BorderStyle = System.Windows.Forms.BorderStyle.FixedSingle;
            this.lblYourName.Location = new System.Drawing.Point(21, 266);
            this.lblYourName.Margin = new System.Windows.Forms.Padding(5, 0, 5, 0);
            this.lblYourName.Name = "lblYourName";
            this.lblYourName.Size = new System.Drawing.Size(177, 32);
            this.lblYourName.TabIndex = 3;
            this.lblYourName.Text = "                           ";
            // 
            // lblOpponentName
            // 
            this.lblOpponentName.AutoSize = true;
            this.lblOpponentName.BorderStyle = System.Windows.Forms.BorderStyle.FixedSingle;
            this.lblOpponentName.Location = new System.Drawing.Point(14, 48);
            this.lblOpponentName.Margin = new System.Windows.Forms.Padding(5, 0, 5, 0);
            this.lblOpponentName.Name = "lblOpponentName";
            this.lblOpponentName.Size = new System.Drawing.Size(177, 32);
            this.lblOpponentName.TabIndex = 1;
            this.lblOpponentName.Text = "                           ";
            // 
            // label2
            // 
            this.label2.AutoSize = true;
            this.label2.Location = new System.Drawing.Point(21, 236);
            this.label2.Margin = new System.Windows.Forms.Padding(5, 0, 5, 0);
            this.label2.Name = "label2";
            this.label2.Size = new System.Drawing.Size(53, 30);
            this.label2.TabIndex = 2;
            this.label2.Text = "You:";
            // 
            // label1
            // 
            this.label1.AutoSize = true;
            this.label1.Location = new System.Drawing.Point(14, 18);
            this.label1.Margin = new System.Windows.Forms.Padding(5, 0, 5, 0);
            this.label1.Name = "label1";
            this.label1.Size = new System.Drawing.Size(117, 30);
            this.label1.TabIndex = 0;
            this.label1.Text = "Opponent:";
            // 
            // frmPaperRockScissors
            // 
            this.AcceptButton = this.btnStartGame;
            this.AutoScaleDimensions = new System.Drawing.SizeF(12F, 30F);
            this.AutoScaleMode = System.Windows.Forms.AutoScaleMode.Font;
            this.ClientSize = new System.Drawing.Size(495, 680);
            this.ControlBox = false;
            this.Controls.Add(this.grbGameStart);
            this.Controls.Add(this.grpYourChoice);
            this.Controls.Add(this.picScissors);
            this.Controls.Add(this.picPaper);
            this.Controls.Add(this.picRock);
            this.Controls.Add(this.grpPlayingGame);
            this.Font = new System.Drawing.Font("Segoe UI", 16F, System.Drawing.FontStyle.Regular, System.Drawing.GraphicsUnit.Point);
            this.Margin = new System.Windows.Forms.Padding(5, 6, 5, 6);
            this.Name = "frmPaperRockScissors";
            this.StartPosition = System.Windows.Forms.FormStartPosition.CenterScreen;
            this.Text = "Paper Rock Scissors Game";
            this.Load += new System.EventHandler(this.frmPaperRockScissors_Load);
            ((System.ComponentModel.ISupportInitialize)(this.picRock)).EndInit();
            ((System.ComponentModel.ISupportInitialize)(this.picPaper)).EndInit();
            ((System.ComponentModel.ISupportInitialize)(this.picScissors)).EndInit();
            this.grpYourChoice.ResumeLayout(false);
            this.grpYourChoice.PerformLayout();
            this.grbGameStart.ResumeLayout(false);
            this.grbGameStart.PerformLayout();
            this.grpPlayingGame.ResumeLayout(false);
            this.grpPlayingGame.PerformLayout();
            ((System.ComponentModel.ISupportInitialize)(this.picYourPlay)).EndInit();
            ((System.ComponentModel.ISupportInitialize)(this.picOpponentPlay)).EndInit();
            this.ResumeLayout(false);
            this.PerformLayout();

        }

        #endregion

        private PictureBox picRock;
        private PictureBox picPaper;
        private PictureBox picScissors;
        private GroupBox grpYourChoice;
        private Button btnPlay;
        private RadioButton rdoScissors;
        private RadioButton rdoPaper;
        private RadioButton rdoRock;
        private ComboBox cboRounds;
        private Label label4;
        private GroupBox grbGameStart;
        private Button btnStartGame;
        private TextBox txtYourName;
        private Label label6;
        private TextBox txtOpponentName;
        private Label label5;
        private GroupBox grpPlayingGame;
        private PictureBox picYourPlay;
        private PictureBox picOpponentPlay;
        private Label lblYourName;
        private Label lblOpponentName;
        private Label label2;
        private Label label1;
        private Button btnExit;
        private ProgressBar pgbRounds;
    }
}