<?php
$libPath = base_path(). "/whoisxmlapi_4";
?>
@extends('layouts.master')

@section('title')
@parent
:: Forgot Password
@stop

@section('styles')
{{ HTML::style('css/remind.css') }}
@parent
@stop

@section('content')
<div class="row wa-searchbox-radio">
	<div class="col-xs-12 wa-auto-margin">
		<div class="row">
			<div class="col-sm-6 col-xs-12 wa-search-eg-box wa-search-eg-box-whoisApi">
				<form id="whoisform" name="whoisform" action="{{ URL::to('whoislookup.php') }}">
					<div class="form-group has-feedback wa-search-box wa-search-box-whoisApi">
						<input type="text" class="form-control wa-search wa-search-whoisApi" id="wa-search-whoislookup" placeholder="Whois Lookup">
						<span class="glyphicon glyphicon-search form-control-feedback wa-cursor" id="wa-search-icon-whoislookup"></span>
						<div class="wa-exapple wa-example-whoisApi">Example:google.com or 74.125.45.100</div>
						<div class="wa-radio-inputs wa-radio-xml-Josn wa-radio-xml-json-whoisApi">
							<div class="wa-radio-input wa-radio-input-xml wa-radio-input-whois">
								<input type="radio" value="xml" checked id="wa-radio-xml" class="wa-cursor wa-radio-orange-bar wa-field-input-selection wa-field-input-selection-whoisApi wa-api-res-type" name="wa-lbl-radio">
								<label for="wa-radio-xml" class="wa-cursor wa-field-value-selection  wa-field-value-selection-whoisApi" id="wa-lbl-XMl">XML</label>
								<div class="wa-home-radio-outerCircle">
									<div class="wa-home-radio-innerCircle"></div>
								</div>
							</div>
							<div class="wa-radio-input wa-radio-input-json wa-radio-input-whois">
								<input type="radio" value="json" id="wa-radio-json" class="wa-cursor wa-radio-orange-bar wa-field-input-selection wa-field-input-selection-whoisApi wa-api-res-type" name="wa-lbl-radio">
								<label for="wa-radio-json" class="wa-cursor wa-field-value-selection  wa-field-value-selection-WhoisApi" id="wa-lbl-JSON">JSON</label>
								<div class="wa-home-radio-outerCircle wa-home-radio-outerCircle-whoisApi">
									<div class="wa-home-radio-innerCircle wa-home-radio-innerCircle-whoisApi" style="display: none;"></div>
								</div>
							</div>
						</div>
						<div id="wa-user-stats" class="wa-user-stats"><?php include_once $libPath . "/user_stats.php"; ?>
						</div>
					</div>
				</form>
			</div>
			<div class="col-sm-6 col-xs-12 wa-btn wa-btn-whoisApi">
				<div class="row">
					<div class="col-sm-offset-4 col-sm-4 col-xs-12 wa-btn-order">
						<a href="{{ URL::to('order_paypal.php') }}"><button type="button" class="btn btn-default wa-btn-orderNow wa-btn-orderNow-WhoisApi center-block" id="wa-btn-orderNow-whoisApi">ORDER NOW</button></a>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
<div class="row wa-page-title-content-bg wa-page-title-content-bg-reg">
	<div class="col-xs-12 wa-auto-margin wa-about-whoisApi wa-title-reg">
		<div class="text-center wa-title wa-title" id="page-title">Forgot Username/Password</div>
	</div>
</div>
<div id="wa-page-content">
	<div class="row wa-content-bg wa-content-bg-reg">
		<div class="col-xs-12 wa-box-width-xs wa-box-margin-whoisapi wa-auto-margin">
			<div class="wa-box wa-box-remind">
				<div class="row">
					<div class="col-sm-6 col-xs-12  wa-col-remind">
						<div class="wa-section-title wa-section-title-remind">Forgot Username</div>
						{{ Form::open(array('url' => 'password/remind-username.php')) }}
							<span class="wa-field-title wa-field-title-remind">Enter Email Address</span>
							<input type="email" class="form-control wa-form-control" name="email">
							<input type="submit" value="Submit" class="btn btn-default wa-btn wa-btn-orange wa-btn-remind">
						{{ Form::close() }}
					</div>

					<div class="col-sm-6 col-xs-12 wa-col-remind">
						<div class="wa-section-title wa-section-title-remind">Forgot Password</div>
						{{ Form::open(array('url' => 'password/remind.php')) }}
							<span class="wa-field-title wa-field-title-remind">Enter Email Address</span>
							<input type="email" name="email" class="form-control wa-form-control">
							<input type="submit" value="Submit" class="btn btn-default wa-btn wa-btn-orange wa-btn-remind">
						{{ Form::close() }}
					</div>
				</div>
			</div>
		</div>
	</div>
</div>

@stop

@section('scripts')
@parent

@stop