<div id="footer"><!-- #footer Begin -->
    <div class="container"><!-- container Begin -->
        <div class="row"><!-- row Begin -->
            <div class="col-sm-6 col-md-4"><!-- col-sm-6 col-md-3 Begin -->
               
               <h4>Trang</h4>
                
                <ul><!-- ul Begin -->
                    <li><a href="cart.php">Giỏ hàng</a></li>
                    <li><a href="contact.php">Liên hệ</a></li>
                    <li><a href="shop.php">Cửa hàng</a></li>
                    <li><a href="customer/my_account.php">Tài khoản</a></li>
                </ul><!-- ul Finish -->
                
                <hr>
                
                <h4>Người dùng</h4>
                
                <ul><!-- ul Begin -->
                           
                           <?php 
                           
                           if(!isset($_SESSION['customer_email'])){
                               
                               echo"<a href='checkout.php'>Đăng nhập</a>";
                               
                           }else{
                               
                              echo"<a href='customer/my_account.php?my_orders'>Tài khoản</a>"; 
                               
                           }
                           
                           ?>
                    
                    <li><a href="customer_register.php">Đăng kí</a></li>
                </ul><!-- ul Finish -->
                
                <hr class="hidden-md hidden-lg hidden-sm">
                
            </div><!-- col-sm-6 col-md-3 Finish -->
            
            <div class="com-sm-6 col-md-4"><!-- col-sm-6 col-md-3 Begin -->
                
                <h4>Danh mục sản phẩm</h4>
                
                <ul><!-- ul Begin -->
                
                    <?php 
                    
                        $get_p_cats = "select * from product_categories";
                    
                        $run_p_cats = mysqli_query($con,$get_p_cats);
                    
                        while($row_p_cats=mysqli_fetch_array($run_p_cats)){
                            
                            $p_cat_id = $row_p_cats['p_cat_id'];
                            
                            $p_cat_title = $row_p_cats['p_cat_title'];
                            
                            echo "
                            
                                <li>
                                
                                    <a href='shop.php?p_cat=$p_cat_id'>
                                    
                                        $p_cat_title
                                    
                                    </a>
                                
                                </li>
                            
                            ";
                            
                        }
                    
                    ?>
                
                </ul><!-- ul Finish -->
                
                <hr class="hidden-md hidden-lg">
                
            </div><!-- col-sm-6 col-md-3 Finish -->
            
            <div class="col-sm-6 col-md-4"><!-- col-sm-6 col-md-3 Begin -->
                
                <h4>Về chúng tôi</h4>
                
                <p><!-- p Start -->
                    
                    <strong>Nhóm 17</strong>
                    <br/>Nguyễn Văn Thành Long
                    <br/>Trần Văn Dinh
                    <br/>Nguyễn Kim Đạt
                    
                </p><!-- p Finish -->
                
                <a href="contact.php">Đến trang Liên hệ của chúng tôi</a>
                
                <hr class="hidden-md hidden-lg">
                
            </div><!-- col-sm-6 col-md-3 Finish -->
            
            <!-- <div class="col-sm-6 col-md-3">
                
                <h4>Get The News</h4>
                
                <p class="text-muted">
                    Dont miss our latest update products.
                </p>
                
                <form action="#" method="post" class="subscribe-wthree">
                            <div class="flex-wrap subscribe-wthree-field">
                                <input class="form-control" type="email" placeholder="Type Your Email Address" name="email" required="">
                                <button class="btn btn-style btn-primary" type="submit">Subscribe</button>
                            </div>
                        </form>
                
                <h4>Keep In Touch</h4>
                
                <p class="social">
                    <a href="#" class="fa fa-facebook"></a>
                    <a href="#" class="fa fa-twitter"></a>
                    <a href="#" class="fa fa-instagram"></a>
                    <a href="#" class="fa fa-google-plus"></a>
                    <a href="#" class="fa fa-envelope"></a>
                </p>
                
            </div> -->
        </div><!-- row Finish -->
    </div><!-- container Finish -->
</div><!-- #footer Finish -->