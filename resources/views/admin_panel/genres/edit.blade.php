@extends('admin_panel.dashboard_layouts.master')
@section('title', 'Books')

@section('css')
@endsection

@section('style')
@endsection

@section('content')

<div class="main-content">
	<header class="topbar">
		<h1>Dashboard</h1>
		<div class="user-info">
			<p>Welcome, User</p>
			<a href="#">Logout</a>
		</div>
	</header>
	<div class="content">
		<div class="content-top-info d-flex justify-content-between mt-4 mb-4">
			<h2>Add Genre</h2>
		</div>
		<div class="once-info">
			<form action="">
				<div class="info d-flex flex-wrap">
					<div class="col-lg-6 col-12">
						<div class="form-group">
							<label for="">Thumbnail Image*</label>
							<input type="file" class="form-control">
						</div>
					</div>
					<div class="col-lg-6 col-12">
						<div class="form-group">
							<label for="">Title*</label>
							<input type="text" class="form-control">
						</div>
					</div>
				</div>
				<div class="info d-flex flex-wrap">
					<div class="col-12">
						<div class="form-group">
							<label for="">Description</label>
							<textarea name="" id="" class="form-control"></textarea>
						</div>
					</div>

					<div class="col-12">
						<div class="add-button d-flex justify-content-center mt-4">
							<button class="btn btn-primary">Add a Banner</button>
						</div>
					</div>
				</form>
			</div>

			@include('admin_panel.dashboard_layouts.footer')  

		</div>
        

@endsection

@section('script')
@endsection