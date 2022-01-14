@extends('welcome')
@section('content')
<h1>brand name</h1>
<hr>
<a href="{{route('brand.form')}}" class="btn btn-info">Add Brand</button></a>

<hr>
    <div>
        <table class="table table-light" style="width: 100%">
            <thead>
            <tr>
                <th scope="col">id</th>
              <th scope="col">brandname</th> 
                <th scope="col">brandstatus</th>

            </tr>
            </thead>
            <tbody>
                @foreach($brandlist as $key=>$brands)       
                <tr style="color:black;">
                    <th>{{$key+1}}</th>
                    <td>{{$brands->brandname}}</td> 
                    <td>{{$brands->brandstatus}}</td> 
                   
        
                </tr>
                @endforeach
            </tbody>
            
        </table>
        {{$brandlist->links()}}
    </div>


@endsection
