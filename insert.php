<?php

include "connection.php";
if(isset($_POST["sku"]) && isset($_POST["name"]) && isset($_POST["price"]))
{
    $id = $_POST["sku"];
    $name = $_POST["name"];
    $price = $_POST["price"];
    $type= $_POST["productType"];
    if ($_POST["descriptionDVD"]!=null)
    {
        $description = $_POST["descriptionDVD"];
    }
    elseif($_POST["descriptionBook"]!=null)
    {
        $description = $_POST["descriptionBook"];
    }
    else
    {   
        $description= $_POST["width"]."x".$_POST["height"]."x".$_POST["length"];
    }
}

$sql = "Insert into table1 (id,name,price,description,type) Values ('$id','$name',$price,'$description','$type');";

if($link->query($sql)){

header("Location: index.php");
}
else{
    
header("Location: add.php");
}


?>