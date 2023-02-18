<?php


        include 'includes/database.php';
        $db = mysqli_connect("localhost","root","","assign2");
        $name=$_POST["name"];
        $orgdet=$_POST["orgdet"];
        $date=$_POST["date"];

        $loc=$_POST["loc"];
        $sc=$_POST["sc"];
        $des=$_POST["des"];
 
        $query = "insert into evnt(name,orgdet,date,loc,sc,des) values('$name','$orgdet','$date','$loc','$sc','$des')";
        $result = mysqli_query($db,$query);
        echo "<h1> Book information is inserted successfully </h1>"
    ?>
<html>
<head>
<link rel="stylesheet" href="css/form.css">
<a href="profile.php"> <button> Get to HomePage</button> </a>
</head>
</html>