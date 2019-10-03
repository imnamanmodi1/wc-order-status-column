add_filter( 'manage_edit-shop_order_columns', 'add_new_order_admin_list_column' );
function add_new_order_admin_list_column( $columns ) {
    $columns['order_status'] = 'Order Status';
    return $columns;
}
add_action( 'manage_shop_order_posts_custom_column', 'add_new_order_admin_list_column_content' );
function add_new_order_admin_list_column_content( $column ) {
    global $post;
    if ( 'order_status' === $column ) {
        $order = wc_get_order( $post->ID );
        echo $order->get_status();
    }
}
