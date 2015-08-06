<?php

class BootstrapMemberLoginForm extends MemberLoginForm {


	public function __construct($controller = NULL, $name = NULL, $fields = NULL, $actions = NULL, $checkCurrentUser = true) {
		if (!$controller) {
			$controller = Controller::curr();
		}
		if (!$name) {
			$name = "LoginForm";
		}
		parent::__construct($controller, $name, $fields, $actions, $checkCurrentUser);
		$this->Fields()->bootstrapify();
		$this->Actions()->bootstrapify();
		$this->setTemplate("BootstrapForm");

		$this->invokeWithExtensions('updateBoostrapMemberLoginForm', $this);
	}

}