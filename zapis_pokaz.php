    <nav>
        <?php include('bloks/left.php');?>
    </nav>
<?php
$rik=$_POST[rik];
$mis=$_POST[mis];
$holod_voda_val=$_POST[holod_voda_val];
$garach_voda_val=$_POST[garach_voda_val];
$elektr_val=$_POST[elektr_val];
$gaz_val=$_POST[gaz_val];
include('connect.php');
//$col_holod_voda=$holod_voda_val-$holod_voda_pre;
//$sum=$col_holod_voda*5.25;
//echo "Сума за холодну воду складає ".$sum; 

	// Выборка базы
	mysql_select_db("db",$db);
 
	// Установка кодировки соединения
	mysql_query("SET NAMES 'utf8'",$db);
    
     
    $result = mysql_query ("INSERT INTO pokaznuku (rik,mis,holod_voda_val,garach_voda_val,elektr_val,gaz_val) VALUES ('$rik','$mis','$holod_voda_val','$garach_voda_val','$elektr_val','$gaz_val')");

    if ($result = 'true'){
        echo "Информация занесена в базу данных";
    }
        
	else{
        echo "Информация не занесена в базу данных";
    }
include ('bloks/footer.php');
?>