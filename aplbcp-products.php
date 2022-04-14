
<?php
    global $wpdb;
    $table= $wpdb->prefix.'aplbcp_setting';
    $aplbcpSettingSql="SELECT * FROM $table";
    $aplbcpSettingRow=$wpdb->get_results($aplbcpSettingSql);

	if(isset($attr['product_list']))
	{
		$product_id=$attr['product_list'];			
	}
	elseif (isset($_GET['product_id'])) 
	{
		$product_id=esc_sql($_GET['product_id']);
	}

    $table= $wpdb->prefix.'aplbcp_products_list';
    $aplbcpProductsListSql="SELECT * FROM $table WHERE product_id='$product_id'";
    $aplbcpProductsListRow=$wpdb->get_results($aplbcpProductsListSql);

    $table= $wpdb->prefix.'aplbcp_products';
    $aplbcpProductsSql="SELECT * FROM $table WHERE product_list_id='$product_id'";
    $aplbcpProductsRow=$wpdb->get_results($aplbcpProductsSql);
?>

    <style>
        .aplbcp-header, .aplbcp-container .aplbcp-products{
            display: flex;
            flex-direction: row;
            padding: 20px;
            align-items: center;
            box-shadow: rgba(149, 157, 165, 0.2) 0px 2px 5px;
            margin: 10px;
        }
        
        .aplbcp-header{
            align-self: center;
            margin: 5px;
            background: <?php echo esc_attr($aplbcpSettingRow[0]->aplbcp_header_bg); ?> !important;
            color: <?php echo esc_attr($aplbcpSettingRow[0]->aplbcp_header_color); ?>;
            font-weight: bold;
            font-size: <?php echo esc_attr($aplbcpSettingRow[0]->aplbcp_header_font_size); ?>px;
        }
        .aplbcp-container .aplbcp-header .aplbcp-header-items{
            width: 33%;
            text-align: center;
        }
        .aplbcp-container .aplbcp-products .aplbcp-products-items{
            width: 33%;
            align-self: center;
            text-align: center;
            margin: 5px;
        }

        .aplbcp-container .aplbcp-products .aplbcp-products-items .aplbcp-products-images{
            width: auto;
            height: <?php echo esc_attr($aplbcpSettingRow[0]->aplbcp_product_img_hieght); ?>px;
            margin: 0 auto;
        }
        .aplbcp-container .aplbcp-products .aplbcp-products-items .aplbcp-products-title{
            color: <?php echo esc_attr($aplbcpSettingRow[0]->aplbcp_product_title_color); ?>;
            font-size: <?php echo esc_attr($aplbcpSettingRow[0]->aplbcp_product_title_font_size); ?>px;        
            font-weight: bold;
        }
        .aplbcp-container .aplbcp-products .aplbcp-products-items .aplbcp-products-desc{
            margin: 10px;
            padding: 10px;
            font-size: <?php echo esc_attr($aplbcpSettingRow[0]->aplbcp_product_desc_font_size); ?>px;
        }
        .aplbcp-container .aplbcp-products .aplbcp-products-items .aplbcp-product-buynow-btn{
            background: <?php echo esc_attr($aplbcpSettingRow[0]->aplbcp_button_bg); ?>;
            color: <?php echo esc_attr($aplbcpSettingRow[0]->aplbcp_button_color); ?>;
            padding: 10px;
            text-decoration: none;
            border-radius: <?php echo esc_attr($aplbcpSettingRow[0]->aplbcp_button_radius); ?>px;
            border: solid <?php echo esc_attr($aplbcpSettingRow[0]->aplbcp_button_border_width."px ".$aplbcpSettingRow[0]->aplbcp_button_border_color); ?>;
            display: block;
            margin: 0 auto;
            width: 50%;
        }
        .aplbcp-container .aplbcp-products .aplbcp-products-items .aplbcp-product-buynow-btn:hover{
            background: <?php echo esc_attr($aplbcpSettingRow[0]->aplbcp_button_hover_bg); ?>;
            color: <?php echo esc_attr($aplbcpSettingRow[0]->aplbcp_button_hover_color); ?>;
            border: solid <?php echo esc_attr($aplbcpSettingRow[0]->aplbcp_button_hover_border_width."px ".$aplbcpSettingRow[0]->aplbcp_button_hover_border_color); ?>;
            box-shadow: <?php echo esc_attr($aplbcpSettingRow[0]->aplbcp_button_hover_shadow); ?>;
            scale: 1.1;
            transition: 0.2s;
        }
        .aplbcp-products .aplbcp-products-items .aplbcp-products-desc ul{
            padding-inline-start: 20px;
            margin: 0px;
            text-align: left;
        }
        .aplbcp-container .aplbcp-header-for-mobile{
            display: none;
        }

        @media only screen and (max-width: 600px) {
            .aplbcp-container .aplbcp-products
            {
                flex-direction: column;
            }
            .aplbcp-container .aplbcp-products .aplbcp-products-items{
                width: 100%;
            }
            .aplbcp-container .aplbcp-products .aplbcp-products-items .aplbcp-products-desc{
                margin: 0;
            }
            .aplbcp-container .aplbcp-products .aplbcp-products-items .aplbcp-product-buynow-btn{
                width: auto;
            }
            .aplbcp-products .aplbcp-products-items .aplbcp-products-desc ul{
                padding-inline-start: 10px;
            }
            .aplbcp-container .aplbcp-header-for-mobile
            {
                display: block;
            }
            .aplbcp-container .aplbcp-header-for-non-mobile
            {
                display: none;
            }
            .aplbcp-container .aplbcp-header .aplbcp-header-items{
                width: 100%;
                text-align: center;
            }
        }
    </style>

</head>
<body>
    
    <div class="aplbcp-container">
        <div class="aplbcp-header aplbcp-header-for-non-mobile">
            <div class="aplbcp-header-items">
                Product Name
            </div>
            <div class="aplbcp-header-items">
                Product Features
            </div>
            <div class="aplbcp-header-items">
                Buy Now
            </div>
        </div>

        <div class="aplbcp-header aplbcp-header-for-mobile">
            <div class="aplbcp-header-items">
                <?php echo esc_attr($aplbcpProductsListRow[0]->product_list_name); ?>
            </div>
        </div>

        <?php 
        foreach($aplbcpProductsRow as $aplbcpProducts)
        {
        ?>

        <div class="aplbcp-products">
            <div class="aplbcp-products-items">
                <img class="aplbcp-products-images" src="<?php echo esc_attr(get_site_url()."".$aplbcpProducts->product_image); ?>">
                <h1 class="aplbcp-products-title">
                    <?php echo esc_attr($aplbcpProducts->product_name); ?>
                </h1>
            </div>
            <div class="aplbcp-products-items">
                <div class="aplbcp-products-desc">
                    <?php echo wp_kses_post(str_replace('\r\n','',$aplbcpProducts->product_desc)); ?>
                </div>
            </div>
            <div class="aplbcp-products-items">
                <a href="<?php echo esc_attr($aplbcpProducts->buy_now_link); ?>" target="_blank" class="aplbcp-product-buynow-btn">Buy Now</a>
            </div>
        </div>

        <?php
        }
        ?>
    </div>
