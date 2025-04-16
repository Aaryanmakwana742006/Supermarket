<?php
include './connection.php';
$q = mysqli_query($connection,"select * from tbl_product");

echo "<table border='1'>";
echo "<tr>";
echo "<th>ID</th>";
echo "<th>Name</th>";
echo "<th>Price</th>";
echo "<th>Category ID</th>";
echo "<th>Photo</th>";
echo "<th>Details</th>";

echo "</tr>";
while($data = mysqli_fetch_array($q))
{
    $cq = mysqli_query($connection,"select * from tbl_product where category_id='{$data['category_id']}'");
    $cdata = mysqli_fetch_array($cq);
    echo "<tr>";
    echo "<td>{$data['product_id']}</td>";
    echo "<td>{$data['product_name']}</td>";
    echo "<td>₹{$data['product_price']}</td>";
    echo "<td>{$data['category_id']}</td>";
    echo "<td><a target='_blank' href='uploads'/{$data['product_image']}'>
    <img width='125px' src='uploads/{$data['product_image']}'/></a></td>";
    echo "<td>{$data['product_details']}</td>";
    echo "</tr>";
}
echo "</table>";
?>