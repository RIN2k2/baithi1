@extends('layouts.master')

@section('content')
<div class="inner-header">
	<div class="container">
		<div class="pull-left">
			<h6 class="inner-title"></h6>
		</div>
		<div class="pull-right">
			<div class="beta-breadcrumb">
				<a href="/tc">Home</a> / <span>Đăng kí</span>
			</div>
		</div>
		<div class="clearfix"></div>
	</div>
</div>

<div class="container">
	@if ($errors->any())
	<div class="alert alert-danger">
		<ul>
			@foreach ($errors->all() as $error)
			<li>{{ $error }}</li>
			@endforeach
		</ul>
	</div>
	@endif

	@if(session('success'))
	<div class="alert alert-success">
		{{ session('success') }}
	</div>
	@endif
	<div id="content">

		<form action="{{route('postsignin')}}" method="post" class="beta-form-checkout">
			@csrf
			<div class="row">
				<div class="col-sm-3"></div>
				<div class="col-sm-6">
					<h4>Đăng kí Tài Khoản</h4>
					<div class="space20">&nbsp;</div>


					<div class="form-block">
						<label for="email">Email </label>
						<input type="email" name="email" required>
					</div>

					<div class="form-block">
						<label for="fullname">Tên Tài Khoản</label>
						<input type="text" name="fullname" required>
					</div>

					<div class="form-block">
						<label for="address">Địa chỉ</label>
						<input type="text" name="address" value="Địa chỉ của bạn" required>
					</div>


					<div class="form-block">
						<label for="phone">Số Điện Thoại</label>
						<input type="text" name="phone" required>
					</div>
					<div class="form-block">
						<label for="password">Mật Khẩu</label>
						<input type="password" name="password" required>
					</div>
					<div class="form-block">
						<label for="repassword">Nhập Lại Mật Khẩu</label>
						<input type="password" name="repassword" id='repassword' required>
					</div>
					<div class="form-block">
						<button type="submit" class="btn btn-primary">Đăng Ký</button>
					</div>
				</div>
				<div class="col-sm-3"></div>
			</div>
		</form>
	</div> <!-- #content -->
</div> <!-- .container -->
@endsection

@section('js')


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