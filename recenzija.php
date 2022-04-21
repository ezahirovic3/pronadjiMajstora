<?php 
$vote = $_POST['vote'];

$bodytag = str_replace(",", "%2C", $vote['comment']);

$list = array (
$id = $vote['id_master'],
$ime = $vote['name'],
$datum = $vote['datum'],
$kom = $bodytag,
$kva = $vote['vote_1'],
$rok = $vote['vote_2'],
$cjena = $vote['vote_3']
);

$fp = fopen('recenzija.csv', 'a');
if($id!="" && $ime!="" && $kom!="" && $kva!="" && $rok!="" && $cjena!="" && $_POST['captcha']=="06387")
fputcsv($fp, $list);

fclose($fp);
?>