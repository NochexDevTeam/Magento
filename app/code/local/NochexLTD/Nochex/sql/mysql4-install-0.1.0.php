<?php

/**
 * @title	   Nochex Checkout Module
 * @package    NochexLTD_Nochex
 * @copyright  Copyright (c) 2011 Nochex LTD. (http://www.nochex.com)
 * @author 	   Nochex 
 **/


$installer = $this;
/* @var $installer NochexLTD_Nochex_Model_Mysql4_Setup */

$setup = new Mage_Sales_Model_Mysql4_Setup('core_setup');

$installer->startSetup();

$installer->run("

-- DROP TABLE IF EXISTS {$this->getTable('nochex')};
CREATE TABLE {$this->getTable('nochex')} (
  `nochex_id` int(11) unsigned NOT NULL auto_increment,
  `order_id` varchar(255)  NULL,
  `nochex_mode` varchar(255)  NULL,
  `transaction_id` varchar(30)  NULL,
  `transaction_date` varchar(100)  NULL,
  `to_email` varchar(255)  NULL,
  `from_email` varchar(255)  NULL,
  `custom` varchar(255)  NULL,
  `amount` decimal(9,2)  NULL,
  `security_key` varchar(255)  NULL,
  `status` varchar(15)  NULL,
  `nochex_response` varchar(255)  NULL,
  PRIMARY KEY (`nochex_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

    ");


$installer->endSetup(); 


