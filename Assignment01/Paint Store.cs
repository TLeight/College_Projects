using System.Runtime.CompilerServices;

namespace Assignment01

    /*
     * Tyler Leight 
     * 9-10-2022
     */
{
    public partial class frmPaintStore : Form
    {
        public frmPaintStore()
        {
            InitializeComponent();
        }

        private void btnClear_Click(object sender, EventArgs e)
        {
            // clear inputs and outputs

            txtFirstName.Text = string.Empty;
            txtLastName.Text = string.Empty;
            txtAddress.Text = string.Empty;
            txtBrushes.Text = string.Empty;
            txtFinishPaint.Text = string.Empty;
            txtPrimerPaint.Text = string.Empty;
            txtTrimTape.Text = string.Empty;
            txtSeniorPainters.Text = string.Empty;
            txtJuniorPainter.Text = string.Empty;
            lblOutput.Text = String.Empty;

            txtFirstName.Focus();

        }

        private void btnExit_Click(object sender, EventArgs e)
        {
            // exit the application

            this.Close();

        }

        private void btnCalculaye_Click(object sender, EventArgs e)
        {
            //Give variables value.

            double dblTotal;
            double dblSaltax = .06;
            double dblSubtotal;
            double dblexTotal;
            double dblLaborcost;
            const double dblBrushes_cost = 11.50;
            const double dblFinisher_cost = 44.00;
            const double dblPrimer_cost = 31.50;
            const double dblTrim_cost = 5.60;
            const double dblSenior_cost = 25.00;
            const double dblJunior_cost = 15.50;           
            string strMessage = string.Empty;
            

            

            //Get numeric data from textbox controls
            int.TryParse(txtBrushes.Text, out int intBrushes);
            int.TryParse(txtFinishPaint.Text, out int intFinisher);
            int.TryParse(txtPrimerPaint.Text, out int intPrimer);
            int.TryParse(txtTrimTape.Text, out int intTrim);
            int.TryParse(txtSeniorPainters.Text, out int intSenior);
            int.TryParse(txtJuniorPainter.Text, out int intJunior);


            //Calculate Sub Total 
            dblSubtotal = (intBrushes * dblBrushes_cost) +
                (intFinisher * dblFinisher_cost) +
                (intPrimer * dblPrimer_cost) +
                (intTrim * dblTrim_cost) +
                (intSenior * dblSenior_cost) +
                (intJunior * dblJunior_cost);

            // calculate Labor Cost
            dblLaborcost = (intSenior * dblSenior_cost) +
                (intJunior * dblJunior_cost);

            // calculate Total
            dblexTotal =  dblSubtotal * dblSaltax;
            dblTotal = dblexTotal + dblSubtotal;

            //Display the customers name and total

            strMessage = txtFirstName.Text + " " + txtLastName.Text +
                " Total " +
                dblTotal.ToString("C2") + "." + Environment.NewLine +
                 "Sales Tax " +
                dblSaltax.ToString("C2") + "." + Environment.NewLine +
                "Sub Total " +
                dblSubtotal.ToString("C2") + "." + Environment.NewLine +
                "Labor Cost " +
                dblLaborcost.ToString("C2") + "." + Environment.NewLine
                + "Thank you for choosing Paint World LLC";

                lblOutput.Text = strMessage;
            
        }

        private void frmPaintStore_Load(object sender, EventArgs e)
        {

            string strTitle;
            strTitle = "Paint World LLC" + Environment.NewLine;

            lblTitle.Text = strTitle;

            // explaination of project

            string strexplain;

            strexplain = "Project Explanatione" + Environment.NewLine
                + "The user will input their first and last name name" + Environment.NewLine
                + "along with the address." + Environment.NewLine
                + "Then please choose the amount of each product needed" + Environment.NewLine
                + "also including the number of employess required." + Environment.NewLine;

            txtexplnproj.Text = strexplain;

            //display prices

            string strPricing;

            strPricing = " Brushes - $11.50 per brush" + Environment.NewLine
                + " Finisher Paint - $44.00 per gallon" + Environment.NewLine
                + " Primer Paint - $31.50 per gallon" + Environment.NewLine
                + " Trim Tape - $5.60 per roll" + Environment.NewLine
                + " Senior Painter - $25.00 per hour" + Environment.NewLine
                + " Junior Paintor - $15.50 per hour" + Environment.NewLine;

            
            txtPriceInformation.Text = strPricing;
        }

        private void txtFirstName_TextChanged(object sender, EventArgs e)
        {
            lblOutput.Text = string.Empty;
        }
    }
}