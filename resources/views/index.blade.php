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

				<ul class="nav">
					@if (session()->get('language') == 'bangla')
						<li class="nav-item"><a class="btn btn-success text-white" href="{{ route('english.language') }}">English</a> </li>
					@else
						<li class="nav-item"><a class="btn btn-success text-white" href="{{ route('bangla.language') }}">বাংলা</a> </li>
					@endif
				</ul>


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
						@if (session()->get('language') == 'bangla')
							<h5 class="card-title">{{ $post->title_bn }}</h5>
							<p>{{ $post->description_bn }}</p>
						@else
							<h5 class="card-title">{{ $post->title }}</h5>
							<p>{{ $post->description }}</p>
						@endif

					</div>
					<div class="card-footer">
						<div class="d-flex align-items-center gap-1">
							<a href="{{ route('post.edit', $post->id) }}" class="btn btn-success">Edit</a>
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
