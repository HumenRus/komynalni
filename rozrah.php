<nav>
    <?php include('bloks/left.php');?>
</nav>
<?php
/**
 * Created by PhpStorm.
 * User: R.Gumenyuk
 * Date: 10.06.2016
 * Time: 10:11
 */
include('connect.php');
mysql_select_db("db",$db);
mysql_query("SET NAMES 'utf8'",$db);
$rik = $_POST['rik'];
$mis = $_POST['mis'];
if ($mis>1){
    $mis_pre = $mis - 1;
    $rik_pre = $rik;
}
else{
    $mis_pre = 12;
    $rik_pre = $rik - 1;
}

$result_pokaznuku_val = mysql_query("SELECT * FROM pokaznuku WHERE  rik=".$rik." AND mis=".$mis);
$result_pokaznuku_pre= mysql_query("SELECT * FROM pokaznuku WHERE  rik=".$rik_pre." AND mis=".$mis_pre);
$result_tarif = mysql_query("SELECT * FROM tarif WHERE  rik=".$rik." AND mis=".$mis);

$val = mysql_fetch_array($result_pokaznuku_val);
$pre = mysql_fetch_array($result_pokaznuku_pre);
$tarif = mysql_fetch_array($result_tarif);
echo '<br/>';
echo '<h4>Оплата проводиться готівкою</h4>'.'<br/>';
$suma_holodna_voda = ($val['holod_voda_val'] - $pre['holod_voda_val']) * ($tarif ['holod_voda']);
echo 'Сума за воду складає  - '.$suma_holodna_voda. ' грн. <br/>';

$suma_stoku = (($val['garach_voda_val'] - $pre['garach_voda_val']) + ($val['holod_voda_val'] - $pre['holod_voda_val'])) * ($tarif ['stoku']);
echo 'Сума за стоки  - '.$suma_stoku. ' грн. <br/>';

$suma_garacha_voda = ($val['garach_voda_val'] - $pre['garach_voda_val']) * ($tarif ['garach_voda']);
echo 'Сума за підігрів води складає  - '.$suma_garacha_voda. ' грн. <br/>';

echo 'Сума за опалення  - '.$tarif['opalenia']. ' грн. <br/>';
echo 'Сума за вивіз сміття складає  - '.$tarif['musor']. ' грн. <br/>';
echo 'Сума за послуги ЖКГ складає  - '.$tarif['gek']. ' грн. <br/>';

echo '<h4>Оплата проводиться через інтренет</h4>'.'<br/>';

if (($val['elektr_val'] - $pre['elektr_val'])<=100){
    $suma_electr= ($val['elektr_val'] - $pre['elektr_val'])*($tarif ['elektr_100']);
}
else{
    $suma_electr = (100 *$tarif ['elektr_100']) + ((($val['elektr_val'] - $pre['elektr_val']-100)*$tarif['elektr_101']));
}
echo 'Сума за електроенергію складає  - '.$suma_electr. ' грн. <br/>';

$suma_gaz = ($val['gaz_val'] - $pre['gaz_val']) * ($tarif ['gaz']);
echo 'Сума за газ  - '.$suma_gaz. ' грн. <br/>';


echo 'Сума за стаціонарний телефон складає  - '.$tarif['telefon']. ' грн. <br/>';
echo 'Сума за інтернет  - '.$tarif['internet']. ' грн. <br/>';
echo '<br/>';
$sum_comun = $suma_holodna_voda + $suma_garacha_voda + $suma_stoku + $tarif['opalenia'] + $suma_electr + $suma_gaz + $tarif['musor'] + $tarif['gek'] + $tarif['telefon'] + $tarif['internet'];
$sum_comun_bank = $suma_holodna_voda + $suma_garacha_voda + $suma_stoku + $tarif['opalenia'] + $tarif['musor'] + $tarif['gek'];
echo '<h3>Сума за комунальні послуги за '.$mis.' місяць '.$rik.' року складає '.$sum_comun.' грн. </h3><br/>';
echo '<h3>Сума за комунальні послуги без телефона, інтернету, електроенергії та газу за '.$mis.' місяць '.$rik.' року складає '.$sum_comun_bank.' грн. </h3><br/>';
echo '<br/>';
include ('bloks/footer.php');
?>

