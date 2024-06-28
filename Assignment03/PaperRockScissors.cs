using System.Drawing.Text;
using System.Security.Cryptography;

namespace Assignment03
{ 
    
    public partial class frmPaperRockScissors : Form
    {   // define class-level (field) variables
        enum GamePieces // This enumeration is used in a method to determine
                        // which picture image is displayed
        {
            Rock = 1,
            Paper = 2,
            Scissors = 3
        }

        Random _random = new Random();
        int _intRounds;
        int _intCpuwon;
        int _intUserwon;
        public frmPaperRockScissors()
        {
            InitializeComponent();
        }

        private void frmPaperRockScissors_Load(object sender, EventArgs e)
        {
            // Load the ComboListBox control with the integer values
            cboRounds.Items.Clear();
            cboRounds.Items.Add("1");
            cboRounds.Items.Add("3");
            cboRounds.Items.Add("5");
            cboRounds.Items.Add("7");
            cboRounds.Items.Add("9");

            

        }
        private bool IsValidStart()
        {
            bool success = true;
            string strMessage = "";
            strMessage = Validator.IsPresent(cboRounds.Text,"Rounds");
            strMessage += Validator.IsPresent(txtOpponentName.Text, "Opponent name");
            strMessage += Validator.IsPresent(txtYourName.Text, "Your name");

            if (strMessage != "")
            {
                MessageBox.Show(strMessage, "Please Fix", MessageBoxButtons.OK, MessageBoxIcon.Information);
                success = false;
            }
            return success;
        }

        private void btnStartGame_Click(object sender, EventArgs e)
        {            
            IsValidStart();
            
            int.TryParse(cboRounds.Text, out _intRounds);

            pgbRounds.Maximum = _intRounds;

            grbGameStart.Visible = false;
            grpPlayingGame.Visible = true;

            lblOpponentName.Text = txtOpponentName.Text;
            lblYourName.Text = txtYourName.Text;
            
        }

        private void btnPlay_Click(object sender, EventArgs e)
        {
            if(rdoPaper.Checked == false && rdoRock.Checked == false && rdoScissors.Checked == false) 
            {
                MessageBox.Show("Please pick an action.");
            }
            int YourChoice;
            int OpponentChoice = _random.Next(1,4);

            if(rdoRock.Checked == true)
            {
                YourChoice = 1;
                DisplayImages(YourChoice, OpponentChoice);
                CompareChoices(YourChoice, OpponentChoice);

            }else if(rdoPaper.Checked == true)
            {
                YourChoice = 2;
                DisplayImages(YourChoice, OpponentChoice);
                CompareChoices(YourChoice, OpponentChoice);
            }else if(rdoScissors.Checked == true)
            {
                YourChoice = 3;
                DisplayImages(YourChoice, OpponentChoice);
                CompareChoices(YourChoice, OpponentChoice);
            }

            if (rdoRock.Checked == true && OpponentChoice == 1)
            {
                MessageBox.Show("You both tied");
            }else if(rdoPaper.Checked == true && OpponentChoice == 2)
            {
                MessageBox.Show("You both tied");
            }else if (rdoScissors.Checked == true && OpponentChoice == 3)
            {
                MessageBox.Show("You both tied");
            }         

            if(pgbRounds.Value >= pgbRounds.Maximum)
            {
                DisplayGameResults();
                ResetForNewGame();
            }
        }
        private void CompareChoices(int YourChoice,int OpponentChoice)
        {
            if (YourChoice == 1 && OpponentChoice == 2)
            {
                _intCpuwon = _intCpuwon + 1;
                label1.Text = _intCpuwon.ToString();
                
            }else if (YourChoice == 1 && OpponentChoice == 3)
            {
                _intUserwon = _intUserwon + 1;
                label2.Text = _intUserwon.ToString();
                
            }else if (YourChoice == 2 && OpponentChoice == 1)
            {
                _intUserwon = _intUserwon + 1;
                label2.Text = _intUserwon.ToString();

            }else if (YourChoice == 2 && OpponentChoice == 3)
            {
                _intCpuwon = _intCpuwon + 1;
                label1.Text= _intCpuwon.ToString();

            }else if (YourChoice == 3 && OpponentChoice == 1)
            {
                _intCpuwon = _intCpuwon + 1;
                label1.Text = _intCpuwon.ToString();
            
            }else if (YourChoice == 3 && OpponentChoice == 2)
            {
                _intUserwon = _intUserwon + 1;
                label2.Text = _intUserwon.ToString();
            }

        }
        private void DisplayGameResults()
        {
            frmGameResults frmResults = new frmGameResults();

            // Display the values of the counters in the correct labels
            // found on the Game Results form.
            frmResults.lblYouPlaysWon.Text = _intUserwon.ToString();

            frmResults.lblOpponentPlaysWon.Text = _intCpuwon.ToString();
            // Display the name of the person who won the game
            if (_intUserwon > _intCpuwon)
            {
                frmResults.lblWinnerName.Text = lblYourName.Text;
            }
            else
            {
                frmResults.lblWinnerName.Text = lblOpponentName.Text;
            }
            // Display form to user
            frmResults.ShowDialog();

        }
        private void ResetForNewGame()
        {
            // The group box control Game Start must be visible, the group box
            // control Playing Game must be hidden while the group box control
            // Your Choice should have its enabled property to false.
            grbGameStart.Visible = true;
            grpPlayingGame.Visible = false;
            grpYourChoice.Enabled = true;
            // Initialize counter variables to 0
            _intRounds = 0;
            _intUserwon = 0;
            _intCpuwon = 0;

            // Set Picture Box control for Opponent Play image and
            // Your Play image to the value null
            picOpponentPlay.Image = null;
            picYourPlay.Image = null;
            // Intialize Progress Bar control's value to 0
            pgbRounds.Value = 0;
        }
        private void DisplayImages(int YourChoice,int OpponentChoice)
        {
            // This method uses the enumeration GamePieces. This will allow
            // you to use a meaningful name instead of an integer value

            switch ((GamePieces) YourChoice)  // Display the correct image for you
            {
                case GamePieces.Rock:
                    picYourPlay.Image = picRock.Image;
                    break;

                // write code for the Paper and Scissors scenario
                case GamePieces.Paper:
                    picYourPlay.Image = picPaper.Image;
                    break;

                case GamePieces.Scissors:
                    picYourPlay.Image = picScissors.Image;
                    break;
            }

            // write code that will display the correct image for the opponent
            switch ((GamePieces) OpponentChoice)
            {
                case GamePieces.Rock:
                    picOpponentPlay.Image = picRock.Image;
                    break;

                case GamePieces.Paper:
                    picOpponentPlay.Image = picPaper.Image;
                    break;

                case GamePieces.Scissors:
                    picOpponentPlay.Image = picScissors.Image;
                    break;

            }


            // The progress bar control will be updated to let the user
            // know the games progress for this round

            pgbRounds.Value += 1; // update progress bar value
            
        }

        private void btnExit_Click(object sender, EventArgs e)
        {
            this.Close();
        }
    }
}