
<?php
    global $wpdb;
    $table= $wpdb->prefix.'aplbcp_setting';
    $aplbcpSettingSql="SELECT * FROM $table";
    $aplbcpSettingRow=$wpdb->get_results($aplbcpSettingSql);
?>

    <style>
        .aplbcp-container .aplbcp-header, .aplbcp-container .aplbcp-products{
            display: flex;
            flex-direction: row;
            padding: 20px;
            align-items: center;
            box-shadow: rgba(149, 157, 165, 0.2) 0px 2px 5px;
            margin: 10px;
        }
        
        .aplbcp-container .aplbcp-header{
            align-self: center;
            margin: 5px;
            background: <?php echo $aplbcpSettingRow[0]->aplbcp_header_bg; ?> !important;
            color: <?php echo $aplbcpSettingRow[0]->aplbcp_header_color; ?>;
            font-weight: bold;
            font-size: <?php echo $aplbcpSettingRow[0]->aplbcp_header_font_size; ?>;
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
            width: <?php echo $aplbcpSettingRow[0]->aplbcp_product_img_width; ?>px;
            height: <?php echo $aplbcpSettingRow[0]->aplbcp_product_img_hieght; ?>px;
            margin: 0 auto;
        }
        .aplbcp-container .aplbcp-products .aplbcp-products-items .aplbcp-products-title{
            color: <?php echo $aplbcpSettingRow[0]->aplbcp_product_title_color; ?>;
            font-size: <?php echo $aplbcpSettingRow[0]->aplbcp_product_title_font_size; ?>;        
        }
        .aplbcp-container .aplbcp-products .aplbcp-products-items .aplbcp-products-desc{
            margin: 10px;
            padding: 10px;
            font-size: <?php echo $aplbcpSettingRow[0]->aplbcp_product_desc_font_size; ?>;
        }
        .aplbcp-container .aplbcp-products .aplbcp-products-items .aplbcp-product-buynow-btn{
            background: <?php echo $aplbcpSettingRow[0]->aplbcp_button_bg; ?>;
            color: <?php echo $aplbcpSettingRow[0]->aplbcp_button_color; ?>;
            padding: 10px;
            text-decoration: none;
            border-radius: <?php echo $aplbcpSettingRow[0]->aplbcp_button_radius; ?>px;
            border: solid <?php echo $aplbcpSettingRow[0]->aplbcp_button_border_width."px ".$aplbcpSettingRow[0]->aplbcp_button_border_color; ?>;
            display: block;
            margin: 0 auto;
            width: 50%;
        }
        .aplbcp-container .aplbcp-products .aplbcp-products-items .aplbcp-product-buynow-btn:hover{
            background: <?php echo $aplbcpSettingRow[0]->aplbcp_button_hover_bg; ?>px;;
            color: green;
            border: solid <?php echo $aplbcpSettingRow[0]->aplbcp_button_hover_border_width."px ".$aplbcpSettingRow[0]->aplbcp_button_hover_border_color; ?>;
            box-shadow: <?php echo $aplbcpSettingRow[0]->aplbcp_button_hover_shadow; ?>;
            scale: 1.1;
            transition: 0.2s;
        }

        @media only screen and (max-width: 600px) {
            .aplbcp-container .aplbcp-flex
            {
                flex-direction: column;
            }
            .aplbcp-container .aplbcp-products .aplbcp-products-items
            {
                width: 100%;
            }
        }
    </style>

</head>
<body>
    
    <div class="aplbcp-container">
        <div class="aplbcp-header">
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

        <div class="aplbcp-products">
            <div class="aplbcp-products-items">
                <img class="aplbcp-products-images" src="https://images-na.ssl-images-amazon.com/images/I/61sy5KoVUFL._AC_SL1200_.jpg">
                <h1 class="aplbcp-products-title">
                    Corsair Crystal 280X
                </h1>
            </div>
            <div class="aplbcp-products-items">
                <div class="aplbcp-products-desc">
                    Build Material: Steel, Plastic, and Tempered Glass
                    Power: 750W
                    Compatibility: Mini-ITX and Micro-ATX
                    Side-Panel Windows: Yes
                    Expansion Slots: 4
                    Ports: 2x USB 2.0, 2x Audio Ports
                    Dimensions: 15.67 x 10.87 x 13.82 inches
                </div>
            </div>
            <div class="aplbcp-products-items">
                <a href="#" class="aplbcp-product-buynow-btn">Buy Now</a>
            </div>
        </div>

        <div class="aplbcp-products">
            <div class="aplbcp-products-items">
                <img class="aplbcp-products-images" src="https://images-na.ssl-images-amazon.com/images/I/61sy5KoVUFL._AC_SL1200_.jpg">
                <h1>
                    Corsair Crystal 280X
                </h1>
            </div>
            <div class="aplbcp-products-items">
                <div class="aplbcp-products-desc">
                    Build Material: Steel, Plastic, and Tempered Glass
                    Power: 750W
                    Compatibility: Mini-ITX and Micro-ATX
                    Side-Panel Windows: Yes
                    Expansion Slots: 4
                    Ports: 2x USB 2.0, 2x Audio Ports
                    Dimensions: 15.67 x 10.87 x 13.82 inches
                </div>
            </div>
            <div class="aplbcp-products-items">
                <a href="#" class="aplbcp-product-buynow-btn">Buy Now</a>
            </div>
        </div>

    </div>
