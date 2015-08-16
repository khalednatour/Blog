@extends('master')

@section('content')
<h1>
{{ $article->title }}
</h1>
Created date: {{ $article->created_at }}
<br />
Updated date: {{ $article->updated_at }}
<br /><br />
<p>{{ $article->body }}</p>
@stop
