<?php

require_once(realpath(dirname(__FILE__)) . "/payssion.php");
class ControllerPaymentPayssionBancomer extends ControllerPaymentPayssion {
	protected $pm_id = 'bancomer_mx';
}