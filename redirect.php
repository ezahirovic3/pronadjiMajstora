<?php
//  index.php

$podkategorija=$_GET['podkategorija'];
$lokacija=$_GET['lokacija'];
if($lokacija=='Svi gradovi')$lokacija='';

if    ($podkategorija  ==  'Keramičar'  ||  $podkategorija  ==  'Moler'||  $podkategorija  ==  'Gipsar'||  $podkategorija  ==  'Fasader'||  $podkategorija  ==  'Zidar'||  $podkategorija  ==  'Parketar'||  $podkategorija  ==  'Keramičar'||  $podkategorija  ==  'Građevinski limar'||  $podkategorija  ==  'Varilac'||  $podkategorija  ==  'Građevinski stolar'||  $podkategorija  ==  'Izolater'||  $podkategorija  ==  'Tesar'||  $podkategorija  ==  'Izrada bazena i fontana'||  $podkategorija  ==  'Pomoćni radnik'||  $podkategorija  ==  'Postavljanje podnih površina'||  $podkategorija  ==  'Sječenje i bušenje'||  $podkategorija  ==  'Armirač'||  $podkategorija  ==  'Bravar-monter')
{
header("Location:  Gra%C4%91evinski%20radovi.html?lokacija=".$lokacija."&podkategorija=".$_GET['podkategorija']);
exit();
}  

else  if($podkategorija=="Električar"||  $podkategorija=="Vikler elektromotora"||  $podkategorija=="Servis liftova"||  $podkategorija=="Monter klima uređaja"||  $podkategorija=="Audio-video serviser"||  $podkategorija=="Serviser mobilnih telefona"||  $podkategorija=="Serviser računara")
{
header("Location:  Elektrika.html?lokacija=".$lokacija."&podkategorija=".$_GET['podkategorija']);
exit();
}  

else  if($podkategorija=="Spremačica"||  $podkategorija=="Čistač"||  $podkategorija=="Perač podnih površina"||  $podkategorija=="Odžačar"||  $podkategorija=="Baštovan"||  $podkategorija=="Drvosječa"||  $podkategorija=="Visinski radnik"||  $podkategorija=="Perač fasada"||  $podkategorija=="Haus majstor / Domar")
{
header("Location:  Odr%C5%BEavanje.html?lokacija=".$lokacija."&podkategorija=".$_GET['podkategorija']);
exit();
}  

else  if($podkategorija=="Vodoinstalater"||  $podkategorija=="Monter grijnih instalacija"||  $podkategorija=="Ventilacioni sistemi")
{
header("Location:  Cjevne%20instalacije.html?lokacija=".$lokacija."&podkategorija=".$_GET['podkategorija']);
exit();
}  

else  if($podkategorija=="Ključar"||  $podkategorija  =="Tapetar"||  $podkategorija  =="Metalostrugar"||  $podkategorija  =="Stolar"||  $podkategorija  =="Staklorezac"||  $podkategorija  =="Grnčar"||  $podkategorija  =="Kamenorezac"||  $podkategorija  =="Mašin-bravar"||  $podkategorija  =="Kovač"||  $podkategorija  =="Površinska obrada"||  $podkategorija  =="Livac"||  $podkategorija  =="Uramljivač"||  $podkategorija  =="Metaloglodač"||  $podkategorija  =="Metalooštrač"||  $podkategorija  =="Pečatorezac")
{
header("Location:  Obrada%20materijala.html?lokacija=".$lokacija."&podkategorija=".$_GET['podkategorija']);
exit();
}  

else  if($podkategorija=="Krojač"||  $podkategorija  =="Obućar"||  $podkategorija  =="Tašner"||  $podkategorija  =="Sajdžija - Časovničar"||  $podkategorija  =="Juvelir - Zlatar"||  $podkategorija  =="Mašinski vez"||  $podkategorija  =="Ručni vez"||  $podkategorija  =="Krznar"||  $podkategorija  =="Šeširdžija"||  $podkategorija  =="Serviser šivaćih mašina")
{
header("Location:  Garderoba%20i%20nakit.html?lokacija=".$lokacija."&podkategorija=".$_GET['podkategorija']);
exit();
}  

else  if($podkategorija=="Auto električar"||  $podkategorija  =="Auto limar"||  $podkategorija  =="Auto bravar"||  $podkategorija  =="Auto mehaničar"||  $podkategorija  =="Serviser autogas sistema"||  $podkategorija  =="Auto grafičar"||  $podkategorija  =="Auto tapetar"||  $podkategorija  =="Auto perač"||  $podkategorija  =="Vulkanizer"||  $podkategorija  =="Šlep služba"||  $podkategorija  =="Serviser trapa"||  $podkategorija  =="Auto stakla"||  $podkategorija  =="Auto plastičar"||  $podkategorija  =="Serviser auspuha"||  $podkategorija  =="Serviser motocikala")
{
header("Location:  Odr%C5%BEavanje%20vozila.html?lokacija=".$lokacija."&podkategorija=".$_GET['podkategorija']);
exit();
}  

else  if($podkategorija=="Vozač"||  $podkategorija  =="Transport selidbi"||  $podkategorija  =="Fizički radnik"||  $podkategorija  =="Grafičar"||  $podkategorija  =="Firmopisac"||  $podkategorija  =="Serviser za bicikle"||  $podkategorija  =="Ski serviser"||  $podkategorija  =="Serviser medicinske opreme"||  $podkategorija  =="Roletne i venecijaneri")
{
header("Location:  Nekategorizovano.html?lokacija=".$lokacija."&podkategorija=".$_GET['podkategorija']);
exit();
}  
else  {
        header("Location:  Greška.html");
        exit();
}
?>