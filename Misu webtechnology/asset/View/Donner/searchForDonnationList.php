<!DOCTYPE html>
<html lang="en">
<head>


  <title>Search For Donnation List|FoundBD</title>
  <link rel="shortcut icon" href="../../assets/icon.png">

  <script type="text/javascript" src="../JS/donner/dondata.js"></script>

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
      <form method="post" action="../../controller/Donner/searchForDonnationList.php" >
        <legend><b><h3>Donner Donation Details</h3></b></legend><br>
        <br>
        <div align="center">
        <input type="button" value="See All donners" class="alldonner" id="alldonner" name="dondata" onclick="ajax(); ">
        </div>
        
        <br>
        <br>
        <div class="result" id="result" align="center"></div>
        <br><br>
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