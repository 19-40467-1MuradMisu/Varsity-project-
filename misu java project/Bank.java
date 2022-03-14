import java.io.File;
 import java.util.Scanner;
 import java.util.Formatter;
 import java.io.FileNotFoundException;
import java.util.*; 
 
public class Bank extends  Employee implements CustomerOperations ,EmployeeOperations    //extends  Employee
{
	private Customer customers[ ];
	
	private  Employee employees[ ];
	
	{
	            File dir =new File ("E:/4th semester/java -1/final/project/misu java project/misu java project/mainFile");
				dir.mkdir();
				File file1=new File("E:/4th semester/java -1/final/project/misu java project/misu java project/mainFile/Customer.text");
				File file2 =new File("E:/4th semester/java -1/final/project/misu java project/misu java project/mainFile/Employee.text");
				try{
					file1.createNewFile();
					file2.createNewFile();
				}catch(Exception e)
				{
					System.out.println (e);
				}
	}
	Scanner sin=new Scanner(System.in);
	
	public void insertCustomer(Customer c)
	{   
		
		try{
					Formatter ob5 =new Formatter("/E:/4th semester/java -1/final/project/misu java project/misu java project/mainFile/Customer.text");
					{
					System.out.println("how many customers:");
					 int num=sin.nextInt();
					 for(int m=0;m<=num;m++)
					 {
						 System.out.println("Enter customer name  ");
						String name=sin.next();
						 System.out.println("Enter customer id  ");
						 int nid=sin.nextInt();
						 ob5.format("%s %s\r\n",name,nid);  
					 }
					 ob5.close();
					 }
		}
				     catch(FileNotFoundException e)
				{
					System.out.println(e);
				}
	}
	public void removeCustomer(Customer c)
	{      int nid =c.nid;
	     try{
			
			    Set<String> set = new HashSet<String>(); 
			   
            
                Formatter ob5 =new Formatter("/E:/4th semester/java -1/final/project/misu java project/misu java project/mainFile/Customer.text");				
				
                set.remove(ob5);
              
				} 
				catch (Exception e)
					{
						System.out.println(e);
					}
	}
	
	public Customer getCustomer(int nid)
	{    
	Customer ob3 = new Customer();
	ob3.nid=nid;
	
		return ob3;
	}
	
	
	public void showAllCustomers( )
	{
		try{
					File file3=new File("/E:/4th semester/java -1/final/project/misu java project/misu java project/mainFile/Customer.text");
					Scanner scanner=new Scanner(file3);
					while (scanner.hasNext()){
						String name=scanner.next();
						int nid=scanner.nextInt();
						
						System.out.println("Name:"+name+"id:"+nid);
					}
		    }
					catch (FileNotFoundException e)
					{
						System.out.println(e);
					}
	}
				

					
	public void insertEmployee(Employee e)
					
	{
	           try{
					Formatter ob9 =new Formatter("/E:/4th semester/java -1/final/project/misu java project/misu java project/mainFile/Employee.text");
					{
					System.out.println("how many Employee:");
					 int num=sin.nextInt();
					 for(int m=0;m<=num;m++)
					 {
						 System.out.println("Enter Employee name  ");
						String name=sin.next();
						 System.out.println("Enter Employee empId  ");
						 int empId=sin.nextInt();
						 System.out.println("Enter Employee salary:");
						 double salary=sin.nextDouble();
						 ob9.format("%s %s %s\r\n",name,empId,salary);  
					 }
					 ob9.close();
					 }
		            }
				     catch(FileNotFoundException excMsg)
				               {
					                 System.out.println(excMsg);
				                }
			
	}
	public void removeEmployee(Employee e)
	{
		 try{
			
			Set<String> set = new HashSet<String>(); 
			   
            
                Formatter ob9 =new Formatter("/E:/4th semester/java -1/final/project/misu java project/misu java project/mainFile/Employee.text");				
				
                set.remove(ob9);
              
				} 
				catch (Exception excMsge)
					{
						System.out.println(excMsge);
					}
				
	}
	public Employee getEmployee(String empId)
	{
		Employee ob3 = new Employee();
	ob3.empId=empId;
	
		return ob3;
	}
	public void showAllEmployees( ) 
	{
		      try{
					File file10=new File("/E:/4th semester/java -1/final/project/misu java project/misu java project/mainFile/Employee.text");
					Scanner scanner=new Scanner(file10);
					while (scanner.hasNext())
					{
						String name=scanner.next();
						String empId=scanner.next();
						double salary=scanner.nextDouble();
						
						System.out.println("Name:"+name+"empId:"+empId+"salary"+salary);
					}
		         }
					catch (FileNotFoundException e)
					        {
						        System.out.println(e);
					        }
	}
	
    
}