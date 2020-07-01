<?php 
    require('connect.php');

    if ($_REQUEST['title']!=""&&$_REQUEST['author']!=""&&$_REQUEST['pages']!=""&&$_REQUEST['publisher']!="") {
        
        $sql = "INSERT INTO books SET title = \"{$_REQUEST['title']}\", author = \"{$_REQUEST['author']}\", pages = \"{$_REQUEST['pages']}\", publisher = \"{$_REQUEST['publisher']}\"";
        $result = mysqli_query($connection, $sql);

        if ($result == false) {
            echo "{$sql} <br/>";
            echo ("Произошла ошибка при выполнении запроса". mysqli_connect_error()."<br/>");
        }
        else{
            echo ("Книга успешно добавлена! <br/>");
        }
    }
    else{
        echo "Не все поля заполнены";
    }
?>
</body>
</html>
