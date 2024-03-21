<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">

		<title>Localization</title>

		<!-- Fonts -->
		<link rel="preconnect" href="https://fonts.bunny.net">
		<link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />

		<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css">

	</head>

	<body>

		<div class="container mb-5">
			<div class="alert alert-success text-center mt-2">
				<h2 class="fw-bold">Laravel 11 Localization</h2>
			</div>
		</div>


		<div class="container">
			@if (session()->has('success'))
				<div class="col-12">
					<div class="alert alert-success">
						{{ session()->get('success') }}
					</div>
				</div>
			@endif


			<form action="{{ route('post.update', $post->id) }}" method="post">
				@csrf
				@method('PUT')

				<div class="row">
					<div class="col-md-6">

						<div class="form-gorup mb-3">
							<label for="title" class="form-label">Title</label>
							<input type="text" name="title" class="form-control @error('title') is-invalid @enderror" id="title" placeholder="Enter title" value="{{ $post->title }}">
							@error('title')
								<div class="text-danger">{{ $message }}</div>
							@enderror
						</div>

						<div class="form-gorup mb-3">
							<label for="title_bn" class="form-label">Title Bangla</label>
							<input type="text" name="title_bn" class="form-control @error('title_bn') is-invalid @enderror" id="title_bn" placeholder="Enter bangla title" value="{{ $post->title_bn }}">
							@error('title_bn')
								<div class="text-danger">{{ $message }}</div>
							@enderror
						</div>

						<div class="form-gorup mb-3">
							<label for="description" class="form-label">Description</label>
							<textarea name="description" id="description" class="form-control @error('description') is-invalid @enderror" cols="30" rows="6" placeholder="Enter description">{{ $post->description }}</textarea>
							@error('description')
								<div class="text-danger">{{ $message }}</div>
							@enderror
						</div>

						<div class="form-gorup mb-3">
							<label for="description_bn" class="form-label">Description Bangla</label>
							<textarea name="description_bn" id="description_bn" class="form-control @error('description_bn') is-invalid @enderror" cols="30" rows="6" placeholder="Enter bangla description">{{ $post->description_bn }}</textarea>
							@error('description_bn')
								<div class="text-danger">{{ $message }}</div>
							@enderror
						</div>

						<div class="form-gorup">
							<a href="{{ route('post.index') }}" class="btn btn-danger">Back Home</a>
							<button type="submit" class="btn btn-success">Update Now</button>
						</div>
					</div>
				</div>

			</form>



		</div>

		<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"></script>
	</body>

</html>
