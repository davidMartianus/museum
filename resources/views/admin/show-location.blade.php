@extends('/admin/navbaradmin')
@section('content')

<div class="container-fluid" id="table-dashboard">	
	<h2>Daftar Lokasi</h2>
	<div class="col-xs-12 col-md-12">
		<div class="form-group">
          <input type="text" class="form-control cari filter" id="filter" placeholder="Search here">
        </div>
	</div>
	<table id="mytable" class="table table-responsive table-bordered">
		<thead>
			<tr>
				<th>Nama</th>
				<th>Alamat</th>
				<th>Deskripsi</th>
				<th>Longtitude</th>
				<th>Latitude</th>
				<th>Gambar</th>
				<th>Aksi</th>
			</tr>
		</thead>
		<tbody>
			<tr>
				<td>Museum A</td>
				<td>Jakarta Barat</td>
				<td style="word-break: break-all;">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod.</td>
				<td>1123123</td>
				<td>1231231</td>
				<td>bla.jpg</td>
				<td><button type="button" class="btn btn-xs btn-primary"><i class="glyphicon glyphicon-pencil"></i></button>&nbsp;<button type="button" class="btn btn-xs btn-danger"><i class="glyphicon glyphicon-trash"></i></button></td>
			</tr>

			<tr>
				<td>Museum B</td>
				<td>Jakarta Timur</td>
				<td style="word-break: break-all;">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod.</td>
				<td>2342341</td>
				<td>4352434</td>
				<td>blast.jpg</td>
				<td><button type="button" class="btn btn-xs btn-primary"><i class="glyphicon glyphicon-pencil"></i></button>&nbsp;<button type="button" class="btn btn-xs btn-danger"><i class="glyphicon glyphicon-trash"></i></button></td>
			</tr>
		</tbody>
	</table>
</div>
@endsection