<!DOCTYPE html>
<html lang="en">
<head>
    <title>Confirmation Email</title>
</head>
<body>
    <div style="border-top-left-radius: 3px; border-top-right-radius: 3px; padding: 10px 15px; background-color: #428bca; border-color: #428bca; color: #fff" class="v1panel-heading">
        You Have Mail Recieved from Wayshop Website
         </div>
         
    <table>
       
    <tr><td>Hello, {{$name}}</td></tr> 
    <tr> <td>Thank you for shopping with us. Your Order Details are follows</td> </tr>
    <tr><td><h1>Order No : {{$order_id}}</h1></td>  </tr>
    </table>   
    <table width="100%" cellpadding="5" cellspacing="5" border="1px">
       
            <tr>
                <td>Product Name</td>
                <td>Product Code</td>
                <td>Size</td>
                <td>Color</td>
                <td>Quantity</td>
                <td>Unit Price</td>
                <td>Total Price</td>
            </tr>
        @foreach ($productDetails['orders'] as $product)
       
            <tr>
                <td>{{$product['product_name']}}</td>
                <td>{{$product['product_code']}}</td>
                <td>{{$product['product_size']}}</td>
                <td>{{$product['product_color']}}</td>
                <td>{{$product['product_qty']}}</td>
                <td>{{$product['product_price']}}</td>
                <?php
                $total_price=0;
                $total_price=($product['product_qty'])*($product['product_price']);
                ?>
                <td>PKR {{$total_price}} </td>
            </tr>
        @endforeach         
            <tr>
                <td colspan="6" align="right"><strong>Shipping Charges (+)</strong></td>  <td>  PKR {{$productDetails['shipping_charges']}}</td>
            </tr>
            <tr>
                <td colspan="6" align="right"><strong>Coupon Discount (-) </strong></td>  <td>PKR{{$productDetails['coupon_amount']}}</td>
            </tr>
            <tr>
                <td colspan="6" align="right"><strong>Grand Total</td>  </strong><td>PKR {{$productDetails['grand_total']}}</td>
            </tr>
    </table>
    <h4>Yours Billing & Shipping Address are as follows</h4> <br>
       
       <div class="billto" style="width:50%;float:left">
        <b>Billing Address</b> <br><br>
           <strong>Name : </strong>{{$userDetails['name']}} <br>
           <strong>Address : </strong>{{$userDetails['address']}}<br>
           <strong>City : </strong>{{$userDetails['city']}} <br>
           <strong>Country : </strong>{{$userDetails['country']}}<br>
           <strong>Mobile : </strong>{{$userDetails['mobile']}} <br>
       </div>
       
       <div class="shipto" style="width:50%;float: right;">
        <strong>Name : </strong>{{$userDetails['name']}} <br>
        <strong>Address : </strong>{{$userDetails['address']}}<br>
        <strong>City : </strong>{{$userDetails['city']}} <br>
        <strong>Country : </strong>{{$userDetails['country']}}<br>
        <strong>Mobile : </strong>{{$userDetails['mobile']}} <br>
    </div><br><br><br><br>

   <div>
    <p>Note : If you need any query regarding this email plz feel free to contact us <a href="mailto:info@wayshop.com">infor@wayshop.com</a></p>
    <br>
    <b>Regards</b> <br>
    Wayshop Team
   </div>
</body>
</html>