<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Change profile pic|FundBD</title>
  <link rel="shortcut icon" href="../../assets/icon.png">
</head>
<body>
  <!-- ...............................Header Start....................... -->
    <form action=""  onsubmit="return v2()" >
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
              <a href="./donnerDashboard.php">Dashboard</a>&nbsp;
              <a href="./viewProfile.php">Profile</a>&nbsp;
              <a href="./donnerNotification.php">Notification</a>&nbsp;
              
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
      
        <form method="POST" action="">
          <fieldset >
            <legend> <b>CHANGE Profile Picture </b></legend>
              <table align="center">
                <tr>
                  <td>
                    <input type="file" id="img" name="img" accept="image/*">
                    
                  </td>
                  <td>
                    <input type="submit" value="Upload" name="submit">
                  </td>
                </tr>

              </table>

            
          </fieldset>
        </form>
     
        
      
       
    </fieldset>
    <!-- .................................Main Content..................... -->
    <!-- .................................Footer Start..................... -->
    <fieldset>
      <p align="center">copyright &#169;2021</p>
    </fieldset>
    </form>

    <!-- .................................Footer Close..................... -->

 

</body>
</html>