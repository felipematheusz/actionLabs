<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="<?php echo get_template_directory_uri();?>/dist/css/style.css">
    <title><?php the_title(); ?></title>
    <?php wp_head(); ?>
</head>
<body>
<?php wp_body_open(); ?>
  <?php include("svg.php"); ?>
  <header>
    <div class="container">
      <nav>
        <a href="<?php echo esc_url(site_url('/blog')); ?>"><?php echo $logo; ?></a>
      </nav>
      <a class="about" href="<?php echo esc_url(site_url('/sobre-nos')); ?>">SOBRE NÓS</a>
    </div>
  </header>
