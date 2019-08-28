@extends('layouts.app')

@section('content')
<div class="container">
	<form action="/p" enctype="multipart/form-data" method="post">
		@csrf
		<div class="row">
			<div class="col-8 offset-2">
				<div><h1>Add New Post</h1></div>
				<div class="form-group row">
	                <label for="name" class="col-md-4 col-form-label">Post Caption</label>


	                <input id="name" type="text" name="caption" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>

	                @error('name')
	                    <span class="invalid-feedback" role="alert">
	                        <strong>{{ $message }}</strong>
	                    </span>
	                @enderror
	            </div>
	            <div class="row">
	            	<label for="image" class="col-md-4 col-form-label">Image</label>
	            	<input type="file" class="form-control-file" id="image" name="image">
	            	@error('image')
                        <strong>{{ $message }}</strong>
	                @enderror
	            </div>
	            <div class="row pt-4">
	            	<button class="btn btn-primary">Submit</button>
	            </div>
			</div>
		</div>
	</form>
</div>
@endsection