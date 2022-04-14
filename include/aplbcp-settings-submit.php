<?php

    global $wpdb;

    if(isset($_POST['updateSettingBtn']))
    {
        $aplbcp_header_bg = sanitize_text_field($_POST['aplbcp_header_bg']);
        $aplbcp_header_color = sanitize_text_field($_POST['aplbcp_header_color']);
        $aplbcp_header_font_size = sanitize_text_field($_POST['aplbcp_header_font_size']);

//        $aplbcp_product_img_width = sanitize_text_field($_POST['aplbcp_product_img_width']);
        $aplbcp_product_img_hieght = sanitize_text_field($_POST['aplbcp_product_img_hieght']);
        $aplbcp_product_title_color = sanitize_text_field($_POST['aplbcp_product_title_color']);
        $aplbcp_product_title_font_size = sanitize_text_field($_POST['aplbcp_product_title_font_size']);
        $aplbcp_product_desc_font_size = sanitize_text_field($_POST['aplbcp_product_desc_font_size']);
        
        $aplbcp_button_bg = sanitize_text_field($_POST['aplbcp_button_bg']);
        $aplbcp_button_color = sanitize_text_field($_POST['aplbcp_button_color']);
        $aplbcp_button_border_width = sanitize_text_field($_POST['aplbcp_button_border_width']);
        $aplbcp_button_border_color = sanitize_text_field($_POST['aplbcp_button_border_color']);
        $aplbcp_button_radius = sanitize_text_field($_POST['aplbcp_button_radius']);
        $aplbcp_button_hover_bg = sanitize_text_field($_POST['aplbcp_button_hover_bg']);
        $aplbcp_button_hover_color = sanitize_text_field($_POST['aplbcp_button_hover_color']);
        $aplbcp_button_hover_border_width = sanitize_text_field($_POST['aplbcp_button_hover_border_width']);
        $aplbcp_button_hover_border_color = sanitize_text_field($_POST['aplbcp_button_hover_border_color']);
        $aplbcp_button_hover_shadow = sanitize_text_field($_POST['aplbcp_button_hover_shadow']);

        $table= $wpdb->prefix.'aplbcp_setting';
		$update=$wpdb->update($table, array(
            'aplbcp_header_bg' => $aplbcp_header_bg,
            'aplbcp_header_color' => $aplbcp_header_color,
            'aplbcp_header_font_size' => $aplbcp_header_font_size,
//            'aplbcp_product_img_width' => $aplbcp_product_img_width,
            'aplbcp_product_img_hieght' => $aplbcp_product_img_hieght,
            'aplbcp_product_title_color' => $aplbcp_product_title_color,
            'aplbcp_product_title_font_size' => $aplbcp_product_title_font_size,
            'aplbcp_product_desc_font_size' => $aplbcp_product_desc_font_size,
            'aplbcp_button_bg' => $aplbcp_button_bg,
            'aplbcp_button_color' => $aplbcp_button_color,
            'aplbcp_button_border_width' => $aplbcp_button_border_width,
            'aplbcp_button_border_color' => $aplbcp_button_border_color,
            'aplbcp_button_radius' => $aplbcp_button_radius,
            'aplbcp_button_hover_bg' => $aplbcp_button_hover_bg,
            'aplbcp_button_hover_color' => $aplbcp_button_hover_color,
            'aplbcp_button_hover_border_width' => $aplbcp_button_hover_border_width,
            'aplbcp_button_hover_border_color' => $aplbcp_button_hover_border_color,
            'aplbcp_button_hover_shadow' => $aplbcp_button_hover_shadow),
            array('aplbcp_setting_id'=>"1"));

        if($update)
        {
            wp_redirect(admin_url( 'admin.php?page=aplbcp_settings&updatedsuccess=1'),301);
			exit();
        }
    }
?>