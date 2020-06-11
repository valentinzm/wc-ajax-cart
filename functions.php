add_action('wp_ajax_item_remove', 'cart_item_remove');
add_action('wp_ajax_nopriv_item_remove', 'cart_item_remove');
function cart_item_remove(){
		//global $woocommerce;
		$id = $_POST['productid'];
		//$woocommerce->cart->remove_cart_item($id);
		$product_id = $_POST['productid'];
   	$product_cart_id = WC()->cart->generate_cart_id( $product_id );
   	$cart_item_key = WC()->cart->find_product_in_cart( $product_cart_id );
   	if ( $cart_item_key ) WC()->cart->remove_cart_item( $cart_item_key );
}