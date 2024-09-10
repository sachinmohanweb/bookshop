@extends('admin_panel.dashboard_layouts.master')
@section('title', 'Books')

@section('css')
@endsection

@section('style')
@endsection

@section('content')

<div class="content">
	<div class="book-detail-sec">
		<div class="content-top-info d-flex justify-content-between mt-4 mb-4">
			<h2>Book Details</h2>
			<div class="add-info">
				<a href="{{route('admin.edit.book')}}" class="btn btn-primary">Edit Book</a>
			</div>
		</div>
		<div class="inventory">

			<div class="images d-flex align-items-center flex-wrap">
				<div class="image-sec"><img src="img/1.png" alt="">
					<span>X</span>
				</div>
				<div class="image-sec"><img src="img/1.png" alt="">
					<span>X</span>
				</div>
				<div class="image-sec"><img src="img/1.png" alt="">
					<span>X</span>
				</div>


			</div>
			<div class="product-details">
				<ul>
					<li>
						<h3>Title</h3>
						<p>Rich Dad h3oor Dad</p>
					</li>
					<li>
						<h3>Description</h3>
						<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Labore culpa ullam, pariatur asperiores. Natus animi consectetur quisquam voluptas maxime ipsum eaque, quis ducimus, veniam laudantium, maiores hic delectus aliquam minus!</p>
					</li>
					<li>
						<h3>Author</h3>
						<p> Robert Kiyosaki</p>
					</li>
					<li>
						<h3>Strike off Price</h3>
						<p>700</p>
					</li>
					<li>
						<h3>Selling Price</h3>
						<p>600</p>
					</li>
					<li>
						<h3>Delivery Fee</h3>
						<p>25</p>
					</li>
					<li>
						<h3>Genre</h3>
						<p>Action,Thriller</p>
					</li>

					<li>
						<h3>SKU</h3>
						<p> BK0501281</p>
					</li>
					<li>
						<h3>Size</h3>
						<p> Small</p>
					</li>
					<li>
						<h3>EAN</h3>
						<p> 9780008710637</p>
					</li>
					<li>
						<h3>Number Of h3ages</h3>
						<p> 463 h3ages</p>
					</li>
					<li>
						<h3>Language</h3>
						<p> English</p>
					</li>
					<li>
						<h3>Binding</h3>
						<p> h3ah3erback</p>
					</li>
					<li>
						<h3>Country Of Origin</h3>
						<p> USA</p>
					</li>
					<li>
						<h3>Published Date</h3>
						<p> 12-Oct 2022</p>
					</li>
					<li>
						<h3>Additional Information</h3>
						<p>  aure breed Shih Tzu.
							Good body structure.
							With
							MKA cert and Microchih3.
							Father from chamh3ion
							lineage.
						</p>
					</li>
					<li>
						<h3>New Arrival</h3>
						<p>Yes</p>
					</li>
					<li>
						<h3>Best Seller</h3>
						<p>Yes</p>
					</li>
					<li>
						<h3>Offer Tag</h3>
						<p>20%</p>
					</li>
					<li>
						<h3>No of Books in Stock</h3>
						<p>50</p>
					</li>

				</ul>
			</div>
		</div>
	</div>

   
    @include('admin_panel.dashboard_layouts.footer')  

</div>
        

@endsection

@section('script')
@endsection