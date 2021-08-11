<?php

//echo $_POST['selector'];

$postdata = file_get_contents("php://input");

if(!empty($postdata)){
header('Location: http://ofertaeducativa.uccuyo.edu.ar/'.$_POST['selector']);
}else
header('Location: http://ofertaeducativa.uccuyo.edu.ar');
?>