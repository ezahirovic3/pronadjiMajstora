<?php 

$ime = trim($_POST['ime'].' '.$_POST['prezime'],'"');
$kategorija = trim($_POST['kategorija'],'"');
$podkategorija = trim($_POST['podkategorija'],'"');
$lokacija = trim($_POST['lokacija'],'"');


$fp = fopen('id.csv', 'r');
$pom=fgetcsv($fp);
$id=$pom[0];
$id+=1;
fclose($fp);
$fp = fopen('id.csv', 'w');
$ar= array($id);
fputcsv($fp,$ar);
fclose($fp);

$list = array (
    $id,
    $ime,
    $podkategorija,
    $lokacija,
    $ocjena=0
    );
    $handle = fopen($_POST['kategorija'].".csv", "a");
    // READ CSV
    fputcsv($handle, $list,",","_");
    fclose($handle);

$bodytag = str_replace(",", "%2C", $_POST['opis']);
$_POST['opis']=$bodytag;
$bodytag = str_replace(",", "%2C", $_POST['adresa']);
$_POST['id']=$id;
$_POST['adresa']=$bodytag;
$fp = fopen('majstor.csv', 'a');

fputcsv($fp, $_POST,",","_");
fclose($fp);

$fp = fopen('historija.csv', 'a');
$list = array (
    $ime,
    $_POST['email'],
    $_POST['lozinka'],
    $_POST['telefon']
    );

fputcsv($fp, $list,",","_");

fclose($fp);
?>