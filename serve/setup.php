<?php
    require_once "connect.php";//import connect.php
    //remove bang neu ton tai
    $query = "DROP TABLE Things";
    $result = $conn->query($query);
    //Tạo bảng mới
    $query = "CREATE TABLE Things (ID varchar(15), Description varchar (15))";
    $result = $conn->query($query);
    //Insert data mẫu
    $query = "INSERT INTO Things (ID , Description) value ('1', 'Things 1')";
    $result = $conn->query($query);
    $query = "INSERT INTO Things (ID , Description) value ('2', 'Things 2')";
    $result = $conn->query($query);
    $query = "INSERT INTO Things (ID , Description) value ('3', 'Things 3')";
    $result = $conn->query($query);
    $query = "INSERT INTO Things (ID , Description) value ('4', 'Things 4')";
    $result = $conn->query($query);
    $query = "INSERT INTO Things (ID , Description) value ('5', 'Things 5')";
    $result = $conn->query($query);
    echo "Done";
?>



