   <link rel="stylesheet" href="css/bootstrap.css">
   <div id="top">
        <form name="frm" method="post" action="">
        <h1>Manage each shop</h1>

            <?php
            include_once("connection.php");
            $No=1;
            $result =pg_query($conn,"Select shop_name, pro_name, pro_qty, or_qty  from orderdetail ord, product pro, shop sh where ord.pro_id= pro.pro_id and sh.shop_id=pro.shop_id");
            while($row=pg_fetch_array($result))
            {
            ?>

        <table id="tablecategory" class="table table-striped table-bordered" cellspacing="0" width="90%">
            <thead>
                <tr>
                    <th align="center"><strong>No.</strong></th>
                    <th align="center">
                        <strong>Shop Name</strong>
                    </th>
                    <th align="center">
                        <strong>Product Name</strong>
                    </th>
                    <th align="center">
                        <strong>Product quantity</strong>
                    </th>
                    <th align="center">
                        <strong>Product sold</strong>
                    </th>
                    <th align="center">
                        <strong>Product remain</strong>
                    </th>
                </tr>
             </thead>

			<tbody>
           
			<tr>
                <td class="cotCheckBox">
                    <?php echo $No;?>
                </td>
                <td class="cotCheckBox">
                    <?php echo $row['shop_name']; ?>
                </td>
              
                <td class="cotCheckBox">
                    <?php echo $row['pro_name']; ?>
                </td>
                <td class="cotCheckBox">
                    <?php echo $row['pro_qty']; ?>
                </td>
                <td class="cotCheckBox">
                    <?php echo $row['or_qty']; ?>
                </td>
                <td class="cotCheckBox">
                    <?php echo $row['pro_qty']-$row['or_qty']; ?>
                </td>

            </tr>
            <?php
                $No++;
                }
            ?>
			</tbody>
        </table>  
        
        
        <!--Nút Thêm mới , xóa tất cả-->
        <div class="row" style="background-color:#FFF"><!--Nút chức nang-->
            <div class="col-md-12">
            	
            </div>
        </div><!--Nút chức nang-->
 </form>
            </div>

   