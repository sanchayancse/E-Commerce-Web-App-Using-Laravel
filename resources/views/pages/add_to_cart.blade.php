@extends('welcome')

@section('content')





	<section id="cart_items">
		<div class="container col-sm-12">
			<div class="breadcrumbs">
				<ol class="breadcrumb">
				  <li><a href="#">Home</a></li>
				  <li class="active">Shopping Cart</li>
				</ol>
			</div>
			<div class="table-responsive cart_info">

                <?php 
                    
                    $contents=Cart::content();
                    
                ?>
				<table class="table table-condensed">
					<thead>
						<tr class="cart_menu">
							<td class="image">Image</td>
							<td class="description">Name</td>
							<td class="price">Price</td>
							<td class="quantity">Quantity</td>
							<td class="total">Total</td>
							<td>Actions</td>
						</tr>
					</thead>
					<tbody>

                        <?php foreach($contents as $v_item) { ?>


                            
                        
						<tr>
							<td class="cart_product">
								<a href=""><img src="{{$v_item->options->image }}" style="height: 80px; width:80px" alt=""></a>
							</td>
							<td class="cart_description">
								<h4><a href="">{{$v_item->name }}</a></h4>
								
							</td>
							<td class="cart_price">
								<p>{{$v_item->price }}</p>
							</td>
							<td class="cart_quantity">
								<div class="cart_quantity_button">
                                <form action="{{URL::to('/update-cart')}}" method="POST">
                                        {{ csrf_field() }}
                                    <input class="cart_quantity_input" type="text" name="quantity" value="{{$v_item->qty}}" autocomplete="off" size="2">
									<input type="text" name="rowId" value="{{$v_item->rowId}}" hidden>
                                    
                                    <input type="submit" name="submit" value="update" class="btn btn-sm btn-default">
                                </form>
								</div>
							</td>
							<td class="cart_total">
								<p class="cart_total_price">{{$v_item->total }}</p>
							</td>
							<td class="cart_delete">
                            <a class="cart_quantity_delete" href="{{URL::to('/delete-to-cart/'.$v_item->rowId)}}"><i class="fa fa-times"></i></a>
							</td>
						</tr>

					<?php } ?>
					</tbody>
				</table>
			</div>
		</div>
	</section> <!--/#cart_items-->


	<section id="do_action">
		<div class="container">
			<div class="heading">
				<h3>What would you like to do next?</h3>
				<p>Choose if you have a discount code or reward points you want to use or would like to estimate your delivery cost.</p>
			</div>
			<div class="row">
				
				<div class="col-sm-8">
					<div class="total_area">
						<ul>
                        <li>Cart Sub Total <span>${{Cart::subtotal()}}</span></li>
                        <li>Eco Tax <span>${{Cart::tax()}}</span></li>
							<li>Shipping Cost <span>Free</span></li>
                        <li>Total <span>{{Cart::total()}}</span></li>
						</ul>
							<a class="btn btn-default update" href="">Update</a>
							<a class="btn btn-default check_out" href="">Check Out</a>
					</div>
				</div>
			</div>
		</div>
	</section><!--/#do_action-->

    
@endsection