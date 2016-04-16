<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
"http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title>Make Me Elvis - Send Email</title>
    <link rel="stylesheet" type="text/css" href="stylesheet.css" />
</head>
<body>

<p><strong>Private:</strong> For Elmer's use ONLY<br />
    Write and send an email to mailing list members.</p>
<?php
//make the check for whether or not the user actually submitted a form
if (isset($_POST['submit'])) {
    $from = 'Phonesadmin.com';
    $subject = $_POST['subject'];
    $text = $_POST['elvismail'];
    //set the initial value of the flag
    $output_form = false;
//add the form validation using if/else statements
//clean up nested if statements using comparison operators
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
//else statement which will display the form
else {
    $output_form = true;
}
if ((!empty($subject)) && (!empty($text))) {
}
if ($output_form) {
    ?>
    <!--after the form display is pasted, change the action to be self-referencing-->
    <!--use $_POST superglobal to pre-populate the form-->
    <form method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">
        <label for="subject">Subject of email:</label><br />
        <input id="subject" name="subject" type="text" value="<?php echo $subject?>" size="30" /><br />
        <label for="elvismail">Body of email:</label><br />
        <textarea id="elvismail" name="elvismail" rows="8" cols="40"><?php echo $text?></textarea><br />
        <input type="submit" name="submit" value="Submit" />
    </form>
    <?php
}
//converted all mysqli to PDO
$dbh = new PDO('mysql:host=localhost;dbname=Subscription_Service', 'root', 'root');
$query = "SELECT * FROM Subscribe";
$stmt = $dbh->prepare($query);
$result = $stmt->execute();
// Change this to a for each loop
while ($row = mysqli_fetch_array($result)){
    $to = $row['email'];
    $first_name = $row['first_name'];
    $last_name = $row['last_name'];
    $msg = "Dear $first_name $last_name,\n$text";
    mail($to, $subject, $msg, 'From:' . $from);
    echo 'Email sent to: ' . $to . '<br />';
}
?>
</body>
</html>
