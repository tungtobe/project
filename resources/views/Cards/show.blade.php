@extends ('layout')

@section('content')

	<h1>{{$card->title}}</h1>

	<ul>
		@foreach($card->notes as $note)
			<div>
				<li>{{ $note->body}}</li>
			</div>
		@endforeach

	</ul>
@stop