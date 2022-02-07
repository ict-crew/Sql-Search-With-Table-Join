
<?php 

$sql = "SELECT * FROM orders where cus_id = " . $cusId;

$result = $conn->query($sql);


if ($result->num_rows > 0) {

    while ($row = $result->fetch_assoc()) {
         
        $sql2 = "SELECT * FROM order_stts where orderid = " .$row["order_id"];

        $result2 = $conn->query($sql2);


        if ($result2->num_rows > 0) {
            echo "<table>";
            while ($row2 = $result2->fetch_assoc()) {

                echo "<tr>   "; 
                echo "<th>" . $row2["orderid"] . "</th>";
                echo "<th>" . $row2["stts"] . "</th>";
                echo "</tr>   ";        

            }
            
            echo "</table>";
        }
    }
}
