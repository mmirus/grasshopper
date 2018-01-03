<header class="banner">
  <div class="container">
    <nav class="navbar" role="navigation" aria-label="main navigation">
      <div class="navbar-brand">
        <a class="brand navbar-item" href="{{ home_url('/') }}">{{ get_bloginfo('name', 'display') }}</a>
        
        <button class="button navbar-burger is-white">
          <span></span>
          <span></span>
          <span></span>
        </button>
      </div>
      <div class="navbar-menu nav-primary">
        <div class="navbar-start"></div>
        
        @if (has_nav_menu('primary_navigation'))
          {!! wp_nav_menu(['theme_location' => 'primary_navigation', 'container' => false, 'menu_class' => 'navbar-end', 'fallback_cb' => 'bulmapress_navwalker::fallback', 'walker' => new App\bulmapress_navwalker()]) !!}
        @endif
      </div>
    </nav>
  </div>
</header>
