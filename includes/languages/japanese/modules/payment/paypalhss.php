<?php
/**
 * @package languageDefines
 * @copyright Copyright 2011 OnTechnology Pty Ltd
 * @license GNU Public License V2.0
 */


	define('MODULE_PAYMENT_PAYPALHSS_TEXT_ADMIN_TITLE', 'PayPal �����֥ڥ����ȥץ饹');
	define('MODULE_PAYMENT_PAYPALHSS_TEXT_CATALOG_TITLE', 'PayPal');
	if (IS_ADMIN_FLAG === true) {
		define('MODULE_PAYMENT_PAYPALHSS_TEXT_DESCRIPTION', '<strong>PayPal�����֥ڥ����ȥץ饹</strong> <br /><a href=""http://www.paypal.com/"" target=""_blank"">PayPal��������Ȥδ���</a><br /><br /><font color=""green"">������:</font><br /> <a href=""http://www.paypal.com/"" target=""_blank"">PayPal��������ȳ��� - ����å�</a><br /> <ul>' . (defined('MODULE_PAYMENT_PAYPALHSS_STATUS') ? '' : '<li>... PayPal�����֥ڥ����ȥץ饹���ݡ��Ȥ�ͭ���ˤ���ˤ�""install""�򥯥�å��������θ�""edit""��osCommerce Cart��PayPal��������Ȥ�����</li>') . '</ul><font color=""green""><hr /><strong>ɬ���׷�:</strong></font><br /><hr />*<strong>PayPal���������</strong> (<a href=""http://www.paypal.com"" target=""_blank"">����å����ƥ�������ȳ���</a>)<br />*<strong>80�֥ݡ��Ȥ��������̿��Τ���˻��Ѥ���ޤ��Τǥ롼����ե�������������Ǥ����Ƥ���ɬ�פ�����ޤ���</strong><br />*<strong>�嵭�Τ褦�����ꤵ��Ƥ���ɬ�פ�����ޤ���</strong>');
	} else {
		define('MODULE_PAYMENT_PAYPALHSS_TEXT_DESCRIPTION', '<strong>PayPal�����֥ڥ����ȥץ饹</strong>');
	}
  
	define('MODULE_PAYMENT_PAYPALHSS_SANDBOXACTIVE', 'sandbox�����ƥ���');
	define('MODULE_PAYMENT_PAYPALHSS_CHECKOUT_TITLE', '���쥸�åȥ�����ʧ��');
	define('MODULE_PAYMENT_PAYPALHSS_STATUS', 'PayPal�⥸�塼���ͭ����');
	define('MODULE_PAYMENT_PAYPALHSS_STATUS_TEXT', 'PayPal��ʧ��������դ��ޤ�����');
	define('MODULE_PAYMENT_PAYPALHSS_API_USERNAME', 'PayPal API�桼��̾');
	define('MODULE_PAYMENT_PAYPALHSS_API_USERNAME_TEXT', 'PayPal API�桼��̾�ϡ�PayPal��������Ȥ� �Ŀ����� > API�������� > API���Ѿ���������� �ˤ���ޤ���API��̾�����ᥪ�ץ��������򤷤Ƥ���������<br />���:API�桼��̾���ͤ�<strong>���Τ�</strong>���פ��Ƥ���ɬ�פ�����ޤ���');
	define('MODULE_PAYMENT_PAYPALHSS_API_PASSWORD', 'PayPal API�ѥ����');
	define('MODULE_PAYMENT_PAYPALHSS_API_PASSWORD_TEXT', 'PayPal API�ѥ���ɤϡ�PayPal��������Ȥ� �Ŀ����� > API�������� > API���Ѿ���������� �ˤ���ޤ���API��̾�����ᥪ�ץ��������򤷤Ƥ���������<br />���:API�ѥ���ɤ��ͤ�<strong>���Τ�</strong>���פ��Ƥ���ɬ�פ�����ޤ���');
	define('MODULE_PAYMENT_PAYPALHSS_API_SIGNATURE', 'PayPal API��̾');
	define('MODULE_PAYMENT_PAYPALHSS_API_SIGNATURE_TEXT', 'PayPal API��̾�ϡ�PayPal��������Ȥ� �Ŀ����� > API�������� > API���Ѿ���������� �ˤ���ޤ���API��̾�����ᥪ�ץ��������򤷤Ƥ���������<br />���:API��̾���ͤ�<strong>���Τ�</strong>���פ��Ƥ���ɬ�פ�����ޤ���');
	define('MODULE_PAYMENT_PAYPALHSS_TRANSACTION_MODE', 'Payment Action');
	define('MODULE_PAYMENT_PAYPALHSS_TRANSACTION_MODE_TEXT', '�ɤΤ褦�˷�Ѥ�Ԥ��ޤ�����<br /><strong>�ǥե����:Final Sales</strong>');
	define('MODULE_PAYMENT_PAYPALHSS_CURRENCY', '����̲�');
	define('MODULE_PAYMENT_PAYPALHSS_CURRENCY_TEXT', '�ɤ��̲ߤ�PayPal����ʸ���������ޤ���?<br />���:�⤷���ݡ��Ȥ���Ƥ��ʤ��̲ߤ�����������硢��ưŪ��US�ɥ���Ѵ�����ޤ���');
	define('MODULE_PAYMENT_PAYPALHSS_ZONE', '����ϰ�');
	define('MODULE_PAYMENT_PAYPALHSS_ZONE_TEXT', '�ϰ�����򤹤�ȡ������ϰ�ΤߤǤ��η����ˡ��ͭ���Ȥʤ�ޤ���');
	define('MODULE_PAYMENT_PAYPALHSS_PROCESSING_STATUS_ID', '��α��ʸ���֤�����');
	define('MODULE_PAYMENT_PAYPALHSS_PROCESSING_STATUS_ID_TEXT', '��Ѥ���λ���Ƥ��ʤ���ʸ�ˤϰʲ����ͤ����ꤷ�ޤ�<br />(\'Pending\' ��侩)');
	define('MODULE_PAYMENT_PAYPALHSS_ORDER_STATUS_ID', '��ʸ���֤�����');
	define('MODULE_PAYMENT_PAYPALHSS_ORDER_STATUS_ID_TEXT', '��Ѥ���λ������ʸ�ˤϰʲ����ͤ����ꤷ�ޤ�<br />(\'Processing\' ��侩)');
	define('MODULE_PAYMENT_PAYPALHSS_SORT_ORDER', 'ɽ����');
	define('MODULE_PAYMENT_PAYPALHSS_SORT_ORDER_TEXT', 'ɽ���硣�������ͤۤɾ��ɽ������ޤ���');
	define('MODULE_PAYMENT_PAYPALHSS_SERVER', 'Live or Sandbox');
	define('MODULE_PAYMENT_PAYPALHSS_SERVER_TEXT', '<strong>Live: </strong>  ���֤η�Ѥ����������˻���<br/><strong>Sandbox: </strong>��ȯ�ڤӥƥ���');

	define('MODULE_PAYMENT_PAYPALHSS_ENTRY_FIRST_NAME', 'First Name:');
	define('MODULE_PAYMENT_PAYPALHSS_ENTRY_LAST_NAME', 'Last Name:');
	define('MODULE_PAYMENT_PAYPALHSS_ENTRY_BUSINESS_NAME', 'Business Name:');
	define('MODULE_PAYMENT_PAYPALHSS_ENTRY_ADDRESS_NAME', 'Address Name:');
	define('MODULE_PAYMENT_PAYPALHSS_ENTRY_ADDRESS_STREET', 'Address Street:');
	define('MODULE_PAYMENT_PAYPALHSS_ENTRY_ADDRESS_CITY', 'Address City:');
	define('MODULE_PAYMENT_PAYPALHSS_ENTRY_ADDRESS_STATE', 'Address State:');
	define('MODULE_PAYMENT_PAYPALHSS_ENTRY_ADDRESS_ZIP', 'Address Zip:');
	define('MODULE_PAYMENT_PAYPALHSS_ENTRY_ADDRESS_COUNTRY', 'Address Country:');
	define('MODULE_PAYMENT_PAYPALHSS_ENTRY_EMAIL_ADDRESS', 'Payer Email:');
	define('MODULE_PAYMENT_PAYPALHSS_ENTRY_EBAY_ID', 'Ebay ID:');
	define('MODULE_PAYMENT_PAYPALHSS_ENTRY_PAYER_ID', 'Payer ID:');
	define('MODULE_PAYMENT_PAYPALHSS_ENTRY_PAYER_STATUS', 'Payer Status:');
	define('MODULE_PAYMENT_PAYPALHSS_ENTRY_ADDRESS_STATUS', 'Address Status:');
	
	define('MODULE_PAYMENT_PAYPALHSS_ENTRY_PAYMENT_TYPE', 'Payment Type:');
	define('MODULE_PAYMENT_PAYPALHSS_ENTRY_PAYMENT_STATUS', 'Payment Status:');
	define('MODULE_PAYMENT_PAYPALHSS_ENTRY_PENDING_REASON', 'Pending Reason:');
	define('MODULE_PAYMENT_PAYPALHSS_ENTRY_INVOICE', 'Invoice:');
	define('MODULE_PAYMENT_PAYPALHSS_ENTRY_PAYMENT_DATE', 'Payment Date:');
	define('MODULE_PAYMENT_PAYPALHSS_ENTRY_CURRENCY', 'Currency:');
	define('MODULE_PAYMENT_PAYPALHSS_ENTRY_GROSS_AMOUNT', 'Gross Amount:');
	define('MODULE_PAYMENT_PAYPALHSS_ENTRY_PAYMENT_FEE', 'Payment Fee:');
	define('MODULE_PAYMENT_PAYPALHSS_ENTRY_EXCHANGE_RATE', 'Exchange Rate:');
	define('MODULE_PAYMENT_PAYPALHSS_ENTRY_CART_ITEMS', 'Cart items:');
	define('MODULE_PAYMENT_PAYPALHSS_ENTRY_TXN_TYPE', 'Trans. Type:');
	define('MODULE_PAYMENT_PAYPALHSS_ENTRY_TXN_ID', 'Trans. ID:');
	define('MODULE_PAYMENT_PAYPALHSS_ENTRY_PARENT_TXN_ID', 'Parent Trans. ID:');
	define('MODULE_PAYMENT_PAYPALHSS_ENTRY_COMMENTS', 'System Comments: ');
	
	
	define('MODULE_PAYMENT_PAYPALHSS_PURCHASE_DESCRIPTION_TITLE', STORE_NAME . ' Purchase');
	define('MODULE_PAYMENT_PAYPALHSS_PURCHASE_DESCRIPTION_ITEMNUM', 'Store Receipt');
