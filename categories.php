<html>
<div class="categories">
    <h2>Categories</h2>
    <ul class="cate">
    <?php
        $categoryq=mysqli_query($connection,"select * from tbl_category");
        while($cdata = mysqli_fetch_array($categoryq))
        {
            echo"<li><a href='shop.php?categoryid={$cdata['category_id']}'><i class='fa fa-arrow-right' aria-hidden='true'></i>{$cdata['category_name']}</a></li>";
        }
        ?>
</div>
</html>