<section class="layout-section  pt-md-7">
    <div class="container text-align-center">
        <div class="app-nav-menu">

            <div class="glider-contain pt-5 pt-lg-0">
                <div class="glider-app">
                    <div class="item">
                        <a href="/apps/mac-os/" class="app-nav-menu__link <?php if( $post->ID == 59) { echo ' active'; } ?>">
                            <svg class="app-nav-menu__icon"><use xlink:href="#macos"></use></svg>
                            <?php esc_html_e('macOS', 'hotbot' ); ?>
                        </a>
                    </div>
                    <div class="item">
                        <a href="/apps/ios/" class="app-nav-menu__link <?php if( $post->ID == 54) { echo ' active'; } ?>">
                        
                            <svg class="app-nav-menu__icon"><use xlink:href="#ios"></use></svg>
                            <?php esc_html_e('iOS', 'hotbot' ); ?>
                        </a>
                    </div>
                    <div class="item">
                        <a href="/apps/windows/" class="app-nav-menu__link <?php if( $post->ID == 57) { echo ' active'; } ?>">
                            
                            <svg class="app-nav-menu__icon"><use xlink:href="#windows"></use></svg>
                            <?php esc_html_e('Windows', 'hotbot' ); ?>
                        </a>
                    </div>
                    <div class="item">
                        <a href="/apps/android/" class="app-nav-menu__link <?php if( $post->ID == 56) { echo ' active'; } ?>">
                        
                            <svg class="app-nav-menu__icon"><use xlink:href="#android"></use></svg>
                            <?php esc_html_e('Android', 'hotbot' ); ?>
                        </a>
                    </div>
                    <div class="item">
                        <a href="/apps/android-tv/" class="app-nav-menu__link <?php if( $post->ID == 61) { echo ' active'; } ?>">

                            <svg class="app-nav-menu__icon"><use xlink:href="#android-tv"></use></svg>
                            <?php esc_html_e('Android TV', 'hotbot' ); ?>
                        </a>
                    </div>
                </div>
                <button class="glider-prev">‹</button>
                <button class="glider-next">›</button>
            </div>
        </div>
    </div>
</section>

<script>
  //nav app slider
  window.addEventListener('load',function(){
  new Glider(document.querySelector('.glider-app'), {
      // Mobile-first defaults
      slidesToShow: 2,
      slidesToScroll: 1,
      scrollLock: true,
      dots: '#resp-dots',
      itemWidth: 100,
      arrows: {
          prev: '.glider-prev',
          next: '.glider-next'
      },
      responsive: [{
          // screens greater than >= 775px
          breakpoint: 520,
          settings: {
              // Set to `auto` and provide item width to adjust to viewport
              slidesToShow: '3',
              slidesToScroll: 1,
              itemWidth: 150,
              duration: 0.25
          }
          
          },{
          // screens greater than >= 775px
          breakpoint:  768,
          settings: {
              // Set to `auto` and provide item width to adjust to viewport
              slidesToShow: 'auto',
              slidesToScroll: 1,
              itemWidth: 150,
              duration: 0.25
          }
          
          },{
          // screens greater than >= 1200px
          breakpoint:  1200,
          settings: {
              // Set to `auto` and provide item width to adjust to viewport
              slidesToShow: 'auto',
              slidesToScroll: 1,
              itemWidth: 220,
              duration: 0.25
          }
      }]
  });
});

</script>