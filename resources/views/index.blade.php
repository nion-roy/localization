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

			<div class="d-flex align-items-center gap-1 mb-3">
				<div class="dropdown">
					<button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false"> Select Language </button>
					<ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
						<li><a class="dropdown-item" href="#">English</a></li>
						<li><a class="dropdown-item" href="#">Bangla</a></li>
					</ul>
				</div>

				<a href="{{ route('post.create') }}" class="btn btn-success">Add Post</a>
			</div>

			@if (session()->has('success'))
				<div class="col-12">
					<div class="alert alert-success">
						{{ session()->get('success') }}
					</div>
				</div>
			@endif


			@foreach ($posts as $post)
				<div class="card mt-3">
					<div class="card-body">
						<h5 class="card-title">{{ $post->title }}</h5>
						<p>{{ $post->description }}</p>
					</div>
					<div class="card-footer">
						<div class="d-flex align-items-center gap-1">
							<a href="" class="btn btn-success">Edit</a>

							<form action="{{ route('post.destroy', $post->id) }}" method="post">
								@csrf
								@method('DELETE')
								<button class="btn btn-danger">Delete</button>
							</form>
						</div>
					</div>
				</div>
			@endforeach


		</div>

		<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"></script>
	</body>

</html>
