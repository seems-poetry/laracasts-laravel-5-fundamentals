@extends('app')

@section('content')
<h1>Contact me</h1>

@if (count($people))
<h3>People I like:</h3>
<ul>
	@foreach ($people as $person)
		<li>{{ $person }}</li>
	@endforeach

</ul>
@endif

<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dolore quas hic accusamus veritatis laboriosam ab perspiciatis rerum deserunt ea nesciunt. Error eaque asperiores recusandae, harum est fuga sapiente ducimus quis. Quia id ipsam, ullam tempora sint, nisi neque laudantium, consequatur modi adipisci voluptatem repellendus accusantium! Ad fuga, non odio animi.Lorem ipsum dolor sit amet, consectetur adipisicing elit. Est minus natus, doloremque perspiciatis iure consequuntur nobis, ad voluptatum dolorum dolore.</p>
@stop

@section('footer')
	<script>alert('Contact me');</script>
@stop