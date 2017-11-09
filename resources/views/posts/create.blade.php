@extends('layouts.app')

@section('content')
	<div class="container-fluid postbody">
		<div class="col-md-10 col-md-offset-1">
			<h1>Create Post</h1>
			{!! Form::open(['action'=>'PostsController@store', 'method' => 'POST']) !!}
				<div class="form-group">
					{{Form::label('title', 'Title')}}
					{{Form::text('title', '', ['class'=> 'form-control', 'placeholder' => 'Title'])}}
				</div>
				<div class="form-group">
					{{Form::label('body', 'Body')}}
					{{Form::textarea('body', '', ['class'=> 'form-control', 'placeholder' => 'Body Text', 'id' => 'article-ckeditor'])}}
				</div>
				{{Form::submit('Submit Post', ['class' => 'btn btn-primary submitbutton'])}}

			{!! Form::close() !!}
		</div>
	</div>
@endsection