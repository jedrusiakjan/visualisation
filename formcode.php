<?php
    $base = mysqli_connect("localhost", "35723944_main", "dupa_123", "35723944_main", "3306");  
    $q = "select * from Użytkownicy where Nazwa = '".$_POST['nick']."'";
    echo $q;    
    $query = mysqli_query($base,$q);
    echo '<br>';
    while($wiersz = mysqli_fetch_array($query)){
        $wiersz['Nazwa'] = $nazwa;
        $wiersz['Hasło'] = $haslo;
    }
    echo $nazwa.'<br>'.$haslo;


?>