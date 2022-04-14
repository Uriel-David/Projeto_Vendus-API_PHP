<?php
  include("./php/detailDocument.php");
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>API Vendus - Detail Document</title>
</head>
<body>
  <h1>Search Document(s)</h1>

  <h3>Customer Document Information</h3>
  <table border="1">
      <thead>
          <tr>
              <th>ID</th>
              <th>Number Document</th>
              <th>Name</th>
              <th>Fiscal ID</th>
          </tr>
      </thead>
      <tbody>
          <?php
            echo '<tr>'.
                    '<td>'.$detailDocument["id"].'</td>'.
                    '<td>'.$detailDocument["number"].'</td>'.
                    '<td>'.$detailDocument["client"]["name"].'</td>'.
                    '<td>'.$detailDocument["client"]["fiscal_id"].'</td>'.
                '</tr>';
          ?>
      </tbody>
  </table>
  
  <h3>Items in The Document</h3>
  <table border="1">
      <thead>
          <tr>
              <th>Title</th>
              <th>Reference Document</th>
              <th>Stock Control</th>
              <th>Amounts (Net Total)</th>
              <th>Amounts (Net Gross)</th>
          </tr>
      </thead>
      <tbody>
          <?php
            echo '<tr>'.
                    '<td>'.$detailDocument["items"][0]["title"].'</td>'.
                    '<td>'.$detailDocument["items"][0]["reference_document"].'</td>'.
                    '<td>'.$detailDocument["items"][0]["stock_control"].'</td>'.
                    '<td>'.$detailDocument["items"][0]["amounts"]["net_total"].'</td>'.
                    '<td>'.$detailDocument["items"][0]["amounts"]["gross_total"].'</td>'.
                '</tr>';
          ?>
      </tbody>
  </table>

  <h3>Payments in The Document</h3>
  <table border="1">
      <thead>
          <tr>
              <th>ID Payment</th>
              <th>Title</th>
              <th>Amount</th>
          </tr>
      </thead>
      <tbody>
          <?php
            echo '<tr>'.
                    '<td>'.$detailDocument["payments"][0]["id"].'</td>'.
                    '<td>'.$detailDocument["payments"][0]["title"].'</td>'.
                    '<td>'.$detailDocument["payments"][0]["amount"].'</td>'.
                '</tr>';
          ?>
      </tbody>
  </table>

  <a href="index.php">Back</a>
</body>
</html>