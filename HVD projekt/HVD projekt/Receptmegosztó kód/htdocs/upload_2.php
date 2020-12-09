<?php

include_once 'header.php';
?>
<html>

<head>
</head>

<body>
    <section class="signup-form">
        <h1>2/3 Hozzávalók:</h1>
        <div class="signup-form-form">
            <form action="up_2.php" method="post" enctype="multipart/form-data">
                <input class="text" type="text" name="hozzavalonev" placeholder="Hozzávaló neve">
                <br>
                <br>
                <input class="text1" type="text" name="mennyisege" placeholder="Mennyiség">
                <select class="text2" name="kategoria" size=”1”>
                    <option value="" disabled="disabled">Válassz!</option>
                    <option value="db">darab</option>
                    <option value="g">gramm</option>
                    <option value="dkg">dekagramm</option>
                    <option value="kg">kilogramm</option>
                    <option value="ml">milliliter</option>
                    <option value="cl">centiliter</option>
                    <option value="dl">deciliter</option>
                    <option value="l">liter</option>
                    <option value="mokkk">mokkáskanál</option>
                    <option value="kk">kávéskanál</option>
                    <option value="tl">teáskanál</option>
                    <option value="ek">evőkanál</option>
                    <option value="csapek">csapott evőkanál</option>
                    <option value="púpos evőkanál">púpos evőkanál</option>
                    <option value="pohar">pohár</option>
                    <option value="csesze">csésze</option>
                    <option value="bogre">bögre</option>
                    <option value="ger">gerezd</option>
                    <option value="csomag">csomag</option>
                    <option value="csokor">csokor</option>
                    <option value="szem">szem</option>
                    <option value="tabla">tábla</option>
                    <option value="adag">adag</option>
                    <option value="rúd">rúd</option>
                    <option value="lap">lap</option>
                </select>
                <button class="submit"type="submit" name="submit">Hozzáadás</button>
                <button class="submit"type="submit" name="submitnext">Következő lépés</button>

            </form>
        </div>
    </section>
</body>

</html>