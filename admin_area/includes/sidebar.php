<?php 
    
    if(!isset($_SESSION['admin_email'])){
        
        echo "<script>window.open('login.php','_self')</script>";
        
    }else{

?>
   
<nav class="navbar navbar-inverse navbar-fixed-top">
    <div class="navbar-header">
        
        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
            
            <span class="sr-only">Toggle Navigation</span>
            
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            
        </button>
        
        <a href="index.php?dashboard" class="navbar-brand">Trang quản trị</a>
        
    </div>
    
    <ul class="nav navbar-right top-nav">
        
        <li class="dropdown">
            
            <a href="#" class="dropdown-toggle" data-toggle="dropdown"><!-- dropdown-toggle begin -->
                
                <i class="fa fa-user"></i> <?php echo $admin_name;  ?> <b class="caret"></b>
                
            </a>
            
            <ul class="dropdown-menu"><!-- dropdown-menu begin -->
                <li><!-- li begin -->
                    <a href="index.php?user_profile=<?php echo $admin_id; ?>"><!-- a href begin -->
                        
                        <i class="fa fa-fw fa-user"></i> Profile
                        
                    </a><!-- a href finish -->
                </li><!-- li finish -->
                
                <li><!-- li begin -->
                    <a href="index.php?view_products"><!-- a href begin -->
                        
                        <i class="fa fa-fw fa-envelope"></i> Products
                        
                        <span class="badge"><?php echo $count_products; ?></span>
                        
                    </a><!-- a href finish -->
                </li><!-- li finish -->
                
                <li><!-- li begin -->
                    <a href="index.php?view_customers"><!-- a href begin -->
                        
                        <i class="fa fa-fw fa-users"></i> Customeres
                        
                        <span class="badge"><?php echo $count_customers; ?></span>
                        
                    </a><!-- a href finish -->
                </li><!-- li finish -->
                
                <li><!-- li begin -->
                    <a href="index.php?view_cats"><!-- a href begin -->
                        
                        <i class="fa fa-fw fa-gear"></i> Product Categories
                        
                        <span class="badge"><?php echo $count_p_categories; ?></span>
                        
                    </a><!-- a href finish -->
                </li><!-- li finish -->
                
                <li class="divider"></li>
                
                <li><!-- li begin -->
                    <a href="logout.php"><!-- a href begin -->
                        
                        <i class="fa fa-fw fa-power-off"></i> Log Out
                        
                    </a><!-- a href finish -->
                </li><!-- li finish -->
                
            </ul>
            
        </li>
        
    </ul>
    
    <div class="collapse navbar-collapse navbar-ex1-collapse">
        <ul class="nav navbar-nav side-nav">
            <li>
                <a href="index.php?dashboard">
                        
                        TRANG CHÍNH
                        
                </a>
                
            </li>
            
            <li>
                <a href="#" data-toggle="collapse" data-target="#products"> SẢN PHẨM
                        <i class="fa fa-fw fa-caret-down"></i>
                        
                </a>
                
                <ul id="products" class="collapse">
                    <li>
                        <a href="index.php?insert_product"> Thêm sản phẩm</a>
                    </li>
                    <li>
                        <a href="index.php?view_products"> Xem sản phẩm</a>
                    </li>
                </ul>
                
            </li>
            
            <li>
                <a href="#" data-toggle="collapse" data-target="#p_cat">
                        
                       DANH MỤC
                        <i class="fa fa-fw fa-caret-down"></i>
                        
                </a>
                
                <ul id="p_cat" class="collapse">
                    <li>
                        <a href="index.php?insert_p_cat">Thêm danh mục</a>
                    </li>
                    <li>
                        <a href="index.php?view_p_cats"> Xem danh mục</a>
                    </li>
                </ul>
                
            </li>
            
            <li>
                <a href="#" data-toggle="collapse" data-target="#cat">
                        
                        THỂ LOẠI
                        <i class="fa fa-fw fa-caret-down"></i>
                        
                </a>
                
                <ul id="cat" class="collapse">
                    <li>
                        <a href="index.php?insert_cat"> Thêm thể loại </a>
                    </li>
                    <li>
                        <a href="index.php?view_cats"> Xem thể loại </a>
                    </li>
                </ul>
                
            </li>
            
            <li>
                <a href="#" data-toggle="collapse" data-target="#slides">
                        
                        SLIDE
                        <i class="fa fa-fw fa-caret-down"></i>
                        
                </a>
                
                <ul id="slides" class="collapse">
                    <li>
                        <a href="index.php?insert_slide"> Thêm slide</a>
                    </li>
                    <li>
                        <a href="index.php?view_slides"> Xem slide</a>
                    </li>
                </ul>
                
            </li>
            
            <li>
                <a href="index.php?view_customers">
                    XEM NGƯỜI DÙNG
                </a>
            </li>
            
            <li>
                <a href="index.php?view_orders">
                    XEM ĐƠN
                </a>
            </li>
            
            <li>
                <a href="index.php?view_payments">
                    XEM THANH TOÁN
                </a>
            </li>
            
            <li>
                <a href="#" data-toggle="collapse" data-target="#users">
                        
                         ADMIN
                        <i class="fa fa-fw fa-caret-down"></i>
                        
                </a>
                
                <ul id="users" class="collapse">
                    <li>
                        <a href="index.php?insert_user"> Thêm admin </a>
                    </li>
                    <li>
                        <a href="index.php?view_users"> Xem admin</a>
                    </li>
                    <li>
                        <a href="index.php?user_profile=<?php echo $admin_id; ?>"> Chỉnh sửa </a>
                    </li>
                </ul>
                
            </li>
            
            <li>
                <a href="logout.php">
                   ĐĂNG XUẤT
                </a>
            </li>
            
        </ul>
    </div>
    
</nav>


<?php } ?>