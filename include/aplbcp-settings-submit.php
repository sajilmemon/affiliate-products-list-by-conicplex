<?php

	require_once('../../../../wp-load.php');

    global $wpdb;

    if(isset($_POST['updateSettingBtn']))
    {
        $aplbcp_header_bg = esc_sql($_POST['aplbcp_header_bg']);
        $aplbcp_header_color = esc_sql($_POST['aplbcp_header_color']);
        $aplbcp_header_font_size = esc_sql($_POST['aplbcp_header_font_size']);

//        $aplbcp_product_img_width = esc_sql($_POST['aplbcp_product_img_width']);
        $aplbcp_product_img_hieght = esc_sql($_POST['aplbcp_product_img_hieght']);
        $aplbcp_product_title_color = esc_sql($_POST['aplbcp_product_title_color']);
        $aplbcp_product_title_font_size = esc_sql($_POST['aplbcp_product_title_font_size']);
        $aplbcp_product_desc_font_size = esc_sql($_POST['aplbcp_product_desc_font_size']);
        
        $aplbcp_button_bg = esc_sql($_POST['aplbcp_button_bg']);
        $aplbcp_button_color = esc_sql($_POST['aplbcp_button_color']);
        $aplbcp_button_border_width = esc_sql($_POST['aplbcp_button_border_width']);
        $aplbcp_button_border_color = esc_sql($_POST['aplbcp_button_border_color']);
        $aplbcp_button_radius = esc_sql($_POST['aplbcp_button_radius']);
        $aplbcp_button_hover_bg = esc_sql($_POST['aplbcp_button_hover_bg']);
        $aplbcp_button_hover_color = esc_sql($_POST['aplbcp_button_hover_color']);
        $aplbcp_button_hover_border_width = esc_sql($_POST['aplbcp_button_hover_border_width']);
        $aplbcp_button_hover_border_color = esc_sql($_POST['aplbcp_button_hover_border_color']);
        $aplbcp_button_hover_shadow = esc_sql($_POST['aplbcp_button_hover_shadow']);

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