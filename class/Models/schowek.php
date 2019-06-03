<?php
	namespace Models;
	use \PDO;

  class schowek extends PDODatabase {
		public function __construct() {
      	$this->table = 'schowek';
				parent::__construct();
    }


		public function insert($login,$password,$stronawww) {
			$id = -1;
			$this->testConnection();
			$this->testTable($this->table);
      if(!isset($login, $password, $stronawww))
					throw new AppException(ErrorName::$empty);

			try	{
					$query = 'INSERT INTO `'.$this->table.'` (
						`login`,
            `password`,
            `stronawww`)';
					$query .= ' VALUES (:login,
                            :password,
                            :stronawww)';
					$stmt = $this->pdo->prepare($query);

          $stmt -> bindValue(':login', $login, PDO::PARAM_STR);
          $stmt -> bindValue(':password', $password, PDO::PARAM_STR);
          $stmt -> bindValue(':stronawww', $stronawww, PDO::PARAM_STR);
					if($stmt->execute())
						$id = $this->pdo->lastInsertId();
					$stmt->closeCursor();
			}
			catch(\PDOException $e)	{
					throw new \Exceptions\Query($e);
			}
			return $id;
		}
		public function update($login,$password,$stronawww) {
			$counter = 0;
			$this->testConnection();
			$this->testTable($this->table);
      if(!isset($login, $password, $stronawww))
          throw new AppException(ErrorName::$empty);
			try	{
					$query = 'UPDATE `'.$this->table.'`
										SET
										login = :login,
                    password = :password
                    stronawww = :stronawww';
					$query .= ' WHERE `id`= :id';
					$stmt = $this->pdo->prepare($query);
					$stmt->bindValue(':login', $login, PDO::PARAM_STR);
          $stmt->bindValue(':password', $password, PDO::PARAM_STR);
          $stmt->bindValue(':stronawww', $stronawww, PDO::PARAM_STR);
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
