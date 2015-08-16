@extends('master')

@section('content')


{!! Form::open(['route' => 'articles.store', 'method'=> 'post']) !!}

<Legend>Add new article</Legend>
    
    <div class="form-group">
      <label for="title">Title:</label>
      <input type="text" class="form-control" id="title" name="title" placeholder="Enter Title">
    </div>


<div class="form-group">
 <label for="body">Body:</label>
 <textarea class="form-control" rows="5" id="body" name="body" placeholder="Enter Body"></textarea>
</div>

    <button type="submit" class="btn btn-default">Save</button>
 {!! Form::close() !!}




@stop
