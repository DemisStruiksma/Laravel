@extends ('layout')

@section ('content')

<div id="wrapper">
	<div id="page" class="container">
		<div id="content">
			<ul class="style1">
				@foreach ($article as $articles)
				<li class="first">
					<a href="{{ $articles->path() }}"><h2>{{ $articles->title }}</h2></a>
					<p><img src="/images/banner.jpg" alt="" class="image image-full" /> </p>
                    <p><a href="#">{{ substr($articles->body, 0, 100) }}...</a></p>
				</li>
				@endforeach
			</ul>
		</div>
	</div>
</div>

@endsection