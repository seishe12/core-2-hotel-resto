<?php 
  include("config/config.php");
  
   $prod_name = $_POST['name'];
  
   $sql = "SELECT * FROM rpos_products WHERE prod_name LIKE '$prod_name%'";  
   $query = mysqli_query($conn,$sql);
   $data='';
   while($row = mysqli_fetch_assoc($query))
   {
       $data .=  "<tr>
                        <td>
                            <img src=../order_mana/assets/img/products/".$row['prod_img']." class='img-responsive img-thumbnail' width='150'>
                        </td>
                        <td>".$row['prod_code']."</td>
                        <td>".$row['prod_name']."</td>
                        <td> ₱ ".$row['prod_price']."</td>
                        <td> 
                        <a href='make_oder.php?prod_id=".$row['prod_id']."&prod_name=".$row['prod_name']."&prod_price=".$row['prod_price']."'>
                            <button class='btn btn-sm btn-success'>
                                <i class='fas fa-cart-plus'></i>
                                Place Order
                            </button>
                        </td>
                </tr>";
   }
    echo $data;
 ?>