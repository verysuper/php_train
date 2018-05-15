<!DOCTYPE HTML>
<html>
<head>
    <title>PDO - Create a Record - PHP CRUD Tutorial</title>
      
    <!-- Latest compiled and minified Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" />
          
</head>
<body>
  
    <!-- container -->
    <div class="container">
   
        <div class="page-header">
            <h1>Create Product</h1>
        </div>
      
    <!-- PHP insert code will be here -->
<?php
    if($_POST){
    
        // include database connection
        include 'config/database.php';
    
        try{        
            // insert query
            $query = "INSERT INTO products
                        SET name=:name, description=:description,
                            price=:price, image=:image, created=:created";
            
            // prepare query for execution
            $stmt = $con->prepare($query);
            
            $name=htmlspecialchars(strip_tags($_POST['name']));
            $description=htmlspecialchars(strip_tags($_POST['description']));
            $price=htmlspecialchars(strip_tags($_POST['price']));
            
            // new 'image' field
            $image=!empty($_FILES["image"]["name"])
                    ? sha1_file($_FILES['image']['tmp_name']) . "-" . basename($_FILES["image"]["name"])
                    : "";
            $image=htmlspecialchars(strip_tags($image));
            
            // bind the parameters
            $stmt->bindParam(':name', $name);
            $stmt->bindParam(':description', $description);
            $stmt->bindParam(':price', $price);
            $stmt->bindParam(':image', $image);
            
            // specify when this record was inserted to the database
            $created=date('Y-m-d H:i:s');
            $stmt->bindParam(':created', $created);
            
            // Execute the query
            if($stmt->execute()){
                // now, if image is not empty, try to upload the image
                if($image){
                
                    // sha1_file() function is used to make a unique file name
                    $target_directory = "uploads/";
                    $target_file = $target_directory . $image;
                    $file_type = pathinfo($target_file, PATHINFO_EXTENSION);
                
                    // error message is empty
                    $file_upload_error_messages="";
                    // make sure that file is a real image
                    $check = getimagesize($_FILES["image"]["tmp_name"]);
                    if($check!==false){
                        // submitted file is an image
                    }else{
                        $file_upload_error_messages.="<div>Submitted file is not an image.</div>";
                    }
                }
                echo "<div class='alert alert-success'>Record was saved.</div>";
            }else{
                echo "<div class='alert alert-danger'>Unable to save record.</div>";
            }
            
        }
        
        // show error
        catch(PDOException $exception){
            die('ERROR: ' . $exception->getMessage());
        }
    }
?>
    <!-- html form here where the product information will be entered -->
    <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="post" enctype="multipart/form-data">
        <table class='table table-hover table-responsive table-bordered'>
            <tr>
                <td>Name</td>
                <td><input type='text' name='name' class='form-control' /></td>
            </tr>
            <tr>
                <td>Description</td>
                <td><textarea name='description' class='form-control'></textarea></td>
            </tr>
            <tr>
                <td>Price</td>
                <td><input type='text' name='price' class='form-control' /></td>
            </tr>
            <tr>
                <td>Photo</td>
                <td><input type="file" name="image" /></td>
            </tr>
            <tr>
                <td></td>
                <td>
                    <input type='submit' value='Save' class='btn btn-primary' />
                    <a href='index.php' class='btn btn-danger'>Back to read products</a>
                </td>
            </tr>
        </table>
    </form>
          
    </div> <!-- end .container -->
      
<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
<script src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
   
<!-- Latest compiled and minified Bootstrap JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  
</body>
</html>