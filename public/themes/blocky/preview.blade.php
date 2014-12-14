@extends(theme_view('layout'))

@section('title')
  Preview TEst
@stop

@section('blog_content')

<post-card title="" link="#">
    <img width="70" height="70" src="https://pbs.twimg.com/profile_images/378800000093233343/1b630a506c827fa45325be0b0e0c81e5.jpeg">
    <div class="date">{{ (new Datetime('NOW'))->format('Y-m-d H:i:s') }}</div>
    <div class="js-content"></div>
</post-card>


<script src="//ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jStorage/0.3.0/jstorage.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/marked/0.2.9/marked.min.js"></script>
<script type="text/javascript">
    $(document).ready(function() {
        var initial = $.jStorage.get("post-{{ $id }}");
        $('post-card').attr('title', initial.title);
        $(".js-content").html(marked(initial.content));

        $.jStorage.subscribe("post-{{ $id }}", function(channel, data){
            $("post-card").attr("title", data.title);
            $(".js-content").html(marked(data.content));
        });
    });
</script>

@stop
