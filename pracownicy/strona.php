<html>
<head>
<link rel="icon" type="image/png" sizes="16x16" href="/favicon-16x16.png">
<link rel="stylesheet" href="../assets/style.css">
</head>
<body>
<div class="item colorRed">
        <div class="nav">
<h2> Menu:</h2>
          <ul>
            <li><a href="https://github.com/SK-2019/php-sql-wprowadzenie-ewelina-augustynowicz-09">github</a></li>
            <br>
            <li><a class="nav_link" href="index.php"> Strona głowna</a></li>
            <br>
            <li><a class="nav_link" href="pracownicy/pracownicy.php"> Pracownicy </a></li>
            <br>
            <li><a class="nav_link" href="pracownicy/pracownicyiorganizacja.php"> Pracownicy i organizacja </a></li>
            <br>
            <li><a class="nav_link" href="pracownicy/funkcjeAgregujace.php"> Funkcje agregujące</a></li>
            <br>
            <li><a class="nav_link" href="pracownicy/dataiczas.php"> Data i czas</a></li>
            <br>
            <li><a class="nav_link" href="pracownicy/formularz.html">Formularz</a></li>
            <br>
            <li><a class="nav_link" href="pracownicy/insert.php">Insert</a></li>
            <br>
            <li><a class="nav_link" href="pracownicy/daneDoBazy.php">Dane do bazy</a></li>
            <br>
            <li><a class="nav_link" href="pracownicy/delete.php">Delete</a></li>
          </ul> 
</div> 

<h2>Ewelina Augustynowicz<br>klasa 2Ti grupa 2<br>numer 1</h2>
    <h1><b>Jesteś na strona.php</b></h1>


</html>

<?php

echo($_POST["imie"]);
echo($_POST['dzial']);
echo($_POST['zarobki']);
echo($_POST['data_ur']);

     
?>

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


require_once("connect.php");
$sql = "INSERT INTO pracownicy(`id_pracownicy`, `imie`, `dzial`, `zarobki`, `data_urodzenia`, `nazwa_dzialu`) VALUES(NULL,'".$_POST['imie']."', '".$_POST['dzial']."', '".$_POST['zarobki']."', '".$_POST['data_ur']."', '".$_POST['nazwa_dzialu']."')";
if ($conn->query($sql) === TRUE) {
echo("<p class='precord'>  New record created successfully!</p>");
} else {
echo("<p class='precord'>'Error: ' . $sql . '<br>' . $conn->error</p>");
}

?>
