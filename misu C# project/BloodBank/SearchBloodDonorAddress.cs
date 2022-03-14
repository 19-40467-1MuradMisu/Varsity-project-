using System;
using System.Collections.Generic;
using System.ComponentModel;
using System.Data;
using System.Drawing;
using System.Linq;
using System.Text;
using System.Threading.Tasks;
using System.Windows.Forms;

namespace BloodBank
{
    public partial class SearchBloodDonorAddress : Form
    {
        function fn = new function();
        public SearchBloodDonorAddress()
        {
            InitializeComponent();
        }

        private void label2_Click(object sender, EventArgs e)
        {

        }

        private void button1_Click(object sender, EventArgs e)
        {
            this.Close();
        }

        private void SearchBloodDonorAddress_Load(object sender, EventArgs e)
        {
            String query = "SELECT * from DonorsDetails";
            DataSet ds = fn.getData(query);
            dataGridView1.DataSource = ds.Tables[0];

        }

        private void txtAddress_TextChanged(object sender, EventArgs e)
        {
            if (txtAddress.Text !="")
            {
                String query = "SELECT * from DonorsDetails where city like '" + txtAddress.Text + "%' or daddress like '" + txtAddress.Text + "%'  ";
                DataSet ds = fn.getData(query);
                dataGridView1.DataSource = ds.Tables[0];
            }
            else
            {
                String query = "SELECT * from DonorsDetails";
                DataSet ds = fn.getData(query);
                dataGridView1.DataSource = ds.Tables[0];
            }
        }
    }
}
