@extends('admin.layouts.app')

@section('title', 'Test Page')

@section('content')

	<div class="container" style="margine-top:100px;">
		<div class="row">
			<div class="col-sm-2">
			</div>
			<div class="col-sm-4">
				<div class="info-box">
					<!-- <span class="info-box-icon bg-info"><i class="far fa-envelope"></i></span> -->
					<div class="info-box-content">
						<a href="{{ route('report.details') }}"><span class="info-box-text" style="font-size:15px">TOP 10 LATEST CONDOS</span></a>
						<!-- <span class="info-box-number">1,410</span> -->
					</div>
				</div>
			</div>
			<div class="col-sm-4">
				<div class="info-box">
					<!-- <span class="info-box-icon bg-info"><i class="far fa-envelope"></i></span> -->
					<div class="info-box-content">
					<a href="{{ route('report.details.smallestcondowsbyunits') }}"><span class="info-box-text" style="font-size:15px">TOP 10 SMALLEST CONDOS BY NUMBER OF UNITS</span></a>
						<!-- <span class="info-box-number">1,410</span> -->
					</div>
				</div>
			</div>
			<div class="col-sm-2">
			</div>
			
		</div>
		<div class="row">
			<div class="col-sm-2">
			</div>
			<div class="col-sm-4">
				<div class="info-box">
					<!-- <span class="info-box-icon bg-info"><i class="far fa-envelope"></i></span> -->
					<div class="info-box-content">
					<a href=""><span class="info-box-text" style="font-size:15px">TOP 10 MASSIVE CONDOS BY NUMBER OF UNITS</span></a>
						<!-- <span class="info-box-number">1,410</span> -->
					</div>
				</div>
			</div>
			<div class="col-sm-4">
				<div class="info-box">
					<!-- <span class="info-box-icon bg-info"><i class="far fa-envelope"></i></span> -->
					<div class="info-box-content">
					<a href=""><span class="info-box-text" style="font-size:15px">TOP 10 MASSIVE CONDOS BY LAND SIZE</span></a>

						<!-- <span class="info-box-number">1,410</span> -->
					</div>
				</div>
			</div>
			<div class="col-sm-2">
			</div>
			
		</div>
		<div class="row">
			<div class="col-sm-2">
			</div>
			<div class="col-sm-4">
				<div class="info-box">
					<!-- <span class="info-box-icon bg-info"><i class="far fa-envelope"></i></span> -->
					<div class="info-box-content">
					<a href=""><span class="info-box-text" style="font-size:15px">TOP 10 HIGH DENSITY CONDOS</span></a>

						<!-- <span class="info-box-number">1,410</span> -->
					</div>
				</div>
			</div>
			<div class="col-sm-4">
				<div class="info-box">
					<!-- <span class="info-box-icon bg-info"><i class="far fa-envelope"></i></span> -->
					<div class="info-box-content">
					<a href=""><span class="info-box-text" style="font-size:15px">TOP 10 LOW DENSITY CONDOS</span></a>

						<!-- <span class="info-box-number">1,410</span> -->
					</div>
				</div>
			</div>
			<div class="col-sm-2">
			</div>
			
		</div>
		<div class="row">
			<div class="col-sm-2">
			</div>
			<div class="col-sm-4">
				<div class="info-box">
					<!-- <span class="info-box-icon bg-info"><i class="far fa-envelope"></i></span> -->
					<div class="info-box-content">
					<a href=""><span class="info-box-text" style="font-size:15px">TOP 10 TALLEST CONDOS</span></a>

						<!-- <span class="info-box-number">1,410</span> -->
					</div>
				</div>
			</div>
			<div class="col-sm-4">
				<div class="info-box">
					<!-- <span class="info-box-icon bg-info"><i class="far fa-envelope"></i></span> -->
					<div class="info-box-content">
					<a href=""><span class="info-box-text" style="font-size:15px">TOP 10 OLDEST CONDOS</span></a>

						<!-- <span class="info-box-number">1,410</span> -->
					</div>
				</div>
			</div>
			<div class="col-sm-2">
			</div>
			
		</div>
	</div>
@endsection

@section('js')

@endsection
