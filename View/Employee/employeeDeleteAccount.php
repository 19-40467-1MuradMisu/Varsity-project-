<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <title>Delete Account|FoundBD</title>
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
      <form method="post" action="../../controller/Employee/employeeDeleteAccountCheck.php" >
        <fieldset>
        
            <legend><b>Employee Account Deactivation</b></legend><br>
        
            <table align="center">


              <tr>
                <td>User name :</td>
                <td><input type="text" id="uname" name="username" ></td>
            </tr>
            <tr>
                <td>Password :</td>
                <td><input type="password" id="password" name="password" ></td>
            </tr>
           
            </table>
            <hr><br>

            <table align="center">
              <tr>
                <td><input type="submit" name="delete" id="delete" value="Delete">
                  <input type="submit" name="cancel" id="cancel" value="Cancel">
                </td>
              </tr>
    
            </table> 
          
        </fieldset>
        </form>
    </fieldset>
    <!-- .................................Main Content..................... -->
    <!-- .................................Footer Start..................... -->
    <fieldset>
      <p align="center">Copyright	&#169;2021</p>
    </fieldset>
  </form>
  <!-- .................................Footer Close..................... -->

</body>
</html>