  <?php
            $con = mysqli_connect("localhost","root","","bestsofar");

          if($con === false){
            die("ERROR: Could not connect. " . mysqli_connect_error());
          }
          else{
            echo 'connected';
          }


           if(isset($_POST['submit'])){

            $username = mysqli_real_escape_string($con, $_REQUEST['emails']);
            $password = mysqli_real_escape_string($con, $_REQUEST['password']);

            $SQL = "SELECT * FROM userprofile
            WHERE email = '$username'"; //" and password = '$password'";

            $Cresults = mysqli_query($con, $SQL);

            if(mysqli_num_rows($Cresults) > 0){
                    echo "Successfully Logged in";
                      header("Location:about_us.php");
              }
              else
              {
                echo "Error", mysqli_error($con);
            }
            
  }
         ?>