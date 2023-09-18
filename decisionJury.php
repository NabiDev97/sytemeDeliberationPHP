<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>DeliberationApp</title>
</head>
<body>
<div class="container mt-5">
        <h2>Decision</h2>
         
<?php
$mention="";
// connditions liees a la mention
 if(isset($_POST['valider'])&& isset($_POST['average']))
  {
    extract($_POST);
  }
  else die('Une erreur est survenue');
  if($average>=17){
     $mention="Excellent";
  }
  elseif($average>=16){
    $mention="Tres Bien";
  }
  
  elseif($average>=14){
    $mention=" Bien";
  }
  elseif($average>=12){
    $mention="Assez Bien";
  }
     
  elseif($average>=10){
    $mention="Passable";
  }  
  else {
    $mention="";
  }

//Conditions liees a la decision
  if($mention!=""){
    $decision="Admis";
  }
  else{
    $decision="Echec";
  }
  ?>

 <!-- Affichage -->
<?php
switch($mention){
    case 'Excellent':$couleur='alert-primary';
    break;
    case 'Tres Bien':$couleur='alert-success';
    break;
    case 'Bien':$couleur='alert-success';
    break;
    case 'Assez Bien':$couleur='alert-info';
    break;
    case 'Passable':$couleur='alert-warning';
    break;
    case "":$couleur='alert-danger';
    break;
};
?>
      <div class="alert <?=$couleur?> ;">
        <?=' <strong>Decison du Jury :</strong>' . $decision;?>
      </div>
     <div class="alert <?=$couleur?>">
        <?=' <strong>Mention : </strong>' . $mention;?>
       <?=' </div>'?>
                       

    <!-- inclusion du js de bootstrap -->
    <script 
      src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
      integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
    </script>
</body>
</html>