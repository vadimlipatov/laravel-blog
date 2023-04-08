@extends('admin.layouts.main')

@section('content')
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
	<!-- Content Header (Page header) -->
	<div class="content-header">
		<div class="container-fluid">
			<div class="row mb-2">
				<div class="col-sm-6 d-flex align-items-center">
					<h1 class="m-0">{{$user->name}}
					</h1>
					<a href="{{route('admin.user.show', $user->id)}}" class="text-success"><i class="nav-icon far fa-pen"></i>edit</a>
				</div><!-- /.col -->
				<div class="col-sm-6">
					<ol class="breadcrumb float-sm-right">
						<li class="breadcrumb-item"><a href="{{route('admin.user.index')}}">Home</a></li>
						<li class="breadcrumb-item">Users</li>
						<li class="breadcrumb-item active">{{$user->id}}</li>
					</ol>
				</div><!-- /.col -->
			</div><!-- /.row -->
		</div><!-- /.container-fluid -->
	</div>
	<!-- /.content-header -->

	<!-- Main content -->
	<section class="content">
		<div class="container-fluid">
			<div class="row">
				<div class="col-12">
					<div class="card">
						<!-- /.card-header -->
						<div class="card-body table-responsive p-0">
							<table class="table table-hover text-nowrap">
								<tbody>
									<tr>
										<td>ID</td>
										<td>{{$user->id}}</td>
									</tr>
									<tr>
										<td>Name</td>
										<td>{{$user->name}}</td>
									</tr>
									<tr>
										<td>Email</td>
										<td>{{$user->email}}</td>
									</tr>
								</tbody>
							</table>
						</div>
						<!-- /.card-body -->
					</div>
					<!-- /.card -->
				</div>

			</div>
			<!-- /.row -->

		</div><!-- /.container-fluid -->
	</section>
	<!-- /.content -->
</div>
<!-- /.content-wrapper -->
@endsection