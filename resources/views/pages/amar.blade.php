@extends('welcome')
@section('content')
<h1>brand name</h1>
<hr>


<hr>
    <div>
     <h1>this is ameria</h1>
    </div>

    <a href="{{ url('/') }}">Home</a> |
    <a href="{{ URL::to('/brands') }}">About</a> |
    <a href="{{ URL::to('/orders') }}">About</a> |

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
    </div>
    



@endsection
