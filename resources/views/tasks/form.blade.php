@section('content')
    @if($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach($errors->all() as $error)
                    <li>{{$error}}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form method="POST" action="{{isset($task) ? route('tasks.update',$task) : route('tasks.store')}}">
        @csrf
        @if(isset($task))
            @method('PATCH')
        @endif
        <div class="form-group">
            <label for="name">Name: </label>
            <input class="form-control" placeholder="Select task name" id="name" name="name" type="text" value="{{(isset($task) && !empty($task->name))?trim($task->name):''}}">
        </div>
        <div class="form-group">
            <label for="text">Text: </label>
            <textarea class="form-control" placeholder="Select text" name="text" id="text">

                 {{(isset($task) && !empty($task->text))?trim($task->text):''}}
            </textarea>
        </div>
        <div class="form-group">
            <label for="inputDate">Date:</label>
            <input type="date" name="date" value="{{(isset($task) && !empty($task->date))?trim($task->date):''}}" class="form-control">
        </div>
        <div class="form-group">
            <input class="btn btn-primary" type="submit" value="{{isset($task) ? 'Update' : 'Add'}}">
        </div>
    </form>
@endsection
