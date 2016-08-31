<nav>
    <?php include('bloks/left.php');?>
</nav>
<form id="tarif" name="tarif" method="post" action="zapis_tarif.php">
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
    <p>Введіть тариф за холодну воду
    <input type="number" oninput="up(this)" step="0.01" name="holod_voda" class="holod_voda" required="required"></p>
    <p>&nbsp;</p>
    <p>Введіть тариф за гарячу воду
    <input type="number" oninput="up(this)" step="0.01" name="garach_voda" class="garach_voda" required="required"></p>
    <p>&nbsp;</p>
    <p>Введіть тариф опалення
        <input type="number" oninput="up(this)" step="0.01" name="stoku" class="stoku" required="required"></p>
    <p>&nbsp;</p>
    <p>Введіть тариф за стоки води
    <input type="number" oninput="up(this)" step="0.01" name="opalenia" class="opalenia" required="required"></p>
    <p>&nbsp;</p>
    <p>Введіть тариф за електроенергію до 100 кВат (включно)
        <input type="number" oninput="up(this)" step="0.01" name="elektr_100" class="elektr_100" required="required"></p>
    <p>&nbsp;</p>
    <p>Введіть тариф за електроенергію більше 100 кВат до 600 кВат (включно)
        <input type="number" oninput="up(this)" step="0.01" name="elektr_101" class="elektr_101" required="required"></p>
    <p>&nbsp;</p>
    <p>Введіть тариф за газ
    <input type="number" oninput="up(this)" step="0.001" name="gaz" class="gaz" required="required"></p>
    <p>&nbsp;</p>
    <p>Введіть тариф за мусор
    <input type="number" oninput="up(this)" step="0.01" name="musor" class="musor" required="required"></p>
    <p>&nbsp;</p>
    <p>Введіть тариф за ЖЕК
        <input type="number" oninput="up(this)" step="0.01" name="gek" class="gek" required="required"></p>
    <p>&nbsp;</p>
    <p>Введіть тариф за стаціонарний телефон
        <input type="number" oninput="up(this)" step="0.01" name="telefon" class="telefon" required="required"></p>
    <p>&nbsp;</p>
    <p>Введіть тариф за Інтернет
        <input type="number" oninput="up(this)" step="0.01" name="internet" class="internet" required="required"></p>
    <input type="submit" form="tarif" name="zap_tarif" title="Записати у базу"><br/>
</form>
<?php include ('bloks/footer.php');?>