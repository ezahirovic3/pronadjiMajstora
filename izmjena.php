<?php 

$i = 0;
$newdata = [];
$handle = fopen("majstor.csv", "r");

// READ CSV
while (($data = fgetcsv($handle, 1000, ",")) !== FALSE) {
    for($j=0;$j<29;$j++){
        $data[$j]=str_replace("_","",$data[$j]);
    }
   if ($data[0] == $_POST['id']) {
    $_POST['opis']=str_replace(",", "%2C", $_POST['opis']);
    $_POST['adresa']=str_replace(",", "%2C", $_POST['adresa']);
    $newdata[$i] = $_POST;
      $i++;
      continue;
   }
   $newdata[$i] = $data;
   $i++;
}

// EXPORT CSV
$fp = fopen('majstor.csv', 'w');
foreach($newdata as $rows) {
   fputcsv($fp, $rows,",","_");
}
fclose($fp);
fclose($handle);

$handle = fopen($_POST['kategorija'].".csv", "r");
$newdata = [];
$i = 0;
// READ CSV
while (($data1 = fgetcsv($handle, 1000, ",")) !== FALSE) {
    for($j=0;$j<5;$j++){
        $data1[$j]=str_replace("_","",$data1[$j]);
    }
   if ($data1[0] == $_POST['id']) {
      $newdata[$i][0] = $_POST['id'];
      $newdata[$i][1] = $_POST['ime'].' '.$_POST['prezime'];
      $newdata[$i][2] = $_POST['podkategorija'];
      $newdata[$i][3] = $_POST['lokacija'];
      $newdata[$i][4] = $data1[4];
      $i++;
      continue;
   }
   $newdata[$i] = $data1;
   $i++;
}
$fp = fopen($_POST['kategorija'].".csv", 'w');
foreach($newdata as $rows) {
   fputcsv($fp, $rows,",","_");
}
fclose($fp);
?>