<?php 

    $active='Shop';
    include("includes/header.php");
    include("includes/db.php");

?>

<div class="navbar-collapse collapse right"><!-- navbar-collapse collapse right Begin -->
                   
                   <button class="btn btn-primary navbar-btn" type="button" data-toggle="collapse" data-target="#search"><!-- btn btn-primary navbar-btn Begin -->
                       
                       <span class="sr-only">Toggle Search</span>
                       
                       <i class="fa fa-search"></i>
                       
                   </button><!-- btn btn-primary navbar-btn Finish -->
                   
               </div><!-- navbar-collapse collapse right Finish -->
               
               <div class="collapse clearfix" id="search"><!-- collapse clear   fix Begin -->
                   
                   <form method="get" action="searchResults.php" class="navbar-form"><!-- navbar-form Begin -->
                       
                       <div class="input-group"><!-- input-group Begin -->
                           
                           <input type="text" id="searchTerm" class="form-control" placeholder="Search" name="searchTerm" required>
                           
                           <span class="input-group-btn"><!-- input-group-btn Begin -->
                           
                           <button type="submit" name="search" value="Search" class="btn btn-primary"><!-- btn btn-primary Begin -->
                               
                               <i class="fa fa-search"></i>
                               
                           </button>
                           
                           </span>
                           
                       </div>
                       
                   </form>
                   
               </div>

               </div>
           
           </div>
           
       </div>
   <div id="content">
       <div class="container">
           <div class="col-md-12">
               
               <ul class="breadcrumb">
                   <li>
                       <a href="shop.php">Cửa hàng</a>
                   </li>
                   <li>
                       Tìm kiếm sản phẩm 
                   </li>
               </ul>
               
           </div>
           <div class="col-md-3">
               
           </div>
           
           <div class="col-md-12">
                <div class='box text-center'>
                                <h1>Kết quả tìm kiểm sản phẩm</h1>
                </div><!-- box Finish -->
               <div class="row"><!-- row Begin -->
                <?php
                if ($_SERVER["REQUEST_METHOD"] == "GET" && isset($_GET["searchTerm"])) {
                    $searchTerm = $_GET["searchTerm"];
                
                    // Truy vấn tìm kiếm sản phẩm
                    $sql = "SELECT * FROM products WHERE product_keywords LIKE '%$searchTerm%'";
                    $result = $con->query($sql);
                
                    if ($result->num_rows > 0) {
                        // Hiển thị kết quả
                        while ($row = $result->fetch_assoc()) {
                            $pro_id = $row['product_id'];
        
                            $pro_title = $row['product_title'];

                            $pro_price = $row['product_price'];

                            $pro_img1 = $row['product_img1'];
                            // echo "Product ID: " . $row["product_id"]. " - Name: " . $row["product_title"]. "<br>";
                            echo "
                                
                                    <div class='col-md-3 col-sm-6 center-responsive'>
                                    
                                        <div class='product'>
                                        
                                            <a href='details.php?pro_id=$pro_id'>
                                            
                                                <img class='img-cart' src='admin_area/product_images/$pro_img1'>
                                            
                                            </a>
                                            
                                            <div class='text'>
                                            
                                                <h3>
                                                
                                                    <a href='details.php?pro_id=$pro_id'> $pro_title </a>
                                                
                                                </h3>
                                            
                                                <p class='price'>

                                                    $pro_price ₫

                                                </p>

                                                <p class='buttons'>

                                                    <a class='btn btn-default' href='details.php?pro_id=$pro_id'>

                                                        Chi tiết

                                                    </a>

                                                    <a class='btn btn-primary' href='details.php?pro_id=$pro_id'>

                                                        <i class='fa fa-shopping-cart'></i> Thêm vào giỏ
                                                    </a>

                                                </p>
                                            
                                            </div>
                                        
                                        </div>
                                    
                                    </div>
                                
                                ";
                                
                        }
                    } else {
                        echo "No products found.";
                    }
                }
                ?>
               </div><!-- row Finish -->
           </div>
       </div>
   </div>
   
   <?php 
    
    include("includes/footer.php");
    
    ?>
    
    <script src="js/jquery-331.min.js"></script>
    <script src="js/bootstrap-337.min.js"></script>
    
    
</body>
</html>