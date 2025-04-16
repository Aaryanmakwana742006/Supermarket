<html>
<li class="dropdown">
    <a href="#" class="dropdown-toggle" data-toggle="dropdown">Groceries<b class="caret"></b></a>
    <ul class="dropdown-menu multi-column columns-3">
        <div class="row">
            <div class="multi-gd-img">
                <ul class="multi-column-dropdown">
                    <h6>All Groceries</h6>
                    <?php
                    $categoryq = mysqli_query($connection, "select * from tbl_category");
                    while ($cdata = mysqli_fetch_array($categoryq)) {
                        echo "<li><a href='shop.php?categoryid={$cdata['category_id']}'><i class='fa fa-arrow-right' aria-hidden='true'></i>{$cdata['category_name']}</a></li>";
                    }
                    ?>
                </ul>
            </div>
        </div>
    </ul>
</li>
<li><a href="shop.php">Shop</a></li>
<li class="dropdown">
    <a href="#" class="dropdown-toggle" data-toggle="dropdown">Beverages<b class="caret"></b></a>
    <ul class="dropdown-menu multi-column columns-3">
        <div class="row">
            <div class="multi-gd-img">
                <ul class="multi-column-dropdown">
                    <h6>Tea & Coeffe</h6>
                    <li><a href="beverages.html">Green Tea</a></li>
                    <li><a href="beverages.html">Ground Coffee</a></li>
                    <li><a href="beverages.html">Herbal Tea</a></li>
                    <li><a href="beverages.html">Instant Coffee</a></li>
                    <li><a href="beverages.html"> Tea </a></li>
                    <li><a href="beverages.html">Tea Bags</a></li>
                </ul>
            </div>
        </div>
    </ul>
</li>
<li><a href="offers.html">Offers</a></li>
<li><a href="contact.html">Contact</a></li>
<?php
if (isset($_SESSION['uid']))
{
    echo "<li><a href='login.php'>Hi {$_SESSION['uname']}</a></li>";
    echo "<li><a href='logout.php'>Logout</a></li>";
} else {
    echo "<li><a href='login.php'>login</a></li>";
}
?>
<li><a href='cart.php'>Cart</a></li>
</html>