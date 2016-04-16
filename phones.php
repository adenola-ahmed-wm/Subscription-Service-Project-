
<?php
$servername = "localhost";
$username = "root";
$password = "root";

try {
    $conn = new PDO("mysql:host=$servername;dbname=Subscription_Service", $username, $password);
    // set the PDO error mode to exception
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    echo "Connected successfully";
}
catch(PDOException $e)
{
    echo "Connection failed: " . $e->getMessage();
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Home</title>
    <link rel="stylesheet" type="text/css" href="stylesheet.css">
    <script src="../Subscription-Service-Project-/jquery-2.1.4.min.js"></script>
    ​
    <!-- Files for menu bar -->
    <script src="javascript.js" type="text/javascript"></script>
    <link rel="stylesheet" type="text/css" href="stylesheet.css"/>
</head>
<body>
<div style="z-index: 10" id='cssmenu'>
    <ul>
        <li class="active"><a href='index.php'><span>Home</span></a></li>
                <li class='has-sub'><a href='phones.php'><span>Phones</span></a></li>
            </ul>
</div>
​
<div id = bodyText>
    ​
</div>
<script src="../Subscription-Service-Project-/jquery-2.1.4.min.js"></script>
<table border="10px" align="center" bgcolor="white">

    <tr>
        <th>
            <img class="pic11" src="http://s.tmocache.com/content/dam/tmo/en-p/cell-phones/apple-iphone-6s/rose-gold/stills/browse-apple-iphone-6s-rose-gold.jpg/_jcr_content/renditions/cq5dam.web.280.280.jpeg" width="200px" height="200px">
            <p id="1">iPhone 6 plus</p>
            <button type="button" class="btn btn-success btn-sm"><span class="glyphicon glyphicon-shopping-cart"></span> Buy</button>
        </th>
        <th>
            <img class="pic21" src="http://s.tmocache.com/content/dam/tmo/en-p/cell-phones/samsung-galaxy-s-6-edge/black-sapphire/stills/browse-samsung-galaxy-s-6-edge-black-sapphire.jpg/_jcr_content/renditions/cq5dam.web.280.280.jpeg" width="200px" height="200px">
            <p id="2">Samsung Galaxy 6 edge</p>
            <button type="button" class="btn btn-success btn-sm"><span class="glyphicon glyphicon-shopping-cart"></span> Buy</button>

        </th>
        <th>
            <img class="pic31" src="http://s.tmocache.com/content/dam/tmo/en-p/cell-phones/lg-g4/metallic-gray/stills/browse-lg-g4-metallic-gray.jpg/_jcr_content/renditions/cq5dam.web.280.280.jpeg" width="200px" height="200px">
            <p id="3">LG G4</p>
            <button type="button" class="btn btn-success btn-sm"><span class="glyphicon glyphicon-shopping-cart"></span> Buy</button>

        </th>
    </tr>
    <tr>
        <th>
            <img class="pic41" src="http://s.tmocache.com/content/dam/tmo/en-p/cell-phones/htc-one-m9/gunmetal/stills/browse-htc-one-m9-gunmetal.jpg/_jcr_content/renditions/cq5dam.web.280.280.jpeg" width="200px" height="200px">
            <p id="4">HTC One M9</p>
            <button type="button" class="btn btn-success btn-sm"><span class="glyphicon glyphicon-shopping-cart"></span> Buy</button>

        </th>
        <th>
            <img class="pic51" src="http://s.tmocache.com/content/dam/tmo/en-p/cell-phones/lg-leon-lte/all/stills/browse-lg-leon-lte-all.jpg/_jcr_content/renditions/cq5dam.web.280.280.jpeg" width="200px" height="200px">
            <p id="5">LG Leon</p>
            <button type="button" class="btn btn-success btn-sm"><span class="glyphicon glyphicon-shopping-cart"></span> Buy</button>

        </th>
        <th>
            <img class="pic61" src="http://s.tmocache.com/content/dam/tmo/en-p/cell-phones/microsoft-lumia-435/all/stills/browse-microsoft-lumia-435-all.jpg/_jcr_content/renditions/cq5dam.web.280.280.jpeg" width="200px" height="200px">
            <p id="6">Microsoft Lumia 435</p>
            <button type="button" class="btn btn-success btn-sm"><span class="glyphicon glyphicon-shopping-cart"></span> Buy</button>

        </th>
    </tr>
    <tr>
        <th>
            <img class="pic71" src="http://s.tmocache.com/content/dam/tmo/en-p/cell-phones/zte-zmax/all/stills/browse-zte-zmax-all.jpg/_jcr_content/renditions/cq5dam.web.280.280.jpeg" width="200px" height="200px">
            <p id="7">ZTE ZMAX</p>
            <button type="button" class="btn btn-success btn-sm"><span class="glyphicon glyphicon-shopping-cart"></span> Buy</button>

        </th>
        <th>
            <img class="pic81" src="http://s.tmocache.com/content/dam/tmo/en-p/cell-phones/zte-avid-plus/all/stills/browse-zte-avid-plus-all.jpg/_jcr_content/renditions/cq5dam.web.280.280.jpeg" width="200px" height="200px">
            <p id =8>ZTE Avid Plus</p>
            <button type="button" class="btn btn-success btn-sm"><span class="glyphicon glyphicon-shopping-cart"></span> Buy</button>

        </th>
        <th>
            <img class="pic91" src="http://s.tmocache.com/content/dam/tmo/en-p/cell-phones/blackberry-priv/all/stills/browse-blackberry-priv-all.jpg/_jcr_content/renditions/cq5dam.web.280.280.jpeg" width="200px" height="200px">
            <p id="9">Blackberry PRIV</p>
            <button type="button" class="btn btn-success btn-sm"><span class="glyphicon glyphicon-shopping-cart"></span> Buy</button>

        </th>
    </tr>
</table>
<br><br>
<form method="post" action="">
    <input type="text" name="username" placeholder="Username"/>
    <input type="password" name="password" placeholder="Password"/>
    <input type="submit" name="login" value="LOGIN"/>
</form>
</body>
</html>