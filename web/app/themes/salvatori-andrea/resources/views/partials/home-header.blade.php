<div class="main-cover">
        @if(has_post_thumbnail())
        <div class="featured">
           <img src="{!! App::thumbnail() !!}" alt=" {!! App::title() !!}" >
        </div>
        @endif
    <div class="content-cover">
        <p class="subtitle">Hello, I'm Andrea. Welcome to Salvatori Agencies. </p>
        <h1 class="title">{!! App::title() !!}</h1>
        <p class="excerpt">{!! App::excerpt() !!}</p>
    </div>
</div>
