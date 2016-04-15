<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
    "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title>Profile</title>
    <link rel="stylesheet" type="text/css" href="stylesheet.css" />
</head>
<body>
<?php
$dbh = new PDO('mysql:host=localhost;dbname=elvis_store', 'root', 'root');


$query = "INSERT INTO email_list (first_name, last_name, email)  VALUES (?, ?, ?)";

$first_name = $_POST['firstname'];
$last_name = $_POST['lastname'];
$email = $_POST['email'];

$stmt = $dbh->prepare($query);
$result = $stmt->execute(
    array($first_name, $last_name, $email)
);

echo 'Account Created.';

?>
​<?php
if (isset($_POST['submit'])) {
    $from = 'adminPhones.com';
    $subject = $_POST['subject'];
    $text = $_POST['elvismail'];
    $output_form = false;
    if (empty($subject) && empty($text)) {
        echo 'You forgot the email subject and body text.<br />';
        $output_form = true;
    }
    if (empty($subject) && (!empty($text))) {
        echo 'You forgot the email subject.<br />';
        $output_form = true;
    }
    if ((!empty($subject)) && empty($text)) {
        echo 'You forgot the email body text.<br />';
        $output_form = true;
    }
}
else {
    $output_form = true;
}
if ((!empty($subject)) && (!empty($text))) {
}
if ($output_form) {
    ?>



    ​
    <form method="post" action="addemail.php">
        <label for="firstname">First name:</label>
        <input type="text" id="firstname" name="firstname"/><br/>
        <label for="lastname">Last name:</label>
        <input type="text" id="lastname" name="lastname"/><br/>
        <label for="email">Email:</label>
        <input type="text" id="email" name="email"/><br/>
        <input type="submit" name="Submit" value="Submit"/>
    </form>
    <?php
}
?>
</body>
</html>