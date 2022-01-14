@extends('welcome')
@section('content')

<div class="row">
	<div class="col-md-12">

		<ol class="breadcrumb">
		 	  
		  <li class="active">Product</li>
		</ol>

		<div class="panel panel-default">
			<div class="panel-heading">
				
			</div> <!-- /panel-heading -->
			<div class="panel-body">

				<div class="remove-messages"></div>

				<div class="div-action pull pull-right" style="padding-bottom:20px;">
				<a href="{{route('add.products')}}" class="btn btn-info">Add Product</button></a>
				</div> <!-- /div-action -->				
				<div>
				<table class="table" id="manageProductTable">
					<thead>
						<tr>
							<th style="width:10%;">Photo</th>							
							<th>Product Name</th>
							<th>Rate</th>							
							<th>Quantity</th>
							<th>Brand</th>
							<th>Category</th>
							<th>Status</th>
							
						</tr>
					</thead>
					@foreach($products as $list)
					<tr>
						<th>{{$list->Photo}}</th>
						<th>{{$list->Name}}</th>
						<th>{{$list->Rate}}</th>
						<th>{{$list->Quantity}}</th>
						<th>{{$list->Brand}}</th>
						<th>{{$list->Category}}</th>
						<th>{{$list->Status}}</th>
</tr>
@endforeach
					


				</table>
				{{$products->links()}}
				</div>
<hr>
				
				<!-- /table -->
<hr>
			</div> <!-- /panel-body -->
			
		</div > <!-- /panel -->		
		<div col-md-12></div>
	</div> <!-- /col-md-12 -->
</div> <!-- /row -->


@endsection