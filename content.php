

<div class="row">
                <div class="col-2">
                    <h1>Toys for teenagers<br> High Quality</h1>
                    <p>Toys bring positive benefits to teenagers in their physical and intellectual development.</p>
                    <a href="" class="btn">Explore Now &#8594;</a>
                </div>
                <div class="col-2">
                    <img src="images/background.png">
                </div>
            </div>

            </div>

            </div>
<?php
include_once('connection.php');
$sq= "Select * from product";
$res = mysqli_query($conn,$sq);
$row =mysqli_fetch_array($res, MYSQLI_ASSOC);
?>
<h2 class="title">Latest Products</h2>
<div class="row">
    <div class="col-4">
        <img src="images/product-5.jpg">
        <h4><?php echo $row['Pro_Name'];?></h4>
        <p>$<?php echo $row['Pro_Price'];?></p>
        <a href="" class="btn">View Detail &#8594;</a>
    </div>
    <div class="col-4">
        <img src="images/product-6.jpg">
        <h4>Red Printed T-Shirt</h4>
        <p>$50.00</p>
                <a href="?page=viewdetail" class="btn">View Detail &#8594;</a>
    </div>
    <div class="col-4">
        <img src="images/product-7.jpg">
        <h4>Red Printed T-Shirt</h4>
        <div class="rating">
            <i class="fa fa-star"></i>
            <i class="fa fa-star"></i>
            <i class="fa fa-star"></i>
            <i class="fa fa-star"></i>
            <i class="fa fa-star-half-o"></i>
        </div>
        <p>$50.00</p>
    </div>
    <div class="col-4">
        <img src="images/product-8.jpg">
        <h4>Red Printed T-Shirt</h4>
        <div class="rating">
            <i class="fa fa-star"></i>
            <i class="fa fa-star"></i>
            <i class="fa fa-star"></i>
            <i class="fa fa-star"></i>
            <i class="fa fa-star-o"></i>
        </div>
        <p>$50.00</p>
    </div>


    <div class="col-4">
        <img src="images/product-9.jpg">
        <h4>Red Printed T-Shirt</h4>
        <div class="rating">
            <i class="fa fa-star"></i>
            <i class="fa fa-star"></i>
            <i class="fa fa-star"></i>
            <i class="fa fa-star"></i>
            <i class="fa fa-star-o"></i>
        </div>
        <p>$50.00</p>
    </div>
    <div class="col-4">
        <img src="images/product-10.jpg">
        <h4>Red Printed T-Shirt</h4>
        <div class="rating">
            <i class="fa fa-star"></i>
            <i class="fa fa-star"></i>
            <i class="fa fa-star"></i>
            <i class="fa fa-star-half-o"></i>
            <i class="fa fa-star-o"></i>
        </div>
        <p>$50.00</p>
    </div>
    <div class="col-4">
        <img src="images/product-11.jpg">
        <h4>Red Printed T-Shirt</h4>
        <div class="rating">
            <i class="fa fa-star"></i>
            <i class="fa fa-star"></i>
            <i class="fa fa-star"></i>
            <i class="fa fa-star"></i>
            <i class="fa fa-star-half-o"></i>
        </div>
        <p>$50.00</p>
    </div>
    <div class="col-4">
        <img src="images/product-12.jpg">
        <h4>Red Printed T-Shirt</h4>
        <div class="rating">
            <i class="fa fa-star"></i>
            <i class="fa fa-star"></i>
            <i class="fa fa-star"></i>
            <i class="fa fa-star"></i>
            <i class="fa fa-star-o"></i>
        </div>
        <p>$50.00</p>
    </div>
</div>
    </div>