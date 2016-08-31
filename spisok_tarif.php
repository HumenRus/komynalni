<?php
include('bloks/left.php');
include('connect.php');
mysql_select_db("db",$db);
mysql_query("SET NAMES 'utf8'",$db);?>
<?php
    $rik = $_POST['rik'];
    $mis = $_POST['mis'];
    echo $rik;
    echo $mis;
?>
<?php
$result = mysql_query("SELECT * FROM tarif WHERE  rik=".$rik." AND mis=".$mis);
echo '<table border="1">';
echo '<thead>';
echo '<tr>';
echo '<th>id</th>';
echo '<th>Рік</th>';
echo '<th>Місяць</th>';
echo '<th>Холодна вода</th>';
echo '<th>Стоки</th>';
echo '<th>Гаряча вода</th>';
echo '<th>Опалення</th>';
echo '<th>Електроенергія до 100 кВат (включно)</th>';
echo '<th>Електроенергія більше 100 кВат</th>';
echo '<th>Газ</th>';
echo '<th>Вивіз сміття</th>';
echo '<th>ЖЕК</th>';
echo '<th>Укртелеком</th>';
echo '<th>Інтернет</th>';
echo '</tr>';
echo '</thead>';
echo '<tbody>';

// выводим в HTML-таблицу все данные клиентов из таблицы MySQL
while($data = mysql_fetch_array($result)){
    echo '<tr>';
    echo '<td>' . $data['id'] . '</td>';
    echo '<td>' . $data['rik'] . '</td>';
    echo '<td>' . $data['mis'] . '</td>';
    echo '<td>' . $data['holod_voda'] . '</td>';
    echo '<td>' . $data['stoku'] . '</td>';
    echo '<td>' . $data['garach_voda'] . '</td>';
    echo '<td>' . $data['opalenia'] . '</td>';
    echo '<td>' . $data['elektr_100'] . '</td>';
    echo '<td>' . $data['elektr_101'] . '</td>';
    echo '<td>' . $data['gaz'] . '</td>';
    echo '<td>' . $data['musor'] . '</td>';
    echo '<td>' . $data['gek'] . '</td>';
    echo '<td>' . $data['telefon'] . '</td>';
    echo '<td>' . $data['internet'] . '</td>';
    echo '</tr>';
}
echo '</tbody>';
echo '</table>';
// закрываем соединение с сервером  базы данных
mysql_close($db);
include ('bloks/footer.php');
?>

