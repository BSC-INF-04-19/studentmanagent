<?php

session_start();

if(!isset($_SESSION['username']))

{
    header("location:login.php");
}

elseif($_SESSION['usertype']=='admin');
{
    header("location:login.php");
}

?>

<!DOCTYPE html>
<html>
    <meta charset="utf-8">
    <title>Student Dashboard</title>
</head>
<body>

<h1>Student home</h1>
<a href="logout.php">Logout</a>

</body>
</html>