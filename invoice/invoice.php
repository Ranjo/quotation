<!DOCTYPE html>
<html>
<head>
	<title>Quotation</title>
</head>
<link rel="stylesheet" type="text/css" href="css/bootstrap/bootstrap.min.css">
<body>
<div class="container">
<div class="container">
	to:<br> <textarea class="col-md-5 form-group"></textarea>
</div>
<div class="rows">
<div class="col-xs-3">
Refference: TT/0223/2019
</div>
<div class="col-xs-3">
	Quotation number: 1
	</div>
	<div class="col-xs-3">
	Date:<?php echo date("d/m/Y"); ?>
</div>
	</div>

</div>
<div class="container">

<table class="table table-stripped">
<thead>
<tr>
<th>Item number</th>
	<th>Item description</th>
	<th>Quantity</th>
	<th>Unit price</th>
	<th>Total Cost</th>
	</tr>
</thead>
<tbody>
<tr>
<td>1</td>
<td><input type="textarea" name="descrip"></td>
	<td>5</td>
	<td>1000</td>
	<td>50000</td>
	
</tr>
<tr>
<td>1</td>
<td><input type="textarea" name="descrip"></td>
	<td>5</td>
	<td>1000</td>
	<td>50000</td>
	
</tr>
<tr>
<td>1</td>
<td><input type="textarea" name="descrip"></td>
	<td>5</td>
	<td>1000</td>
	<td>50000</td>
	
</tr>
<tr>
<td>1</td>
<td><input type="textarea" name="descrip"></td>
	<td>5</td>
	<td>1000</td>
	<td>50000</td>
	
</tr>
</tbody>
<tfoot >

	<tr>
		<td><b>Total</b></td>
		<td></td>
		<td></td>
		<td></td>
		<td><b>Total</b></td>
	</tr>
	
</tfoot>
</table>
</div>
<div class="container">
<form>
<div class="rows">
<div class="col-xs-6">
Served by:</div><div class="col-xs-6"> Tony</div>
</div>
<div class="col-xs-6">
Date: </div>
 <div class="col-xs-6">
 22nd Feb 2019
</div>

<div class="rows">
<div class="col-xs-6">
Warrant:
</div>
<div class="col-xs-6">
 12 months
 </div>
</div>
<div class="rows">
<div class="col-xs-6">
Quotation Validity:
</div>
<div class="col-xs-6"> 
30 days
</div>
</div>

</form>
</div>
<div class="container">
	<Button class="btn-lg">Save and Print</Button>
	<button class="btn-lg">Send Via email</button>
</div>
</body>
</html>
