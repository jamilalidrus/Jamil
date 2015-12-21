<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" type="text/css" href="css/bootstrap/bootstrap.min.css">
</head>
<body>
	<div class="container">
		<h2>Data User</h2>
		<div class="row">
			<div class="col-md-12">
			
			<table class="table table-striped table-bordered">

				
					<th>id</th>
					<th>Nama</th>
					<th>Email</th>
					<th>Password</th>
					<th>Status</th>
					<th>Action</th>
				@foreach($user as $e)
					<tr>
						<td>{{$e->id}}</td>
						<td>{{$e->name}}</td>
						<td>{{$e->password}}</td>
						<td>{{$e->alamat}}</td>
						
						<td><a class="btn btn-warning" href="">Ubah</a>&nbsp&nbsp&nbsp<a class="btn btn-danger" href="">Hapus</a></td>
					</tr>
				@endforeach
			</table>
			</div>
		</div>
	</div>
</body>
</html>