<?php
/**
 * paypalhss.php payment module class for PayPal Website Payments Pro Hosted  method
 *
 * @package paymentMethod
 * @copyright Copyright 2011 OnTechnology Pty Ltd
 * @license GNU Public License V2.0
 */


/**
 * paypalhss.php payment module class for PayPal Website Payments Pro Hosted
 *
 */
class paypalhss {
  var $code;
  var $title;
  var $description;
  var $enabled;
  var $hsslink;
  
  function paypalhss() {
    global $order;
    $this->code = 'paypalhss';
    if (IS_ADMIN_FLAG === true) {
      $this->title = MODULE_PAYMENT_PAYPALHSS_TEXT_ADMIN_TITLE; // Payment Module title in Admin
      if (IS_ADMIN_FLAG === true && MODULE_PAYMENT_PAYPALHSS_SERVER != 'live') $this->title .= '<span class="alert"> (sandbox active)</span>';
    } else {
      $this->title = MODULE_PAYMENT_PAYPALHSS_TEXT_CATALOG_TITLE; // Payment Module title in Catalog
    }
    $this->description = MODULE_PAYMENT_PAYPALHSS_TEXT_DESCRIPTION;
    $this->sort_order = MODULE_PAYMENT_PAYPALHSS_SORT_ORDER;
    $this->enabled = ((MODULE_PAYMENT_PAYPALHSS_STATUS == 'True') ? true : false);
    if ((int)MODULE_PAYMENT_PAYPALHSS_ORDER_STATUS_ID > 0) {
      $this->order_status = MODULE_PAYMENT_PAYPALHSS_ORDER_STATUS_ID;
    }

    if (is_object($order)) $this->update_status();
    
    $this->hsslink = "";
  }
  /**
   * calculate zone matches and flag settings to determine whether this module should display to customers or not
    *
    */
  function update_status() {
    global $order, $db;

    if ( ($this->enabled == true) && ((int)MODULE_PAYMENT_PAYPALHSS_ZONE > 0) ) {
      $check_flag = false;
      $check_query = tep_db_query("select zone_id from " . TABLE_ZONES_TO_GEO_ZONES . " where geo_zone_id = '" . MODULE_PAYMENT_PAYPAL_EXPRESS_ZONE . "' and zone_country_id = '" . $order->delivery['country']['id'] . "' order by zone_id");
      while ($check = tep_db_fetch_array($check_query)) {
        if ($check['zone_id'] < 1) {
          $check_flag = true;
          break;
        } elseif ($check['zone_id'] == $order->delivery['zone_id']) {
          $check_flag = true;
          break;
        }
      }

      if ($check_flag == false) {
        $this->enabled = false;
      }
    }
  }
  /**
   * JS validation which does error-checking of data-entry if this module is selected for use
   * (Number, Owner, and CVV Lengths)
   *
   * @return string
    */
  function javascript_validation() {
  
  
    return false;
  }
  /**
   * Create 2 hour long hosted button linked to HSS flow and return iframe content to caller for ultimate display on payment page
   *
   * @return array
    */
  function selection() {

	global $db, $order, $order_totals;
	
	if($this->hsslink == "")
	{
		$url = "https://api-3t.paypal.com/nvp";
		if(MODULE_PAYMENT_PAYPALHSS_SERVER != 'live')
			$url = "https://api-3t.sandbox.paypal.com/nvp";
		
		$paypalapiusername = MODULE_PAYMENT_PAYPALHSS_API_USERNAME;
		$paypalapipassword = MODULE_PAYMENT_PAYPALHSS_API_PASSWORD;
		$paypalapisignature = MODULE_PAYMENT_PAYPALHSS_API_SIGNATURE;
		
		$paymentaction = (MODULE_PAYMENT_PAYPALHSS_TRANSACTION_MODE != 'Final Sale') ? 'authorization' : 'sale';		
	
	    $paypalphone = preg_replace('/\D/', '', $order->customer['telephone']);
	    $paypalphone_a = "";
	    $paypalphone_b = "";
	    $paypalphone_c = "";
	    if ($paypalphone != '')
	    {
			if (in_array($order->delivery['country']['iso_code_2'], array('US','CA')))
			{
				$paypalphone_a = substr($paypalphone,0,3);
				$paypalphone_b = substr($paypalphone,3,3);
				$paypalphone_c = substr($paypalphone,6,4);
			} 
			else
			{
				$paypalphone_b = $paypalphone;
			}
	    }
	    
	    if(MODULE_PAYMENT_PAYPALHSS_CURRENCY == 'Selected Currency' || MODULE_PAYMENT_PAYPALHSS_CURRENCY == 'Transaction Currency')
	    {
	    	$hsscurrency = $order->info['currency'];
	    }
	    else
	    {
	    	$hsscurrency = substr(MODULE_PAYMENT_PAYPALHSS_CURRENCY, 5);
	    }
	    if(!in_array($hsscurrency, array('AUD', 'CAD', 'EUR', 'GBP', 'JPY', 'USD')))
	    {
	    	$hsscurrency = 'USD';
	    }
		
		$fields = array(
			'USER'=>$paypalapiusername,
			'PWD'=>$paypalapipassword,
			'VERSION'=>'65.2',
			'SIGNATURE'=>$paypalapisignature,
			'METHOD'=>'BMCreateButton',
			'BUTTONCODE'=>'TOKEN',
			'BUTTONTYPE'=>'PAYMENT',
			'L_BUTTONVAR0'=>"currency_code=".$hsscurrency,
			'L_BUTTONVAR1'=>"subtotal=".$order->info['subtotal'],
			'L_BUTTONVAR2'=>"tax=".round($order->info['tax'],2),
			'L_BUTTONVAR3'=>"shipping=".round($order->info['shipping_total'], 2),
			'L_BUTTONVAR4'=>"amount=".round($order->info['total'], 2),
			'L_BUTTONVAR5'=>"return=".tep_href_link(FILENAME_CHECKOUT_PROCESS, 'referer=paypal', 'SSL'),
			'L_BUTTONVAR6'=>"cancel_return=".tep_href_link(FILENAME_CHECKOUT_PAYMENT, '', 'SSL'),
			'L_BUTTONVAR7'=>"bn=osCommerce_HSS",
			'L_BUTTONVAR8'=>"address_override=true",
			'L_BUTTONVAR9'=>"first_name=".$order->delivery['firstname'],
			'L_BUTTONVAR10'=>"last_name=".$order->delivery['lastname'],
			'L_BUTTONVAR11'=>"address1=".$order->delivery['street_address'],
			'L_BUTTONVAR12'=>"address2=",
			'L_BUTTONVAR13'=>"city=".$order->delivery['city'],
			'L_BUTTONVAR14'=>"country=".$order->delivery['country']['iso_code_2'],
			'L_BUTTONVAR15'=>"state=".$order->delivery['state'],
			'L_BUTTONVAR16'=>"zip=".$order->delivery['postcode'],
			'L_BUTTONVAR17'=>"billing_first_name=".$order->billing['firstname'],
			'L_BUTTONVAR18'=>"billing_last_name=".$order->billing['lastname'],
			'L_BUTTONVAR19'=>"billing_address1=".$order->billing['street_address'],
			'L_BUTTONVAR20'=>"billing_address2=",
			'L_BUTTONVAR21'=>"billing_city=".$order->billing['city'],
			'L_BUTTONVAR22'=>"billing_country=".$order->billing['country']['iso_code_2'],
			'L_BUTTONVAR23'=>"billing_state=".$order->billing['state'],
			'L_BUTTONVAR24'=>"billing_zip=".$order->billing['postcode'],
			'L_BUTTONVAR25'=>"buyer_email=".$order->billing['email_address'],
			'L_BUTTONVAR26'=>"notify_url=".tep_href_link('ext/modules/payment/paypal/standard_ipn.php', '', 'SSL', false, false),
			'L_BUTTONVAR27'=>"showHostedThankyouPage=false",
			'L_BUTTONVAR28'=>"invoice=".(int)$_SESSION['customer_id'] . '-' . time() . '-[' . substr(preg_replace('/[^a-zA-Z0-9_]/', '', STORE_NAME), 0, 30) . ']',
			'L_BUTTONVAR29'=>"paymentaction=".$paymentaction,
			'L_BUTTONVAR30'=>"shopping_url=".tep_href_link(FILENAME_SHOPPING_CART, '', 'SSL'),
			'L_BUTTONVAR31'=>"upload=1",
			'L_BUTTONVAR32'=>"rm=2",
			'L_BUTTONVAR33'=>"template=TemplateD",
			'L_BUTTONVAR34'=>"night_phone_a=".$paypalphone_a,
			'L_BUTTONVAR35'=>"night_phone_b=".$paypalphone_b,
			'L_BUTTONVAR36'=>"night_phone_c=".$paypalphone_c,
			'L_BUTTONVAR37'=>"day_phone_a=".$paypalphone_a,
			'L_BUTTONVAR38'=>"day_phone_b=".$paypalphone_b,
			'L_BUTTONVAR39'=>"day_phone_c=".$paypalphone_c,
			'L_BUTTONVAR40'=>"H_PhoneNumber=".$paypalphone
		);

		$ch = curl_init();
		curl_setopt($ch, CURLOPT_URL, $url);
		curl_setopt($ch, CURLOPT_HEADER, 0);
		curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
		curl_setopt($ch, CURLOPT_HTTPHEADER, array( "Content-Type: application/x-www-form-urlencoded" ));
		curl_setopt($ch, CURLOPT_POST, 1);
		curl_setopt($ch, CURLOPT_POSTFIELDS, http_build_query($fields));
		curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
		curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, 2);
	
		$apiresponse = curl_exec($ch);
		$str = parse_str($apiresponse, $output);
	
		curl_close($ch);
		
	    $_SESSION['paypal_transaction_info'] = array($order->info['subtotal'], $order->info['currency']);
	    $_SESSION['payment'] = 'paypalhss';
	    $_SESSION['ppipn_key_to_remove'] = session_id();
	    		    
	    $this->hsslink = $output['EMAILLINK'];
	}
	
