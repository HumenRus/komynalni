<nav>
    <?php include('bloks/left.php');?>
</nav>
<?php
include('connect.php');
mysql_select_db("db",$db);
mysql_query("SET NAMES 'utf8'",$db);?>
<?php
    $rik = $_POST['rik'];
    $mis = $_POST['mis'];
?>
<?php
$result = mysql_query("SELECT * FROM pokaznuku WHERE  rik=".$rik." AND mis=".$mis);
if (mysql_num_rows($result) > 0)
    {

echo '<table border="1">';
echo '<thead>';
echo '<tr>';
echo '<th>id</th>';
echo '<th>rik</th>';
echo '<th>mis</th>';
echo '<th>Показник холодної води</th>';
echo '<th>Показник гарячої води</th>';
echo '<th>Показник електроенергії</th>';
echo '<th>Показник газу</th>';
echo '</tr>';
echo '</thead>';
echo '<tbody>';
// выводим в HTML-таблицу все данные клиентов из таблицы MySQL
while($data = mysql_fetch_array($result)){
    echo '<tr>';
    echo '<td>' . $data['id'] . '</td>';
    echo '<td>' . $data['rik'] . '</td>';
    echo '<td>' . $data['mis'] . '</td>';
    echo '<td>' . $data['holod_voda_val'] . '</td>';
    echo '<td>' . $data['garach_voda_val'] . '</td>';
    echo '<td>' . $data['elektr_val'] . '</td>';
    echo '<td>' . $data['gaz_val'] . '</td>';
    echo '</tr>';
}
echo '</tbody>';
echo '</table>';
}
else{
    echo 'Показників за даний місяць не існує';
}
// закрываем соединение с сервером  базы данных
mysql_close($db);
include ('bloks/footer.php');
?>

