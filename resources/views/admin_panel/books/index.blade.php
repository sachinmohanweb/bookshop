@extends('admin_panel.dashboard_layouts.master')
@section('title', 'Books')

@section('css')
@endsection

@section('style')
@endsection

@section('content')

<div class="content">
    <div class="content-top-info d-flex justify-content-between mt-4 mb-4">
        <h2>Book Inventory</h2>
        <div class="add-info">
            <a href="{{route('admin.add.book')}}" class="btn btn-primary">Add Book</a>
        </div>
    </div>
    <table id="example" class="table table-striped" style="width:100%">
        <thead>
            <tr>
                <th>Sl No</th>
                <th>Book Image</th>
                <th>Author</th>
                <th>Genre</th>
                <th>Strike off Price</th>
                <th>Selling Price</th>
                <th>New Arrival</th>
                <th>Best Seller</th>

                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>01</td>
                <td><img src="img/banner1.png" alt=""></td>
                <td>Robert Kiyosaki</td>
                <td>Adventure</td>
                <td>700</td>
                <td>500</td>
                <td><div class="toggle-btn active">
                    <input type="checkbox"  checked class="cb-value" />
                    <span class="round-btn"></span>
                </div>
            </td>
            <td><div class="toggle-btn active">
                <input type="checkbox"  checked class="cb-value" />
                <span class="round-btn"></span>
                </div>
            </td>
            <td> 
                <a href="{{route('admin.edit.book')}}" class="btn btn-warning btn-circle">
                    <i class="fas fa-pen"></i>
                </a>
                <a href="{{route('admin.book.details')}}" class="btn btn-eye btn-circle">
                    <i class="fas fa-eye"></i>
                </a>
                <a class="btn btn-danger btn-circle" onclick="sweet()">
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