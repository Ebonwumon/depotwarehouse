@extends(theme_view('layout'))

@section('title')
  {{ $post->title }}
@stop

@section('blog_content')
      @include(theme_view('inc.post'))
@stop

