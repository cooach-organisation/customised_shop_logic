<?php

add_shortcode("subscription_summary_display", "subscription_summary_display_callback");
          
function subscription_summary_display_callback() {
    // echo "<p>This is the test output</p>";

    // $subscriptions = wcs_get_users_subscriptions();
    // $user_id = get_current_user_id();
    $subs = wcs_get_users_subscriptions( $user_id );
    $sub = (object) array_shift( $subs );

  foreach ( WC()->cart->get_cart() as $cart_item ) {
    // gets the product object
    $product            = $cart_item['data'];
    // gets the product prices
    $regular_price      = $product->get_regular_price();
    $sale_price         = $product->get_sale_price();
    $price              = $product->get_price();
    echo "test";
    echo "  Price: ".$price."<br>";
}

    // $products = $items->get_product();
    // var_dump($products);
    // $subs = (object) $subs->data;
    // $return = $subs->status;
    // wc_get_template('myaccount/dashboard.php', array('current_user' => get_user_by( 'id', get_current_user_id())));
    wc_get_template(
      'myaccount/subscription-totals.php', 
      array('subscription' => $sub, 'user_id' => $user_id), 
      '', 
      plugin_dir_path(__FILE__) .'templates/'
    );
  }