<?php
/**
 * @package languageDefines
 * @copyright Copyright 2011 OnTechnology Pty Ltd
 * @license GNU Public License V2.0
 */

  define('MODULE_PAYMENT_PAYPALHSS_TEXT_ADMIN_TITLE', 'PayPal Int�gral Evolution');
  define('MODULE_PAYMENT_PAYPALHSS_TEXT_CATALOG_TITLE', 'PayPal');
  if (IS_ADMIN_FLAG === true) {
  define('MODULE_PAYMENT_PAYPALHSS_TEXT_DESCRIPTION', '<strong>PayPal Int�gral Evolution</strong> <br /><a href="http://www.paypal.com/" target="_blank">Administrez votre compte PayPal.</a><br /><br /><font color="green">Comment configurer?</font><br /> <a href="http://www.paypal.com/" target="_blank">Cliquez ici pour cr�er un compte PayPal.</a><br /> <ul>' . (defined('MODULE_PAYMENT_PAYPALHSS_STATUS') ? '' : '<li>... and click "install" above to enable PayPal Pro Hosted support... and "edit" to tell osCommerce your PayPal settings.</li>') . '</ul><font color="green"><hr /><strong>Pr�-requis:</strong></font><br /><hr />*<strong>PayPal Account</strong> (<a href="http://www.paypal.com" target="_blank">click to signup</a>)<br />** Le port 80  utilis� pour la communication bidirectionnelle avec la passerelle  doit si �tre ouverte sur votre routeur/pare-feu <br />*Les param�tres doivent �tre activ�s comme ci-dessus.' );

 } else {
    define('MODULE_PAYMENT_PAYPALHSS_TEXT_DESCRIPTION', '<strong>PayPal</strong>');
  }

  define('MODULE_PAYMENT_PAYPALHSS_SANDBOXACTIVE', 'Sandbox active');
  define('MODULE_PAYMENT_PAYPALHSS_CHECKOUT_TITLE', 'Payer par carte');
  define('MODULE_PAYMENT_PAYPALHSS_STATUS', 'Activer le module Paypal');
  define('MODULE_PAYMENT_PAYPALHSS_STATUS_TEXT', 'Voulez-vous accepter des paiements PayPal ?');
  define('MODULE_PAYMENT_PAYPALHSS_API_USERNAME', 'Nom d''utilisateur API PayPal');
  define('MODULE_PAYMENT_PAYPALHSS_API_USERNAME_TEXT', 'Vous trouverez votre nom d''utilisateur API dans vos Pr�f�rences > Acc�s API > Demande des informations d''authentification API. Affichez(?) une signature API.<br />Remarque: Celui-ci doit correspondre<strong>EXACTEMENT </strong>� la valeur de votre nom d''utilisateur API.');
  define('MODULE_PAYMENT_PAYPALHSS_API_PASSWORD', 'Mot de passe API PayPal');
  define('MODULE_PAYMENT_PAYPALHSS_API_PASSWORD_TEXT', 'Vous trouverez votre mot de passe API dans vos Pr�f�rences > Acc�s API>Demande des informations d''authentification API. Affichez(?) une signature API.<br />Remarque: Celui-ci doit correspondre<strong>EXACTEMENT </strong>� la valeur de votre mot de passe API.');
  define('MODULE_PAYMENT_PAYPALHSS_API_SIGNATURE', 'Signature API');
  define('MODULE_PAYMENT_PAYPALHSS_API_SIGNATURE_TEXT', 'Vous trouverez votre signature API dans vos Pr�f�rences> Acces API>Demande des informations d''authentification API. Affichez(?) une signature API.<br />Remarque: Celui-ci doit correspondre<strong>EXACTEMENT </strong>� la valeur de votre signature API.');
  define('MODULE_PAYMENT_PAYPALHSS_TRANSACTION_MODE', 'Action de paiement');
  define('MODULE_PAYMENT_PAYPALHSS_TRANSACTION_MODE_TEXT', 'Comment voulez vous recevoir vos paiements ?D�faut:Sale</strong>');
  define('MODULE_PAYMENT_PAYPALHSS_CURRENCY', 'Devise de transaction');
  define('MODULE_PAYMENT_PAYPALHSS_CURRENCY_TEXT', 'En quelle devise votre paiement doit-il �tre effectu� ? Remarque: si vous utilisez une autre devise, elle sera convertie automatiquement en USD.');
  define('MODULE_PAYMENT_PAYPALHSS_ZONE', 'Zone de paiement');
  define('MODULE_PAYMENT_PAYPALHSS_ZONE_TEXT', 'Si vous selectionnez une zone, activez uniquement la methode de paiement pour cette zone.');
  define('MODULE_PAYMENT_PAYPALHSS_PROCESSING_STATUS_ID', 'Configuration des notifications pour les paiements en attente.');
  define('MODULE_PAYMENT_PAYPALHSS_PROCESSING_STATUS_ID_TEXT', 'Configuration du statut des commandes effectu�es avec ce mode de paiement, si elles ne sont pas encore termin�es.');
  define('MODULE_PAYMENT_PAYPALHSS_ORDER_STATUS_ID', 'Configuration du statut des commandes');
  define('MODULE_PAYMENT_PAYPALHSS_ORDER_STATUS_ID_TEXT', 'Configuration du statut des commandes effectu�es avec ce mode de paiement, apr�s la cl�ture de la transaction.(\'Processing\' recommended)');
  define('MODULE_PAYMENT_PAYPALHSS_SORT_ORDER', 'Ordre d''affichage');
  define('MODULE_PAYMENT_PAYPALHSS_SORT_ORDER_TEXT', 'Ordre d''affichage types de paiement. Le plus bas est affich� en premier.');
  define('MODULE_PAYMENT_PAYPALHSS_SERVER', 'Live ou Sandbox');
  define('MODULE_PAYMENT_PAYPALHSS_SERVER_TEXT', '<strong>Live: </strong>Testez les transactions live<br/><strong>Sandbox: </strong>Pour d�veloppeurs et testing');
  define('MODULE_PAYMENT_PAYPALHSS_TEXT_ADMIN_TITLE', 'PayPal Website Payments Pro - Hosted');
  define('MODULE_PAYMENT_PAYPALHSS_TEXT_CATALOG_TITLE', 'PayPal');
  define('MODULE_PAYMENT_PAYPALHSS_TEXT_DESCRIPTION', '<strong>PayPal Website Payments Pro - Hosted</strong> <br /><a href="http://www.paypal.com/" target="_blank">G�rez votre compte PayPal</a><br /><br /><font color="green">Instructions de configuration:</font><br /> <a href="http://www.paypal.com/" target="_blank">Cliquez ici pour ouvrir un compte PayPal .</a><br /> <ul>' . (defined('MODULE_PAYMENT_PAYPALHSS_STATUS') ? '' : '<li>... et cliquez "installer" pour activer PayPal Pro Hosted ... et "configurer" pour indiquer vos donn�es PayPal.</li>') . '</ul><font color="green"><hr /><strong>Requis:</strong></font><br /><hr />*<strong>Compte PayPal</strong> (<a href="http://www.paypal.com" target="_blank">Cliquez ici pour vous inscrire</a>)<br />*<strong>*<strong>Porte 80</strong>utilis�e pour une communication bidirectionelle, doit �tre ouverte sur votre pare-feu/router<br />*<strong>Param�tres</strong> Doit �tre configur�e comme d�crit ci-dessus.');
  define('MODULE_PAYMENT_PAYPALHSS_ENTRY_FIRST_NAME', 'Pr�nom');
  define('MODULE_PAYMENT_PAYPALHSS_ENTRY_LAST_NAME', 'Nom');
  define('MODULE_PAYMENT_PAYPALHSS_ENTRY_BUSINESS_NAME', 'Raison sociale');
  define('MODULE_PAYMENT_PAYPALHSS_ENTRY_ADDRESS_NAME', 'Adresse');
  define('MODULE_PAYMENT_PAYPALHSS_ENTRY_ADDRESS_STREET', 'Rue');
  define('MODULE_PAYMENT_PAYPALHSS_ENTRY_ADDRESS_CITY', 'Ville');
  define('MODULE_PAYMENT_PAYPALHSS_ENTRY_ADDRESS_STATE', 'Province');
  define('MODULE_PAYMENT_PAYPALHSS_ENTRY_ADDRESS_ZIP', 'Code Postal');
  define('MODULE_PAYMENT_PAYPALHSS_ENTRY_ADDRESS_COUNTRY', 'Pays');
  define('MODULE_PAYMENT_PAYPALHSS_ENTRY_EMAIL_ADDRESS', 'Email du payeur');
  define('MODULE_PAYMENT_PAYPALHSS_ENTRY_EBAY_ID', 'Pseudo eBay');
  define('MODULE_PAYMENT_PAYPALHSS_ENTRY_PAYER_ID', 'Num�ro de payeur');
  define('MODULE_PAYMENT_PAYPALHSS_ENTRY_PAYER_STATUS', 'Statut du payeur');
  define('MODULE_PAYMENT_PAYPALHSS_ENTRY_ADDRESS_STATUS', 'Statut de l''adresse');
  define('MODULE_PAYMENT_PAYPALHSS_ENTRY_PAYMENT_TYPE', 'Type de paiement');
  define('MODULE_PAYMENT_PAYPALHSS_ENTRY_PAYMENT_STATUS', 'Etat du paiement');
  define('MODULE_PAYMENT_PAYPALHSS_ENTRY_PENDING_REASON', 'Motif de l''�tat En attente');
  define('MODULE_PAYMENT_PAYPALHSS_ENTRY_INVOICE', 'Facture');
  define('MODULE_PAYMENT_PAYPALHSS_ENTRY_PAYMENT_DATE', 'Date de paiement');
  define('MODULE_PAYMENT_PAYPALHSS_ENTRY_CURRENCY', 'Devise');
  define('MODULE_PAYMENT_PAYPALHSS_ENTRY_GROSS_AMOUNT', 'Montant brut');
  define('MODULE_PAYMENT_PAYPALHSS_ENTRY_PAYMENT_FEE', 'Frais de paiement');
  define('MODULE_PAYMENT_PAYPALHSS_ENTRY_EXCHANGE_RATE', 'Taux de change');
  define('MODULE_PAYMENT_PAYPALHSS_ENTRY_CART_ITEMS', 'El�ments du panier');
  define('MODULE_PAYMENT_PAYPALHSS_ENTRY_TXN_TYPE', 'Type de transaction');
  define('MODULE_PAYMENT_PAYPALHSS_ENTRY_TXN_ID', 'Num�ro de transaction');
  define('MODULE_PAYMENT_PAYPALHSS_ENTRY_PARENT_TXN_ID', 'Num�ro de transaction parent');
  define('MODULE_PAYMENT_PAYPALHSS_ENTRY_COMMENTS', 'Remarques syst�me');
  define('MODULE_PAYMENT_PAYPALHSS_PURCHASE_DESCRIPTION_TITLE', STORE_NAME. ' Achat');
  define('MODULE_PAYMENT_PAYPALHSS_PURCHASE_DESCRIPTION_ITEMNUM', 'Re�u');
