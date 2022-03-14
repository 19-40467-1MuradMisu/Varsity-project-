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
    public partial class Dashboard : Form
    {
        public Dashboard()
        {
            InitializeComponent();
        }

        private void logOutToolStripMenuItem_Click(object sender, EventArgs e)
        {
            Form1 fm = new Form1();
            fm.Show();
            this.Hide(); 
        }

        private void addNewDonorsToolStripMenuItem_Click(object sender, EventArgs e)
        {
            AddNewDonor and = new AddNewDonor();
            and.Show();
        }

        private void Dashboard_Load(object sender, EventArgs e)
        {

        }

        private void updateDetailsToolStripMenuItem_Click(object sender, EventArgs e)
        {
            UpdateDonorsDetails udd = new UpdateDonorsDetails();
            udd.Show();
        }

        private void allDonorsToolStripMenuItem_Click(object sender, EventArgs e)
        {
            AllDonorDetails add = new AllDonorDetails();
            add.Show();
        }

        private void locationToolStripMenuItem_Click(object sender, EventArgs e)
        {
            SearchBloodDonorAddress sba = new SearchBloodDonorAddress();
            sba.Show();
        }

        private void bloodGroupToolStripMenuItem_Click(object sender, EventArgs e)
        {
            SearchBloodDonorByGroup sbd = new SearchBloodDonorByGroup();
            sbd.Show();
        }

        private void increaseToolStripMenuItem_Click(object sender, EventArgs e)
        {
            StockIncrease si = new StockIncrease();
            si.Show();
        }

        private void decreaseToolStripMenuItem_Click(object sender, EventArgs e)
        {
            StockDecrease sd = new StockDecrease();
            sd.Show();
        }

        private void detailsToolStripMenuItem_Click(object sender, EventArgs e)
        {
            StockDetails st = new StockDetails();
            st.Show();
        }

        private void deleteDonorToolStripMenuItem1_Click(object sender, EventArgs e)
        {
            DeleteDonor dd = new DeleteDonor();
            dd.Show();
        }
    }
}
