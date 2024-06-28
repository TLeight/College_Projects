using System;
using System.Collections.Generic;
using System.ComponentModel;
using System.Data;
using System.Drawing;
using System.Linq;
using System.Text;
using System.Threading.Tasks;
using System.Windows.Forms;

namespace Event_Sales
{
    /*
     Tyler Leight
    Assignment 02
    9-23-22
    Project take in users first/last name abd
    pizza style, size, and toppings for delivery or to go.
    */
    public partial class frmPizzaOrders : Form
    {
        // Declare field varialbles (class-level scope)
        const decimal decDeepDish = 2.00M;
        const decimal decHandToss = 1.50M;
        const decimal decThin = 1.35M;
        const decimal decNYStyle = 1.50M;
        const decimal decSeasonCauli = 3.00M;
        const decimal decGluton = 5.00M;

        const decimal decSmall = 9.00M;
        const decimal decMedi = 15.00M;
        const decimal decLarge = 20.00M;
        const decimal decParty = 30.00M;

        const decimal decPepperoni = 0.70M;
        const decimal decHam = 0.70M;
        const decimal decSausage = 0.80M;
        const decimal decOnion = 0.65M;
        const decimal decMushroom = 0.65M;
        const decimal decGreenpepper = 0.60M;

        int intDelivers;
        int intPickups;
        int intPizzaCount;
        decimal decNotax = 0;
        decimal decToppings = 0;
        decimal decCrustCost = 0;
        decimal decSizecost = 0;
        decimal decSubtotal;
        decimal decTax = 0.06M;
        decimal decTaxammnt;
        decimal decTotal;

        string strErrorMessage = string.Empty;
        string strOrderMesaage = string.Empty;

        public frmPizzaOrders()
        {
            InitializeComponent();
        }
        private void tolButtons_ItemClicked(object sender, ToolStripItemClickedEventArgs e)
        { // Toolbar control was clicked so based upon the button
          // that was clicked execute the correct method.

            switch (e.ClickedItem.Name)  //use name of Toolbar button to
            {                          //determine which button was clicked
                case "tolbtnSubmit":
                    Perform_Calculations();
                    break;
                case "tolbtnCancel":
                    Cancel_Order();
                    break;
                case "tolbtnExit":
                    Exit_Application();
                    break;

            }
        }


