<?php
add_action( 'wp_footer', 'add_thanks' );
function add_thanks() {
?>
<script>
document.addEventListener( 'wpcf7mailsent', function( event ) {
location = '<?php echo home_url('/contact_thanks/'); ?>';
}, false );
</script>
<?php
}
?>