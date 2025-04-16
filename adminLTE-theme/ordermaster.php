<?php
$connection = mysqli_connect("localhost", "root", "", "apdb");
$q = mysqli_query($connection,"select * from tbl_order_master");

echo "<table border='1'>";
echo "<tr>";
echo "<th>Order Id</th>";
echo "<th>Order Date</th>";
echo "<th>Order Status</th>";
echo "<th>User ID</th>";
echo "<th>Shipping Name</th>";
echo "<th>Shipping Mobile</th>";
echo "<th>Shipping Address</th>";
echo "<th>Payment Mode</th>";
echo "</tr>";

while($data = mysqli_fetch_array($q))
{
    echo "<tr>";
    echo "<td>{$data['order_id']}</td>";
    echo "<td>{$data['order_date']}</td>";
    echo "<td>{$data['order_status']}</td>";
    echo "<td>{$data['user_id']}</td>";
    echo "<td>{$data['shipping_name']}</td>";
    echo "<td>{$data['shipping_mobile']}</td>";
    echo "<td>{$data['shipping_address']}</td>";
    echo "<td>{$data['payment_mode']}</td>";
    echo "</tr>";
}
echo "</table>";
?>