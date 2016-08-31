    <nav>
        <?php include('bloks/left.php');?>
    </nav>
<?php
/**
 * Created by PhpStorm.
 * User: R.Gumenyuk
 * Date: 09.06.2016
 * Time: 11:02
 */
include('connect.php');
$rik=$_POST[rik];
$mis=$_POST[mis];
$holod_voda=$_POST[holod_voda];
$garach_voda=$_POST[garach_voda];
$stoku=$_POST[stoku];
$stoku=$_POST[opalenia];
$elektr_100=$_POST[elektr_100];
$elektr_101=$_POST[elektr_101];
$gaz=$_POST[gaz];
$musor=$_POST[musor];
$gek=$_POST[gek];
$telefon=$_POST[telefon];
$internet=$_POST[internet];


// Выборка базы
mysql_select_db("db",$db);

// Установка кодировки соединения
mysql_query("SET NAMES 'utf8'",$db);

$result = mysql_query ("INSERT INTO tarif (rik,mis,holod_voda,garach_voda,stoku,opalenia,elektr_100,elektr_101,gaz,musor,gek,telefon,internet) VALUES ('$rik','$mis','$holod_voda','$garach_voda','$stoku','$opalenia','$elektr_100',
'$elektr_101','$gaz','$musor','$gek','$telefon','$internet')");

if ($result = 'true'){
    echo "Информация занесена в базу данных";
}

else{
    echo "Информация не занесена в базу данных";
}
include ('bloks/footer.php');
?>