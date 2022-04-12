<?php

    require_once('../wp-load.php');
	
    if(!defined('ABSPATH'))
    {
        die("Can't Access");
    }

  	global $wpdb;

	if (isset($_GET['product_id'])) 
	{
		$product_id = esc_sql($_GET['product_id']);

        $table= $wpdb->prefix.'aplbcp_products_list';
		$delete=$wpdb->delete($table,
                        array('product_id' => $product_id));

        $table= $wpdb->prefix.'aplbcp_products';
        $delete=$wpdb->delete($table,
                        array('product_list_id' => $product_id));

        $url='admin.php?page=aplbcp_list_all&deletesuccess=1';
        echo "<script>window.location.href='$url'</script>";
        exit();
	}
	else
	{
        $url='admin.php?page=aplbcp_list_all&success=0';
        echo "<script>window.location.href='$url'</script>";
        exit();
	}

	
?>