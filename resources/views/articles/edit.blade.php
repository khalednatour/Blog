@extends('master')

@section('content')


@if (Session::has('ArticleUpdated'))		
<div class="alert alert-success"><strong>Success!</strong> updated successfully. </div>
@endif

{!! Form::open(['route' => ['articles.update',$article->id], 'method'=> 'put']) !!}

<Legend>Edit article</Legend>
    
    <div class="form-group">
      <label for="title">Title:</label>
      <input type="text" class="form-control" id="title" value="{{ $article->title }}" name="title">
    </div>


<div class="form-group">
 <label for="body">Body:</label>
 <textarea class="form-control" rows="5" id="body" name="body">{{ $article->body }}</textarea>
</div>

    <button type="submit" class="btn btn-default">Save</button>
 {!! Form::close() !!}




@stop
