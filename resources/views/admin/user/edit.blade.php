@extends('admin.layouts.main')

@section('content')
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
	<!-- Content Header (Page header) -->
	<div class="content-header">
		<div class="container-fluid">
			<div class="row mb-2">
				<div class="col-sm-6">
					<h1 class="m-0">Edit User</h1>
				</div><!-- /.col -->
				<div class="col-sm-6">
					<ol class="breadcrumb float-sm-right">
						<li class="breadcrumb-item"><a href="{{route('admin.user.index')}}">Home</a></li>
						<li class="breadcrumb-item active">Edit User</li>
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
				<div class="col-4">
					<form action="{{route('admin.user.update', $user->id)}}" method="post">
						@csrf
						@method('patch')

						<div class="form-group">
							<input type="text" name="name" value="{{$user->name}}" class="form-control" placeholder="Name">
							@error('name')
							<div class="text-danger">{{$message}}</div>
							@enderror
						</div>

						<div class="form-group">
							<input type="text" name="email" class="form-control" placeholder="Email" value="{{$user->email}}">
							@error('email')
							<div class="text-danger">{{$message}}</div>
							@enderror
						</div>

						<div class="form-group">
							<label>Role</label>
							<select name="role" class="form-control">
								<option value="" disabled {{ $user->role == NULL ? '' : ' selected' }}>Choose</option>
								@foreach($roles as $id => $role)
								<option value="{{ $id }}" {{ $id == $user->role ? ' selected' : '' }}>{{ $role }}</option>
								@endforeach
							</select>
							@error('role')
							<div class="text-danger">{{$message}}</div>
							@enderror
						</div>

						<div class="form-group">
							<input type="hidden" name="user_id" value="{{$user->id}}">
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