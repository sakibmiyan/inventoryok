@extends('welcome')
@section('content')
<h1>Manage Order</h1>
<hr>
<a href="{{route('order.add')}}" class="btn btn-info">Add Order</button></a>
<hr>
<div>
        <table class="table table-light" style="width: 100%">
            <thead>
            <tr>
                <th scope="col">ID</th>
              <th scope="col">Orderdate</th> 
                <th scope="col">Clientname</th>
                <th scope="col">Contact</th>
                <th scope="col">Product</th>
                <th scope="col">Option</th>

            </tr>
            </thead>
            
            
        </table>
    </div>

<hr>



@endsection

