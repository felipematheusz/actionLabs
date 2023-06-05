
  <?php include("svg.php"); ?>
  <footer>
    <section class="footer">
      <div class="container">
        <a href="<?php echo esc_url(site_url('/blog')); ?>"><?php echo $logo; ?></a>
        <div class="border-footer"></div>
        <span>© 2023. Todos os direitos reservados.</span>
      </div>
    </section>
  </footer>
  
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js" integrity="sha512-894YE6QWD5I59HgZOGReFYm4dnWc1Qt5NtvYSaNcOP+u1T9qYdvdihz0PPSiiqn/+/3e7Jo4EaG7TubfWGUrMQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
  <script src="<?php echo get_stylesheet_directory_uri(); ?>/dist/js/app.js"></script>
  </body>
</html>