<?php 




$sql = "SELECT order_stts.stts,order_stts.orderid ,orders.order_id FROM order_stts INNER JOIN orders ON order_stts.orderid = orders.order_id && orders.cus_id= $cusId; ";

$result = $conn->query($sql);


if ($result->num_rows > 0) {

  echo "<table>";
  while ($row = $result->fetch_assoc()) {

    echo "<tr>   "; 
                
    echo "<th>" . $row["orderid"] . "</th>";
    echo "<th>" . $row["stts"] . "</th>";
    echo "</tr>   "; 
  }
  echo "</table>";
}

