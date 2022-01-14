@extends('welcome')
@section('content')
<h1>Catagory name</h1>
<hr>
<a href="{{route('catagory.form')}}"><button class="btn btn-info">Add Category</button></a>
<hr>
    <div>
        <table class="table table-light" style="width: 100%">
            <thead>
            <tr>
                <th scope="col">id</th>
              <th scope="col">catagoryname</th> 
                <th scope="col">catagorystatus</th>

            </tr>
            </thead>
            
            
        </table>
    </div>
@endsection