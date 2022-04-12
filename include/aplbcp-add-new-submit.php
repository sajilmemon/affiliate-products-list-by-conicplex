<?php

require_once('../wp-load.php');

	if(!defined('ABSPATH'))
	{
		die("Can't Access");
	}

  	global $wpdb;

	if (isset($_POST['btnAddNewProduct'])) 
	{
//		$product_list_id = esc_sql($_POST['product_list_id']);
        $product_name = esc_sql($_POST['product_name']);

        $table= $wpdb->prefix.'aplbcp_products_list';
		$update=$wpdb->insert($table,
                        array('product_list_name' => $product_name));
        
        $productListId = $wpdb->insert_id;

		
		$productNameArray = $_POST['product_second_name'];
		$i=0;

		$table= $wpdb->prefix.'aplbcp_products';
		foreach ($productNameArray as $productName) 
		{
			$product_name = esc_sql($productName);
			if($product_name != "")
			{
				$product_name = esc_sql($product_name);
                $product_image = esc_sql($_POST['productImageUrl'][$i]);
				$product_desc = esc_sql($_POST['product_desc'][$i]);
				$product_boy_now_link = esc_sql($_POST['product_boy_now_link'][$i]);


				$insert=$wpdb->insert($table, array(
                                                    'product_list_id' => $productListId,
													'product_image' => $product_image,
													'product_name' => $product_name,
													'product_desc' => $product_desc,
													'buy_now_link' => $product_boy_now_link));
			}
			$i++;

		}

	
		if($insert)
		{
			$url='admin.php?page=aplbcp_list_all&success=1';
			echo "<script>window.location.href='$url'</script>";
			exit();
		}
		else
		{
			$url='admin.php?page=aplbcp_list_all&success=0';
			echo "<script>window.location.href='$url'</script>";
			exit();
		}
	}
	else
	{
		$url='admin.php?page=aplbcp_list_all&success=0';
		echo "<script>window.location.href='$url'</script>";
		exit();
	}

	
?>