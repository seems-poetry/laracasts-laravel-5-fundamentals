@extends('app')

@section('content')

@if ($first == '<span style="color:red;">Robert</span>')
	<h1>About {!! $first !!} {{ $last }}</h1>
@else
	<h1>Else</h1>
@endif



<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Delectus voluptas consequuntur temporibus qui repudiandae quam, dolor! Vel, voluptatibus. Quo vero vel saepe accusamus accusantium eos atque, eum animi odit neque ratione molestiae placeat blanditiis, ut. Perferendis ducimus recusandae amet beatae obcaecati optio nostrum, eos. Velit quas amet at, quaerat praesentium!Lorem ipsum dolor sit amet, consectetur adipisicing elit. Est minus natus, doloremque perspiciatis iure consequuntur nobis, ad voluptatum dolorum dolore.</p>
@stop