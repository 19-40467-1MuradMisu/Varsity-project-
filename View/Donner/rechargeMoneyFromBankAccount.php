<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  
  <title>Recharge Money From BANK-ACCOUNT|FoundBD</title>
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
          <!-- ...............................Header Close....................... -->



          <!-- .................................Main Content..................... -->
    <fieldset>
  <form method="post" action="../../controller/Donner/donnerRechargeMoneyCheck.php" >
    <fieldset>
    
        <legend><b> Recharge Money From Bank Account </b></legend><br>
    
  
        <table align="center">
          <tr>
          <td>Enter Your Bank Account no  :</td>
                <td><input type="text" id="daccno" name="daccno" ></td>
          </tr>
          <tr>
                <td>Enter OTP :</td>
                <td><input type="text" id="otp" name="otp" ></td>
          </tr>
          <tr>
                <td>Enter Ammount :</td>
                <td><input type="text" id="amount" name="amount" ></td>
               
          </tr>
        </table> 
        <hr><br>
        <table align="center">
          <tr>
            <td>
              <input type="submit" name="conf" id="conf" value="Confirm">
             
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
    <!-- .................................Footer Close..................... -->
  </form>

</body>
</html>