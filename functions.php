function wpb_change_search_url() {
    if ( is_search() && ! empty( $_GET['s'] ) ) {
        wp_redirect( home_url( "/search/" ) . urlencode( get_query_var( 's' ) ) . '/?post_type=product' );
        exit();
    }   
}
add_action( 'template_redirect', 'wpb_change_search_url' );
