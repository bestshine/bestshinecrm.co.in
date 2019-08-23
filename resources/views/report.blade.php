<html lang="en">


<!-- <style type="text/css">
	.top{margin-top: -10px; width: 100%; height:710px; border:1px solid black; font-family: calibri;}
	.logo{float: left; border:1px solid #ddd; padding: 5px; height: 120px; width:120px;}
	.top h1{width: 62.2%; height: auto; float: left; margin-top: -5px;}
	.stu-image
	{
		border:1px solid #ddd; padding: 5px; height: 120px; width:120px; float: right;
	}
	.address{width: 42%; margin:35px 0 0 29%; text-align: center;}
	.top .report{width: 100%; margin-top: 60px; text-align: center;}
	.left-info{width: 40%; margin-top: 80px; border:0px solid black; float: left;}
	.right-info{width: 40%; margin-top: 80px; border:0px solid red; float: right;}
	table.table1{border-collapse:collapse;border-spacing:0; width: 100%; margin-left: 15px; margin-right: 25px; font-size: 12px; margin-top: 50px;}
	.top table.table2{border-collapse:collapse;border-spacing:0; width: 100%; padding:0px 15px; border:1px solid black; margin-top: 200px;}
	.table-bordered th, .table-bordered td{border:1px solid #ddd; text-align: left; padding: 10px;}
	.table-bordered th{background-color: #eee;}
	.red{color: red;}
</style> -->
<body>
			<table class="table1 table-bordered">
				<tr>
					<th colspan="5" align="center">{{ $total->exam_type }} Term of {{ $total->month }} Report</th>
				</tr>
				<tr>
					<th>Subject</th>
					<th>Max Marks</th>
					<th>Pass Marks</th>
					<th>Obtained Marks</th>
					<th>Grade</th>
				</tr>
				@foreach($results as $result)
					<tr>
						<td>{{ $result->subject }}</td>
						<td>{{ $result->max_marks }}</td>
						<td>{{ $result->pass_marks }}</td>
						<td>{{ $result->obtained_marks }}</td>
						<td>{{ $result->grade }}</td>
					</tr>
				@endforeach
				<tr>
					<th>Total</th>
					<th>{{ $total->total_marks }}</th>
					<th>{{ $total->pass_marks }}</th>
					<th>{{ $total->obtained_marks }}</th>
					<th>Pass</th>
				</tr>
			</table>
</body>
</html>
