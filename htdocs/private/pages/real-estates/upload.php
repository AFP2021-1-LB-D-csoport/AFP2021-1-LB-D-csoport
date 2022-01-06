<?php
if(isset($_POST['submit']))
{

$errors = array();
$van = true;
$type = pathinfo($_FILES['image']['name'], PATHINFO_EXTENSION);

if(!($type='jpeg' || $tpye='jpg' || $type = 'png'))
{
    $van=false;
    array_push($errors, "Csak jpeg, jpg, illetve png formátum adható meg!");
}
if($_FILES['image']['size']>500000)
{
    $van=false;
    array_push($errors, "A kép mérete nem lehet nagyobb, mint 500KB!");
}

if($van)
{
move_uploaded_file($_FILES['image']['tmp name'], "images/".$_FILES['image']['name']);
} else{
    echo "Nem megfelelő";
}




}


?>