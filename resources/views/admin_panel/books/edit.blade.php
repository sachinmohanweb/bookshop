@extends('admin_panel.dashboard_layouts.master')
@section('title', 'Books')

@section('css')
@endsection

@section('style')
@endsection

@section('content')

<div class="content">
	<div class="content-top-info d-flex justify-content-between mt-4 mb-4">
		<h2>Add Book</h2>
	</div>
	<div class="once-info">
		<form action="">
			<div class="info d-flex flex-wrap">
				<div class="col-lg-6 col-12">
					<div class="form-group">
						<div class="field" align="left">
							<label for="">Upload your images</label>
							<input type="file" id="files" name="files[]" multiple />
						</div>
					</div>
				</div>
				<div class="col-lg-6 col-12">
					<div class="form-group">
						<label for="">Title</label>
						<input type="text" class="form-control">
					</div>
				</div>
			</div>
			<div class="info d-flex flex-wrap">
				<div class="col-lg-6 col-12">
					<div class="form-group">
						<label for="">Description</label>
						<textarea name="" id="" class="form-control"></textarea>
					</div>
				</div>
				<div class="col-lg-6 col-12">
					<div class="form-group">
						<label for="">Author*</label>
						<input type="text" class="form-control">
					</div>
				</div>
				<div class="col-lg-6 col-12">
					<div class="form-group">
						<label for="">Strike off Price*</label>
						<input type="number" class="form-control">
					</div>
				</div>
				<div class="col-lg-6 col-12">
					<div class="form-group">
						<label for="">Selling Price</label>
						<input type="number" class="form-control">
					</div>
				</div>
				<div class="col-lg-6 col-12">
					<div class="form-group">
						<label for="">Delivery Fee</label>
						<input type="number" class="form-control">
					</div>
				</div>
				<div class="col-lg-6 col-12">
					<div class="form-group">
						<label for="">Genre</label>
						<select id="choices-multiple-remove-button" placeholder="Select up to 3 tags" multiple>
							<option value="Author" onclick="filterSelection('Action')">Action</option>
							<option value="Thriller">Thriller</option>
							<option value="Action" >Action</option>
							<option value="">Adventure</option>

						</select>
					</div>
				</div>
				<div class="col-lg-6 col-12">
					<div class="form-group">
						<label for="">SKU</label>
						<input type="text" class="form-control">
					</div>
				</div>
				<div class="col-lg-6 col-12">
					<div class="form-group">
						<label for="">Size</label>
						<input type="text" class="form-control">
					</div>
				</div>
				<div class="col-lg-6 col-12">
					<div class="form-group">
						<label for="">EAN</label>
						<input type="number" class="form-control">
					</div>
				</div>
				<div class="col-lg-6 col-12">
					<div class="form-group">
						<label for="">Number Of Pages</label>
						<input type="number" class="form-control">
					</div>
				</div>
				<div class="col-lg-6 col-12">
					<div class="form-group">
						<label for="">Language</label>
						<input type="text" class="form-control">
					</div>
				</div>
				<div class="col-lg-6 col-12">
					<div class="form-group">
						<label for="">Binding</label>
						<input type="text" class="form-control">
					</div>
				</div>
				<div class="col-lg-6 col-12">
					<div class="form-group">
						<label for="">Country Of Origin</label>
						<input type="text" class="form-control">
					</div>
				</div>
				<div class="col-lg-6 col-12">
					<div class="form-group">
						<label for="">Published Date</label>
						<input type="text" class="form-control">
					</div>
				</div>
				<div class="col-lg-6 col-12">
					<div class="form-group">
						<label for="">Additional Information</label>
						<textarea name="" id="" class="form-control"></textarea>
					</div>
				</div>
				<div class="col-lg-6 col-12">
					<div class="form-group d-flex justify-content-center flex-column h-100">
						<div class="form-check">
							<input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
							<label class="form-check-label" for="flexCheckDefault">
								New Arrival
							</label>
						</div>
						<div class="form-check">
							<input class="form-check-input" type="checkbox" value="" id="flexCheckChecked">
							<label class="form-check-label" for="flexCheckChecked">
								Best Seller
							</label>
						</div>
					</div>
				</div>

				<div class="col-lg-6 col-12">
					<div class="form-group">
						<label for="">Offer Tag</label>
						<input type="text" class="form-control">
					</div>
				</div>
				<div class="col-lg-6 col-12">
					<div class="form-group">
						<label for="">No of Books in Stock</label>
						<input type="number" class="form-control">
					</div>
				</div>

			</div>
			<div class="col-12">
				<div class="add-button d-flex justify-content-center mt-5 mb-5">
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