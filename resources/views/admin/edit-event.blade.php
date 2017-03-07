@extends('/admin/navbar')
@section('content')
<div class="container-fluid" id="buat-event">
	<div class="content-inner">
		<div class="form-wrapper">
			<header>
			<h3 class="page_title">Edit Event</h3>
			</header>
			<form>
				<div class="form-group">
					<label class="sr-only">Judul</label>
					<input type="text" name="judul" class="form-control" placeholder="Judul">
				</div>

				<div class="form-group">
					<label class="sr-only">Isi</label>
					<textarea name="isi" class="form-control" placeholder="Description" id="summernote"></textarea> 
				</div>

				<div class="celarfix">
					<button type="submit" class="btn btn-primary pull-right">Save</button>
				</div>
			</form>
		</div>
	</div>
</div>	
@endsection