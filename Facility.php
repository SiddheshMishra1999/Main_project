<html>
<head> 
    <link rel="stylesheet" href="main.css">
</head>
<body>
<div class="navbar">
        <div class="container">
            <a class="logo" href="#">Comp 353 </a>

            <nav>
                <ul class="main-nav"> 
                    <li><a href="Index.php">Home</a></li>
                    <li ><a href="Person_display.php">Person</a></li>
                    <li><a href="Vaccine.php">Vaccines</a></li>
                    <li class="facility"><a href="Facility.php">Facilities</a></li>
                    <li><a href ="Workers.php">Workers</a></li>
                </ul>
                
            </nav>
        </div>
  </div>

</body>
</html>

<?php

include_once 'server.php';


$results = mysqli_query($db, $query_1);

echo "<table id = 'employee_table' class = 'employee_table' table border = '1'>

<th> Facility ID </th>
";

while($row = mysqli_fetch_array($results)) {

    echo "<tr>
    </tr>"; 
}

echo "</table>";

mysqli_close($db);



?>
