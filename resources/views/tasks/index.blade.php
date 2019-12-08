@extends('layouts.app')
@section('content')
    <table class="table table-bordered">
        <thead class="thead-light">
            <tr>
                <th>No.</th>
                <th scole="col">タスク</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($tasks as $task)
                <tr>
                    <th scope="row">{{ $task->id }}</th>
                    <td>{{ $task->content }}</td>
                </tr>
            @endforeach
        <tbody>
    </table>
@endsection