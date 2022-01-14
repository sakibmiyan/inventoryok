@extends('welcome')
@section('content')
<h1>Add Product Table</h1>
<form action="{{route('product.add')}}"method="post">
  @csrf
  <div class="form-group">
    <label for="exampleFormControlInput1">Photo</label>
    <input type="text" name="photo"class="form-control" id="exampleFormControlInput1" placeholder="Photo">
  </div>
  

  <div class="form-group">
    <label for="exampleFormControlInput1">Product Name</label>
    <input type="text" name="productname"class="form-control" id="exampleFormControlInput1" placeholder="Product Name">
  </div>

  <div class="form-group">
    <label for="exampleFormControlInput1">Rate</label>
    <input type="text" name="rate"class="form-control" id="exampleFormControlInput1" placeholder="Rate">
  </div>

  <div class="form-group">
    <label for="exampleFormControlInput1">Quantityu</label>
    <input type="text" name="quintity"class="form-control" id="exampleFormControlInput1" placeholder="Quantityu">
  </div>

  <div class="form-group">
    <label for="exampleFormControlInput1">Brand</label>
    <input type="text" name="brand"class="form-control" id="exampleFormControlInput1" placeholder="Brand">
  </div>

  <div class="form-group">
    <label for="exampleFormControlInput1">Category</label>
    <input type="text" name="category"class="form-control" id="exampleFormControlInput1" placeholder="Category">
  </div>

  <div class="form-group">
    <label for="exampleFormControlInput1">Status</label>
    <input type="text" name="status"class="form-control" id="exampleFormControlInput1" placeholder="Status">
  </div>
  <button type="submit" class="btn btn-secondary btn-md">Submit</button>





</form>
@endsection
