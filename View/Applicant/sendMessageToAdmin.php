<?php
if ($_SERVER["REQUEST_METHOD"] == "POST"){
if($_POST['submit']){
  $notice = $_POST['sendmsg'];
  
  
  if ( $notice == "") {
    echo 'Write any  message to admin... go back to <a href="../View/SendMessageToAdmin.php">try again</a>';
  }
  else if(str_word_count($notice)<3){
    echo 'You need to post a correct sentence formate';
    echo '<br><a href="../View/SendMessageToAdmin.php">try again</a>';
  }
  
 
  else{
    
    $applicantSendM=[
                      'notice'=>$notice, 
                      
    ];
    $applicantSendMJson= json_encode( $applicantSendM );
    $jsonFile= fopen( "../Model/applicantMsg.json", "w" );
    fwrite($jsonFile , $applicantSendMJson);
    fclose($jsonFile);
    header('location: ../View/applicantdashBoard.html');
  }
}
}

?>






<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <title>Send ADMIN a Massage</title>
  <link rel="shortcut icon" href="../../assets/icon.png">
</head>
<body>
  <!-- ...............................Header Start....................... -->
  <form action="" onsubmit="return sendMassage()" >
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
            <a href="./applicantdashBoard.html">Dashboard</a>&nbsp;
            <a href="./applicantProfile.php">Profile</a>&nbsp;
            <a href="./notification.html">Notification</a>&nbsp;
            <a href="../../controller/logout.php">Logout</a>
          </td>
        </tr>
      </table>

    </fieldset>
    <!-- .................................Header Close..................... -->
    <!-- .................................Main Content..................... -->
    <fieldset>
      <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" >
        <fieldset>
        
            <legend><b>Send ADMIN a Massage</b></legend><br>
        
            <table align="center">


              <tr>
                <td>Write Your Massage in Details  :</td>
                <td><input type="text" id="sendmsg" name="sendmsg" size="80" >
              &nbsp;
              <span id="errsendmsg" style="color: red"></span> <!--For JS error message-->
              </td>
            </tr>
            

            <table align="center">
              <tr>
                <td>
                    <input type="submit" name="submit" id="submit" value="SEND">
                    <input type="reset" name="reset" id="reset" value="Clear">
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

  <script>
  function get(id)
  {
      return document.getElementById(id);
  }
  function sendMassage()
  {
      var sendmsg = get("sendmsg").value;
      
    
      var validate = true;
      if(sendmsg=="")
      {
          validate = false;
         get("errsendmsg").innerHTML="Please Enter Your massage";
          get("sendmsg").focus();
      }
      else
      {
          get("errsendmsg").innerHTML="";
      }

      return validate;

  }


</script>

</body>
</html>