        private void Perform_Calculations()
        { // when user clicks Calculate toolbar button then
          // this method should be called
          
          // Declares of the entering of the first and last name.
            if (txtFirstName.Text == String.Empty)
            {
                strErrorMessage = "Please enter first name";

                lblErrorMessage.Text = strErrorMessage;

                return;

            }
            else if (txtLastName.Text == String.Empty)
            {
                strErrorMessage = "Please enter last name";

                lblErrorMessage.Text = strErrorMessage;

                return;
            }

            // use of the switch saement for the use of selecting crust style from the lsitsbox.
            switch (lstCrustStyles.SelectedIndex)
            {
                case 0:
                decCrustCost = decDeepDish;
                break;

                case 1:
                decCrustCost = decHandToss;
                break;

                case 2:
                decCrustCost = decThin;
                break;

                case 3:
                decCrustCost = decNYStyle;
                break;

                case 4:
                decCrustCost = decSeasonCauli;
                break;

                case 5:
                decCrustCost = decGluton;
                break;

            }

            // if statements for the size of pizza.
            if (lstPizzaSize.SelectedIndex == 0)
            {
                decSizecost = decSmall;
            }
            else if (lstPizzaSize.SelectedIndex == 1)
            {
                decSizecost = decMedi;
            }
            else if (lstPizzaSize.SelectedIndex == 2)
            {
                decSizecost = decLarge;

            }
            else if (lstPizzaSize.SelectedIndex == 3)
            {
                decSizecost = decParty;
            }

            // if statement for the selections of toopings.
            if (chkPepperoni.Checked == true)
            {
                decToppings = decPepperoni;

            }else if (chkHam.Checked == true)
            {
                decToppings = decHam;

            }else if (chkSausage.Checked == true)
            { 
                decToppings = decSausage; 

            }else if (chkOnions.Checked == true)
            {
                decToppings = decOnion;

            }else if (chkMushrooms.Checked == true)
            {
                decToppings = decMushroom;

            }else if (chkGreenPeppers.Checked == true)
            {
                decToppings = decGreenpepper;
            }

            // calculations of subtotal/total.
            decNotax += decSubtotal;
            decSubtotal = decCrustCost + decSizecost + decToppings;
            decTaxammnt = decTax * decSubtotal;
            decTotal = decTaxammnt + decSubtotal;

            lblTotalPizzaSalesNoTax.Text = decNotax.ToString();
            
            // display order
            strOrderMesaage = txtFirstName.Text + " " + txtLastName.Text +
               " Total " +
               decTotal.ToString("C2") + "." + Environment.NewLine +
               "Sales Tax " +
               decTax.ToString("C2") + "." + Environment.NewLine +
               "Sub Total " +
               decSubtotal.ToString("C2") + "." + Environment.NewLine +
               "crust " +
               lstCrustStyles.Text + "." + Environment.NewLine +
               "size " +
               lstPizzaSize.Text + "." + Environment.NewLine +
               "Toppings " +
               decToppings.ToString("C2") + "." + Environment.NewLine;

            txtPizzaOrders.Text = strOrderMesaage;
            
            // counts up pickups/deliverys/total pizzas.
            if (rdoDelivery.Checked == true)
            {
                intDelivers = intDelivers + 1;
                lblDeliveryCount.Text = intDelivers.ToString();
            }
            else if (rdoPickUp.Checked == true)
            {
                intPickups = intPickups + 1;
                lblPickupCount.Text = intPickups.ToString();
            }

            intPizzaCount = intDelivers + intPickups;
            lblPizzaCount.Text = intPizzaCount.ToString();
        }

        private void Cancel_Order()
        { // when user clicks Clear toolbar button then
          // this method should be called
            txtFirstName.Text = String.Empty;
            txtLastName.Text = String.Empty;
            txtStreet.Text = String.Empty;
            txtPhoneNumber.Text = String.Empty;
            txtPizzaOrders.Text = String.Empty;
        }

        private void Exit_Application()
        { // when user clicks Exit toolbar button then
          // this method should be called

            this.Close();

        }

        // loads up the list boxes of crustyle and size.
        private void frmPizzaOrders_Load(object sender, EventArgs e)
        {
            lstCrustStyles.Items.Add("Deep Dish (2.00)");
            lstCrustStyles.Items.Add("Hand Toss (1.50)");
            lstCrustStyles.Items.Add("Thin (1.35)");
            lstCrustStyles.Items.Add("NY Style (1.50)");
            lstCrustStyles.Items.Add("Seasoned (1.00)");
            lstCrustStyles.Items.Add("Gluton Free (5.00)");

            lstPizzaSize.Items.Add("Small (9.00)");
            lstPizzaSize.Items.Add("Medium (15.00)");
            lstPizzaSize.Items.Add("Large (20.00)");
            lstPizzaSize.Items.Add("Party-Size (30.00)");

            lstCrustStyles.SelectedIndex = 0;
            lstPizzaSize.SelectedIndex = 0;

            rdoMozzarella.Checked = true;
            rdoPickUp.Checked = true;
        }

        // if the pizza is for pickup/delivery.
        private void rdoPickUp_Click(object sender, EventArgs e)
        {
            lblPhoneCaption.Visible = true;
            txtPhoneNumber.Visible = true;

            txtStreet.Visible = false;
            lblStreetCaption.Visible = false;
        }

        private void rdoDelivery_Click(object sender, EventArgs e)
        {
            lblPhoneCaption.Visible = false;
            txtPhoneNumber.Visible = false;

            txtStreet.Visible = true;
            lblStreetCaption.Visible = true;
        }

        
    }
}
