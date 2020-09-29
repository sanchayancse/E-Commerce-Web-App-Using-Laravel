
@extends('welcome')

@section('content')



<section id="cart_items">
    <div class="container">
        

     
        <div class="register-req">
            <p>Please use Register And Checkout to easily get access to your order history, or use Checkout as Guest</p>
        </div><!--/register-req-->

        <div class="shopper-informations">
            <div class="row">
                
                <div class="col-sm-12 clearfix">
                    <div class="bill-to">
                        <p>Shipping Details</p>
                        <div class="form-one">
                        <form action="{{URL::to('save-shipping-details')}}" method="POST">
                               {{ csrf_field() }}
                                <input type="text" name="shipping_email" placeholder="Email*">
                             
                                <input type="text" name="shipping_fullname" placeholder="Full Name *">
                               
                            
                                <input type="text" name="shipping_phone_number" placeholder="Mobile No *">
                                <input type="text" name="shipping_city" placeholder="City *">

                                <input type="text" name="shipping_address" placeholder="Address 1 *">
                                <input type="submit" class="btn btn-default" value="Done">
                                
                            </form>
                        </div>
                   
                    </div>
                </div>
              					
            </div>
        </div>
     

       
       
    </div>
</section> <!--/#cart_items-->


@endsection
