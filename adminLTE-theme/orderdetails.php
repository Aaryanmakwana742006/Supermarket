<?php
$connection = mysqli_connect("localhost", "root", "", "apdb");
$q = mysqli_query($connection,"select * from tbl_order_details");

echo "<table border='1'>";
echo "<tr>";
echo "<th>Order Details Id</th>";
echo "<th>Order ID</th>";
echo "<th>Product ID</th>";
echo "<th>Photo</th>";
echo "<th>Details</th>";
echo "</tr>";

while($data = mysqli_fetch_array($q))
{
    echo "<tr>";
    echo "<td>{$data['order_details_id']}</td>";
    echo "<td>{$data['order_id']}</td>";
    echo "<td>{$data['product_id']}</td>";
    echo "<td>{$data['product_qty']}</td>";
    echo "<td>{$data['product_price']}</td>";
    echo "</tr>";
}
echo "</table>";
?>