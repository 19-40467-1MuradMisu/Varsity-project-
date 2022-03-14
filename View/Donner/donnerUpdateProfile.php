<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  
  <title>Update Profile|FundBD</title>
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
  <form method="post" action="../../controller/Donner/donnerUpdateProfileCheck.php" >
    <fieldset>
    
        <legend><b>Donner Profile Update</b></legend><br>
    
  
        <label>Name : </label>
        <input type="text" id="name" name="name" ><br>
        <hr><br>

        <label>Address : </label>
        <input type="text" id="address" name="address" ><br>
        <hr><br>
    
        <label>Email :</label>
        <input type="text" id="email" name="email" ><br>
        <hr><br>
    
        <label>User Name : </label>
        <input type="text" id="uname" name="username" ><br>
        <hr><br>
    
        <label>Password :  </label>
        <input type="password" id="pword" name="password" ><br>
        <hr><br>
    
        <label>Confirm Password : </label>
        <input type="password" id="conpword" name="confirmPassword" ><br>
        <hr><br>
    
        <label>Occupation :</label>
        <input type="text" id="occupation" name="occupation" ><br>
        <hr><br>
    
       
    
        <fieldset>
    
        <legend>Gender</legend>
    
        
    
        <input type="radio" name="gender" value="Male">
        <label class="male">Male</label>
    
        <input type="radio" name="gender" value="Female">
        <label class="female">Female</label>
    
        <input type="radio" name="gender" value="Other">
        <label class="other">Other</label>
    
        </fieldset>
    
        <hr>
    
    
    
    <fieldset>
    
    <legend>Date Of Birth</legend>
    
    
    
    <input type="text" id="date" name="date" size="5"> /
    <input type="text" id="month" name="month" size="5"> /
    <input type="text" id="year" name="year" size="6"><i> (dd/mm/yyyy)</i>
    
    
    </fieldset>
    
    
    
        <hr>
		<fieldset>
    
        <legend>Yearly Income</legend>
    
        
    
        <input type="radio" name="Yearly Income" value="Below 10000">
        <label class="Below 10000">Below 10000</label>
    
        <input type="radio" name="Yearly Income" value="10000 to 50000">
        <label class="10000 to 50000">10000 to 50000</label>
    
        <input type="radio" name="Yearly Income" value="More Than 50000">
        <label class="More Than 100000">More Than 100000</label>
    
        </fieldset>
    
        <hr>
    
        <input type="submit" name="submit" id="submit" value="Update">
        
       
    </fieldset>
    </form>
</fieldset>
<fieldset>
    <!-- .................................Main Content..................... -->

    <!-- .................................Footer Start..................... -->
    <fieldset>
      <p align="center">Copyright	&#169;2021</p>
    </fieldset>
    <!-- .................................Footer Close..................... -->
  </form>

</body>
</html>