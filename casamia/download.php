<?php
/*
Template Name: dowload
*/
?>
<?php get_header(); ?>
<!-- Event snippet for 無料本登録CV conversion page -->
<script>
  gtag('event', 'conversion', {'send_to': 'AW-828781014/1-XXCNXcmbEBENbjmIsD'});
</script>
</head>
    <body class="appear-animate">
<?php
if(have_posts()): while(have_posts()): the_post();?>
<!-- <h2 class="text-center"><?php the_title(); ?></h2> -->
<!-- <div class="container"> 
  <header>
    <div class="md-full header-logo">
      <a class="phone-top-banner" href="tel:0120954966"></a>
      <img src="<?php bloginfo('template_directory'); ?>/images/banner-top.jpg" alt="" class="img-responsive">
      <a href="<?php echo esc_url( home_url( '' ) ); ?>" class="logo"><img src="<?php bloginfo('template_directory'); ?>/images/text_logo.png" alt="" class="img-responsive "></a>
    </div>
  </header>
 </div> -->

<?php the_content(); ?>

<?php endwhile; endif; ?>
<!-- <div class="container">
  <div class="footer">
      <a class="back-to-top"><img class="" src="<?php bloginfo('template_directory'); ?>/img/backtotop.jpg" ></a>
      <div class="">
        <div class="top-footer">
          <span class="content"><a href="<?php echo home_url('/privacy-policy'); ?>"><img class="arrow-down" src="<?php bloginfo('template_directory'); ?>/img/next-footer.jpg" >プライバシーポリシー</a></span>
          <span class="content"><a href="<?php echo home_url('/law'); ?>"><img class="arrow-down" src="<?php bloginfo('template_directory'); ?>/img/next-footer.jpg" >特定商取引法に関する記述</a></span>
          <span class="content"><a href="<?php echo home_url('/company'); ?>"><img class="arrow-down" src="<?php bloginfo('template_directory'); ?>/img/next-footer.jpg" >会社概要</a></span>
        </div>
        <div class="copy text-center">
          <p>copyright©2018 OK Sougou Kenchiku all rights reserved.</p>
        </div>
      </div>
    </div>
</div> -->



<?php get_footer(); ?>