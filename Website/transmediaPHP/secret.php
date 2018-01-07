<?php
    require("config.php");
    if(empty($_SESSION['user'])) 
    {
        header("Location: index.php");
        die("Redirecting to index.php"); 
    }
?>
<body background="logo.png" >
<h3>IF you see this charles, your PHP login works </h3>
<a href="logout.php"><button>Logout</button></a>
</body>





