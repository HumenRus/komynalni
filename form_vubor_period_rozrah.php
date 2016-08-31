<nav>
    <?php include('bloks/left.php');?>
</nav>
<form id="spisok_pokaz" name="spisok_tarif" method="post" action="rozrah.php">
    <select name="rik">
        <option>2016</option>
        <option>2017</option>
    </select>
    <select name="mis">
        <option>01</option>
        <option>02</option>
        <option>03</option>
        <option>04</option>
        <option>05</option>
        <option>06</option>
        <option>07</option>
        <option>08</option>
        <option>09</option>
        <option>10</option>
        <option>11</option>
        <option>12</option>
    </select><br/>
    <input type="submit" form="spisok_pokaz" >
</form>
<?php include ('bloks/footer.php');?>
