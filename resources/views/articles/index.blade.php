@extends('master')

@section('content')
<h2>My articles</h2>
@if (Session::has('ArticleDeleted'))   
<div class="alert alert-info">
  <strong>Info!</strong> Article Deleted.
</div>
@endif

@if (Session::has('ArticleAdded'))   
<div class="alert alert-success">
  <strong>Success!</strong> Article Added.
</div>
@endif

<table class="table table-striped">
    <thead>
      <tr>
        <th>Id</th>
        <th>Title</th>
        <th>Body</th>
        <th>Operation</th>
      </tr>
    </thead>
    <tbody>
      @foreach ($articles as $article)
      <tr>
        <td>{{ $article->id }}</td>
        <td>{{ str_limit ($article->title, 70) }}</td>
        <td>{{ str_limit($article->body,100) }}</td>        
        <td>
          <a href="articles/{{ $article->id  }}">Show</a>
          |
          <a href="articles/{{ $article->id  }}/edit">Edit</a>
          |
          <a href="articles/destroy/{{ $article->id  }}">Delete</a>
        </td>
      </tr>
      @endforeach
    </tbody>
  </table>
  
  <p><a href="articles/create">create new article</a></p>
@stop
