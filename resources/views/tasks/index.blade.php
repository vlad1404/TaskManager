@extends('layouts.app')

@section('title')
    Tasks
@endsection

@section('content')
    <div class="text-right">
        <b>Tasks count</b>
        <i class="badge">{{count($tasks)}}</i>
    </div>
    <hr>
    <tasks_test></tasks_test>
@endsection
