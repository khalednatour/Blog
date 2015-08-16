@extends('master')

@section('content')

<h2>All articles</h2>
<table class="table table-striped">
    <thead>
      <tr>
        <th>Id</th>
        <th>Title</th>
        <th>Body</th>        
        <th>User name</th>        
      </tr>
    </thead>
    <tbody>
      @foreach ($articles as $article)
      <tr>
        <td>{{ $article->id }}</td>
        <td><a href="/articles/{{ $article->id }}">{{ str_limit ($article->title, 70) }}</a></td>
        <td>{{ str_limit($article->body,100) }}</td>        
        <td><a href="/user/{{ $article->user_id }}">{{ $article->name }}</a></td>
      </tr>
      @endforeach
    </tbody>
  </table>

@stop
