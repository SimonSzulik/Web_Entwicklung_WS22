<?php

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "webprojekt";

/*
$servername = "sql204.epizy.com";
$username = "epiz_33045793";
$password = "PJxtJScvmHIdbPR";
$dbname = "epiz_33045793_webprojekt";
*/

$conn = new mysqli($servername, $username, $password, $dbname);

if($conn->connect_error){
    die("Keine Verbindung möglich!");
}
else{

    echo('Namen der Benutzer und der Aufgaben die sie erstellt haben' . '<br>');

    $sql = "SELECT mitglieder.Username, aufgaben.Name FROM mitglieder INNER JOIN aufgaben ON aufgaben.ErstellerId = mitglieder.Id";
    $result = $conn->query($sql);
    echo('<ol>');
    if($result->num_rows > 0){
        while($row = $result->fetch_object()){
            echo('<li>' . 'Name: ' . $row->Username. '___Name des Projektes: ' . $row->Name );
        }
    }

    echo('<br>');
    echo('<br>');
    echo('Namen der Projekte, die von Nutzern erstellt worden sind die auch Aufgaben esrtellt haben: ' . '<br>');
    echo('<br>');

    $sql2 = "SELECT projekte.Name FROM mitglieder INNER JOIN aufgaben ON Aufgaben.ErstellerId = mitglieder.Id INNER JOIN projekte ON Projekte.ErstellerId = mitglieder.Id";
    $result2 = $conn->query($sql2);
    echo('<ol>');
    if($result2->num_rows > 0){
        while($row = $result2->fetch_object()){
            echo('<li>' . 'ProjektName: ' . $row->Name);
        }
    }

    echo('<br>');
    echo('<br>');
    echo('Namen & Email alles Mitglieder Alle Mitglieder: ' . '<br>');
    echo('<br>');

    $sql3 = "SELECT mitglieder.Username, mitglieder.EMail FROM mitglieder";
    $result3 = $conn->query($sql3);
    echo('<ol>');
    if($result3->num_rows > 0){
        while($row = $result3->fetch_object()){
            echo('<li>' . 'Name: ' . $row->Username. '___ Email: ' . $row->EMail );
        }
    }

}