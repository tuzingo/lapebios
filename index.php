<!--
Theme Name: Lapebios
Theme URI: http://URI_Of_Page_Describing_Plugin_and_Updates
Description: The theme that's we use at https://iefe.ufal.br/laboratorio/lapebios/
Version: 0.01
Author: Arthur Candido Regueira de Miranda
Author URI: http://github.com/tuzingo
License: MIT
*/
-->
<!DOCTYPE html>
<html>
<head>
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <title><?php wp_title( '|', true, 'right' ); ?></title>
    <link rel="stylesheet" href="<?php echo esc_url( get_stylesheet_uri() ); ?>" type="text/css" />
    <?php wp_head(); ?>
</head>
<body>
<?php get_header();?>
<?php wp_footer(); ?>
</body>
</html>