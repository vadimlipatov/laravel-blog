@extends('admin.layouts.main')

@section('content')
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
	<!-- Content Header (Page header) -->
	<div class="content-header">
		<div class="container-fluid">
			<div class="row mb-2">
				<div class="col-sm-6">
					<h1 class="m-0">Tags</h1>
				</div><!-- /.col -->
				<div class="col-sm-6">
					<ol class="breadcrumb float-sm-right">
						<li class="breadcrumb-item"><a href="{{route('admin.index')}}">Home</a></li>
						<li class="breadcrumb-item active">Tags</li>
					</ol>
				</div><!-- /.col -->
			</div><!-- /.row -->
		</div><!-- /.container-fluid -->
	</div>
	<!-- /.content-header -->

	<!-- Main content -->
	<section class="content">
		<div class="container-fluid">
			<!-- Small boxes (Stat box) -->
			<div class="row">
				<div class="col-2 mb-3">
					<a href="{{route('admin.tag.create')}}" class="btn btn-block btn-primary">Add</a>
				</div>
			</div>
			<div class="row">
				<div class="col-12">
					<div class="card">
						<!-- /.card-header -->
						<div class="card-body table-responsive p-0">
							<table class="table table-hover text-nowrap">
								<thead>
									<tr>
										<th>ID</th>
										<th>Title</th>
										<th>Posts count</th>
										<th colspan="3">Actions</th>
									</tr>
								</thead>
								<tbody>
									@foreach($tags as $tag)
									<tr>
										<td>{{$tag->id}}</td>
										<td>{{$tag->title}}</td>
										<td>0</td>
										<td>
											<a href="{{route('admin.tag.show', $tag->id)}}" class=""><i class="nav-icon fas fa-eye"></i></a>
										</td>
										<td>
											<a href="{{route('admin.tag.edit',$tag->id)}}" class="text-success"><i class="nav-icon fas fa-pen"></i></a>
										</td>
										<td>
											<form method="post" action="{{route('admin.tag.delete', $tag->id)}}">
												@csrf
												@method('delete')
												<button type="submit" class="border-0 bg-transparent text-danger">
													<i class="nav-icon fas fa-trash text-danger" role="button"></i>
												</button>
											</form>
										</td>
									</tr>
									@endforeach
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