<?php
    include("./php/connectionAPI.php");
    $ConnectAPI = new ConnectAPI("getSearchQuery");
    $resultQuery = $ConnectAPI->resultQuery;
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>API Vendus - Pesquisa</title>
</head>
<body>
    <h1>Search Document(s)</h1>

    <form action="searchPage.php" method="GET">
        <input type="text" name="searchQuery" id="searchQueryPage" />
        <button type="submit" id="searchPage">Search</button>
    </form>

    <table border="1">
        <thead>
            <tr>
                <th>ID</th>
                <th>Number Document</th>
                <th>Type</th>
            </tr>
        </thead>
        <tbody>
            <?php
                for($i = 0; $i < count($resultQuery); $i++) {
                    echo '<tr>'.
                            '<td>'.$resultQuery[$i]["id"].'</td>'.
                            '<td>'.$resultQuery[$i]["number"].'</td>'.
                            '<td>'.$resultQuery[$i]["type"].'</td>'.
                        '</tr>';
                }
            ?>
        </tbody>
    </table>

    <a href="index.php">Back</a>
</body>
</html>