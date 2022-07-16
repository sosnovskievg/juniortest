<!DOCTYPE html>
<html>
<head>
<link href="css/bootstrap.min.css" rel="stylesheet">
<link href="css\style.css" rel="stylesheet">
</head>
<body>
<header class="header">Product add
<div class="buttons" style="display:inline-block; float: right;" >
<input type= "submit" value="Save" form="product_form"  class="btn btn-primary btn-lg active">
<a href ="index.php"><input type= "submit" name = "cancel" value = "Cancel" class="btn btn-default btn-lg active""></a>
</div>
</header>             
        <script>
            function toggleFields() {
                var productType = document.getElementById('productType').value;
                var fields = document.querySelectorAll('[data-if-prod-type]');                
                fields.forEach(function (field) {
                    field.value= null;

                    if (field.dataset.ifProdType === productType) {
                        field.style.display = ''; 
                        field.required =true;                                         
                    } else {
                        field.style.display = 'none';
                        field.required =false; 

                    }
                });
            }
            document.addEventListener('DOMContentLoaded', function() {
                document.getElementById('productType').addEventListener('change', toggleFields);                
                toggleFields();
            });
        </script>
<br>
<div class="wrapper">
<main class="main">  
    <form method="post" action="insert.php" id="product_form" name="product_form" >
        <div class="add_product" id ="add_id">
        Id:  <input type="text" name ="sku" id="sku" value required class="form-control"> <br>
        Name: <input type="text" name ="name" id="name" value required class="form-control"> <br>
        Price ($)  <input type="number" name ="price" id="price" value required min ="0" step=0.01 class="form-control"> <br>
        <select id="productType" name="productType" class="form-control" >
            <option value="">Select Product Type</option>
            <option value="DVD">DVD</option>
            <option value="BOOK">Book</option>
            <option value="FUR">Furniture</option>
        </select>
        <br>
        <label data-if-prod-type="DVD">DVD Size</label>
        <input id="size" type="number" name="descriptionDVD" class="form-control" placeholder="Enter DVD Size" value=null data-if-prod-type="DVD" step="0.01"> 
        <label data-if-prod-type="BOOK">Book Weight</label>              
        <input id="weight"type="number" name="descriptionBook" class="form-control" placeholder="Enter Book Weight" value=null data-if-prod-type="BOOK" step="0.01">       
        <div data-if-prod-type="FUR"> 
         Height               
        <input id="height" type="number" name="height" class="form-control" placeholder="Enter Furniture Height" value=null data-if-prod-type="FUR" step="0.01">       
        Width
        <input id="width"type="number" name="width" class="form-control" placeholder="Enter Furniture Width" value=null data-if-prod-type="FUR"step="0.01">
        Length
        <input id="length"type="number" name="length" class="form-control" placeholder="Enter Furniture Length" value=null data-if-prod-type="FUR" step="0.01">
        </div>
        </div>
    </form>
</main>
</div>
<footer class="footer">Scandiweb Test asignment</footer>
</body>
</html>