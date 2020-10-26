@extends('layouts.app')

@section('title')
    Update task
@endsection

@section('content')

    @include('tasks.form', ['task' => $task])
@endsection
