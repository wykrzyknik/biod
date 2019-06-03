<?php
namespace Controllers;

  use \Tools\FlashMessage;
class strona extends GlobalController {
		// formularz logowania
		public function showAll(){
      $this->view->setTemplate('Access/strona');
		}
}
