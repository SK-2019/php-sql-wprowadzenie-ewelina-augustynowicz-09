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
            
            <a class="nav_link" href="bibl.php">Biblioteka </a>
            
            <a class="nav_link" href="kancelariaprawna.php"> Kancelaria prawna </a>
            
            <a class="nav_link" href="szkola.php"> szkoła </a>
          </ul> 
          </header>

          <main>
<h2>Klasy:</h2>
<?php
$result=$conn->query('SELECT * FROM klasa');
echo("<table border>");
echo("<th>id_klasa</th>");
echo("<th>klasa</th>");
echo("<th>ilosc_uczniow</th>");
while($row=$result->fetch_assoc()){
echo("<tr>");
echo("<td>".$row["id_klasa"]."</td><td>".$row["klasa"]."</td><td>".$row["ilosc_uczniow"]."</td>");
echo("</tr>");
}
echo("</table>");
?>
</main>

<main>
<h2>Nauczyciele:</h2>
<?php
$result=$conn->query('SELECT * FROM nauczyciele');
echo("<table border>");
echo("<th>id_nauczyciela</th>");
echo("<th>imie_nauczyciela</th>");
echo("<th>nazwisko_nauczyciela</th>");
while($row=$result->fetch_assoc()){
echo("<tr>");
echo("<td>".$row["id_nauczyciela"]."</td><td>".$row["imie_nauczyciela"]."</td><td>".$row["nazwisko_nauczyciela"]."</td>");
echo("</tr>");
}
echo("</table>");
?>
</main>

<main>
<h2>Szkoła:</h2>
<?php
$result=$conn->query('SELECT * FROM szkola');
echo("<table border>");
echo("<th>nauczyciel</th>");
echo("<th>klasa</th>");
while($row=$result->fetch_assoc()){
echo("<tr>");
echo("<td>".$row["nauczyciel"]."</td><td>".$row["klasa"]."</td>");
echo("</tr>");
}
echo("</table>");
?>
</main>

</div>
</div>

  </body>
</html>