<!DOCTYPE html>
<html>
<head>
<link href="css/style.css" rel="stylesheet">
<link href="css/bootstrap.min.css" rel="stylesheet">
<meta charset="utf-8" />
</head>
<title>Scandiweb</title>
<body>
<div class="wrapper">
<header class="header" style="display:inline-block;" >Product List
<div class="buttons" style="display:inline-block; float: right;">
<button id ='ADD' name='ADD' value='ADD' margin-left: 90%  class="btn btn-primary btn-lg active" onclick="window.location.href='add.php'">ADD</button>
<button form="idform" name="delete-product-btn" id="delete-product-btn" value="MASS DELETE" class="btn btn-default btn-lg active">MASS DELETE</button>
</div>
</header>
<main class="main"> 
<?php
include 'connection.php';
$sql = "select * from table1";
    if ($result = $link->query($sql)){
        $rowsCount = $result->num_rows;
        echo '<div> <form action="delete.php" method="post" id="idform">';
        foreach($result as $row){
           echo '<div class="product">';
           echo '<input type="checkbox" name="divcheckboxes[]" class ="delete-checkbox" id= "checkboxes"  value='.$row["id"]."  >";
           echo "<br>".$row["id"];
           echo "<br>".$row["name"];
           echo "<br>".$row["price"]." $";          
           if ($row[type]=="DVD"){
               echo "<br>"."Size:".$row["description"]." MB";  }   
            elseif ($row[type]=="BOOK"){
               echo "<br>"."Weight:".$row["description"]." KG";  } 
            elseif ($row[type]=="FUR"){
               echo "<br>"."Dimension:".$row["description"];  }  
        echo"</div>";        
        }

}
?>
</main>
<footer class="footer">Scandiweb Test asignment</footer>
</div>
</body>
</html>