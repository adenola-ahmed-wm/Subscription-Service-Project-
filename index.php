<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
    "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title>Subscribe</title>
    <link rel="stylesheet" type="text/css" href="stylesheet.css" />
    <script src="javascript.js" type="text/javascript"></script>
    <link rel="stylesheet" type="text/css" href="stylesheet.css"/>
</head>

<body>
<div style="z-index: 10" id='cssmenu'>
    <ul>
        <li class="active"><a href='index.php'><span>Home</span></a></li>
        <li style="float: right;"><a href='Sign%20Up.php'><span>Sign Up</span></a></li>
    </ul>
</div>
​
<div id = bodyText>
    ​
</div>
<?php
if(isset($_POST['submit'])) {
    $dbh = new PDO('mysql:host=localhost;dbname=Subscription_Service', 'root', 'root');
    $query = "INSERT INTO Subscribe (first_name, last_name, email)  VALUES (?,?,?)";

    $first_name = $_POST['firstname'];
    $last_name = $_POST['lastname'];
    $email = $_POST['email'];

    $stmt = $dbh->prepare($query);
    $result = $stmt->execute(
        array($first_name, $last_name, $email)
    );
}
?>

<form action="" method="post">
    <label for="firstname">First name:</label>
    <input type="text" id="firstname" name="firstname" /><br />
    <label for="lastname">Last name:</label>
    <input type="text" id="lastname" name="lastname" /><br />
    <label for="email">Email:</label>
    <input type="text" id="email" name="email" /><br />
    <input type="submit" name="submit" value="Submit" />
</form>

<?php

?>

</body>
</html>
