@extends('layouts.main')

@section('content')

<div class="card" >
  <div class="card-body">
  <form action="{{ route('product.store') }}" method="post">
  @csrf
  <div class="form-group">
    <label for="exampleInputEmail1">Name</label>
    <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="name" placeholder="Enter Name">
  </div>
  <div class="form-group">
    <label for="exampleInputEmail1">photo</label>
    <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="photo" placeholder="Enter photo">
  </div>
  <div class="form-group">
    <label for="exampleInputEmail1">price</label>
    <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="price" placeholder="Enter price">
  </div>
   <button type="submit" class="btn btn-primary float-right">Submit</button>
</form>
  </div>
</div>

@endsection