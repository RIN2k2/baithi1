@extends('layouts.master')


@section('content')

<div class="inner-header">
	<div class="container">
		<div class="pull-left">
			<h6 class="inner-title">Chi tiết sản phẩm</h6>
		</div>
		<div class="pull-right">
			<div class="beta-breadcrumb font-large">
				<a href="index.html">Home</a> / <span>Product</span>
			</div>
		</div>
		<div class="clearfix"></div>
	</div>
</div>

<div class="container">
	<div id="content">
		<div class="row">
			<div class="col-sm-9">

				<div class="row">
					@isset($products)
					<div class="col-sm-4">
						<img src="/source/image/product/{{$products[0]->image}}" alt="" width="270" height="320">
					</div>
					<div class="col-sm-8">
						<div class="single-item-body">
							<p class="single-item-title">{{$products[0]->name}}</p>
							<p class="single-item-price">
								<span>{{$products[0]->unit_price}}</span>
							</p>
						</div>
						@endisset
						<div class="clearfix"></div>
						<div class="space20">&nbsp;</div>

						<div class="single-item-desc">
							<p>Những bông hoa cúc tuy được coi là đại diện, là hình ảnh của mùa thu, thế nhưng, chúng vẫn có thể nở quanh năm. Có rất nhiều những loại hoa cúc trong thế giới của chúng hiện nay. Nào là hoa cúc vàng, hoa cúc trắng, cúc vạn thọ, cúc tím.</p>
						</div>
						<div class="space20">&nbsp;</div>

						<p>Options:</p>
						<div class="single-item-options">
							<select class="wc-select" name="size">
								<option>Size</option>
								<option value="XS">XS</option>
								<option value="S">S</option>
								<option value="M">M</option>
								<option value="L">L</option>
								<option value="XL">XL</option>
							</select>
							<select class="wc-select" name="color">
								<option>Color</option>
								<option value="Red">Red</option>
								<option value="Green">Green</option>
								<option value="Yellow">Yellow</option>
								<option value="Black">Black</option>
								<option value="White">White</option>
							</select>
							<select class="wc-select" name="color">
								<option>Qty</option>
								<option value="1">1</option>
								<option value="2">2</option>
								<option value="3">3</option>
								<option value="4">4</option>
								<option value="5">5</option>
							</select>
							<a class="add-to-cart pull-left" href="{{route('banhang.addToCart',$products[0]->id)}}"><i class="fa fa-shopping-cart"></i></a>
							<div class="clearfix"></div>
						</div>
					</div>
				</div>

				<div class="space40">&nbsp;</div>
				<div class="woocommerce-tabs">
					<ul class="tabs">
						<li><a href="#tab-description">Description</a></li>
						<li><a href="#tab-reviews">Reviews (0)</a></li>
					</ul>

					<div class="panel" id="tab-description">
						<p>Mùa thu tới mang theo những cơn gió heo may, cái lành lạnh của mùa thu mang tới bên khung cửa cũng là lúc chúng ta lại tìm những cánh hoa cúc nhỏ xinh về bên mình như một nét đẹp mà chỉ mùa thu mới có. Cúc được coi là một trong từ bình:mai- trúc- cúc- tùng. Đây là không chỉ là những hình ảnh đại diện cho bốn mùa còn là những hình ảnh tượng trưng cho cốt khi của những con người có cốt cách thanh tao. Hoa cúc tại sao lại nằm trong tứ bình? Đó là bởi vì hoa cúc không chỉ là loài hoa tượng trưng cho mùa thu mà hoa cúc còn tượng trưng cho sự vĩnh cửu, sự trường thọ mà biểu đạt cho ý nghĩa trên chính là những bông cúc trường thọ.</p>
						<p>Những bông hoa cúc tuy được coi là đại diện, là hình ảnh của mùa thu, thế nhưng, chúng vẫn có thể nở quanh năm. Có rất nhiều những loại hoa cúc trong thế giới của chúng hiện nay. Nào là hoa cúc vàng, hoa cúc trắng, cúc vạn thọ, cúc tím.</p>
					</div>
					<div class="panel" id="tab-reviews">
						<p>No Reviews</p>
					</div>
				</div>
				<div class="space50">&nbsp;</div>
				<div class="beta-products-list">
					<h4>Related Products</h4>
					<div class="row">
						@foreach($related_products as $recommended_product)
						<div class="col-sm-4">
							<div class="single-item">
								<div class="single-item-header">
									<a href="{{ route('show', ['id' => $recommended_product->id]) }}"><img src="/source/image/product/{{$recommended_product->image}}" alt="" width="270" height="260"></a>
								</div>
								<div class="single-item-body">
									<p class="single-item-title">{{$recommended_product->name}}</p>
									<p class="single-item-price">
										@if($recommended_product->promotion_price != 0)
										<span class="flash-del">{{$recommended_product->unit_price}}</span>
										<span class="flash-sale">{{$recommended_product->promotion_price}}</span>
										@else
										<span>{{$recommended_product->unit_price}}</span>
										@endif
									</p>
								</div>
								<div class="single-item-caption">
									<a class="add-to-cart pull-left" href="product.html"><i class="fa fa-shopping-cart"></i></a>
									<a class="beta-btn primary" href="product.html">Details <i class="fa fa-chevron-right"></i></a>
									<div class="clearfix"></div>
								</div>
							</div>
						</div>
						@endforeach
					</div>
				</div> <!-- .beta-products-list -->
			</div>
			<div class="col-sm-3 aside">
				<div class="widget">
					<h3 class="widget-title">Bán chạy</h3>
					<div class="widget-body">
						<div class="beta-sales beta-lists">
							<div class="media beta-sales-item">
								@foreach($best_seller as $recommended_product)
								<a href="{{ route('show', ['id' => $recommended_product->id]) }}"><img src="/source/image/product/{{$recommended_product->image}}" alt="" width="270" height="260"></a>
								<div class="media-body">
									{{$recommended_product->name}}
									<span class="beta-sales-price">{{$recommended_product->price}}</span>
								</div>
								@endforeach
							</div>
						</div>
					</div>
				</div> <!-- best sellers widget -->
				<div class="widget">
					<h3 class="widget-title">Sản phẩm mới</h3>
					<div class="widget-body">
						<div class="beta-sales beta-lists">
							<div class="media beta-sales-item">
								@foreach($new_products as $recommended_product)
								<a href="{{ route('show', ['id' => $recommended_product->id]) }}"><img src="/source/image/product/{{$recommended_product->image}}" alt="" width="270" height="260"></a>
								<div class="media-body">
									{{$recommended_product->name}}
									<span class="beta-sales-price">{{$recommended_product->price}}</span>
								</div>
								@endforeach
							</div>
						</div>
					</div>
				</div> <!-- best sellers widget -->
			</div>
		</div>
	</div> <!-- #content -->
</div> <!-- .container -->

@endsection

@section('js')

<!--customjs-->
<script type="text/javascript">
	$(function() {
		// this will get the full URL at the address bar
		var url = window.location.href;

		// passes on every "a" tag
		$(".main-menu a").each(function() {
			// checks if its the same on the address bar
			if (url == (this.href)) {
				$(this).closest("li").addClass("active");
				$(this).parents('li').addClass('parent-active');
			}
		});
	});
</script>
<script>
	jQuery(document).ready(function($) {
		'use strict';

		// color box

		//color
		jQuery('#style-selector').animate({
			left: '-213px'
		});

		jQuery('#style-selector a.close').click(function(e) {
			e.preventDefault();
			var div = jQuery('#style-selector');
			if (div.css('left') === '-213px') {
				jQuery('#style-selector').animate({
					left: '0'
				});
				jQuery(this).removeClass('icon-angle-left');
				jQuery(this).addClass('icon-angle-right');
			} else {
				jQuery('#style-selector').animate({
					left: '-213px'
				});
				jQuery(this).removeClass('icon-angle-right');
				jQuery(this).addClass('icon-angle-left');
			}
		});
	});
</script>
@endsection