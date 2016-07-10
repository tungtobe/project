@extends ('layout')

@section('content')
<div class="row">
	<div class="col-md-6 col-md-offset-3">
		<h1>{{$card->title}}</h1>
		<ul class="list-group">
			@foreach($card->notes as $note)
			<div>
				<li class="list-group-item">
					{{ $note->body}}
					<a href="#" class="pull-right">{{$note->user->username}}</a>
				</li>
			</div>
			@endforeach
		</ul>
		<hr>
		<h3>Add a new note</h3>
		<form action="/cards/{{$card->id}}/notes" method="post" >
			{{ csrf_field() }}
			<div class="form-group">
				<textarea name="body" class="form-control">{{old('body')}}</textarea>
			</div>
			<div class="form-group">
				<button type="submit" class="btn btn-primary" >Add</button>
			</div>
		</form>
		@if(count($errors))
		<ul>
			@foreach($errors->all() as $error)
			<li>{{$error}}</li>
			@endforeach
		</ul>

		@endif
{{var_dump($errors)}}
	</div>
</div>
@stop