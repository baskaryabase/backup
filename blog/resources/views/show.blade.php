@extends('layouts.master')

@section('content')
    <div class="col-md-6">
        <h1>{{ $thread->subject }}</h1>

   

        <h2>Add a new message</h2>
        {!! Form::open(['route' => ['messages.update', $thread->id], 'method' => 'PUT']) !!}
        <!-- Message Form Input -->
        <div class="form-group">
            {!! Form::textarea('message', null, ['class' => 'form-control']) !!}
        </div>

        @if($users->count() > 0)
        <div class="checkbox">
            @foreach($users as $user)
                <label title="{{ $user->name }}"><input type="checkbox" name="recipients[]" value="{{ $user->id }}">{{ $user->name }}</label>
            @endforeach
        </div>
        @endif

        <!-- Submit Form Input -->
        <div class="form-group">
            {!! Form::submit('Submit', ['class' => 'btn btn-primary form-control']) !!}
        </div>
        {!! Form::close() !!}
    </div>
@stop
