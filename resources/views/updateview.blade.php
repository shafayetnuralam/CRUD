@extends('welcome')
@section('content')
<div class="col-md-4 m-auto border mt-3 p-2 border-info">
    <h2 class="text-center text-warning">Update Product</h2>
    <form action="" method="get">
        <div class="mb-2">
            <label for="">Product Name</label> 
            <input type="text" name="PName" id="" class="form-control" value="">
        </div>

        <div class="mb-2">
            <label for="">Product Price</label> 
            <input type="text" name="PPrice" id="" class="form-control" value="">
        </div>
        <br>
        <button type="submit" class="btn btn-outline-warning rounded-pill">Update </button>
    </form>
</div>

@endsection