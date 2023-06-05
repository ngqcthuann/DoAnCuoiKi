@extends('layout')
@section('content')
@foreach($product_details as $key => $value)
<div class="product-details">
              <!--product-details-->
              <div class="col-sm-5">
                <div class="view-product">
                  <img src="{{URL::to('/public/uploads/product/'.$value->product_image)}}" alt="" />
                </div>
                <div
                  id="similar-product"
                  class="carousel slide"
                  data-ride="carousel">
                  <!-- Wrapper for slides -->
                  <div class="carousel-inner">
                    <div class="item active">
                      <a href=""
                        ><img src="{{URL::to('/public/fontend/images/ip14small.jpg')}}" alt=""
                      /></a>
                    </div>
                    <div class="item">
                      <a href=""
                        ><img src="{{URL::to('/public/fontend/images/ip14small1.jpg')}}" alt=""
                      /></a>
                    </div>
                    <div class="item">
                      <a href=""
                        ><img src="{{URL::to('/public/fontend/images/ip14small2.jpg')}}" alt=""
                      /></a>
                    </div>
                  </div>

                  <!-- Controls -->
                  <a
                    class="left item-control"
                    href="#similar-product"
                    data-slide="prev">
                    <i class="fa fa-angle-left"></i>
                  </a>
                  <a
                    class="right item-control"
                    href="#similar-product"
                    data-slide="next">
                    <i class="fa fa-angle-right"></i>
                  </a>
                </div>
              </div>
              <div class="col-sm-7">
                <div class="product-information">
                  <!--/product-details-->
                  <ul class="parameter__list 289700 active">
                    <li data-index="0" data-prop="0">
                        <h2>{{$value->product_name}}</h2>
                        <hr>
                      <p class="lileft"><b>Mã ID:</b> {{$value->product_id}}</p>
                      <p class="lileft"><b>Giá:</b> {{number_format($value->product_price).'VNĐ'}}</p>
                      <p class="lileft"><b>Thương hiệu:</b> {{$value->brand_name}}</p>
                      <p class="lileft"><b>Danh mục:</b> {{$value->category_name}}</p>
                      <p class="lileft"><b>Điều kiện:</b> Mới 100%  </p>
                      <p class="lileft"><b>Tình trạng:</b> Còn hàng</p>
                      <hr>
                    </li>
                  </ul>
                </div>
               <!--/product-details-->
              </div>
            </div>
            <!--/product-details-->
@endforeach
            <div class="category-tab shop-details-tab">
              <!--category-tab-->
              <div class="col-sm-12">
                <ul class="nav nav-tabs">
                  <li><a href="#tag" data-toggle="tab">Tag</a></li>
                  <li >
                    <a href="#reviews" data-toggle="tab">Reviews (5)</a>
                  </li>
                  <li class="active"><a href="#details" data-toggle="tab">Mô tả</a></li>
                  <li><a href="#profile" data-toggle="tab">Chi tiết sản phẩm</a></li>
                </ul>
              </div>
              <div class="tab-content">
                <div class="tab-pane fade active in" id="details">
                    <div class="text-center">
                    <p>{!!$value->product_decs!!}</p>
                    </div>
                </div>
                <div class="tab-pane fade " id="profile">
                    <div class="text-center">
                    <p>{!!$value->product_content !!}</p>
                    </div>
                </div>
                <div class="tab-pane fade " id="tag">
                  <div class="col-sm-4">
                    <div class="product-image-wrapper">
                      <div class="single-products">
                        <div class="productinfo text-center">
                          <img src="images/home/iphone1.jpg" alt="" />
                          <h2>$1299</h2>
                          <p>iPhone 14 Pro Max 128GB</p>
                          <a href="#" class="btn btn-default add-to-cart"
                            ><i class="fa fa-shopping-cart"></i>Add to cart</a
                          >
                        </div>
                      </div>
                    </div>
                  </div>
                </div>

                <div class="tab-pane fade " id="reviews">
                  <div class="col-sm-12">
                    <ul>
                      <li>
                        <a href=""><i class="fa fa-user"></i>EUGEN</a>
                      </li>
                      <li>
                        <a href=""><i class="fa fa-clock-o"></i>12:41 PM</a>
                      </li>
                      <li>
                        <a href=""
                          ><i class="fa fa-calendar-o"></i>31 DEC 2023</a
                        >
                      </li>
                    </ul>
                    <p>
                      The iPhone 14 Pro Max is truly the best of everything in
                      the current iPhone world. It’s got the best design, the
                      biggest screen, the best cameras, and the smartest
                      display. You’ll pay for all of that but, if you’re
                      determined to get an iPhone and want the absolute apex
                      device, this is clearly the handset for you. If you can
                      live with a slightly smaller display, and want less weight
                      in your pocket, we might recommend the more compact
                      6.1-inch iPhone 14 Pro, instead.
                    </p>
                    <p><b>Write Your Review</b></p>

                    <form action="#">
                      <span>
                        <input type="text" placeholder="Your Name" />
                        <input type="email" placeholder="Email Address" />
                      </span>
                      <textarea name=""></textarea>
                      <b>Rating: </b>
                      <img src="images/product-details/rating.png" alt="" />
                      <button type="button" class="btn btn-default pull-right">
                        Submit
                      </button>
                    </form>
                  </div>
                </div>
              </div>
            </div>
            <!--/category-tab-->
            <div class="recommended_items">
              <!--recommended_items-->
              <h2 class="title text-center">Sản phẩm Liên quan</h2>
              <div
                id="recommended-item-carousel"
                class="carousel slide"
                data-ride="carousel">
                <div class="carousel-inner">
                  <div class="item active">
                    @foreach($relate as $key => $lienquan)
                    <div class="col-sm-4">
                      <div class="product-image-wrapper">
                      <div class="single-products">
										<div class="productinfo text-center">
											<img src="{{URL::to('public/uploads/product/'.$lienquan->product_image)}}" alt="" />
											<h2>{{number_format($lienquan->product_price).' '.'VNĐ'}}</h2>
											<p>{{$lienquan->product_name}}</p>
											<a href="#" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Add to cart</a>
										</div>
								</div>
                      </div>
                    </div>
                    @endforeach
                    
                  </div>
                </div>
                <a
                  class="left recommended-item-control"
                  href="#recommended-item-carousel"
                  data-slide="prev"
                >
                  <i class="fa fa-angle-left"></i>
                </a>
                <a
                  class="right recommended-item-control"
                  href="#recommended-item-carousel"
                  data-slide="next"
                >
                  <i class="fa fa-angle-right"></i>
                </a>
              </div>
            </div>
            <!--/recommended_items-->
@endsection