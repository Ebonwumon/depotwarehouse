@extends(theme_view('layout'))

@section('title')
  {{ $post->title }}
@stop

@section('imports')
<script src="/vendor/bower_components/platform/platform.js"></script>
<link rel="import" href="/components/post-card.html">
@stop

@section('blog_content')
      <post-card>
          <img width="70" height="70"
               src="https://pbs.twimg.com/profile_images/378800000093233343/1b630a506c827fa45325be0b0e0c81e5.jpeg">
          <h2>{{ $post->title }}</h2>
          {{ $post->parsed_content }}
      </post-card>



@stop

