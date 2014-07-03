

<post-card title="{{ $post->title }}" link="{{ wardrobe_url('/post/'.$post->slug) }}">
    <img width="70" height="70" src="https://pbs.twimg.com/profile_images/378800000093233343/1b630a506c827fa45325be0b0e0c81e5.jpeg">
    <div class="date">{{ date("M/d/Y", strtotime($post->publish_date)) }}</div>
    {{ $post->parsed_content }}
    @include(theme_view('inc.tags'))
</post-card>
