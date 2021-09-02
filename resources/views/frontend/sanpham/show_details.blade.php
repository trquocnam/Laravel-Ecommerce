@extends('layout1')
@section('content')
				@foreach($product_details as $key => $value)
					<div class="product-details"><!--product-details-->
						<div class="col-sm-5">
							<div class="view-product">
								<img src="{{URL::to('/uploads/product/'.$value->product_image)}}" alt="" />
							</div>
						</div>
						<div class="col-sm-7">
							<div class="product-information"><!--/product-information-->
								<img src="images/product-details/new.jpg" class="newarrival" alt="" />
								<h2>{{$value->product_name}}</h2>
								<p>Mã ID: {{$value->product_id}}</p>
								<img src="images/product-details/rating.png" alt="" />
								<form action="{{URL::to('/save-cart')}}" method="POST">
									{{ csrf_field() }}
								<span>
									<span><h4>{{number_format($value->product_price).'VNĐ'}}</h4></span>
									<label>Số lượng:</label>
									<input name="qty" type="number" min="1"  value="1" />
									<input name="productid_hidden" type="hidden"  value="{{$value->product_id}}" />
								</span>
								<button type="submit" class="btn btn-fefault cart">
										<i class="fa fa-shopping-cart"></i>
										Thêm vào giỏ hàng
									</button>
								</form>
								<p><b>Tình trạng:</b> Còn hàng</p>
								<p><b>Thương hiệu:</b> {{$value->brand_name}}</p>
								<p><b>Danh mục:</b> {{$value->category_name}}</p>
								<a href=""><img src="images/product-details/share.png" class="share img-responsive"  alt="" /></a>
							</div>
						</div>
					</div>
					<div class="category-tab shop-details-tab"><!--category-tab-->
						<div class="col-sm-12">
							<ul class="nav nav-tabs">
								<li class="active"><a href="#details" data-toggle="tab">Mô tả</a></li>
								<li><a href="#companyprofile" data-toggle="tab">Chi tiết sản phẩm</a></li>
							
								<li ><a href="#reviews" data-toggle="tab">Đánh giá</a></li>
							</ul>
						</div>
						<div class="tab-content">
							<div class="tab-pane fade active in" id="details" >
								<p>{!!$value->product_desc!!}</p>
							</div>
							<div class="tab-pane fade" id="companyprofile" >
								<p>{!!$value->product_content!!}</p>
							</div>
							<div class="tab-pane fade" id="reviews" >
								<div class="col-sm-12">
									<ul>
										<li><a href=""><i class="fa fa-user"></i>EUGEN</a></li>
										<li><a href=""><i class="fa fa-clock-o"></i>12:41 PM</a></li>
										<li><a href=""><i class="fa fa-calendar-o"></i>31 DEC 2014</a></li>
									</ul>
									<p><b>Write Your Review</b></p>
									<form action="#">
										<span>
											<input type="text" placeholder="Your Name"/>
											<input type="email" placeholder="Email Address"/>
										</span>
										<textarea name="" ></textarea>
										<b>Rating: </b> <img src="images/product-details/rating.png" alt="" />
										<button type="button" class="btn btn-default pull-right">
											Submit
										</button>
									</form>
								</div>
							</div>
							
						</div>
					</div>
				@endforeach
					<div class="recommended_items">
						<h2 class="title text-center">Sản phẩm liên quan</h2>
						<div id="recommended-item-carousel" class="carousel slide" data-ride="carousel">
							<div class="carousel-inner">
								<div class="item active">
							@foreach($relate as $key => $lienquan)
									<div class="col-sm-4">
										<div class="product-image-wrapper">
											 <div class="single-products">
		                                        <div class="productinfo text-center">
		                                            <img src="{{URL::to('uploads/product/'.$lienquan->product_image)}}" alt="" />
		                                            <p>{{$lienquan->product_name}}</p>
													<h5>{{number_format($lienquan->product_price).' '.'VNĐ'}}</h5>
		                                            <a href="#" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Thêm vào giỏ hàng</a>
		                                        </div>
                                			</div>
										</div>
									</div>
							@endforeach		
								</div>
							</div>
							 <a class="left recommended-item-control" href="#recommended-item-carousel" data-slide="prev">
								<i class="fa fa-angle-left"></i>
							  </a>
							  <a class="right recommended-item-control" href="#recommended-item-carousel" data-slide="next">
								<i class="fa fa-angle-right"></i>
							  </a>			
						</div>
					</div>
@endsection