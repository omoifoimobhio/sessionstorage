<?php
//sessions
if(isset($_GET['Sign-In'])){
    session_start();
    $_SESSION['FirstName'] = $_GET['FirstName']. '<br />';
    $_SESSION['LastName'] = $_GET['LastName']. '<br />';
    $_SESSION['Email'] = $_GET['Email']. '<br />';

    echo $_SESSION['FirstName'];
    echo $_SESSION['LastName'];
    echo $_SESSION['Email'];
    

}
?>



<!DOCTYPE html>
<html>
<head>
    <title>Form Authentication</title>
</head>
<body>
    <form action="<?php echo $_SERVER['PHP_SELF'] ?>" method="GET">
    <p>First Name: <input type="text" name="FirstName" value=""></p>
    <p>Last Name: <input type="text" name="LastName"></p>
    <p>Email: <input type="text" name="Email"></p>
    <input type="submit" name="Sign-In" value="Sign-In">


    </form>
</body>
</html>
