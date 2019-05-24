<?php
	namespace Models;


	/**
	 * Obsługa procesu logowania
	 */
	class Access extends \Models\PDODatabase {
		function __construct() {
			$this->table = 'user';
			parent::__construct();
		}
		/**
		 * logowanie do systemu
		 */
		public function login($login, $password) {
			//pobranie z bazy informacji o użytkowniku posiadającym login
 		  	$data = array();
			$this->testConnection();
			$table = $this->getTableName();
			$this->testTable($table);
			try	{
					$query = 'SELECT * FROM ' . $table . ' WHERE login = :login AND password = :password';

					$stmt = $this->pdo->prepare($query);
					$stmt->bindValue(':login', $login, \PDO::PARAM_STR);
					$stmt->bindValue(':password', md5($password), \PDO::PARAM_STR);
					if($stmt->execute())
							 $data = $stmt->fetchAll();
					$stmt->closeCursor();
			}
			catch(\PDOException $e)	{
					throw new \Exceptions\Query($e);
			}
			$user = $data;
 			if(isset($user[0])){
				//zainicjalizowanie sesji
				\Tools\Access::login($login, $user[0]['surname'].' '.$user[0]['name'] , $user[0]['ID']);
 	        	return true;
 			}
			return false;
		}
		/**
		 * Sprawdza zgodność hasła i jego powtórzenia
		 */
		public function checkPassword($password, $password2) {
			return $password === $password2;
		}
		/**
		 * Wylogowanie użytkownika z systemu
		 */
		 public function editPassword($id, $password) {

			$this->isEmpty([$id,$password]);
			$data = array();

			$model = new \Models\user();
			$model->updatePassword($id, $password);
		}



		public function logout(){
			\Tools\Access::logout();
		}

		public function update($id, $login, $name, $surname,$password) {
			$counter = 0;
			$this->testConnection();
			$this->testTable($this->table);
			$this->isEmpty([$id, $login, $name, $surname,$password]);
			try	{
					$query = 'UPDATE `'.$this->table.'`
										SET
										name = :name,
										surname = :surname,
										password = :password';
					$query .= ' WHERE `id`= :id';
					$stmt = $this->pdo->prepare($query);
					$stmt->bindValue(':login', $login, PDO::PARAM_STR);
					$stmt->bindValue(':name', $name, PDO::PARAM_STR);
					$stmt->bindValue(':surname', $surname, PDO::PARAM_STR);
					$stmt->bindValue(':password', md5($password), PDO::PARAM_STR);
					$stmt->bindValue(':id', $id, PDO::PARAM_INT);
					if($stmt->execute())
					  $counter += $stmt->rowCount();
					$stmt->closeCursor();
			}
			catch(\PDOException $e)	{
					throw new \Exceptions\Query($e);
			}
			return $counter;
		}
	}
