@extends('/admin/navbaradmin')
@section('content')
<div class="container-fluid" id="buat-event">
	<div class="content-inner">
		<div class="form-wrapper">
			<header>
			<h3 class="page_title">Add Location</h3>
			</header>
			<form method="POST" action="{{URL::to('admin/store-event')}}">
				<input type="hidden" name="_token" value="{{csrf_token()}}">
				<div class="form-group">
					<label class="sr-only">Nama Museum</label>
					<input type="text" name="judul" class="form-control" placeholder="Nama Museum">
				</div>

				<div class="row" style="margin: 20px 0">
					<div class="col-md-6">
						<div id="map" style="width:100%;height:400px;"></div>
					</div>

					<div class="col-md-6">
						<h3 style="text-align: left">Alamat</h3>
						<div class="form-group">
							<label class="sr-only">Alamat</label>
							<input type="text" name="judul" class="form-control" placeholder="Alamat Museum" id="address">					
						</div>

						<div class="form-group">
							<h3 style="text-align: left">Latitude</h3>
							<label class="sr-only">Latitude</label>
							<input type="text" name="lat" id="lat" class="form-control" placeholder="Latitude">
						</div>

						<div class="form-group">
							<h3 style="text-align: left">Longtitude</h3>
							<label class="sr-only">Longtitude</label>
							<input type="text" name="lng" id="lng" class="form-control" placeholder="Longtitude">
						</div>

						<input type="button" class="btn btn-success btn-block" id="geocode" value="Cari"></input>
					</div>
				</div>

								

				<div class="form-group">
					<label class="sr-only">Deskripsi</label>
					<textarea name="isi" class="form-control" placeholder="Description" id="summernote"></textarea> 
				</div>

				<div id="poster-event">
					<h3>Foto Museum</h3>
					<br>
					<input type="file" name="gambar-event" class="form-control">
				</div>			

				<div class="form-group celarfix">
					<button type="submit" class="btn btn-primary pull-right">Submit</button>
				</div>
			</form>
		</div>
	</div>
</div>	
@endsection