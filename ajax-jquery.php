<!DOCTYPE html>
<html>
<head>
    <title></title>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
</head>
<body>
<div id="wrapper">
    <!-- The action="upload.php" must be filled out -->
    <form id="form" method="post" action="upload.php" enctype="multipart/form-data" > 
        input:<input type="text" id="f" name="test" >
        <p></p>
        <input type="file" id="g" name="image" >
        <p></p>
        <input type="submit" value="Upload">
    </form>

    <div id="preview" >No Image</div>
</div>

<script type="text/javascript">

$(document).ready(function (e) {
    $("#form").on('submit',(function(e) {
      //if you comment out preventDefault you can see what is sent to the upload.php file
      e.preventDefault();

      $.ajax({
            url: "upload.php",
            type: "POST",
            data: new FormData(this),
            contentType: false,
                cache: false,
            processData:false,
            beforeSend: function() {
                            $("#preview").html('Uploading image........');
                        },
            success: function(data) {
                         // view uploaded file.
                         $("#preview").html(data);
                     }
        });
    }));
});

</script>
</body>
</html>
