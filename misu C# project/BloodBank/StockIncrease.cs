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
    public partial class StockIncrease : Form
    {
        String query;
        function fn = new function();
        public StockIncrease()
        {
            InitializeComponent();
        }

        private void label3_Click(object sender, EventArgs e)
        {

        }

        private void btnClose_Click(object sender, EventArgs e)
        {
            this.Close();
        }

        private void StockIncrease_Load(object sender, EventArgs e)
        {
            query = "SELECT blood_group,quantity from stock ";
            DataSet ds= fn.getData(query);
            dataGridView1.DataSource = ds.Tables[0];

        }

        private void dataGridView1_CellContentClick(object sender, DataGridViewCellEventArgs e)
        {

        }

        private void btnIncrease_Click(object sender, EventArgs e)
        {

            //query = "UPDATE Stock set quantity= quantity+ " + txtUnits.Text + "where blood_group =' " + txtBloodGroup.Text + " ' ";
            query = "UPDATE Stock SET quantity =quantity+" + txtUnits.Text + " WHERE blood_group = 'AB+'";

            fn.setDate(query);
            StockIncrease_Load(this,null);
            //UPDATE Stock SET quantity = 5 WHERE blood_group = AB+;

        }
    }
}
