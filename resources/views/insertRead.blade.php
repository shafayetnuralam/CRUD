
@extends('welcome')
@section('content')
<center>
    <!-- Button trigger modal -->
    <button type="button" class="btn btn-outline-danger fw-bold fs-4 rounded-pill" data-bs-toggle="modal" data-bs-target="#staticBackdrop">
    Add Record
    </button>
</center>
<!-- Modal -->
<div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="staticBackdropLabel">CRUD</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
<form action="insertData" method="Post" enctype="multipart/form-data">
       @csrf
        <div class="mb-2">
            <input type="text" placeholder="Enter Product Name" class="form-control" name="PName" id="">
        </div>

        <div class="mb-2">
            <input type="text" placeholder="Enter Product Price" class="form-control" name="PPrice" id="">
        </div>
        
        <div class="mb-2">
            <input type="file" class="form-control" name="PImage" id="">
        </div>

        <button type="submit" class="btn btn-outline-danger fw-bold fs-4 rounded-pill"> Add Record</button>
</form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>
<table class="table mt-5">
  <thead class="bg-danger text-white fw-bo;d">
    <tr>
        <th>Product Name</th>
        <th>Product Price</th>
        <th>Product Image</th>
        <th>Action</th>
    </tr>
  </thead>
  <tbody class="text-danger bg-light fs-4">
    @foreach($data as $item)
    <tr>
        <td class="pt-5">{{$item['PName']}}</td>
        <td class="pt-5">{{$item['PPrice']}}</td>
        <td class="pt-5"><img src="{{asset('images/'.$item['PImage'])}}" width="100px" height="100px" alt=""></td>
        <td class="pt-5"><a href="">Edit</a> | <a href="">Delete</a></td>
    </tr>
    @endforeach
  </tbody>
</table>
@endsection