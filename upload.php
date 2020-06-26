<?php

$name = $_POST['test'];
//file must be echo'ed out to appear as a call back for the ajax success function
echo $name;


$imgfile = $_FILES["image"]["name"];
echo $imgfile;
$folder = "images/";
move_uploaded_file( $_FILES["image"]["tmp_name"], $folder.$_FILES["image"]["name"] );

//file must be echo'ed out to appear as a call back for the ajax success function
echo '<img src="images/'.$imgfile.' " />';

?>