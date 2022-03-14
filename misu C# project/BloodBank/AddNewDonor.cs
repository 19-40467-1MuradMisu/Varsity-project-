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
    public partial class AddNewDonor : Form
    {
        function fn = new function();
        public AddNewDonor()
        {
            InitializeComponent();
        }

        
        private void btnClose_Click(object sender, EventArgs e)
        {
            this.Close();
        }

        private void AddNewDonor_Load(object sender, EventArgs e)
        {
            String query = " SELECT MAX(did) FROM DonorsDetails ";
            DataSet ds = fn.getData(query);
            int count = int.Parse(ds.Tables[0].Rows[0][0].ToString());
            labelNewId.Text = (count+1).ToString();
        }

        private void button1_Click(object sender, EventArgs e)
        {
            if (txtName.Text!= "" && txtFather.Text!="" && txtMother.Text != "" && txtMobile.Text!="" && txtMobile.Text!="" && txtGender.Text!="" && txtEmail.Text!="" && txtBloodGroup.Text != "" && txtEmail.Text != "" && txtCity.Text != "" && txtAddress.Text != "" )
            {
                String dname = txtName.Text;
                String fname = txtName.Text;
                String mname = txtMother.Text;
                String dob = txtDOB.Text;
                Int64 mobile = Int64.Parse(txtMobile.Text);
                String gender = txtGender.Text;
                String email = txtEmail.Text;
                String bgroup = txtBloodGroup.Text;
                String city = txtCity.Text;
                String address = txtAddress.Text;

                String query = "INSERT into DonorsDetails (dname, fname, mname, dob,mobile,gender,email,bloodgroup,city,daddress) values ('"+dname+"', '"+fname+"','"+mname+ "','"+dob+"',"+mobile+ ",'"+gender+ "','"+email+ "', '"+bgroup+ "','"+city+ "','"+address+"')";
                fn.setDate(query);

                txtName.Clear();
                txtFather.Clear();
                txtMother.Clear();
                txtDOB.ResetText();
                txtMobile.Clear();
                txtGender.ResetText();
                txtEmail.Clear();
                txtBloodGroup.ResetText();
                txtCity.Clear();
                txtAddress.Clear();
            }
            else
            {
                MessageBox.Show("Fill all the fields", "Error", MessageBoxButtons.OK, MessageBoxIcon.Error);
            }
        }

        private void button2_Click(object sender, EventArgs e)
        {
            txtName.Clear();
            txtFather.Clear();
            txtMother.Clear();
            txtDOB.ResetText();
            txtMobile.Clear();
            txtGender.ResetText();
            txtEmail.Clear();
            txtBloodGroup.ResetText();
            txtCity.Clear();
            txtAddress.Clear();

        }

        private void labelNewId_Click(object sender, EventArgs e)
        {

        }
    }
}
