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
    <title>Data i czas</title>
    <link rel="stylesheet" href="../style.css" />
  </head>
  <body>
    <div class="container">
            <div class="item colorBlue">
        <h2>Ewelina Augustynowicz klasa 2Ti grupa 2 numer 1</h2>
        <h1><b>Ewelina Augustynowicz 2Ti gr2</b></h1> 
      </div> 
    <div class="item colorRed">
        <div class="nav">
        <h2> Menu:</h2>
          <ul>
            <li><a href="https://github.com/SK-2019/php-sql-wprowadzenie-ewelina-augustynowicz-09">github</a></li>
            <br>
            <li><a class="nav_link" href="../index.php"> Strona głowna</a></li>
            <br>
            <li><a class="nav_link" href="../pracownicy/pracownicy.php"> Pracownicy </a></li>
            <br>
            <li><a class="nav_link" href="../pracownicy/pracownicyiorganizacja.php"> Pracownicy i organizacja </a></li>
            <br>
            <li><a class="nav_link" href="../pracownicy/funkcjeAgregujace.php"> Funkcje agregujące</a></li>
            <br>
            <li><a class="nav_link" href="pracownicy/dataiczas.php"> Data i czas</a></li>
            <br>
            <li><a class="nav_link" href="../pracownicy/formularz.html">Formularz</a></li>
            <br>
            <li><a class="nav_link" href="../pracownicy/insert.php">Insert</a></li>
            <br>
            <li><a class="nav_link" href="../pracownicy/daneDoBazy.php">Dane do bazy</a></li>
            <br>
            <li><a class="nav_link" href="../pracownicy/delete.php">Delete</a></li>
          </ul> 
      </div> 
      </div>
    
<div class="item colorGreen">

<?php
echo("<h2><p>zadanie 1 - Wiek poszczególnych pracowników (w latach)</p></h2>");
$result = $conn->query('SELECT *, YEAR(curdate())-YEAR(data_urodzenia) as wiek from pracownicy, organizacja where dzial=id_org');
echo("<table border>");
echo("<th>ID</th>");
echo("<th>Imie</th>");
echo("<th>Dział</th>");
echo("<th>Nazwa_Działu</th>");
echo("<th>Zarobki</th>");
echo("<th>Data_urodzenia</th>");
echo("<th>Wiek</th>");
while($row=$result->fetch_assoc()){ 
echo("<tr>");
echo("<td>".$row["id_pracownicy"]."</td><td>".$row["imie"]."</td><td>".$row["dzial"]."</td><td>".$row["nazwa_dzial"]."</td><td>".$row["zarobki"]."</td><td>".$row["data_urodzenia"]."</td><td>".$row["wiek"]."</td>");                   
echo("</tr>");
}
echo("</table>");
?>

<?php 
echo("<h2><p>zadanie 2 - Wiek poszczególnych pracowników (w latach) z działu serwis</p></h2>");
$result = $conn->query('SELECT *, YEAR(curdate())-YEAR(data_urodzenia) as wiek FROM pracownicy, organizacja WHERE dzial=id_org AND nazwa_dzial="serwis"');
echo("<table border>");
echo("<th>ID</th>");
echo("<th>Imie</th>");
echo("<th>Dział</th>");
echo("<th>Nazwa_Działu</th>");
echo("<th>Zarobki</th>");
echo("<th>Data_urodzenia</th>");
echo("<th>Wiek</th>");
while($row=$result->fetch_assoc()){ 
echo("<tr>");
echo("<td>".$row["id_pracownicy"]."</td><td>".$row["imie"]."</td><td>".$row["dzial"]."</td><td>".$row["nazwa_dzial"]."</td><td>".$row["zarobki"]."</td><td>".$row["data_urodzenia"]."</td><td>".$row["wiek"]."</td>");                  
echo("</tr>");
}
echo("</table>");
?>  

<?php
echo("<h2><p>zadanie 3 - Suma lat wszystkich pracowników</p></h2>");
$result = $conn->query('SELECT sum(YEAR(CURDATE()) - YEAR(data_urodzenia)) as wiek FROM pracownicy, organizacja WHERE dzial=id_org');
echo("<table border>");
echo("<th>Wiek_wszystkich_pracownikow</th>");
while($row=$result->fetch_assoc()){ 
echo("<tr>");
echo("<td>".$row["wiek"]."</td>");                    
echo("</tr>");
}
echo("</table>");
?>
  
<?php
echo("<h2><p>zadanie 4 -Suma lat pracowników z działu handlu</p></h2>");
$result = $conn->query('SELECT sum(YEAR(CURDATE()) - YEAR(data_urodzenia)) as wiek FROM pracownicy, organizacja WHERE dzial=id_org and nazwa_dzial="handel"');
echo("<table border>");
echo("<th>Wiek_pracownikow_handel</th>");
while($row=$result->fetch_assoc()){ 
echo("<tr>");
echo("<td>".$row["wiek"]."</td>");                    
echo("</tr>");
}
echo("</table>");
?>  
   
<?php
echo("<h2><p>zadanie 5 - Suma lat kobiet</p></h2>");
$result = $conn->query('SELECT sum(YEAR(CURDATE()) - YEAR(data_urodzenia)) as wiek FROM pracownicy where imie like "%a"');
echo("<table border>");
echo("<th>Wiek_kobiet</th>");
while($row=$result->fetch_assoc()){ 
echo("<tr>");
echo("<td>".$row["wiek"]."</td>");                    
echo("</tr>");
}
echo("</table>");
?>  

