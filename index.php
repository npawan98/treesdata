<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <title>Document</title>
</head>
<body>

    <form action="" method="post" id="form">
        <input type="file" name="files[]" multiple/>
        <input type="text" name="name"/>
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