<?php
	namespace Controllers;

	use \Tools\FlashMessage;

	class Reg extends Controller {
		// formularz rejestracji
		public function regForm(){
      $this->view->setTemplate('Access/regForm');
		}

    public function register(){
			$model = $this->createModel('Reg');
			if($this->getPost('login')  !== null && $this->getPost('name') !== null && $this->getPost('surname') !== null && $this->getPost('password') !== null) {
				//d($haslo);
				if(preg_match('/^(?=.+[a-z])(?=.+[A-Z])(?=.+[!@#$%^&*()_+|])(?=.+[0-9])[a-zA-Z0-9!@#$%^&*()_+|]{8,30}$/D', $this->getPost('password'))){
				//if(preg_match ("/^(W+)(d+)([A-Z]+)([a-z]+){8,30}$/", $this->getPost('password'))){
				if($model->register($this->getPost('login'),$this->getPost('name'),$this->getPost('surname'),$this->getPost('password')))
					$this->redirect('');
				\Tools\FlashMessage::addMessage($model, 'Zarejestrowany');

				//if($model->register($this->getPost('login'),$this->getPost('name'),$this->getPost('surname'),$this->getPost('password'))){
				//\Tools\FlashMessage::addMessage($counter, 'Zarejestrowany');
					//$this->redirect('');
//([a-zA-ZąęćżźńłóśĄĆĘŁŃÓŚŹŻ]+)
			//}
			}
			else{
				\Tools\FlashMessage::addWarning('W haśle wymagane jest 8-30 znaków, przynajmniej jedną wielką literę, liczbę oraz symbol.');
				$this->redirect('formularz-rejestracji/');
			}
			}
			else{
			\Tools\FlashMessage::addWarning('Niepoprawny login i hasło');
			$this->redirect('formularz-rejestracji/');
		}
		//}
}


/*public function register(){
	$model = $this->createModel('Reg');
	if($this->getPost('login')  !== null && $this->getPost('password') !== null && $this->getPost('name') !== null && $this->getPost('surname') !== null) {
		if($model->register($this->getPost('login'),$this->getPost('password'),$this->getPost('name'),$this->getPost('surname')))
			$this->redirect('');
		\Tools\FlashMessage::addMessage($model, 'Zarejestrowany');
	}
	$this->redirect('formularz-rejestracji/');
}*/


		function haslo($password, $dlugosc){
		$password= md5($password);
		$hasło = substr($password,0,$dlugosc);
		echo $potem;
		}



}
