

@extends('welcome')
@section('content')
<h1>Catagory name</h1>
<hr>
<form method="post"  action="{{route('brands')}}">
@csrf


<div class="form-group">
    <label for="exampleFormControlInput1">Catagory Name</label>
    <input type="text" name="brandname"class="form-control" id="exampleFormControlInput1" placeholder="Photo">
  </div>

<div class="form-group" style="padding-top: 1px">
            <label>Status</label>
            <select name="brandstatus" class="form-control" style="width: 195px;">
                <option>--Select--</option>
                <option value="available">Availbale</option>
                <option value="notavailable">Not available</option>
         
                
            </select>

        </div>
<div style="padding-top: 10px">
<button type="button" class="btn btn-secondary btn-md">Close</button>
<button type="submit" class="btn btn-primary btn-md">Save</button>
</div>
</form>
@endsection
