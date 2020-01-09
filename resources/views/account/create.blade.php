@extends('layouts.main')

@section('content')

<div class="card" >
  <div class="card-body">
  <form action="{{ route('account.store') }}" method="post">
  @csrf
  <div class="form-group">
    <label for="exampleInputEmail1">Name</label>
    <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="name" placeholder="Enter Name">
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">Email</label>
    <input type="email" class="form-control" id="exampleInputPassword1" name="email" placeholder="Password">
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">Password</label>
    <input type="password" class="form-control" id="exampleInputPassword1" name="password" placeholder="Password">
  </div>  <button type="submit" class="btn btn-primary float-right">Submit</button>
</form>
  </div>
</div>

@endsection