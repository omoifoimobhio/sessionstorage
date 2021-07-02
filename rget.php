<?php
//sessions
if(isset($_GET['Register'])){
    session_start();
    $_SESSION['FirstName'] = $_GET['FirstName'];
    $_SESSION['LastName'] = $_GET['LastName'];
    $_SESSION['Email'] = $_GET['Email'];

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
    <p>Last Name: <input type="text" name="LastName" value=""></p>
    <p>Email: <input type="text" name="Email" value=""></p>
    <input type="submit" name="Register" value="Register">


    </form>
</body>
</html>