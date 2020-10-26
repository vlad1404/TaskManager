@extends('layouts.app')

@section('title')
    Create task
@endsection

@section('content')
    @include('tasks.form', ['some' => 'data'])
@endsection
