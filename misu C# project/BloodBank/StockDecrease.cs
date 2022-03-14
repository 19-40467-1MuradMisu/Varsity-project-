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
    public partial class StockDecrease : Form
    {
        function fn = new function();
        String query;
        public StockDecrease()
        {
            InitializeComponent();
        }

        private void StockDecrease_Load(object sender, EventArgs e)
        {
            query = "SELECT blood_group,quantity from Stock";
            DataSet ds = fn.getData(query);
            dataGridView1.DataSource = ds.Tables[0];
        }

        private void btnIncrease_Click(object sender, EventArgs e)
        {
            query = " update Stock set quantity= quantity " + txtUnits.Text + "where blood_group = '" + txtBloodGroup.Text + "'  ";
            fn.setDate(query);
            StockDecrease_Load(this, null);
        }

        private void btnClose_Click(object sender, EventArgs e)
        {
            this.Close();
        }
    }
}
