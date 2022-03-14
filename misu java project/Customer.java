import java.io.File;
 import java.util.Scanner;
 import java.util.Formatter;
 import java.io.FileNotFoundException;
import java.util.*; 
 public class Customer  extends Bank  implements AccountOperations
{
	protected String name;
	protected  int nid ;
	protected  Account accounts[ ];
	{
	            File dir =new File ("/C:/Java_final_project/mainFile");
				dir.mkdir();
				File file3=new File("/E:/4th semester/java -1/final/project/misu java project/misu java project/mainFile/Account.text");
				
				try{
					file3.createNewFile();
					
				}catch(Exception e)
				{
					System.out.println (e);
				}
	}
	Scanner sin=new Scanner(System.in);
	

	
	
	public void setName(String name)
	{  
    
	
	 this.name=name;
		
	
	}
	public void setNid(int nid)
	{
		this.nid=nid;
	}
	public String getName( )
	{
		return name;
	}
	public int getNid( ) 
	{
		return nid;
	}
	public void insertAccount(Account a)
	{
		try{
					Formatter ob6 =new Formatter("/E:/4th semester/java -1/final/project/misu java project/misu java project/mainFile/Account.text");
					{
					System.out.println("how many Account:");
					 int num=sin.nextInt();
					 for(int m=0;m<=num;m++)
					 {
						 System.out.println("Enter customer Accountnumber  ");
						String accountNumber=sin.next();
						 System.out.println("Enter customer Balance ");
						 double balance=sin.nextDouble();
						 ob6.format("%s %s\r\n",accountNumber,balance);  
					 }
					 ob6.close();
					 }
		}
				     catch(FileNotFoundException e)
				{
					System.out.println(e);
				}
		
	}	
	public void removeAccount(Account a) 
	{
	  try{
			
			Set<String> set = new HashSet<String>();  
                Formatter ob6 =new Formatter("/E:/4th semester/java -1/final/project/misu java project/misu java project/mainFile/Account.text");				
				
                set.remove(ob6);
              
				} 
				catch (Exception e)
					{
						System.out.println(e);
					}
					
	}
	public Account getAccount(int accountNumber)
	{    Account accounts[ ]=new Account[0]; 
	   accounts[0].accountNumber=accountNumber;
	
		return accounts[0];
	}
	public void showAllAccounts( ) 
	{
		try{
					File file4=new File("/E:/4th semester/java -1/final/project/misu java project/misu java project/mainFile/Account.text");
					Scanner scanner=new Scanner(file4);
					while (scanner.hasNext()){
						String accountNumber=scanner.next();
						double balance=scanner.nextDouble();
						
						System.out.println("Accountnumber:"+accountNumber+"Balance:"+balance);
					}
		    }
					catch (FileNotFoundException e)
					{
						System.out.println(e);
					}
				
	}
	
	
	
	
}