    return array('id' => $this->code,
                 'module' => '<b>'.MODULE_PAYMENT_PAYPALHSS_CHECKOUT_TITLE.'</b><iframe id="hssframe" src="'.$this->hsslink.'"style="position:relative; z-index:0;width: 560px; height: 450px;overflow: hidden; margin-left: auto; margin-right: auto; display:block;" frameborder="0" scrolling="no"></iframe>'
                 );
  }

  function pre_confirmation_check() {
    return false;
  }

  function confirmation() {
    return false;
  }
    
  function process_button() {
	return '<!-- paypal hss -->';
  }
  /**
   * Determine the language to use when visiting the PayPal site
   */
  function getLanguageCode() {
    global $order;
    $lang_code = '';
    $orderISO = tep_get_countries($order->customer['country']['id'], true);
    $storeISO = tep_get_countries(STORE_COUNTRY, true);
    if (in_array(strtoupper($orderISO['countries_iso_code_2']), array('US', 'AU', 'DE', 'FR', 'IT', 'GB', 'ES', 'AT', 'BE', 'CA', 'CH', 'CN', 'NL', 'PL'))) {
      $lang_code = strtoupper($orderISO['countries_iso_code_2']);
    } elseif (in_array(strtoupper($storeISO['countries_iso_code_2']), array('US', 'AU', 'DE', 'FR', 'IT', 'GB', 'ES', 'AT', 'BE', 'CA', 'CH', 'CN', 'NL', 'PL'))) {
      $lang_code = strtoupper($storeISO['countries_iso_code_2']);
    } elseif (in_array(strtoupper($_SESSION['languages_code']), array('EN', 'US', 'AU', 'DE', 'FR', 'IT', 'GB', 'ES', 'AT', 'BE', 'CA', 'CH', 'CN', 'NL', 'PL'))) {
      $lang_code = $_SESSION['languages_code'];
      if (strtoupper($lang_code) == 'EN') $lang_code = 'US';
    }

    return strtoupper($lang_code);
  }

  function before_process() {
      
	$url = "https://api-3t.paypal.com/nvp";
	if(MODULE_PAYMENT_PAYPALHSS_SERVER != 'live')
		$url = "https://api-3t.sandbox.paypal.com/nvp";
		
	$paypalapiusername = MODULE_PAYMENT_PAYPALHSS_API_USERNAME;
	$paypalapipassword = MODULE_PAYMENT_PAYPALHSS_API_PASSWORD;
	$paypalapisignature = MODULE_PAYMENT_PAYPALHSS_API_SIGNATURE;
		
	$fields = array(
		'USER'=>$paypalapiusername,
		'PWD'=>$paypalapipassword,
		'VERSION'=>'65.2',
		'SIGNATURE'=>$paypalapisignature,
		'METHOD'=>'GetTransactionDetails',
		'TRANSACTIONID'=>$_GET['tx']
	);

	$ch = curl_init();
	curl_setopt($ch, CURLOPT_URL, $url);
	curl_setopt($ch, CURLOPT_HEADER, 0);
	curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
	curl_setopt($ch, CURLOPT_HTTPHEADER, array( "Content-Type: application/x-www-form-urlencoded" ));
	curl_setopt($ch, CURLOPT_POST, 1);
	curl_setopt($ch, CURLOPT_POSTFIELDS, http_build_query($fields));
	curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
	curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, 2);

	$apiresponse = curl_exec($ch);
	$str = parse_str($apiresponse, $output);
	curl_close($ch);

     if ($output['PAYMENTSTATUS'] == 'Completed' || $output['PAYMENTSTATUS'] == 'In-Progress' || $output['PAYMENTSTATUS'] == 'Pending' || $output['PAYMENTSTATUS'] == 'Processed') {
		return false;
      } else {
	// payment failed so head back to payment page
        tep_redirect(tep_href_link(FILENAME_CHECKOUT_PAYMENT, '', 'SSL'));
      }

  }

  function after_process() {
	return false;
  }

  function output_error() {
    return false;
  }
  
  /**
   * Check to see whether module is installed
   *
   * @return boolean
    */
	function check() {
	  if (!isset($this->_check)) {
	    $check_query = tep_db_query("select configuration_value from " . TABLE_CONFIGURATION . " where configuration_key = 'MODULE_PAYMENT_PAYPALHSS_STATUS'");
	    $this->_check = tep_db_num_rows($check_query);
	  }
	  return $this->_check;
	}
    
  /**
   * Install the payment module and its configuration settings
    *
    */
  function install() {

    tep_db_query("insert into " . TABLE_CONFIGURATION . " (configuration_title, configuration_key, configuration_value, configuration_description, configuration_group_id, sort_order, set_function, date_added) values ('Enable PayPal Module', 'MODULE_PAYMENT_PAYPALHSS_STATUS', 'True', 'Do you want to accept PayPal payments?', '6', '0', 'tep_cfg_select_option(array(\'True\', \'False\'), ', now())");
    tep_db_query("insert into " . TABLE_CONFIGURATION . " (configuration_title, configuration_key, configuration_value, configuration_description, configuration_group_id, sort_order, date_added) values ('PayPal API Username', 'MODULE_PAYMENT_PAYPALHSS_API_USERNAME','', 'Your PayPal API Username can be found in Profile > API Access > Request API Credentials in your PayPal account. Choose the Request API Signature option.<br />NOTE: This must match <strong>EXACTLY </strong>the API Username value.', '6', '1', now())");
    tep_db_query("insert into " . TABLE_CONFIGURATION . " (configuration_title, configuration_key, configuration_value, configuration_description, configuration_group_id, sort_order, date_added) values ('PayPal API Password', 'MODULE_PAYMENT_PAYPALHSS_API_PASSWORD','', 'Your PayPal API Password can be found in Profile > API Access > Request API Credentials in your PayPal account. Choose the Request API Signature option.<br />NOTE: This must match <strong>EXACTLY </strong>the API Password value.', '6', '2', now())");
    tep_db_query("insert into " . TABLE_CONFIGURATION . " (configuration_title, configuration_key, configuration_value, configuration_description, configuration_group_id, sort_order, date_added) values ('PayPal API Signature', 'MODULE_PAYMENT_PAYPALHSS_API_SIGNATURE','', 'Your PayPal API Signature can be found in Profile > API Access > Request API Credentials in your PayPal account. Choose the Request API Signature option.<br />NOTE: This must match <strong>EXACTLY </strong>the API Signature value.', '6', '3', now())");
    tep_db_query("insert into " . TABLE_CONFIGURATION . " (configuration_title, configuration_key, configuration_value, configuration_description, configuration_group_id, sort_order, set_function, date_added) values ('Payment Action', 'MODULE_PAYMENT_PAYPALHSS_TRANSACTION_MODE', 'Final Sale', 'How do you want to obtain payment?<br /><strong>Default: Final Sale</strong>', '6', '25', 'tep_cfg_select_option(array(\'Auth Only\', \'Final Sale\'), ',  now())");    
    tep_db_query("insert into " . TABLE_CONFIGURATION . " (configuration_title, configuration_key, configuration_value, configuration_description, configuration_group_id, sort_order, use_function, set_function, date_added) values ('Payment Zone', 'MODULE_PAYMENT_PAYPALHSS_ZONE', '0', 'If a zone is selected, only enable this payment method for that zone.', '6', '4', 'tep_get_zone_class_title', 'tep_cfg_pull_down_zone_classes(', now())");
   	tep_db_query("insert into " . TABLE_CONFIGURATION . " (configuration_title, configuration_key, configuration_value, configuration_description, configuration_group_id, sort_order, set_function, use_function, date_added) values ('Set Pending Notification Status', 'MODULE_PAYMENT_PAYPALHSS_PROCESSING_STATUS_ID', '" . DEFAULT_ORDERS_STATUS_ID .  "', 'Set the status of orders made with this payment module that are not yet completed to this value<br />(\'Pending\' recommended)', '6', '5', 'tep_cfg_pull_down_order_statuses(', 'tep_get_order_status_name', now())");
    tep_db_query("insert into " . TABLE_CONFIGURATION . " (configuration_title, configuration_key, configuration_value, configuration_description, configuration_group_id, sort_order, set_function, use_function, date_added) values ('Set Order Status', 'MODULE_PAYMENT_PAYPALHSS_ORDER_STATUS_ID', '2', 'Set the status of orders made with this payment module that have completed payment to this value<br />(\'Processing\' recommended)', '6', '6', 'tep_cfg_pull_down_order_statuses(', 'tep_get_order_status_name', now())");
    tep_db_query("insert into " . TABLE_CONFIGURATION . " (configuration_title, configuration_key, configuration_value, configuration_description, configuration_group_id, sort_order, date_added) values ('Sort order of display.', 'MODULE_PAYMENT_PAYPALHSS_SORT_ORDER', '0', 'Sort order of display. Lowest is displayed first.', '6', '8', now())");
    tep_db_query("insert into " . TABLE_CONFIGURATION . " (configuration_title, configuration_key, configuration_value, configuration_description, configuration_group_id, sort_order, set_function, date_added) values ('Live or Sandbox', 'MODULE_PAYMENT_PAYPALHSS_SERVER', 'live', '<strong>Live: </strong>  Used to process Live transactions<br/><strong>Sandbox: </strong>For developers and testing', '6', '25', 'tep_cfg_select_option(array(\'live\', \'sandbox\'), ', now())");


  }
  /**
   * Remove the module and all its settings
    *
    */
  function remove() {
    tep_db_query("delete from " . TABLE_CONFIGURATION . " where configuration_key LIKE 'MODULE\_PAYMENT\_PAYPALHSS\_%'");
  }
  /**
   * Internal list of configuration keys used for configuration of the module
   *
   * @return array
    */
  function keys() {
  
    $keys_list = array(
                       'MODULE_PAYMENT_PAYPALHSS_STATUS',
                       'MODULE_PAYMENT_PAYPALHSS_API_USERNAME',
                       'MODULE_PAYMENT_PAYPALHSS_API_PASSWORD',
                       'MODULE_PAYMENT_PAYPALHSS_API_SIGNATURE',
                       'MODULE_PAYMENT_PAYPALHSS_TRANSACTION_MODE',
                       'MODULE_PAYMENT_PAYPALHSS_ZONE',
                       'MODULE_PAYMENT_PAYPALHSS_ORDER_STATUS_ID',
                       'MODULE_PAYMENT_PAYPALHSS_SORT_ORDER',
                       'MODULE_PAYMENT_PAYPALHSS_SERVER'
                        );
    
    return $keys_list;
  }

}
