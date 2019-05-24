<?php
	namespace Controllers;

	use \Tools\FlashMessage;

	class Access extends Controller {
		// formularz logowania
		public function logForm(){
      $this->view->setTemplate('Access/logForm');
		}
		// loguje do systemu
		public function login(){
			$model = $this->createModel('Access');

			if($this->getPost('login')  !== null && $this->getPost('password') !== null ) {
				if ($_SERVER['REQUEST_METHOD'] == 'POST') {
				    function post_captcha($user_response) {
				        $fields_string = '';
				        $fields = array(
				            'secret' => '6Lc7TaUUAAAAANnPJ8keFhS8zGG1y52gQ0AJoy_q',
				            'response' => $user_response
				        );
				        foreach($fields as $key=>$value)
				        $fields_string .= $key . '=' . $value . '&';
				        $fields_string = rtrim($fields_string, '&');

				        $ch = curl_init();
				        curl_setopt($ch, CURLOPT_URL, 'https://www.google.com/recaptcha/api/siteverify');
				        curl_setopt($ch, CURLOPT_POST, count($fields));
				        curl_setopt($ch, CURLOPT_POSTFIELDS, $fields_string);
				        curl_setopt($ch, CURLOPT_RETURNTRANSFER, True);

				        $result = curl_exec($ch);
				        curl_close($ch);

				        return json_decode($result, true);
				    }

				    // Call the function post_captcha
				    $res = post_captcha($_POST['g-recaptcha-response']);

				    if (!$res['success']) {
				        // What happens when the CAPTCHA wasn't checked
				        echo '<p>Please go back and make sure you check the security CAPTCHA box.</p><br>';
				    } else {
							if($model->login($this->getPost('login'),$this->getPost('password')))
								$this->redirect('');

				    }




			}


			\Tools\FlashMessage::addWarning('Login lub hasło jest nie poprawne');
			$this->redirect('formularz-logowania/');

		}
}

		public function editPassword(){
			$model = $this->createModel('Access');
			$loginModel = $this->createModel('user');

			if($this->getPost('password') !== null) {
				$id = $_SESSION['id'];

				$login = $loginModel->getLogin($id);

				if($model->editPassword($id, md5($login.md5($this->getPost('password')))))
					$this->redirect('');
					\Tools\FlashMessage::addMessage(1, 'password');
			}
			$this->redirect('');

		}
		// wylogowywuje z systemu
		public function logout(){
			$this->createModel('Access')->logout();
			$this->redirect('formularz-logowania/');
		}

		public function showOne($id) {
      $this->view->setTemplate('Access/showOne');
      $this->view->addCSSSet(array());
      //$this->view->addJSSet(array('delete-confirm', 'Access'));
      $model = $this->createModel('Access');
      $result['data'] = $model->selectOneById($id);
      return $result;
    }

		public function ajaxEditForm($id) {
 if(isset($id)){
				 $this->view->setTemplate('ajaxModals/editAccess');
				 $model = $this->createModel('Access');
				 $result['data'] = $model->selectOneById($id);
				 if(count($result['data']) === 0)
					 throw new \Exceptions\Application();
				 return $result;
			 } else {
				 throw new \Exceptions\EmptyValue();
			 }
 }

 public function update() {
  $model = $this->createModel('Access');
  $counter = $model->update($this->getPost('id'),$this->getPost('login'),$this->getPost('name'),$this->getPost('surname'),$this->getPost('password'));
  \Tools\FlashMessage::addMessage($counter, 'update');
  $this->redirect('');
 }

	}
