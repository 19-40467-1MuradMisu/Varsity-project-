<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <title>Forgot Password</title>
  <link rel="shortcut icon" href="../../assets/icon.png">
</head>
<body>
  <!-- ...............................Header Start....................... -->
  
    <fieldset>
      <table align="center">
        <tr>
          <td>
            <img src="../../assets/imgpsh_fullsize.png" alt="" srcset=""width="200" height="80">
          </td>
          
        </tr>
      </table>
      <table align="center">
        <tr>
          <td>
            <a href="./employeeDashboard.php">Dashboard</a>&nbsp;
            <a href="./viewProfile.php">Profile</a>&nbsp;
            <a href="./employeeNotification.php">Notification</a>&nbsp;
            
          </td>
        </tr>
      </table>
      <table align="right">
          <tr>
              <td>
                <a href="../../controller/logout.php">Logout</a>
              </td>
          </tr>

      </table>
    </fieldset>
    <!-- .................................Header Close..................... -->
    <!-- .................................Main Content..................... -->
    <fieldset>
      <form method="post" action="employeeForgotPassword.php" >
        <fieldset>
        
            <legend><b>Donner Forgot Password</b></legend><br>
        
          

            
            <hr><br>
            <label>Enter Your Active Email Address to recover Password </label>
            <br>
            <label>Email :  </label>
            <input type="text" id="email" name="email" onekeup="validation()"><input type="submit" value="Enter Email" name="EnterEmail">
        
            
            
            
        </fieldset>
        </form>
    </fieldset>
    <fieldset>
    <!-- .................................Main Content..................... -->
    <!-- .................................Footer Start..................... -->
    <fieldset>
      <p align="center">Copyright &#169;2021</p>
    </fieldset>
  </form>
  <!-- .................................Footer Close..................... -->
 <!-- js code goes here -->
 <script>
  function validation() {
    var email, msg;
  
   
    email = document.getElementById("email").value;
    emailCheck = "@gmail.com"
    
    if (email.match(emailCheck)) {
      msg = "";
    } 
    else{
      msg = "email formate should be: info@gmail.com"   
    }
    

    document.getElementById("emailerorr").innerHTML = msg;
  }
  
  
  </script>
</body>
</html>