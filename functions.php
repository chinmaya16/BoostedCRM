// Handle AJAX for logged-in and guest users
add_action('wp_ajax_submit_delivery_form', 'handle_delivery_form');
add_action('wp_ajax_nopriv_submit_delivery_form', 'handle_delivery_form');

function handle_delivery_form() {
    global $wpdb;

    
    // Sanitize all inputs
    $first_name  = sanitize_text_field($_POST['firstName'] ?? '');
    $last_name   = sanitize_text_field($_POST['lastName'] ?? '');
    $email       = sanitize_email($_POST['email'] ?? '');
    $phone_code  = sanitize_text_field($_POST['countryCode'] ?? '');
    $phone       = sanitize_text_field($_POST['phoneNumber'] ?? '');
    $delivery_date = sanitize_text_field($_POST['deliveryDate'] ?? '');

    $billing_address1 = sanitize_text_field($_POST['billingAddress1'] ?? '');
    $billing_address2 = sanitize_text_field($_POST['billingAddress2'] ?? '');
    $billing_country  = sanitize_text_field($_POST['billingCountry'] ?? '');
    $billing_city     = sanitize_text_field($_POST['billingCity'] ?? '');
    $billing_state    = sanitize_text_field($_POST['billingState'] ?? '');
    $billing_postal   = sanitize_text_field($_POST['billingPostalCode'] ?? '');

    $same_as_shipping = isset($_POST['sameAsShipping']) ? 1 : 0;

    $shipping_address1 = sanitize_text_field($_POST['shippingAddress1'] ?? '');
    $shipping_address2 = sanitize_text_field($_POST['shippingAddress2'] ?? '');
    $shipping_country  = sanitize_text_field($_POST['shippingCountry'] ?? '');
    $shipping_city     = sanitize_text_field($_POST['shippingCity'] ?? '');
    $shipping_state    = sanitize_text_field($_POST['shippingState'] ?? '');
    $shipping_postal   = sanitize_text_field($_POST['shippingPostalCode'] ?? '');

    $shipping_option = sanitize_text_field($_POST['shippingOption'] ?? '');
    $customer_remarks = sanitize_textarea_field($_POST['customerRemarks'] ?? '');

    // Items (arrays)
    $item_names  = $_POST['itemName'] ?? [];
    $item_units  = $_POST['itemUnit'] ?? [];
    $item_qty    = $_POST['itemQty'] ?? [];

    $items = [];
    if (!empty($item_names)) {
        foreach ($item_names as $index => $name) {
            $items[] = [
                'name' => sanitize_text_field($name),
                'unit' => sanitize_text_field($item_units[$index] ?? ''),
                'qty'  => intval($item_qty[$index] ?? 0)
            ];
        }
    }

    // Example: Save as custom post type entry
    $post_id = wp_insert_post([
        'post_title'  => $first_name . ' ' . $last_name . ' Order',
        'post_type'   => 'delivery_order',
        'post_status' => 'publish',
        'meta_input'  => [
            'first_name'       => $first_name,
            'last_name'        => $last_name,
            'email'            => $email,
            'phone'            => $phone_code . ' ' . $phone,
            'delivery_date'    => $delivery_date,
            'billing_address1' => $billing_address1,
            'billing_address2' => $billing_address2,
            'billing_country'  => $billing_country,
            'billing_city'     => $billing_city,
            'billing_state'    => $billing_state,
            'billing_postal'   => $billing_postal,
            'same_as_shipping' => $same_as_shipping,
            'shipping_address1'=> $shipping_address1,
            'shipping_address2'=> $shipping_address2,
            'shipping_country' => $shipping_country,
            'shipping_city'    => $shipping_city,
            'shipping_state'   => $shipping_state,
            'shipping_postal'  => $shipping_postal,
            'shipping_option'  => $shipping_option,
            'customer_remarks' => $customer_remarks,
            'items'            => maybe_serialize($items)
        ]
    ]);

    if ($post_id) {
        wp_send_json_success(['message' => '✅ Order submitted successfully!']);
    } else {
        wp_send_json_error(['message' => '❌ Failed to save order.']);
    }
}
