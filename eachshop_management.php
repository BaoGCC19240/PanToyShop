   <link rel="stylesheet" href="css/bootstrap.css">
   <div id="top">
        <form name="frm" method="post" action="">
        <h1>Manage each shop</h1>


            <?php
            include_once('connection.php');
            $sq ="select shop_name, shop_id from shop";
            $re = pg_query($conn, $sq);
            while($rShop = pg_fetch_array($re)){
                $idshop = $rShop['shop_id'];
                $sum=3;
            ?>
        <table id="tablecategory" class="table table-striped table-bordered" cellspacing="0" width="90%">

            <thead id="nameshop">
                <tr>
                  <th>
                      <strong>
                          Manage <?php echo $rShop['shop_name']; ?> shop
                      </strong>
                  </th>                    
                </tr>
            </thead>
            
            <thead>                
                <tr>
                    <th align="center"><strong>No.</strong></th>
                    <th align="center">
                        <strong>Product Name</strong>
                    </th>
                    <th align="center">
                        <strong>Product quantity</strong>
                    </th>
                    <th align="center">
                        <strong>Product sold</strong>
                    </th>
                </tr>
             </thead>

			<tbody>
                <?php
            include_once("connection.php");
            $No=1;
            $result =pg_query($conn,"select * from product where shop_id =$idshop");
            while($row=pg_fetch_array($result))
            {
                $proid= $row['pro_id'];
                var_dump($proid);

                $sq=pg_query($conn,"select sum(or_qty) from orderdetail where pro_id='$proid'");
                $num = pg_fetch_array($sq);

                ?>
			<tr>
                <td class="cotCheckBox">
                    <?php echo $No;?>
                </td>
              
                <td class="cotCheckBox">
                    <?php echo $row['pro_name']; ?>
                </td>
                <td class="cotCheckBox">
                    <?php echo $row['pro_qty']; ?>
                </td>

                <td class="cotCheckBox">
                    <?php echo $num['sum']; ?>
                </td>

            </tr>
                <?php $No++;

            }
                ?> 
			</tbody>
        </table>  
            <?php
                
            }
            ?>      
        
        <!--Nút Thêm mới , xóa tất cả-->
        <div class="row" style="background-color:#FFF"><!--Nút chức nang-->
            <div class="col-md-12">
            	
            </div>
        </div><!--Nút chức nang-->
 </form>
            </div>

   