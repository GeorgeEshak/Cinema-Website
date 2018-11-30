<?php
function success() {
   echo '
        <script>
          if(confirm("Welcome in my cinema"))
             {
              window.location.href = "signin.html"
             }
         </script>';

}

function failed() {
   echo '
        <script>
          if(confirm("PLease enter anothor Mail"))
            {
                window.location.href = "signup.html"
            }
        </script>';
}
        
    $host="localhost";
    $user="root";  
    $pass="";
    $connection= mysqli_connect($host,$user,$pass,"Users");
   
        
             $Uname=$_GET['Uname'];	
             $mail=$_GET['mail'];
             $password=$_GET['pass'];

             
             $sql="insert into Uinfo values('$Uname','$mail','$password')";
         
            if (mysqli_query($connection,$sql))
               {
                 success();
               }
           else
               {
                 failed();
               }
    
    mysqli_close($connection);
?>
