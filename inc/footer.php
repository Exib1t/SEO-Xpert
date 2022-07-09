    </div><!--content-->

    <footer class="l-siteFooter">
      <div class="b-siteFooter">

        <div class="b-siteFooter__column">
          <h5 class="b-siteFooter__title">SEO-Xpert</h5>
          <div class="b-siteFooter__text">
            <p>If the path is beautiful, let us not k where it leads. my religion is very simple.</p>
          </div>
        </div>

        <div class="l-bottomNavigation" role="navigation">
          <div class="b-bottomNavigation">
            <ul class="b-bottomNavigation__column">
              <h6 class="b-bottomNavigation__columnTitle">Company</h6>
              <li class="b-bottomNavigation__item<?php echo ( $uri == 'about' ) ? ' -state_active' : ''; ?>">
                <a class="b-bottomNavigation__link" href="index.html">About</a>
              </li>

              <li class="b-bottomNavigation__item<?php echo ( $uri == 'blog' ) ? ' -state_active' : ''; ?>">
                <a class="b-bottomNavigation__link" href="index.html">Blog</a>
              </li>

              <li class="b-bottomNavigation__item<?php echo ( $uri == 'careers' ) ? ' -state_active' : ''; ?>">
                <a class="b-bottomNavigation__link" href="index.html">Careers</a>
              </li>

              <li class="b-bottomNavigation__item<?php echo ( $uri == 'press' ) ? ' -state_active' : ''; ?>">
                <a class="b-bottomNavigation__link" href="index.html">Press</a>
              </li>
            </ul>

            <ul class="b-bottomNavigation__column">
              <h6 class="b-bottomNavigation__columnTitle">Community</h6>
              <li class="b-bottomNavigation__item<?php echo ( $uri == 'about' ) ? ' -state_active' : ''; ?>">
                <a class="b-bottomNavigation__link" href="index.html">Open Source</a>
              </li>

              <li class="b-bottomNavigation__item<?php echo ( $uri == 'blog' ) ? ' -state_active' : ''; ?>">
                <a class="b-bottomNavigation__link" href="index.html">Winners</a>
              </li>

              <li class="b-bottomNavigation__item<?php echo ( $uri == 'careers' ) ? ' -state_active' : ''; ?>">
                <a class="b-bottomNavigation__link" href="index.html">Forum</a>
              </li>
            </ul>

            <ul class="b-bottomNavigation__column">
              <h6 class="b-bottomNavigation__columnTitle">Solutions</h6>
              <li class="b-bottomNavigation__item<?php echo ( $uri == 'about' ) ? ' -state_active' : ''; ?>">
                <a class="b-bottomNavigation__link" href="index.html">Server</a>
              </li>

              <li class="b-bottomNavigation__item<?php echo ( $uri == 'blog' ) ? ' -state_active' : ''; ?>">
                <a class="b-bottomNavigation__link" href="index.html">SEO</a>
              </li>

              <li class="b-bottomNavigation__item<?php echo ( $uri == 'careers' ) ? ' -state_active' : ''; ?>">
                <a class="b-bottomNavigation__link" href="index.html">Design</a>
              </li>
            </ul>

            <ul class="b-bottomNavigation__column">
              <h6 class="b-bottomNavigation__columnTitle -cloud">Cloud.com</h6>
              <li class="b-bottomNavigation__item<?php echo ( $uri == 'about' ) ? ' -state_active' : ''; ?>">
                <a class="b-bottomNavigation__link -mail" href="index.html">Contact@cloud.com</a>
              </li>

              <li class="b-bottomNavigation__item<?php echo ( $uri == 'blog' ) ? ' -state_active' : ''; ?>">
                <a class="b-bottomNavigation__link -phone" href="index.html">00000-000-00</a>
              </li>
            </ul>

          </div>
        </div>

      </div>
    </footer>
  </div><!--wrapper-->

  <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>
  <script>window.jQuery || document.write('<script src="assets/js/vendor/jquery-3.6.0.min.js"><\/script>')</script>

  <script src="assets/js/scripts.js?<?php echo filemtime( 'assets/js/scripts.js' ); ?>"></script>

  <!-- Global site tag (gtag.js) - Google Analytics: change UA-XXXXX-Y to be your site's ID. -->
  <script async src="https://www.googletagmanager.com/gtag/js?id=UA-XXXXX-Y"></script>
  <script>
    window.dataLayer = window.dataLayer || [];
    function gtag(){dataLayer.push(arguments);}
    gtag('js', new Date());

    gtag('config', 'UA-XXXXX-Y');
  </script>

</body>
</html>
