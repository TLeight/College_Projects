using System;
using System.Collections.Generic;
using System.Linq;
using System.Text;
using System.Threading.Tasks;

namespace Assignment03
{
    public static class Validator
    {
        public static string IsPresent(string value, string name)
        {
            string msg = "";
            // Check if value is empty
            if (value == "")
            {
                msg += name + " is a required field.\n";
            }
            return msg;
        }
    }
}
