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
<?php

?>
<header>
    <h1>Phones</h1>
</header>
<!-- Each image is 350px by 233px -->
<div class="photobanner">
    <img class="first" src="http://s.tmocache.com/content/dam/tmo/en-p/cell-phones/apple-iphone-6s/rose-gold/stills/browse-apple-iphone-6s-rose-gold.jpg/_jcr_content/renditions/cq5dam.web.280.280.jpeg" alt="" />
    <img src="http://s.tmocache.com/content/dam/tmo/en-p/cell-phones/samsung-galaxy-s-6-edge/black-sapphire/stills/browse-samsung-galaxy-s-6-edge-black-sapphire.jpg/_jcr_content/renditions/cq5dam.web.280.280.jpeg" alt="" />
    <img src="http://s.tmocache.com/content/dam/tmo/en-p/cell-phones/lg-g4/metallic-gray/stills/browse-lg-g4-metallic-gray.jpg/_jcr_content/renditions/cq5dam.web.280.280.jpeg" alt="" />
    <img src="http://s.tmocache.com/content/dam/tmo/en-p/cell-phones/htc-one-m9/gunmetal/stills/browse-htc-one-m9-gunmetal.jpg/_jcr_content/renditions/cq5dam.web.280.280.jpeg" alt="" />
    <img src="http://s.tmocache.com/content/dam/tmo/en-p/cell-phones/lg-leon-lte/all/stills/browse-lg-leon-lte-all.jpg/_jcr_content/renditions/cq5dam.web.280.280.jpeg" alt="" />
    <img src="http://s.tmocache.com/content/dam/tmo/en-p/cell-phones/microsoft-lumia-435/all/stills/browse-microsoft-lumia-435-all.jpg/_jcr_content/renditions/cq5dam.web.280.280.jpeg" alt="" />
    <img src="http://s.tmocache.com/content/dam/tmo/en-p/cell-phones/zte-zmax/all/stills/browse-zte-zmax-all.jpg/_jcr_content/renditions/cq5dam.web.280.280.jpeg" alt="" />
    <img src="http://s.tmocache.com/content/dam/tmo/en-p/cell-phones/zte-avid-plus/all/stills/browse-zte-avid-plus-all.jpg/_jcr_content/renditions/cq5dam.web.280.280.jpeg" alt="" />
    <img src="http://s.tmocache.com/content/dam/tmo/en-p/cell-phones/blackberry-priv/all/stills/browse-blackberry-priv-all.jpg/_jcr_content/renditions/cq5dam.web.280.280.jpeg" alt="" />
</div>
<br><br>
<div>
    <?php
    getProducts($dbh);
    ?>
</div>
</body>
</html>
</body>
</html>
