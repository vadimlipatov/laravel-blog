@extends('admin.layouts.main')

@section('content')
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
	<!-- Content Header (Page header) -->
	<div class="content-header">
		<div class="container-fluid">
			<div class="row mb-2">
				<div class="col-sm-6">
					<h1 class="m-0">Edit Comment</h1>
				</div><!-- /.col -->
				<div class="col-sm-6">
					<ol class="breadcrumb float-sm-right">
						<li class="breadcrumb-item"><a href="{{route('personal.index')}}">Home</a></li>
						<li class="breadcrumb-item"><a href="{{route('personal.comment.index')}}">Comments</a></li>
						<li class="breadcrumb-item active">Edit</li>
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
				<div class="col-6">
					<form action="{{route('personal.comment.update', $comment->id)}}" method="post">
						@csrf
						@method('patch')
						<div class="form-group">
							<textarea class="form-control" name="message" placeholder="Comment" cols="50" rows="5">{{$comment->message}}</textarea>
							@error('message')
							<div class="text-danger">{{$message}}</div>
							@enderror
						</div>
						<input type="submit" class="col-6 btn btn-block btn-success" value="Update"></input>
					</form>
				</div>

			</div>
			<!-- /.row -->

		</div><!-- /.container-fluid -->
	</section>
	<!-- /.content -->
</div>
<!-- /.content-wrapper -->
@endsection