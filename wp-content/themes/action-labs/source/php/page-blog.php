<?php include("svg.php"); ?>

<?php get_header(); ?>

  <main>
    <section class="banner" style="background-image: url(<?php echo get_template_directory_uri(); ?>/dist/img/banner-blog.jpg)">
      <div class="container">
        <h1>Portal do Cliente</h1>
      </div>
    </section>

    <section class="posts">
      <div class="container">

        <?php
        $args = array(
            'post_type' => 'post',
            'post_status' => 'publish',
            'posts_per_page' => 9,
            'order' => 'ASC' 
        );

        $query = new WP_Query($args);
        if ($query->have_posts()) {
          while ($query->have_posts()) {
            $query->the_post();
            ?>
            <div class="post">
              <a href="<?php the_permalink(); ?>">
                <div class="img-post" style="background-image: url(<?php echo get_the_post_thumbnail_url(); ?>)">
                  <span class="category">
                    <?php
                      $categories = get_the_category();
                      if (!empty($categories)) {
                          foreach ($categories as $category) {
                              echo $category->name;
                          }
                      }
                    ?>
                  </span>
                </div>
              </a>
              <div class="box-content">
                <h2><?php the_title(); ?></h2>
                <p><?php echo wp_trim_words(get_the_content(), 20); ?></p>
                <a href="<?php the_permalink(); ?>">LEIA MAIS »</a>
              </div>
            </div>
            <?php
          }
        } else {
            echo 'Nenhum post encontrado.';
        }
        wp_reset_postdata();
        ?>
      </div>
    </section>
  </main>

<?php get_footer(); ?>