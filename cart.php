    <?php
    include_once('connection.php');
    session_start();
    $_SESSION['Sum']=0;
?>
    <!-- -----------------cart item details------------------- -->
    <div class="small-container cart-page">
        <table>
            <tr>
                <th>Product</th>
                <th>Quantity</th>
                <th>Subtotal</th>
            </tr>
            <?php
            if(isset($_SESSION['cart'])){
                foreach($_SESSION['cart'] as $key => $val):
                    $result = mysqli_query($conn, "Select * from product where Pro_ID ='$key' ");
                    while($row = mysqli_fetch_array($result, MYSQLI_ASSOC)){
                        $total = $val * $row['Pro_Price'];
                        $_SESSION['Sum']+=$total; 
            ?>
            <tr>
                <td>
                    <div class="cart-info">
                        
                        <img src="images/buy-1.jpg" />
                        <div>
                            <p><?php echo $row['Pro_Name']; ?></p>
                            <small>
                                <?php echo $row['Pro_Price']; ?>$
                            </small>
                            <br />
                            <a href="add.php?id=<?php echo $key; ?>&action=de&page=cart">Remove</a>
                            

                        </div>
                        
                    </div>
                </td>

                <td>
                    <a href="add.php?id=<?php echo $row['Pro_ID']; ?>&action=update&page=cart">
                        <input type="button" value="-" />
                    </a>
                    <input readonly type="text" value="<?php echo $val ?>" />
                    <a href="add.php?id=<?php echo $row['Pro_ID']; ?>&action=add&page=cart"><input type="button" value="+" /></a>
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

                <input type="submit" class="btn btn-primary" id="btn_checkout" name="btn_Submit" value="Submit" />
        <?php
        if(isset($_POST['btn_Submit'])){
            
        }
        
    </div>
