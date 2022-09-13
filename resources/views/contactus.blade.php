@extends('layouts.main.master')
@section('title')
Contact Us
@endsection
@section('description')
Please, contact with us!
@endsection
@section('image')
{{url(''.$setting->logo)}}
@endsection
@section('css')
@endsection
@section('js')
@endsection
@section('content')
<main id="main" class="">
<div id="content" role="main" class="content-area">
	<div id="gap-59533794" class="gap-element clearfix" style="display:block; height:auto;">
		<style>
			#gap-59533794 {
			padding-top: 50px;
			}
		</style>
	</div>
	<div class="row"  id="row-278980664">
		<div id="col-1011969789" class="col large-12"  >
			<div class="col-inner"  >
			<h2>Contact Us Directly</h2>
			<p>Telephone: {{$setting->phone1}} | {{$setting->phone2}}</p>
			<p>Email: {{$setting->email}}</p>
			<h2>Get a Wholesale Quote Now!</h2>
			<div id="gap-1784400824" class="gap-element clearfix" style="display:block; height:auto;">
				<style>
					#gap-1784400824 {
					padding-top: 20px;
					}
				</style>
			</div>
			<div role="form" class="wpcf7" id="wpcf7-f15-p91-o1" lang="en-US" dir="ltr">
				<div class="screen-reader-response">
					<p role="status" aria-live="polite" aria-atomic="true"></p>
					<ul></ul>
				</div>
				<form action="{{route('postcontact')}}" method="post" class="wpcf7-form init" novalidate="novalidate" data-status="init">
					@csrf
					<div class="form-flat">
						<span class="wpcf7-form-control-wrap your-name">
							<input type="text" name="name" value="" size="40" class="wpcf7-form-control wpcf7-text wpcf7-validates-as-required" aria-required="true" aria-invalid="false" placeholder="Your Name" />
						</span></p>
						{{-- <p><span class="wpcf7-form-control-wrap your-name">
							<input type="text" name="your-name" value="" size="40" class="wpcf7-form-control wpcf7-text wpcf7-validates-as-required" aria-required="true" aria-invalid="false" placeholder="Company Name (optional)" />
						</span></p> --}}
						<p><span class="wpcf7-form-control-wrap your-email">
							<input type="email" name="email" value="" size="40" class="wpcf7-form-control wpcf7-text wpcf7-email wpcf7-validates-as-required wpcf7-validates-as-email" aria-required="true" aria-invalid="false" placeholder="Email Address" />
						</span> </p>
						<p><span class="wpcf7-form-control-wrap number-373">
							<input type="number" name="phone" value="" class="wpcf7-form-control wpcf7-number wpcf7-validates-as-required wpcf7-validates-as-number" aria-required="true" aria-invalid="false" placeholder="Phone Number" />
						</span></p>
						<p><span class="wpcf7-form-control-wrap your-message">
							<textarea name="mess" cols="40" rows="10" class="wpcf7-form-control wpcf7-textarea" aria-invalid="false" placeholder="Request Contents *"></textarea>
						</span> </p>
						<p><input type="submit" value="Get a Quote!" class="wpcf7-form-control has-spinner wpcf7-submit button" /></p>
					</div>
					<div class="wpcf7-response-output" aria-hidden="true"></div>
				</form>
			</div>
			<h2>Our Address</h2>
			<p>🌐 {{$setting->address1}}</p>
			{{-- <p><em>(1008 Nguyen Chi Thanh St, Hiep An Ward, Thu Dau Mot City, Binh Duong Province, Vietnam 821443)</em></p> --}}
			<p>⏰&nbsp;Working&nbsp;Days/Hours:&nbsp;7h30 &#8211; 16h30 (Monday &#8211; Saturday) | GMT+07</p>
			</div>
		</div>
	</div>
</div>
</main>
@endsection