@extends('admin.layouts.main')

@section('content')
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
	<!-- Content Header (Page header) -->
	<div class="content-header">
		<div class="container-fluid">
			<div class="row mb-2">
				<div class="col-sm-6">
					<h1 class="m-0">Edit Post</h1>
				</div><!-- /.col -->
				<div class="col-sm-6">
					<ol class="breadcrumb float-sm-right">
						<li class="breadcrumb-item"><a href="{{route('admin.post.index')}}">Home</a></li>
						<li class="breadcrumb-item active">Edit Post</li>
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
				<div class="col-12">
					<form action="{{route('admin.post.update', $post->id)}}" method="post" enctype="multipart/form-data">
						@csrf
						@method('patch')
						<div class="row">
							<div class="col-6">
								<div class="form-group">
									<input type="text" name="title" class="form-control" placeholder="Title" value="{{$post->title}}">
									@error('title')
									<div class="text-danger">{{$message}}</div>
									@enderror
								</div>
							</div>
						</div>
						<div class="row">
							<div class="col-12">
								<div class="form-group">
									<textarea id="summernote" name="content">{{$post->content}}</textarea>
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
									<div class="w-25">
										<img src="{{asset('storage/' . $post->preview_image)}}" alt="preview_image" class="w-50">
									</div>
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
									<div class="text-danger">Please choose image</div>
									@enderror
								</div>
							</div>
							<div class="col-6">
								<div class="form-group">
									<label for="exampleInputFile">Add main image</label>
									<div class="w-25">
										<img src="{{asset('storage/' . $post->main_image)}}" alt="main_image" class="w-50">
									</div>
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
										<option disabled selected>Choose</option>
										@foreach($categories as $category)
										<option {{$category->id == $post->category_id ? ' selected' : ''}} value="{{$category->id}}">{{$category->title}}</option>
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
										<option {{ is_array($post->tags->pluck('id')->toArray() ) && in_array($tag->id, $post->tags->pluck('id')->toArray() ) ? ' selected' : '' }} value="{{$tag->id}}">{{$tag->title}}</option>
										@endforeach
									</select>
								</div>
							</div>
						</div>
						<div class="row">
							<div class="col-2">
								<input type="submit" class="btn btn-block btn-success" value="Update"></input>
							</div>
						</div>
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