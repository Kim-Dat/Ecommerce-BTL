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
                       <a href="index.php">Trang chủ</a>
                   </li>
                   <li>
                       Cửa hàng
                   </li>
               </ul>
               
           </div>
           <div class="col-md-3">
   
   <?php 
    
    include("includes/sidebar.php");
    
    ?>
               
           </div>
           
           <div class="col-md-9">
             
             <?php 
               
                if(!isset($_GET['p_cat'])){
                    
                    if(!isset($_GET['cat'])){
              
                      echo "

                       <div class='box'>
                           <h1>Cửa hàng </h1>
                           <p>
                              Cửa hàng bán quần, áo, đầm nữ , phụ kiện theo xu hướng. Chúng tôi luôn cập nhật mẫu mới phù hợp với thời đại.
                           </p>
                       </div><!-- box Finish -->

                       ";
                        
                    }
                   
                   }
               
               ?>
               
               <div class="row"><!-- row Begin -->
               
                   <?php 
                   
                        if(!isset($_GET['p_cat'])){
                            
                         if(!isset($_GET['cat'])){
                            
                            $per_page=6;
                            $page = 1;
                            if(isset($_GET['page'])){
                                
                                $page = $_GET['page'];
                                
                            }
                            
                            $start_from = ($page-1) * $per_page;
                             
                            $get_products = "select * from products order by 1 DESC LIMIT $start_from,$per_page";
                             
                            $run_products = mysqli_query($con,$get_products);
                             
                            while($row_products=mysqli_fetch_array($run_products)){
                                
                                $pro_id = $row_products['product_id'];
        
                                $pro_title = $row_products['product_title'];

                                $pro_price = $row_products['product_price'];

                                $pro_img1 = $row_products['product_img1'];
                                
                                echo "
                                
                                    <div class='col-md-4 col-sm-6 center-responsive'>
                                    
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
                        
                   ?>
               
               </div><!-- row Finish -->
               
               <center>
                   <ul class="pagination"><!-- pagination Begin -->
					 <?php
                             
                    $query = "select * from products";
                             
                    $result = mysqli_query($con,$query);
                             
                    $total_records = mysqli_num_rows($result);

                    $current_page = isset($_GET['page']) ? $_GET['page'] : 1;
                             
                    $total_pages = ceil($total_records / $per_page);
                             
                        if ($current_page > 1 && $total_pages > 1){
                            echo "<li>";
                            echo '<a href="shop.php?page='.($current_page-1).'">Prev</a>';
                            echo "</li>";
                        }
                             
                        for($i=1; $i<=$total_pages; $i++){
                            if ($i == $current_page){
                                echo "<li>";
                                echo '<span style="background: #cccc; color: #4fbfa8">'.$i.'</span>';
                                echo "</li>";
                            }
                            else{
                                echo "<li>";
                                echo '<a href="shop.php?page='.$i.'">'.$i.'</a>';
                                echo "</li>";
                            }
                            
                        };
                             
                        if ($current_page < $total_pages && $total_pages > 1){
                            echo "<li>";
                            echo '<a href="shop.php?page='.($current_page+1).'">Next</a>';
                            echo "</li>";
                        }
                             
					    	}
							
						}
					 
					 ?> 
                       
                   </ul><!-- pagination Finish -->
               </center>
                
                <?php 
               
               getpcatpro(); 
               
               getcatpro();
               
               ?>  
               
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