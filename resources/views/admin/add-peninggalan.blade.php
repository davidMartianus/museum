@extends('/admin/navbaradmin')
@section('content')
<div class="container-fluid" id="buat-event">
	<div class="content-inner">
		<div class="form-wrapper">
			<header>
			<h3 class="page_title">Tambah Peninggalan Sejarah</h3>
			</header>
			<form method="POST" action="{{URL::to('admin/store-event')}}">
				<input type="hidden" name="_token" value="{{csrf_token()}}">
				<div class="form-group">
					<label class="sr-only">Nama Benda Peninggalan</label>
					<input type="text" name="judul" class="form-control" placeholder="Nama Museum">
				</div>

				<div class="form-group">
					<label class="sr-only">Tahun</label>
					<input type="text" name="judul" class="form-control" placeholder="Alamat Museum">
				</div>				

				<div class="form-group">
					<label class="sr-only">Deskripsi</label>
					<textarea name="isi" class="form-control" placeholder="Description" id="summernote"></textarea> 
				</div>

				<div id="poster-event">
					<h3>Foto Benda Peninggalan</h3>
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