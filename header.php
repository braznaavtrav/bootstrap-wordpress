<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <title><?php bloginfo('title'); ?></title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="<?php bloginfo('template_directory') ?>/css/style.css" rel="stylesheet">

<!-- HTML5 shim, for IE6-8 support of HTML5 elements -->
<!--[if lt IE 9]>
  <script src="<?php bloginfo('template_directory') ?>/js/html5shiv.js"></script>
<![endif]-->

<?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>