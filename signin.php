<?php
session_start();
function success() {
   echo '
        <script>
          if(confirm("Do u want to continue?"))
             {
              window.location.href = "index.php"
             }
         </script>';

}

function failed() {
   echo '
        <script>
          if(confirm("wrong email or password"))
            {
                window.location.href = "signin.html"
            }
        </script>';

}
    include('config.php');
   
        if(isset($_GET['mail']))
        {
             $email=$_GET['mail'];
             $password=$_GET['pass'];
        
             $q="select * from Uinfo where Email='".$email."' AND Password='".$password."'limit 1";
             $sql=mysqli_query($connection,$q);
         
         if (mysqli_num_rows($sql)==1)
         {
			 $_SESSION['email'] = $email;
            success();
         }
         else{
            failed();
         }
        }
        
        
       
    
    mysqli_close($connection);
?>


