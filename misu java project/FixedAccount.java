public class FixedAccount extends Account 
{
	private int tenureYear ;
   public void setTenureYear(int tenureYear)
   {
	   this.tenureYear=tenureYear;
	   super.setAccountNumber( accountNumber);
	   super.setBalance(balance);
   }   
 public int getTenureYear( ) 
 {
	 return tenureYear;
 }
 public  void showInfo( ) 
 {
	 System.out.println("AccountNumber:"+accountNumber);
	  System.out.println("Balance:"+balance);
	   System.out.println("Tenureyear:"+tenureYear);
 }
 
}