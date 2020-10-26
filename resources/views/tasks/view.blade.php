@extends('layouts.app')

@section('title')
    View task
@endsection

@section('content')
    <div class="form-group">
        <label for="name">Name: </label>
        <span>{{$task->name ?? ''}}</span>
    </div>
    <div class="form-group">
        <label for="name">Text: </label>
        <span>{{$task->text ?? ''}}</span>
    </div>
    <div class="form-group">
        <label for="name">Created at: </label>
        <span>{{$task->created_at ?? ''}}</span>
    </div>
    <div class="form-group">
        <label for="name">Updated at: </label>
        <span>{{$task->updated_at ?? ''}}</span>
    </div>
@endsection
