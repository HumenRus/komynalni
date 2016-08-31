<nav>
    <?php include('bloks/left.php');?>
</nav>

<form id="pokaznuku" name="pokaznuku" method="post" action="zapis_pokaz.php">
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
    </select> <br/>
    <p>Введіть поточний показник холодної води
<input type="number" name="holod_voda_val" class="pocaznuk" min="1" required="required"></p>
    <p>&nbsp;</p>
    <p>Введіть поточний показник гарячої води
<input type="number" name="garach_voda_val" class="pocaznuk" min="1" required="required"></p>
    <p>&nbsp;</p>
    <p>Введіть поточний показник електроенергії
<input type="number" name="elektr_val" class="pocaznuk" min="1" required="required"></p>
    <p>&nbsp;</p>
    <p>Введіть поточний показник газу
<input type="number" name="gaz_val" class="pocaznuk" min="1" required="required"></p>
    <br/>
    <input type="submit" form="pokaznuku" name="zap_pocaz" title="Записати у базу"><br/>
</form>
<?php include ('bloks/footer.php'); ?>