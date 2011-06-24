<?php
/**
 * @package languageDefines
 * @copyright Copyright 2011 OnTechnology Pty Ltd
 * @license GNU Public License V2.0
 */

  define('MODULE_PAYMENT_PAYPALHSS_TEXT_ADMIN_TITLE', 'Pasarela integral de PayPal');
  define('MODULE_PAYMENT_PAYPALHSS_TEXT_CATALOG_TITLE', 'PayPal');
	if (IS_ADMIN_FLAG === true) {
	  define('MODULE_PAYMENT_PAYPALHSS_TEXT_DESCRIPTION', '<strong>Pasarela integral de PayPal</strong> <br/> <a href="http://www.paypal.com/" target="_blank">Administrar cuenta PayPal.</a><br /><br /><font color="green"> Instrucciones de configuraci�n: </font> <br/> <a href="http://www.paypal.com/" target="_blank"> Abra una cuenta PayPal: haga clic aqu�. </a> <br/> <ul>'. (defined('MODULE_PAYMENT_PAYPALHSS_STATUS') ? '' : '<li>... y haga clic en "Instalar" para activar el soporte de Pasarela integral de PayPal... y "modificar" para indicar a osCommerce Cart su configuraci�n de PayPal. </li>') '. </ul><font color="green"><hr /><strong>Requisitos:</strong></font><br /><hr />*<strong>Cuenta PayPal</strong> (<a href="http://www.paypal.com" target="_blank">haga clic para abrir la cuenta</a>)<br />*<strong>* Se utiliza el <strong>puerto 80</strong> para la comunicaci�n bidireccional con la pasarela, por lo que debe estar abierto en el router o firewall de su servidor <br/> * La <strong> configuraci�n </strong> debe ser la descrita anteriormente.');
	
	} else {
	  define('MODULE_PAYMENT_PAYPALHSS_TEXT_DESCRIPTION', '<strong>Pasarela integral de PayPal</strong>');
	}

  define('MODULE_PAYMENT_PAYPALHSS_SANDBOXACTIVE', 'entorno de pruebas activo');
  define('MODULE_PAYMENT_PAYPALHSS_CHECKOUT_TITLE', 'Pagar con tarjeta');
  define('MODULE_PAYMENT_PAYPALHSS_STATUS', 'Activar m�dulo de PayPal');
  define('MODULE_PAYMENT_PAYPALHSS_STATUS_TEXT', '�Desea aceptar pagos con PayPal?');
  define('MODULE_PAYMENT_PAYPALHSS_API_USERNAME', 'Nombre de usuario de API de PayPal');
  define('MODULE_PAYMENT_PAYPALHSS_API_USERNAME_TEXT', 'Puede ver su nombre de usuario de API de PayPal en Perfil> Acceso de API> Solicitar credenciales de API en su cuenta PayPal. Elija la opci�n Solicitar firma de API. <br/> NOTA: esto debe coincidir <strong> EXACTAMENTE</strong> con el valor de nombre de usuario de API.');
  define('MODULE_PAYMENT_PAYPALHSS_API_PASSWORD', 'Contrase�a de API de PayPal');
  define('MODULE_PAYMENT_PAYPALHSS_API_PASSWORD_TEXT', 'Puede ver su contrase�a de API de PayPal en Perfil> Acceso de API> Solicitar credenciales de API en su cuenta PayPal. Elija la opci�n Solicitar firma de API. <br/> NOTA: esto debe coincidir <strong> EXACTAMENTE</strong> con el valor de contrase�a de API.');
  define('MODULE_PAYMENT_PAYPALHSS_API_SIGNATURE', 'Firma de API de PayPal');
  define('MODULE_PAYMENT_PAYPALHSS_API_SIGNATURE_TEXT', 'Puede ver su firma de API de PayPal en Perfil> Acceso de API> Solicitar credenciales de API en su cuenta PayPal. Elija la opci�n Solicitar firma de API. <br/> NOTA: esto debe coincidir <strong> EXACTAMENTE</strong> con el valor de firma de API.');
  define('MODULE_PAYMENT_PAYPALHSS_TRANSACTION_MODE', 'Acci�n de pago');
  define('MODULE_PAYMENT_PAYPALHSS_TRANSACTION_MODE_TEXT', '�C�mo desea obtener el pago? <br/> <strong> Valor predeterminado: venta final </strong>');
  define('MODULE_PAYMENT_PAYPALHSS_CURRENCY', 'Divisa de transacci�n');
  define('MODULE_PAYMENT_PAYPALHSS_CURRENCY_TEXT', '�En qu� divisa deber�a enviarse el pedido a PayPal? <br/> NOTA: si se env�a a PayPal una divisa no admitida, se convertir� autom�ticamente a USD.');
  define('MODULE_PAYMENT_PAYPALHSS_ZONE', 'Zona de pago');
  define('MODULE_PAYMENT_PAYPALHSS_ZONE_TEXT', 'Si se selecciona una zona, active esta forma de pago solo para esa zona.');
  define('MODULE_PAYMENT_PAYPALHSS_PROCESSING_STATUS_ID', 'Configurar estado de notificaciones pendientes');
  define('MODULE_PAYMENT_PAYPALHSS_PROCESSING_STATUS_ID_TEXT', 'Configure el estado de pedidos hechos con este m�dulo de pago que todav�a no se han completado con el valor <br/> (\'Pending \' recomendado)');
  define('MODULE_PAYMENT_PAYPALHSS_ORDER_STATUS_ID', 'Configurar estado de pedidos');
  define('MODULE_PAYMENT_PAYPALHSS_ORDER_STATUS_ID_TEXT', 'Configure el estado de pedidos hechos con este m�dulo de pago cuyo pago se ha completado con el valor <br/> (\'Processing \' recomendado)');
  define('MODULE_PAYMENT_PAYPALHSS_SORT_ORDER', 'Orden de las formas de pago.');
  define('MODULE_PAYMENT_PAYPALHSS_SORT_ORDER_TEXT', 'Orden de las formas de pago. El m�s bajo se mostrar� en primer lugar.');
  define('MODULE_PAYMENT_PAYPALHSS_SERVER', 'En producci�n o en entorno de pruebas');
  define('MODULE_PAYMENT_PAYPALHSS_SERVER_TEXT', '<strong> En producci�n: </strong> utilizado para procesar transacciones reales<br/> Entorno de pruebas <strong>: </strong> para programadores y pruebas');
  define('MODULE_PAYMENT_PAYPALHSS_ENTRY_FIRST_NAME', 'Nombre:');
  define('MODULE_PAYMENT_PAYPALHSS_ENTRY_LAST_NAME', 'Apellidos:');
  define('MODULE_PAYMENT_PAYPALHSS_ENTRY_BUSINESS_NAME', 'Nombre de la empresa:');
  define('MODULE_PAYMENT_PAYPALHSS_ENTRY_ADDRESS_NAME', 'Nombre de direcci�n:');
  define('MODULE_PAYMENT_PAYPALHSS_ENTRY_ADDRESS_STREET', 'Calle:');
  define('MODULE_PAYMENT_PAYPALHSS_ENTRY_ADDRESS_CITY', 'Ciudad:');
  define('MODULE_PAYMENT_PAYPALHSS_ENTRY_ADDRESS_STATE', 'Provincia:');
  define('MODULE_PAYMENT_PAYPALHSS_ENTRY_ADDRESS_ZIP', 'C�digo postal:');
  define('MODULE_PAYMENT_PAYPALHSS_ENTRY_ADDRESS_COUNTRY', 'Pa�s:');
  define('MODULE_PAYMENT_PAYPALHSS_ENTRY_EMAIL_ADDRESS', 'Correo electr�nico del pagador:');
  define('MODULE_PAYMENT_PAYPALHSS_ENTRY_EBAY_ID', 'Seud�nimo de eBay:');
  define('MODULE_PAYMENT_PAYPALHSS_ENTRY_PAYER_ID', 'Id. del pagador:');
  define('MODULE_PAYMENT_PAYPALHSS_ENTRY_PAYER_STATUS', 'Estado del pagador:');
  define('MODULE_PAYMENT_PAYPALHSS_ENTRY_ADDRESS_STATUS', 'Estado de la direcci�n:');
  define('MODULE_PAYMENT_PAYPALHSS_ENTRY_PAYMENT_TYPE', 'Tipo de pago:');
  define('MODULE_PAYMENT_PAYPALHSS_ENTRY_PAYMENT_STATUS', 'Estado del pago:');
  define('MODULE_PAYMENT_PAYPALHSS_ENTRY_PENDING_REASON', 'Raz�n pendiente:');
  define('MODULE_PAYMENT_PAYPALHSS_ENTRY_INVOICE', 'Factura:');
  define('MODULE_PAYMENT_PAYPALHSS_ENTRY_PAYMENT_DATE', 'Fecha del pago:');
  define('MODULE_PAYMENT_PAYPALHSS_ENTRY_CURRENCY', 'Divisa:');
  define('MODULE_PAYMENT_PAYPALHSS_ENTRY_GROSS_AMOUNT', 'Importe bruto:');
  define('MODULE_PAYMENT_PAYPALHSS_ENTRY_PAYMENT_FEE', 'Tarifa del pago:');
  define('MODULE_PAYMENT_PAYPALHSS_ENTRY_EXCHANGE_RATE', 'Tipo de cambio:');
  define('MODULE_PAYMENT_PAYPALHSS_ENTRY_CART_ITEMS', 'Art�culos del carro de la compra:');
  define('MODULE_PAYMENT_PAYPALHSS_ENTRY_TXN_TYPE', 'Tipo transacci�n:');
  define('MODULE_PAYMENT_PAYPALHSS_ENTRY_TXN_ID', 'Id. transacci�n:');
  define('MODULE_PAYMENT_PAYPALHSS_ENTRY_PARENT_TXN_ID', 'Id. de transacci�n principal:');
  define('MODULE_PAYMENT_PAYPALHSS_ENTRY_COMMENTS', 'Comentarios de sistema:');
  define('MODULE_PAYMENT_PAYPALHSS_PURCHASE_DESCRIPTION_TITLE', STORE_NAME. 'Compra');
  define('MODULE_PAYMENT_PAYPALHSS_PURCHASE_DESCRIPTION_ITEMNUM', 'Recibo de tienda');
