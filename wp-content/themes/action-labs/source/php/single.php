<?php include("svg.php"); ?>

<?php get_header(); ?>

  <section class="single">
    <div class="banner-single" style="background-image: url(<?php echo get_the_post_thumbnail_url(); ?>)"></div>
    <div class="container">
      <div class="content">
        <?php the_post_thumbnail(); ?>
        <div class="category">
          <?php
            $category = get_the_category();
            if (!empty($category)) {
                echo esc_html($category[0]->name);
            }
          ?>
        </div>
        <div class="box-date-tag">
          <div class="date">
            <?php echo $date; ?>
            <span><?php echo date_i18n('j F, Y', strtotime(get_the_date())); ?></span>
          </div>
          <div class="tag">
            <?php echo $tag; ?>
            <span>
              <?php
                $tags = get_the_tags(); 
                if ($tags) { 
                    $tag_names = array();
                    foreach ($tags as $tag) {
                        $tag_names[] = $tag->name; 
                    }
                    $tags_count = count($tag_names);
                    if ($tags_count > 1) {
                        $last_tag = array_pop($tag_names);
                        $tags_string = implode(', ', $tag_names) . ' e ' . $last_tag;
                    } else {
                        $tags_string = $tag_names[0];
                    }
                    echo $tags_string; 
                }
              ?>
            </span>
          </div>
        </div>
        <h1><?php the_title(); ?></h1>
        <span class="content-text"><?php the_content(); ?></span>
      </div>
    </div>
  </section>

<?php get_footer(); ?>