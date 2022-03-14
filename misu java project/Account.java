public  abstract class Account  implements ITransactions
{
    protected int accountNumber ;
    protected double balance; 
	
    public void setAccountNumber(int accountNumber)
	{
		this.accountNumber=accountNumber;
	}
   public void setBalance(double balance)
  {
	  this.balance=balance;
  }
   public int getAccountNumber( )
  {
	  return accountNumber;
  }
   public double getBalance( )
  {
	  return balance;
  }
   public void deposit(double amount)
   {
	    if(amount>0){
			this.balance +=amount; 
			
		}else{
			System.out.println("Invalid Deposit");
		
		}
   }
	public void withdraw(double amount) 
	{
		if(balance>=amount && amount>0){
			this.balance -=amount; 
			System.out.println(balance);
		}else{
			System.out.println("Empty  Withdraw");
		
		}   
	}
	public void transfer(Account a, double amount) 
	{
	  if(balance>=amount && amount>0){
		  this.withdraw( amount);
			a.deposit(amount);
		}else{	
			System.out.println("Invalid Transfer");
		}			
	}
    public abstract void showInfo( ) ;	
}