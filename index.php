<!DOCTYPE html>  
<html>  
    <head>  
        <title>Pet Board</title>  
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>  
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />  
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script> 
        <link type="text/css" rel="stylesheet" href="style/designStyle.css" media="screen"> 
    </head>  
    <body>  
        <br /><br />  
        <div class="container">  
   <h3 text-align="center">The Pet Board</h3>  
            <br />  
            <form method="post" id="upload_multiple_images" enctype="multipart/form-data">
                <input type="file" name="image[]" id="image" multiple accept=".jpg, .png, .gif" />
                <br />
                <input type="submit" name="insert" id="insert" value="Insert" class="btn btn-info" />
            </form>
            <br />  
            <br />
            <div id="images_list"></div>
            
        </div>  
    </body>  
</html>  
<script>  
$(document).ready(function(){

    load_images();

    function load_images()
    {
        $.ajax({
            url:"get_images.php",
            success:function(data)
            {
                $('#images_list').html(data);
            }
        });
    }
 
    $('#upload_multiple_images').on('submit', function(event){
        event.preventDefault();
        var image_name = $('#image').val();
        if(image_name == '')
        {
            alert("Select Image");
            return false;
        }
        else
        {
            $.ajax({
                url:"insert.php",
                method:"POST",
                data: new FormData(this),
                contentType:false,
                cache:false,
                processData:false,
                success:function(data)
                {
                    $('#image').val('');
                    load_images();
                }
            });
        }
    });
 
});  
</script>
