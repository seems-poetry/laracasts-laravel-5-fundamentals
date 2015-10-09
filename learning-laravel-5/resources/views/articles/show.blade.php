@extends('app')

@section('content')
<h1>{{$article->title}}</h1>
<span class="date">{{$article->diffForHumans}}</span>
<hr>

		<article>
			{{$article->body}}
		</article>

@stop

