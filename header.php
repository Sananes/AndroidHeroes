<?php
/**
 * @package WordPress
 * @subpackage Android Hereoes
 * @author Aaron Sananes
 */
   global $data; //fetch theme options stored in $data
?>

<!DOCTYPE html>
<html <?php language_attributes(); ?>>
  <head>
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <title><?php the_title(); ?> - CmSHeroes</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <!-- Le styles -->
		<link rel="stylesheet" type="text/css" media="all" href="<?php bloginfo( 'stylesheet_url' ); ?>" />
    <link rel="stylesheet" typer="text/css" media="all" href="<?php echo bloginfo('template_directory') . '/' . $data['alt_stylesheet']; ?>" />
		<?php wp_head(); ?>
    <!-- HTML5 shim, for IE6-8 support of HTML5 elements -->
    <!--[if lt IE 9]>
      <script src="javascripts/html5shiv.js"></script>
    <![endif]-->

    <!-- Fav and touch icons -->
    <link rel="apple-touch-icon-precomposed" sizes="144x144" href="images/ico/apple-touch-icon-144-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="114x114" href="images/ico/apple-touch-icon-114-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="72x72" href="images/ico/apple-touch-icon-72-precomposed.png">
    <link rel="apple-touch-icon-precomposed" href="images/ico/apple-touch-icon-57-precomposed.png">
    <link rel="shortcut icon" href="<?php if($data['custom_favicon']) { echo $data['custom_favicon']; } else { echo bloginfo('template_directory') . '/assets/images/favicon.png'; } ?>">

    <?php if($data['custom_css'] || $data['body_background']) { echo '<style type="text/css">' . $data['custom_css'] . 'body { background-color: ' . $data['body_background'] . ' !important; } </style>'; } ?>
    
  </head>

  <body id="top" <?php body_class(); ?>>

    <div class="wrapper">


    <!-- content will go here -->