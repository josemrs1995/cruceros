<div class="main-cover">
        @if(has_post_thumbnail())
        <div class="featured">
           <img src="{!! App::thumbnail() !!}" alt=" {!! App::title() !!}" >
        </div>
        @endif
    <div class="content-cover">
        <p class="subtitle animated fadeInUp" data-wow-delay="0.2s">Hello, I'm Andrea. Welcome to Salvatori Agencies. </p>
        <h1 class="title animated fadeInUp" data-wow-delay="0.4s">{!! App::title() !!}</h1>
        <p class="excerpt  animated fadeInUp " data-wow-delay="0.6s">{!! App::excerpt() !!}</p>
    </div>
</div>
