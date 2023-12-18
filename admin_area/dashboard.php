<?php 
    
    if(!isset($_SESSION['admin_email'])){
        
        echo "<script>window.open('login.php','_self')</script>";
        
    }else{

?> 

<div class="row">
    <div class="col-lg-12">
        <h1 class="page-header"> Quản trị </h1>
        
        <ol class="breadcrumb">
            <li class="active">
            
                
            
            </li>
        </ol>
        
    </div>
</div>

<div class="row">
   
    <div class="col-lg-4 col-md-6">
        <div class="panel panel-primary">
            
            <div class="panel-heading">
                <div class="row">
                    <div class="col-xs-12 text-center">
                        <div class="huge"> <?php echo $count_products; ?> </div>
                           
                        <div> Sản phẩm </div>
                        
                    </div>  
                    
                </div>
            </div>
            
            <a href="index.php?view_products">
                <div class="panel-footer">
                   
                    <span class="pull-left">
                      Xem sản phẩm
                    </span>
                    
                    <span class="pull-right">
                    </span>
                    
                    <div class="clearfix"></div>
                    
                </div>
            </a>
            
        </div>
    </div>
   
    <div class="col-lg-4 col-md-6">
        <div class="panel panel-green">
            
            <div class="panel-heading">
                <div class="row">
                    
                    <div class="col-xs-12 text-center">
                        <div class="huge"> <?php echo $count_customers; ?> </div>
                           
                        <div> Người dùng</div>
                        
                    </div>
                    
                </div>
            </div>
            
            <a href="index.php?view_customers">
                <div class="panel-footer">  
                   
                    <span class="pull-left">
                       Xem người dùng
                    </span>
                    
                    <span class="pull-right">
                        
                    </span>
                    
                    <div class="clearfix"></div>
                    
                </div>
            </a>
            
        </div>
    </div>
   
    <div class="col-lg-4 col-md-6">
        <div class="panel panel-orange">
            
            <div class="panel-heading">
                <div class="row">
                    
                    <div class="col-xs-12 text-center">
                        <div class="huge"> <?php echo $count_p_categories; ?> </div>
                           
                        <div> Danh mục </div>
                        
                    </div>
                    
                </div>
            </div>
            
            <a href="index.php?view_p_cats">
                <div class="panel-footer">
                   
                    <span class="pull-left">
                        Xem danh mục
                    </span>
                    
                    <span class="pull-right">
                    </span>
                    
                    <div class="clearfix"></div>
                    
                </div>
            </a>
            
        </div>
    </div>
</div>

<div class="row">
    <div class="col-lg-12">
        <div class="panel panel-primary">
            <div class="panel-heading">
                <h3 class="panel-title">
                   Đơn hàng mới
                </h3>
            </div>
            
            <div class="panel-body">
                <div class="table-responsive">
                    <table class="table  table-striped ">
                        
                        <thead>
                          
                            <tr><!-- th begin -->
                           
                                <th> STT </th>
                                <th> Email người dùng </th>
                                <th> Hóa đơn </th>
                                <th> ID sản phẩm </th>
                                <th> Số lượng</th>
                                <th> Kích thước </th>
                                <th> Trạng thái</th>
                            
                            </tr>
                            
                        </thead>
                        
                        <tbody>
                          
                            <?php 
                          
                                $i=0;
          
                                $get_order = "select * from pending_orders order by 1 DESC LIMIT 0,5";
          
                                $run_order = mysqli_query($con,$get_order);
          
                                while($row_order=mysqli_fetch_array($run_order)){
                                    
                                    $order_id = $row_order['order_id'];
                                    
                                    $c_id = $row_order['customer_id'];
                                    
                                    $invoice_no = $row_order['invoice_no'];
                                    
                                    $product_id = $row_order['product_id'];
                                    
                                    $qty = $row_order['qty'];
                                    
                                    $size = $row_order['size'];
                                    
                                    $order_status = $row_order['order_status'];
                                    
                                    $i++;
                            
                            ?>
                           
                            <tr>
                               
                                <td> <?php echo $order_id; ?> </td>
                                <td>
                                    
                                    <?php 
                                    
                                        $get_customer = "select * from customers where customer_id='$c_id'";
                                    
                                        $run_customer = mysqli_query($con,$get_customer);
                                    
                                        $row_customer = mysqli_fetch_array($run_customer);
                                    
                                        $customer_email = $row_customer['customer_email'];
                                    
                                        echo $customer_email;
                                    
                                    ?>
                                    
                                </td>
                                <td> <?php echo $invoice_no; ?> </td>
                                <td> <?php echo $product_id; ?> </td>
                                <td> <?php echo $qty; ?> </td>
                                <td> <?php echo $size; ?> </td>
                                <td>
                                    
                                    <?php 
                                    
                                        if($order_status=='pending'){
                                            
                                            echo $order_status='pending';
                                            
                                        }else{
                                            
                                            echo $order_status='Complete';
                                            
                                        }
                                    
                                    ?>
                                    
                                </td>
                                
                            </tr>
                            
                            <?php } ?>
                            
                        </tbody>
                        
                    </table>
                </div>
                
                <div class="text-right">
                    
                    <a href="index.php?view_orders">
                        
                        Tất cả đơn <i class="fa fa-arrow-circle-right"></i>
                        
                    </a>
                    
                </div>
                
            </div>
            
        </div>
    </div>
</div>


<?php } ?>