<?php
echo("<h2><p>zadanie 6 - Suma lat mężczyzn</p></h2>");
$result = $conn->query('SELECT sum(YEAR(CURDATE()) - YEAR(data_urodzenia)) as wiek FROM pracownicy where imie not like "%a"');
echo("<table border>");
echo("<th>Wiek_mężczyzn</th>");
while($row=$result->fetch_assoc()){ 
echo("<tr>");
echo("<td>".$row["wiek"]."</td>");                    
echo("</tr>");
}
echo("</table>");
?>

<?php
echo("<h2><p>zadanie 7 - Średnia lat pracowników w poszczególnych działach  (wraz z wypisanymi nazwami działów)</p></h2>");
$result = $conn->query('SELECT dzial, avg(YEAR(CURDATE()) - YEAR(data_urodzenia)) as srednia, nazwa_dzial from pracownicy, organizacja where dzial=id_org group by dzial');
echo("<table border>");
echo("<th>dzial</th>");
echo("<th>Średnia_wieku</th>");
echo("<th>Nazwa_Działu</th>");
while($row=$result->fetch_assoc()){ 
echo("<tr>");
echo("<td>".$row["dzial"]."</td><td>".$row["srednia"]."</td><td>".$row["nazwa_dzial"]."</td>");                    
echo("</tr>");
}
echo("</table>");
?>  
  
<?php
echo("<h2><p>zadanie 8 - Suma lat pracowników w poszczególnych działach</p></h2>");
$result = $conn->query('SELECT dzial, sum(YEAR(CURDATE()) - YEAR(data_urodzenia)) as suma, nazwa_dzial from pracownicy, organizacja where dzial=id_org group by dzial');
echo("<table border>");
echo("<th>dzial</th>");
echo("<th>Suma_wieku</th>");
echo("<th>Nazwa_Działu</th>");
while($row=$result->fetch_assoc()){ 
echo("<tr>");
echo("<td>".$row["dzial"]."</td><td>".$row["suma"]."</td><td>".$row["nazwa_dzial"]."</td>");                    
echo("</tr>");
}   
echo("</table>");
?>
  
<?php  
echo("<h2><p>zadanie 9 - Najstarsi pracownicy w każdym dziale (nazwa_dział, wiek)</p></h2>");
$result = $conn->query('SELECT dzial, max(YEAR(CURDATE()) - YEAR(data_urodzenia)) as max, nazwa_dzial from pracownicy, organizacja where dzial=id_org group by dzial');
echo("<table border>");
echo("<th>dzial</th>");
echo("<th>Wiek - najstarsi</th>");
echo("<th>Nazwa_Działu</th>");
while($row=$result->fetch_assoc()){ 
echo("<tr>");
echo("<td>".$row["dzial"]."</td><td>".$row["max"]."</td><td>".$row["nazwa_dzial"]."</td>");                    
echo("</tr>");
}
echo("</table>");
?>
  
<?php 
echo("<h2><p>zadanie 10 - Najmłodsi pracownicy z działu: handel i serwis (nazwa_dział, wiek)</p></h2>");
$result = $conn->query('SELECT min(YEAR(CURDATE()) - YEAR(data_urodzenia)) as min, nazwa_dzial from pracownicy, organizacja where dzial=id_org and (nazwa_dzial="handel" OR nazwa_dzial="serwis") group by dzial');
echo("<table border>");
echo("<th>Wiek_najmłodsi</th>");
echo("<th>Nazwa_Działu</th>");
while($row=$result->fetch_assoc()){ 
echo("<tr>");
echo("<td>".$row["min"]."</td><td>".$row["nazwa_dzial"]."</td>");                    
echo("</tr>");
}
echo("</table>");
?>
 
<?php
echo("<h2><p>zadanie 11 - Najmłodsi pracownicy z działu: handel i serwis (Imię, nazwa_dział, wiek)</p></h2>");
$result = $conn->query('Select min(year(curdate())-year(data_urodzenia)) as minwiek, nazwa_dzial from pracownicy, organizacja where dzial=id_org and (nazwa_dzial="handel" or nazwa_dzial="serwis") group by nazwa_dzial');
echo("<table border>");
echo("<th>Wiek</th>");
echo("<th>Imię</th>");
echo("<th>Nazwa_Działu</th>");
while($row=$result->fetch_assoc()){ 
echo("<tr>");
echo("<td>".$row["imie"]."</td><td>".$row["minwiek"]."</td><td>".$row["nazwa_dzial"]."</td>");                    
echo("</tr>");
}
echo("</table>");
?>  
  
<?php
echo("<h2><p>zadanie 12 - Długość życia pracowników w dniach</p></h2>");
$result = $conn->query('SELECT imie, DATEDIFF(CURDATE(),data_urodzenia) as dni_zycia from pracownicy');
echo("<table border>");
echo("<th>Imie</th>");
echo("<th>Dni_życia</th>");
while($row=$result->fetch_assoc()){ 
echo("<tr>");
echo("<td>".$row["imie"]."</td><td>".$row["dni_zycia"]."</td>");                    
echo("</tr>");
}
echo("</table>");
?>   

<?php
echo("<h2><p>zadanie 13 - Najstarszy mężczyzna</p></h2>");
$result = $conn->query('SELECT * from pracownicy where imie not like "%a" order by data_urodzenia asc limit 1');
echo("<table border>");
echo("<th>ID</th>");
echo("<th>Imię</th>");
echo("<th>Dział</th>");
echo("<th>Zarobki</th>");
while($row=$result->fetch_assoc()){ 
echo("<tr>");
echo("<td>".$row["id_pracownicy"]."</td><td>".$row["imie"]."</td><td>".$row["dzial"]."</td><td>".$row["zarobki"]."</td>");                   
echo("</tr>");
}
echo("</table>");
?>

<h1>Formatowanie dat</h1>
      </div>
    </div>
    </div>
</html>

