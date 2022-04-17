<?php
    include("./php/conectionSDK.php");
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>API Vendus - List</title>
</head>
<body>
    <h1>List Document's</h1>

    <form action="searchPage.php" method="GET">
        <input type="text" name="searchQuery" id="searchQueryList" />
        <button type="submit" id="searchList">Search</button>
    </form>

    <form action="index.php" method="GET">
        <select name="type" id="type">
            <option value="ALL">ALL</option>
            <option value="FT">FT</option>
            <option value="RG">RG</option>
            <option value="EC">EC</option>
            <option value="GT">GT</option>
            <option value="GD">GD</option>
        </select>
        <button type="submit" id="filter">Filter</button>
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
                for($i = 0; $i < count($documents); $i++) {
                    if(filterTypeDocument() == $documents[$i]["type"] || filterTypeDocument() == "ALL") {
                        echo '<tr>'.
                                '<td>'.'<a href="./detailPage.php?idDocument='.$documents[$i]["id"].'">'.$documents[$i]["id"].'</a>'.'</td>'.
                                '<td>'.$documents[$i]["number"].'</td>'.
                                '<td>'.$documents[$i]["type"].'</td>'.
                            '</tr>';
                    }
                }
            ?>
        </tbody>
    </table>
</body>
</html>