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
    public partial class SearchBloodDonorByGroup : Form
    {
        function fn = new function();
        String query;
        public SearchBloodDonorByGroup()
        {
            InitializeComponent();
        }

        private void button1_Click(object sender, EventArgs e)
        {
            this.Close();
        }

        private void SearchBloodDonorByGroup_Load(object sender, EventArgs e)
        {
            query = "SELECT * from DonorsDetails ";
            DataSet ds = fn.getData(query);
            dataGridView1.DataSource = ds.Tables[0];
        }

        private void txtBloodGroup_TextChanged(object sender, EventArgs e)
        {
            if (txtBloodGroup.Text != "")
            {
                query = "SELECT * from DonorsDetails where bloodgroup Like  '" + txtBloodGroup.Text + "%'  ";
                DataSet ds = fn.getData(query);
                dataGridView1.DataSource = ds.Tables[0];

            }
            else
            {
                query = "SELECT * from DonorsDetails";
                DataSet ds = fn.getData(query);
                dataGridView1.DataSource = ds.Tables[0];

            }
        }


    }
}
