<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">

<!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

<!-- Latest compiled JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>

<div class="container">
    <div class="row">
        <div class="col-xs-12">
            <div class="invoice-title text-center" style="margin-top: 10px;">
                <img src="{{asset('front_assets/images/logo.png')}}" class="logo">
                
            </div>
    		<div class="invoice-title">
                <h2>Order Invoice #{{$OrderDetails->id}}</h2>
                <hr>
               
            </div>
            
    		<div class="row">
    			<div class="col-xs-6">
    				<address>
                    <strong>Billed To:</strong><br>
                    {{$userDetails->name}}<br>
                    {{$userDetails->address}} <br>
                    {{$userDetails->city}} <br>	
                    {{$userDetails->state}} <br>
                    {{$userDetails->country}} <br>
                    {{$userDetails->pincode}}<br>
                    {{$userDetails->mobile}} <br>
    				</address>
    			</div>
    			<div class="col-xs-6 text-right">
    				<address>
        			<strong>Shipped To:</strong><br>
                    {{$OrderDetails->name}}<br>
                    {{$OrderDetails->address}} <br>
                    {{$OrderDetails->city}} <br>	
                    {{$OrderDetails->state}} <br>
                    {{$OrderDetails->country}} <br>
                    {{$OrderDetails->pincode}}<br>
                    {{$OrderDetails->mobile}} <br>
    				</address>
    			</div>
    		</div>
    		<div class="row">
    			<div class="col-xs-6">
    				<address>
    					<strong>Payment Method:</strong><br>
    					{{$OrderDetails->payment_method}}
    				</address>
    			</div>
    			<div class="col-xs-6 text-right">
    				<address>
    					<strong>Order Date('YY-MM-DD'):</strong><br>
                        {{$OrderDetails->created_at->format('y-m-d')}}<br><br>
    				</address>
    			</div>
    		</div>
    	</div>
    </div>
    
    <div class="row">
    	<div class="col-md-12">
    		<div class="panel panel-default">
    			<div class="panel-heading">
    				<h3 class="panel-title"><strong>Order summary</strong></h3>
    			</div>
    			<div class="panel-body">
    				<div class="table-responsive">
    					<table class="table table-striped">
    						<thead>
                                <tr>
        							<td><strong>Product Code</strong></td>
        							<td class="text-center"><strong>Product Name</strong></td>
        							<td class="text-center"><strong>Product Size</strong></td>
                                    <td class="text-right"><strong>Product Color</strong></td>
                                    <td class="text-center"><strong>Product Price</strong></td>
                                    <td class="text-center"><strong>Product Qty</strong></td>
                                    <td class="text-center"><strong>Total</strong></td>
                                </tr>
    						</thead>
    						<tbody>
                                <?php
                                $sub_total=0;?>
    							@foreach($OrderDetails->orders as $pro)
    							<tr>
    								<td class="text-left">{{$pro->product_code}}</td>
                                    <td class="text-center">{{$pro->product_name}}</td>
                                    <td class="text-center">{{$pro->product_size}}</td>
                                    <td class="text-center">{{$pro->product_color}}</td>
                                    <td class="text-center">{{$pro->product_price}}</td>
                                    <td class="text-center">{{$pro->product_qty}}</td>
                                    <td class="text-center">PKR{{$pro->product_price * $pro->product_qty}}</td>
                                </tr>
                                <?php $sub_total=$sub_total +($pro->product_price *$pro->product_qty); ?>
                                @endforeach
                                
                               
                               
    							<tr>
    								<td class="thick-line"></td>
                                    <td class="thick-line"></td>
                                    <td class="thick-line"></td>
                                    <td class="thick-line"></td>
                                    <td class="thick-line"></td>
    								<td class="thick-line text-center"><strong>Subtotal</strong></td>
                                <td class="thick-line text-center">PKR {{$sub_total}}</td>
    							</tr>
    							<tr>
    								<td class="no-line"></td>
                                    <td class="no-line"></td>
                                    <td class="thick-line"></td>
                                    <td class="thick-line"></td>
                                    <td class="thick-line"></td>
    								<td class="no-line text-center"><strong>Shipping Charges (+)</strong></td>
    								<td class="no-line text-center">PKR {{$OrderDetails->shipping_charges}}</td>
                                </tr>
                                <tr>
                                    <td class="no-line"></td>
                                    <td class="no-line"></td>
                                    <td class="thick-line"></td>
                                    <td class="thick-line"></td>
                                    <td class="thick-line"></td>
                                    <td class="no-line text-center"><strong>Coupon Discount (-)</strong></td>
                                    <td class="no-line text-center">PKR {{$OrderDetails->coupon_amount}}</td>
                                </tr>
    							<tr>
    								<td class="no-line"></td>
                                    <td class="no-line"></td>
                                    <td class="thick-line"></td>
                                    <td class="thick-line"></td>
                                    <td class="thick-line"></td>
    								<td class="no-line text-center"><strong>Grand Total</strong></td>
    								<td class="no-line text-center">{{$OrderDetails->grand_total}}</td>
                                </tr>
                                
    						</tbody>
    					</table>
    				</div>
    			</div>
    		</div>
    	</div>
    </div>
</div>