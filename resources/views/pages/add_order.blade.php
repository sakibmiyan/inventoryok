@extends('welcome')
@section('content')
<h1>Add Order</h1>
<hr>
<form action="{{route('order.add')}}"method="post">
  @csrf
 
				    

  <form class="form-horizontal" method="POST" action="" id="createOrderForm">

<div class="form-group">
  <label for="orderDate" class="col-sm-2 control-label">Order Date</label>
  <div class="col-sm-10">
    <input type="text" class="form-control" id="orderDate" name="orderDate" autocomplete="off" />
  </div>
</div> <!--/form-group-->
<div class="form-group">
  <label for="clientName" class="col-sm-2 control-label">Client Name</label>
  <div class="col-sm-10">
    <input type="text" class="form-control" id="clientName" name="clientName" placeholder="Client Name" autocomplete="off" />
  </div>
</div> <!--/form-group-->
<div class="form-group">
  <label for="clientContact" class="col-sm-2 control-label">Client Contact</label>
  <div class="col-sm-10">
    <input type="text" class="form-control" id="clientContact" name="clientContact" placeholder="Contact Number" autocomplete="off" />
  </div>
</div> <!--/form-group-->			  

<table class="table" id="productTable">
    <thead>
        <tr>			  			
            <th style="width:40%;">Product</th>
            <th style="width:20%;">Rate</th>
            <th style="width:10%;">Available Quantity</th>
            <th style="width:15%;">Quantity</th>			  			
            <th style="width:25%;">Total</th>			  			
            <th style="width:10%;"></th>
        </tr>
    </thead>
    <tbody>
</table>
<hr style="padding-top: 25px">
<hr style="padding-top: 25px">

 <!--/form-group-->			  
 <div class="form-group">
				    <label for="totalAmount" class="col-sm-3 control-label">Total Amount</label>
				    <div class="col-sm-9">
				      <input type="text" class="form-control" id="totalAmount" name="totalAmount" disabled="true"/>
				      <input type="hidden" class="form-control" id="totalAmountValue" name="totalAmountValue" />
				    </div>
				  </div> <!--/form-group-->			  
				  <div class="form-group">
				    <label for="discount" class="col-sm-3 control-label">Discount</label>
				    <div class="col-sm-9">
				      <input type="text" class="form-control" id="discount" name="discount" onkeyup="discountFunc()" autocomplete="off" />
				    </div>
				  </div> <!--/form-group-->	
				  <div class="form-group">
				    <label for="grandTotal" class="col-sm-3 control-label">Grand Total</label>
				    <div class="col-sm-9">
				      <input type="text" class="form-control" id="grandTotal" name="grandTotal" disabled="true" />
				      <input type="hidden" class="form-control" id="grandTotalValue" name="grandTotalValue" />
				    </div>
				  </div> <!--/form-group-->	


  <button type="submit" class="btn btn-secondary btn-md">Order Confirm</button>





</form>
@endsection
