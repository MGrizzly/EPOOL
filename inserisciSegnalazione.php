<?php ob_start(); ?>
<?php
  if(!isset($_SESSION))
    {
        session_start();
    } ;
  if (!isset($_SESSION["email"]) or !isset($_SESSION["password"])){
	  header("location: index.php");
	  }
?>
<?php include_once('car.php');?>
<?php include 'header.html';?>
<?php include 'menu.html';?>
<?php include 'slider.html';?>
<?php
if(isset($_POST['submit1'])){
    $SocietaAutomobile=$_POST['SocietaAutomobile'];
    $DataSegnalazione=$_POST['DataSegnalazione'];
    $TitoloSegnalazione=$_POST['TitoloSegnalazione'];
    $TestoSegnalazione=$_POST['TestoSegnalazione'];
    $Automobile=$_POST['Automobile'];
    $objectt = new Car();
    $res = $objectt -> insertSegnalazione($_SESSION["email"], $SocietaAutomobile, $DataSegnalazione,$TitoloSegnalazione, $TestoSegnalazione,$Automobile);
    if ($res==true) {
        echo "<script type='text/javascript'>alert('Operazione eseguita');</script>";
        header("Location: homeUser.php");
       // echo "<script type='text/javascript'>document.location.href='{$URL}';</script>";
    }else{
       echo "<script type='text/javascript'>alert('Errorrrate');</script>";
       //echo "<script type='text/javascript'>document.location.href='{$URL}';</script>";
        header("Location: homeUser.php");
    }
}
?>
<?php include('inserisciSegnalazione.html');?>
<?php
$object = new Car();
$res = $object -> getVeicoliDisponibili();
echo'<div class="book-taxi-section">  <div class="container"> 	<div class="section-header section-header-white">
            <h6>Veicoli Disponibili </h6></div> <form class="row" >';
while ($row=$res->fetch(PDO::FETCH_ASSOC)) {
    echo ' <div class="form-group col-lg-4 col-md-6">
                <label>Targa</label>
                <input type="text"  Value="'.$row['TARGA'].'" readonly class="form-control"/>
            </div>';
    echo ' <div class="form-group col-lg-4 col-md-6">
                <label>Modello</label>
                <input type="text"  Value="'.$row['MODELLO'].'" readonly class="form-control"/>
            </div>';
    echo ' <div class="form-group col-lg-4 col-md-6">
                <label>Capienza</label>
                <input type="number"  Value="'.$row['CAPIENZA'].'" readonly class="form-control"/>
            </div>';
    echo ' <div class="form-group col-lg-4 col-md-6">
                <label>Descrizione</label>
                <input type="text"  Value="'.$row['DESCRIZIONE'].'" readonly class="form-control"/>
            </div>';
    echo ' <div class="form-group col-lg-4 col-md-6">
                <label>Società</label>
                <input type="text"  Value="'.$row['SOCIETA'].'" readonly class="form-control"/>
            </div>';
    echo ' <div class="form-group col-lg-4 col-md-6">
                <label>Area di Sosta</label>
                <input type="text"  Value="'.$row['AREA_SOSTA'].'" readonly class="form-control"/>
            </div>';
}
echo'</form></div></div>';

?>
<?php include('footer.html');?>