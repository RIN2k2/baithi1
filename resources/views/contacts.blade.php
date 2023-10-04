@extends('layouts.master')

@section('content')
<div class="inner-header">
	<div class="container">
		<div class="pull-left">
			<h6 class="inner-title">Liên hệ</h6>
		</div>
		<div class="pull-right">
			<div class="beta-breadcrumb font-large">
				<a href="/tc">Home</a> / <span>Contacts</span>
			</div>
		</div>
		<div class="clearfix"></div>
	</div>
</div>
<div class="beta-map">

	<div class="abs-fullwidth beta-map wow flipInX"><iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3870.8733100640347!2d107.98793067471361!3d14.025523086395513!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x316c1fc3846f7b4b%3A0x10027b4478bb44f5!2zSG9hIHTGsMahaSBHaWEgSMOibg!5e0!3m2!1sen!2s!4v1695346830716!5m2!1sen!2s" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe></div>
</div>
<div class="container">
	<div id="content" class="space-top-none">
		<div class="panel-body">
			@if (session('message'))
			<div class="alert alert-success">
				{{ session('message') }}
			</div>
			@endif
			<div class="space50">&nbsp;</div>
			<div class="row">
				<div class="col-sm-8">
					<h2>Liên hệ</h2>
					<form class="form-horizontal" method="post" enctype="multipart/form-data" action="{{ route('postLienhe') }}">
						@csrf

						<div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
							<label for="name" class="col-md-4 control-label">Họ và tên</label>

							<div class="col-md-6">
								<input id="name" type="text" class="form-control" name="name" value="{{ old('name') }}" required autofocus>

								@if ($errors->has('name'))
								<span class="help-block">
									<strong>{{ $errors->first('name') }}</strong>
								</span>
								@endif
							</div>
						</div>

						<div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
							<label for="email" class="col-md-4 control-label">Email</label>

							<div class="col-md-6">
								<input id="email" type="email" class="form-control" name="email" value="{{ old('email') }}" required>

								@if ($errors->has('email'))
								<span class="help-block">
									<strong>{{ $errors->first('email') }}</strong>
								</span>
								@endif
							</div>
						</div>

						<div class="form-group{{ $errors->has('message') ? ' has-error' : '' }}">
							<label for="message" class="col-md-4 control-label">Nội dung</label>

							<div class="col-md-6">
								<textarea id="message" class="form-control" name="message" required>{{ old('message') }}</textarea>

								@if ($errors->has('message'))
								<span class="help-block">
									<strong>{{ $errors->first('message') }}</strong>
								</span>
								@endif
							</div>
						</div>

						<div class="form-group">
							<div class="col-md-6 col-md-offset-4">
								<button type="submit" class="btn btn-primary">
									Gửi
								</button>
							</div>
						</div>
					</form>
				</div>
			</div>
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