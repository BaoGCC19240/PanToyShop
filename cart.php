    <?php
    include_once('connection.php');
    session_start();
    $_SESSION['Sum']=0;
?>
<?php
if(isset($_GET['btn_Submit'])){
            
                echo "<p>Please login before buy !!!</p>";
            
        }
?>
    <!-- -----------------cart item details------------------- -->
    <div class="small-container cart-page">
      
        <table>
            <tr>
                <th>Product</th>
                <th>Price</th>
                <th>Quantity</th>
                <th>Subtotal</th>
            </tr>
            <?php
            if(isset($_SESSION['cart'])){
                foreach($_SESSION['cart'] as $key => $val):
                    $result = pg_query($conn, "Select * from product where pro_id ='$key' ");
                    while($row = pg_fetch_array($result)){
                        $total = $val * $row['pro_price'];
                        $_SESSION['Sum']+=$total; 
            ?>
            <tr>
                <td>
                    <div class="cart-info">
                        
                        <img src="images/<?php echo $row['pro_image']; ?>" />
                        <div>
                            <p><?php echo $row['pro_name']; ?></p>
                            <a href="add.php?id=<?php echo $key; ?>&action=de&page=cart">Remove</a>
                            

                        </div>
                        
                    </div>
                </td>
                <td><p><?php echo $row['pro_price'];?>$</p></td>

                <td>
                    <a href="add.php?id=<?php echo $row['pro_id']; ?>&action=update&page=cart">
                        <input type="button" value="-" />
                    </a>
                    <input readonly type="text" value="<?php echo $val ?>" />
                    <a href="add.php?id=<?php echo $row['pro_id']; ?>&action=add&page=cart"><input type="button" value="+" /></a>
                </td>
                <td><?php echo $total ?>$</td>
            </tr>
            <?php
                          
                    }
                endforeach;
            }
            ?>
        </table>
            
        <div class="total-price">
            <table>
                <tr>
                    <td>Total</td>
                    <td><?php echo $_SESSION['Sum']; ?>$</td>
                </tr>  
                
            </table>
            
        </div>
        <form method="get">
            <input type="submit" class="btn btn-primary" id="btn_checkout" name="btn_Submit" value="Submit" />
        </form>

        
        
    </div>
