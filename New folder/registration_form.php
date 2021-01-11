<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Registration Form with PHP</title>
</head>
 
<body>

<?php

    if($_SERVER['REQUEST_METHOD']=='POST'){
        
        extract($_POST);

        if((strlen($name)>=4 && strlen($name)<=8)) {
            echo "<h3>Name : $name</h3>";
        } else {
            echo "<h3>You have to put minimun 4 and maximu 8 character long password</h3>";
        }
        
        if(filter_var($email, FILTER_VALIDATE_EMAIL)==true){
            echo "<h3 class='valid'>Email :$email</h3>";
        } else {
             
            echo "<h3 class='invalid'>You have put an invalid  Email address</h3>";    
        }

    }
?>   
<form method="post" action="">
<p><input type="text" name="name" placeholder="Put your name"></p>
<p><input type="text" name="email" placeholder="Put email address"></p>

<input type="submit" name="submit" value="REGISTER">
</form>
</body>
</html>