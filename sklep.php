<?php

$servername = "mysql-ewelina.alwaysdata.net";
$username = "ewelina";
$password = "Ewelina@123456";
$dbname = "ewelina_ewelina";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);

// Check connection
if (!$conn) {
  die("Connection failed: " . mysqli_connect_error());
}

?>

<html>
  <head>
  <link rel="icon" type="image/png" sizes="16x16" href="/favicon-16x16.png">
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <title>Ewelina Augustynowicz 2Ti gr.2</title>
    <link rel="stylesheet" href="style.css" />
  </head>
  <body>
  <div class="tekst">
      <div class="container">
            <div class="item colorBlue">
        <h2>Ewelina Augustynowicz klasa 2Ti grupa 2 numer 1</h2>
        <h1><b>Strona główna</b></h1> 
        <audio controls autoplay loop>
        <source src="https://vgmsite.com/soundtracks/addams-family-values/exhvgxneho/02%20Addams%20Family%20Values.mp3" type="audio/mpeg">
        </audio>
      </div> 
    <div class="item colorRed">
        <div class="nav">
          <h2> Menu:</h2>
          <ul>
            <li><a class="nav_link" href="https://github.com/SK-2019/php-sql-wprowadzenie-ewelina-augustynowicz-09">github</a></li>
            <br>
            <li><a class="nav_link" href="index.php"> Strona głowna</a></li>
            <br>
            <li><a class="nav_link" href="../pracownicy/pracownicy.php"> Pracownicy </a></li>
            <br>
            <li><a class="nav_link" href="../pracownicy/pracownicyiorganizacja.php"> Pracownicy i organizacja </a></li>
            <br>
            <li><a class="nav_link" href="../pracownicy/funkcjeAgregujace.php"> Funkcje agregujące</a></li>
            <br>
            <li><a class="nav_link" href="../pracownicy/dataiczas.php"> Data i czas</a></li>
            <br>
            <li><a class="nav_link" href="../pracownicy/formularz.html">Formularz</a></li>
            <br>
            <li><a class="nav_link" href="../pracownicy/insert.php">Insert</a></li>
            <br>
            <li><a class="nav_link" href="../pracownicy/daneDoBazy.php">Dane do bazy</a></li>
            <br>
            <li><a class="nav_link" href="../pracownicy/delete.php">Delete</a></li>
            <br>
            <li><a class="nav_link" href="../flexbox+menu/flexbox.html"> Flexbox + menu</a></li>
            <br>
          </ul> 
      </div> 
      </div>
    
<div class="item colorGreen">
<header>
  <div class="nav">
          <h2> Menu:</h2>
          <ul>
            <a class="nav_link" href="mechanik.php"> Mechanik </a>
            
            <a class="nav_link" href="sklep.php"> Sklep </a>
            
            <a class="nav_link" href="bibl.php"> Biblioteka </a>
            
            <a class="nav_link" href="kancelariaprawna.php"> Kancelaria prawna </a>
            
            <a class="nav_link" href=""> piec </a>
          </ul> 
          </header>

          <h2>Produkty:</h2>
<main>
    <?php
    $result = $conn->query('SELECT * FROM sklepprodukt');
    echo("<table border>");
    echo("<table>");
    echo("<th>id_produkt</th>");
    echo("<th>produkt</th>");
    echo("<th>cena</th>");
    while($row = $result->fetch_assoc()) {
    echo("<tr>");
    echo("<td>".$row["id_produkt"]."</td><td>".$row["produkt"]."</td><td>".$row["cena"]."</td>");
    echo("</tr>");
    }
    echo("</table>")
    ?>
</main>

<h2>Producenci:</h2>
<main>
    <?php
    $result = $conn->query('SELECT * FROM sklepproducent');
    echo("<table border>");
    echo("<table>");
    echo("<th>id_producent</th>");
    echo("<th>producent</th>");
    while($row = $result->fetch_assoc()) {
    echo("<tr>");
    echo("<td>".$row["id_producent"]."</td><td>".$row["producent"]."</td>");
    echo("</tr>");
    }
    echo("</table>")
    ?>
</main>

<h2>Sklep</h2>
<main>
    <?php
    $result = $conn->query('SELECT * FROM sklep');
    echo("<table border>");
    echo("<table>");
    echo("<th>producent</th>");
    echo("<th>produkt</th>");
    while($row = $result->fetch_assoc()) {
    echo("<tr>");
    echo("<td>".$row["producent"]."</td><td>".$row["produkt"]."</td>");
    echo("</tr>");
    }
    echo("</table>")
    ?>
</main>

</div>
</div>

  </body>
</html>