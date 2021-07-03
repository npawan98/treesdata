<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="main.css">
    <title>Trees Data</title>
</head>
<body style="margin:25px" class="main">

    <form action="" method="post" id="form">
   <center><h1 class="heading">Tree Details</h1></center> 
        <div class="form-group">
            <label for="text">Scientific name</label>
            <input type="text" class="form-control" name="Scientific_name">
        </div>
        <div class="form-group">
            <label for="text">Common name</label>
            <input type="text" class="form-control" name="Common_name">
        </div>
        <div class="form-group">
            <label for="text">Family name </label>
            <input type="text" class="form-control" name="Family_name">
        </div>
        <div class="form-group">
            <label for="text">Kannada name</label>
            <input type="text" class="form-control" name="Kannada_name">
        </div>
        <div class="form-group">
            <label for="text">Age</label>
            <input type="number" class="form-control" name="Age">
        </div>
        <div class="form-group">
            <label for="text">Description</label>
            <input type="text" class="form-control" name="Description">
        </div>
        <div class="form-group">
            <label for="text">Girth</label>
            <input type="number" class="form-control" name="Girth">
        </div>
        <div class="form-group">
            <label for="text">Height</label>
            <input type="number" class="form-control" name="Height">
        </div>
        <div class="form-group">
            <label for="text">Tree Health Condition</label>
            <input type="text" class="form-control" name="Tree_Health_Condition">
        </div>
        <div class="form-group">
            <label for="text">Rating</label>
            <input type="text" class="form-control" name="Rating">
        </div>
        <div class="form-group">
            <label for="text">Latitude and Longitude </label>
            <input type="text" class="form-control" name="Latitude_and_Longitude">
        </div>
        <div class="form-group">
            <label for="text">any other details</label>
            <input type="text" class="form-control" name="any_other_details">
        </div>
        <!-- <div class="form-group">
             <label for="pwd">Password:</label>
             <input type="password" class="form-control" id="pwd">
        </div> -->
        <div>
            <label for="file">Upload Images</label>
            <input type="file" name="files[]" multiple/>
        </div>
        
        <!-- <input type="text" name="name"/> -->
        <input type="submit" value="submit"/>

    </form>



    <script src="jquery.min.js"></script>
    
     <script>
    $("#form").submit(function(event){
        var formdata = new FormData(this);
        $.ajax({
            url:'image_upload.php',
            data:formdata,
            contentType:false,
            cache:false,
            processData:false,
            type: 'POST',
            success:function(response){
                    alert(response);
            },
            error:function(){
                alert('something went wrong')
            }
        });
        event.preventDefault();
    })
    </script>
</body>
</html>