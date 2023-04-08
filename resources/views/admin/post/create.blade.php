@extends('admin.layouts.main')

@section('content')
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
	<!-- Content Header (Page header) -->
	<div class="content-header">
		<div class="container-fluid">
			<div class="row mb-2">
				<div class="col-sm-6">
					<h1 class="m-0">Create Post</h1>
				</div><!-- /.col -->
				<div class="col-sm-6">
					<ol class="breadcrumb float-sm-right">
						<li class="breadcrumb-item"><a href="{{route('admin.index')}}">Home</a></li>
						<li class="breadcrumb-item"><a href="{{route('admin.post.index')}}">Posts</a></li>
						<li class="breadcrumb-item active">Create</li>
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
			<form action="{{route('admin.post.store')}}" method="post" enctype="multipart/form-data">
				@csrf
				<div class="row">
					<div class="col-6">
						<div class="form-group">
							<input type="text" name="title" class="form-control" placeholder="Title" value="{{old('title')}}">
							@error('title')
							<div class="text-danger">{{$message}}</div>
							@enderror
						</div>
					</div>
				</div>
				<div class="row">
					<div class="col-12">
						<div class="form-group">
							<textarea id="summernote" name="content">{{old('content')}}</textarea>
							@error('content')
							<div class="text-danger">{{$message}}</div>
							@enderror
						</div>
					</div>
				</div>
				<div class="row">
					<div class="col-6">
						<div class="form-group">
							<label for="exampleInputFile">Add preview image</label>
							<div class="input-group">
								<div class="custom-file">
									<input type="file" class="custom-file-input" id="image-input" name="preview_image">
									<label class="custom-file-label" for="image-input">Choose Image</label>
								</div>
								<div class="input-group-append">
									<span class="input-group-text">Upload</span>
								</div>
							</div>
							@error('preview_image')
							<div class="text-danger">{{$message}}</div>
							@enderror
						</div>
					</div>
					<div class="col-6">
						<div class="form-group">
							<label for="exampleInputFile">Add main Image</label>
							<div class="input-group">
								<div class="custom-file">
									<input type="file" class="custom-file-input" id="image-input" name="main_image">
									<label class="custom-file-label" for="image-input">Choose Image</label>
								</div>
								<div class="input-group-append">
									<span class="input-group-text">Upload</span>
								</div>
							</div>
							@error('main_image')
							<div class="text-danger">{{$message}}</div>
							@enderror
						</div>
					</div>
				</div>
				<div class="row">
					<div class="col-6">
						<div class="form-group">
							<label>Category</label>
							<select name="category_id" class="form-control">
								<!-- <option value="" disabled selected>Choose</option> -->
								@foreach($categories as $category)
								<option value="{{$category->id}}" {{ $category->id == old('category_id') ? ' selected' : '' }}>{{ $category->title}}</option>
								@endforeach
							</select>
							@error('category_id')
							<div class="text-danger">{{$message}}</div>
							@enderror
						</div>
					</div>
					<div class="col-6">
						<div class="form-group">
							<label>Tags</label>
							<select name="tag_ids[]" class="select2" multiple="multiple" data-placeholder="Select a tag" style="width: 100%;">
								@foreach($tags as $tag)
								<option {{is_array(old('tag_ids')) && in_array($tag->id, old('tag_ids')) ? ' selected' : ''}} value="{{$tag->id}}">{{$tag->title}}</option>
								@endforeach
							</select>
						</div>
					</div>
				</div>
				<div class="row">
					<div class="col-2">
						<input type="submit" class="btn btn-block btn-primary" value="Create"></input>
					</div>
				</div>
			</form>
		</div>

		<!-- /.row -->

</div><!-- /.container-fluid -->
</section>
<!-- /.content -->
</div>
<!-- /.content-wrapper -->
@endsection