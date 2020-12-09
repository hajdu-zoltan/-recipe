<?php
include_once 'header.php';
?>
<html>

<head>
</head>

<body>
  <section class="signup-form">
    <h1>Recept feltöltés</h1>
    <div class="signup-form-form">
      <form action="upimg.php" method="post" enctype="multipart/form-data">
        Add meg az étel nevét! <input class="text" type="text" name="cim">
        <br>
        <br>
        Sorold főkategóriába a receptedet! 
        <br>
        <select class="text3" name="kategoria" size="1">
          <option value="1">Leves</option>
          <option value="2">Főétel</option>
          <option value="3">Desszert</option>
          <option value="4">Előétel</option>
          <option value="5">Ital</option>
          <option value="6">Szósz</option>
          <option value="7">Saláta</option>
        </select>
        <br>
        <br>
        <input type="file" name="image">
        <button class="submit" type="submit" name="submit">Következő lépés</button>
      </form>
    </div>
  </section>
</body>

</html>