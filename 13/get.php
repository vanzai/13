<?php 
    require('connect.php');

    if (isset($_REQUEST['author'])&&$_REQUEST['author']!="") {
        $sql = "SELECT DISTINCT title, author, pages, publisher FROM books WHERE author = \"{$_REQUEST['author']}\"";
    }
    else{
        $sql = "SELECT DISTINCT title, author, pages, publisher FROM books";
    }
    
    $result = mysqli_query($connection, $sql);

    if ($result == false) {
        echo "{$sql} <br/>";
        echo ("Произошла ошибка при выполнении запроса". mysqli_connect_error()."<br/>");
    }
    else{

    $rows = mysqli_fetch_all($result, MYSQLI_ASSOC);
        echo "<table>";
        echo "<tr>";
            echo "<td>title</id>";
            echo "<td>author</id>";
            echo "<td>pages</id>";
            echo "<td>publisher</id>";
        echo "</tr>";
        foreach ($rows as $row) {
            echo "<tr>";
                echo "<td>{$row['title']}</id>";
                echo "<td>{$row['author']}</id>";
                echo "<td>{$row['pages']}</id>";
                echo "<td>{$row['publisher']}</id>";
            echo "</tr>";
            
        }
        echo "<table>";
    }

?>
</body>
</html>
