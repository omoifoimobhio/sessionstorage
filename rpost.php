<?php
//sessions
if(isset($_POST['Register'])){
    session_start();
    $_SESSION['FirstName'] = $_POST['FirstName'];
    $_SESSION['LastName'] = $_POST['LastName'];
    $_SESSION['Email'] = $_POST['Email'];

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
    <form action="<?php echo $_SERVER['PHP_SELF'] ?>" method="POST">
    <p>First Name: <input type="text" name="FirstName" value=""></p>
    <p>Last Name: <input type="text" name="LastName" value=""></p>
    <p>Email: <input type="text" name="Email" value=""></p>
    <input type="submit" name="Register" value="Register">


    </form>
</body>
</html>