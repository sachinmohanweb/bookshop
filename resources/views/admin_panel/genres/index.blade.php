@extends('admin_panel.dashboard_layouts.master')
@section('title', 'Genres')

@section('css')
@endsection

@section('style')
@endsection

@section('content')
<div class="content">
	<div class="content-top-info d-flex justify-content-between mt-4 mb-4">
		<h2>Genres</h2>
		<div class="add-info">
			<a href="{{route('admin.add.genre')}}" class="btn btn-primary">Add Genre</a>
		</div>
	</div>
	<table id="example" class="table table-striped" style="width:100%">
		<thead>
			<tr>
				<th>Sl No</th>
				<th>Title</th>
				<th>Description</th>
				<th>Thumbail Image</th>
				<th>Action</th>

			</tr>
		</thead>
		<tbody>
			<tr>
				<td>01</td>
				<td>Action & Adventure</td>
				<td>Lorem, ipsum dolor sit amet consectetur adipisicing eli</td>
				<td><img src="img/1.png" alt=""></td>
				<td> <a href="{{route('admin.edit.genre')}}" class="btn btn-warning btn-circle">
					<i class="fas fa-pen"></i>
				</a> <a class="btn btn-danger btn-circle" onclick="sweet()">
					<i class="fas fa-trash"></i>
				</a>
			</td>

		</tr>
		<tr>
			<td>02</td>
			<td>Mystery</td>
			<td>Lorem ipsum dolor sit amet cons</td>
			<td><img src="img/1.png" alt=""></td>
			<td> <a href="edit-genre.html" class="btn btn-warning btn-circle">
				<i class="fas fa-pen"></i>
			</a> <a class="btn btn-danger btn-circle" onclick="sweet()">
				<i class="fas fa-trash"></i>
			</a>
		</td>

	</tr>
</tbody>
</table>
    @include('admin_panel.dashboard_layouts.footer')  


</div>

@endsection

@section('script')
@endsection