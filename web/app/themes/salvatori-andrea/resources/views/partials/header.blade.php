<header class="banner">
    <nav class="nav-primary">
    <a href="{{home_url('/')}}"><img class="logo" src="{{get_field('imagen_menu', 'options')}}"></a>
      @if (has_nav_menu('primary_navigation'))
        {!! wp_nav_menu(['theme_location' => 'primary_navigation', 'menu_class' => 'nav']) !!}
      @endif
    </nav>
</header>
