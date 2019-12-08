@extends('layouts.app')
@section('content')
    @foreach ($tasks as $task)
        {{ $task->content }}
    @endforeach
@endsection