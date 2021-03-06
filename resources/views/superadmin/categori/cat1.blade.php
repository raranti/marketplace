@extends('superadmin.layouts.app')
@section('title','Categori Dropshipping UMKM')

@section('content')

	<!-- Page container -->
	<div class="page-container">

		<!-- Page content -->
		<div class="page-content">

			<!-- Main content -->
			<div class="content-wrapper">

				<!-- Page header -->
        <div class="page-header">
            <div class="page-header-content">
                <div class="page-title">
                    <h4><i class="icon-arrow-left52 position-left"></i> <span class="text-semibold">Setting Categori</span></h4>
                </div>
            </div>

            <div class="breadcrumb-line breadcrumb-line-component">
                <ul class="breadcrumb">
                    <li><a href="" {{route('superadmin')}}""><i class="icon-home2 position-left"></i> Home</a></li>
                    <li class="active">Categori1</li>
                </ul>
            </div>

        </div>
				<!-- /page header -->


				<!-- Content area -->
				<div class="content">

            <div class="panel panel-flat">
  						<div class="panel-heading">
  							<h5 class="panel-title">Setting Categori1</h5>
  							<div class="heading-elements">
  								<ul class="icons-list">
  			                		<li><a data-action="collapse"></a></li>
  			                		<li><a data-action="reload"></a></li>
  			                		<li><a data-action="close"></a></li>
  			                	</ul>
  		                	</div>
  						</div>
							<div class="panel-body">
								<table class="table datatable">
									<thead>
										<tr class="bg-blue">
											<th>ID</th>
											<th>Nama</th>
											<th class="text-center"> Actions</th>

										</tr>
									</thead>
									<tbody>
										@foreach ($categori1 as $cat1)

										<tr>
											<td>{{$cat1->id}}</td>
											<td>{{$cat1->nama}}</td>
												<td class="text-center">
												<ul class="icons-list">
													<li class="dropdown">
														<a href="#" class="dropdown-toggle" data-toggle="dropdown">
															<i class="icon-menu9"></i>
														</a>
														<ul class="dropdown-menu dropdown-menu-right">
															<li><a href="#modal_tambah" id=" buttton_tambah" data-toggle="modal"><i class="fas fa-plus-square"></i> Tambah Data</a></li>
															<li><a href="#modal_edit" class="editbutton" data-toggle="modal" data-id="{{$cat1->id}}"><i class="fas fa-edit"></i> Edit</a></li>
															<li><a href="#modalHapus" class="hapusbutton" data-toggle="modal" data-id="{{$cat1->id}}" data-nama="{{$cat1->nama}}"><i class="fas fa-trash-alt"></i> Hapus</a></li>
														</ul>
													</li>
												</ul>
											</td>
										</tr>
									@endforeach
									</tbody>
								</table>
							</div>
  					</div>
					<!-- /basic datatable -->

					<!-- Footer -->
						@include('superadmin.include.footer')
					<!-- /footer -->

				</div>
				<!-- /content area -->

			</div>
			<!-- /main content -->

		</div>
		<!-- /page content -->

	</div>
	<div id="modal_tambah" class="modal fade" tabindex="-1">
		<div class="modal-dialog modal-lg">
			<div class="modal-content">
				<div class="modal-header">
					<button type="button" class="close" data-dismiss="modal">&times;</button>
					<h5 class="modal-title">Horizontal form</h5>
				</div>

				<form action="{{route('tambah.cat1')}}" class="form-horizontal" method="post">
						{{ csrf_field() }}
					<div class="modal-body">
						<div class="form-group">
							<label class="control-label col-sm-3">ID</label>
							<div class="col-sm-9">
								<input type="number" placeholder="" name="id" id="id" class="form-control" value="{{$max}}" readonly>
							</div>
						</div>

						<div class="form-group">
							<label class="control-label col-sm-3">Last name</label>
							<div class="col-sm-9">
								<input type="text" placeholder="" name="nama" id="nama"  class="form-control" required>
							</div>
						</div>

					</div>

					<div class="modal-footer">
						<button type="button" class="btn btn-link" data-dismiss="modal">Kembali</button>
						<button type="submit" class="btn btn-primary">Simpan</button>
					</div>
				</form>
			</div>
		</div>
	</div>

	<div id="modal_edit" class="modal fade" tabindex="-1">
		<div class="modal-dialog modal-lg">
			<div class="modal-content">
				<div class="modal-header">
					<button type="button" class="close" data-dismiss="modal">&times;</button>
					<h5 class="modal-title">Horizontal form</h5>
				</div>

				<form action="{{route('update.cat1')}}" class="form-horizontal" method="post">
					{{ csrf_field() }}
					<input type="hidden" id="id_edit" name="id_edit" >
					<div class="modal-body">
						<div class="form-group">
							<label class="control-label col-sm-3">ID</label>
							<div class="col-sm-9">
								<input type="number" placeholder="" name="modal_id" id="modal_id" class="form-control">
							</div>
						</div>

						<div class="form-group">
							<label class="control-label col-sm-3">Last name</label>
							<div class="col-sm-9">
								<input type="text" placeholder="" name="modal_nama" id="modal_nama"  class="form-control">
							</div>
						</div>

					</div>

					<div class="modal-footer">
						<button type="button" class="btn btn-link" data-dismiss="modal">Kembali</button>
						<button type="submit" class="btn btn-primary">Simpan</button>
					</div>
				</form>
			</div>
		</div>
	</div>

	<div id="modalHapus" class="modal fade" tabindex="-1">
		<div class="modal-dialog">
			<div class="modal-content">
				<div class="modal-header">
					<button type="button" class="close" data-dismiss="modal">&times;</button>
					<h5 class="modal-title">Hapus Data</h5>
				</div>

				<div class="modal-body">
					<p class="hapusnama"></p>
				</div>

				<div class="modal-footer">
					<form action="{{route('hapus.cat1')}}" method="post">
						@csrf
						<input type="hidden" class="field_modal_id" name="id">
						<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
						<button type="submit" class="btn btn-danger">Hapus</button>
					</form>
				</div>
			</div>
		</div>
	</div>

	<!-- /page container -->
			@include('sweet::alert')
			
		@if ($message=Session::get('success'))

		<script> swal("Sukses..","{{ $message }}","success") </script>

		@elseif ($message=Session::get('error'))

		<script> swal("Oops...","{{ $message }}","error") </script>

		@elseif ($message=Session::get('danger'))

		<script> swal("Oops...","{{ $message }}","error") </script>

		@elseif ($message=Session::get('warning'))

		<script> swal("Oops...","{{ $message }}","warning") </script>

		@endif

	<script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.10.19/js/jquery.dataTables.js"></script>
	<script>
		$(".datatable").DataTable();
	</script>

	<script>
		$(document).on('click', '.editbutton', function(e){
		// $('.editbutton').click(function() {
			var iD = $(this).attr('data-id');
			$.get('{{URL::to("superadmin/categori1/edit") }}/' + iD, function(data){
				$.each (data, function (index, edit_cat1){
				$('#id_edit').val(iD);
				$('#modal_id').val(edit_cat1.id);
				$("#modal_nama").val(edit_cat1.nama);
				});
			});

		});

		$(document).on('click', '.hapusbutton', function(e){
		// $(".hapusbutton").click(function (e) {
			var nama = $(this).data('nama');
			var id = $(this).data('id');

			$(".field_modal_id").val(id);
			$(".hapusnama").html("Apakah Anda Yakini Hapus Data <b>"+nama+"?</b>");
		});
	</script>


@endsection
