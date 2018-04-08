<?php

//pdo jondes ver 1:3
class dbConfig
{
	private $dbDriver = "mysql"; 	//database
	private $host = "localhost"; 	//namaHost
	private $username = "root"; 	//username
	private $password = ""; 		//password
	private $database = "arkademy_seleksi";		//namaDatabaseNya
    protected $connection;
    
	public function __construct(){
		try{
		$this->connection = new PDO($this->dbDriver.':host='.$this->host.';dbname='.$this->database,$this->username,$this->password);
		$this->connection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    }
		catch (PDOException $e){
        	die("Koneksi error: " . $e->getMessage());
    	}
	}
}
class dbmethod extends dbConfig
{
    public function __construct(){
			parent::__construct();
		}

    public function getpost(){
			$query = "SELECT p.id,p.title,p.content,u.username from posts p JOIN users u on p.createdBy = u.id";
			try{
				$result = $this->connection->query($query);
			}
			catch (PDOException $e){
        	die("Koneksi error: " . $e->getMessage());
    	}
			$rows = [];
			while ($row = $result->fetch(PDO::FETCH_ASSOC)) {
				$rows[] = $row;
			}
			return $rows;
		}
		
    public function getcommentbypost($id){
			$query = "SELECT c.comment FROM comments c JOIN posts p ON c.postId = p.id where p.id =".$id;
			try{
				$result = $this->connection->query($query);
			}
			catch (PDOException $e){
        	die("Koneksi error: " . $e->getMessage());
    	}
			$rows = [];
			while ($row = $result->fetch(PDO::FETCH_ASSOC)) {
				$rows[] = $row;
			}
			return $rows;
		}

		public function getpostcommentbyid($id){
			$query = "SELECT p.id,p.title,p.content,u.username from posts p JOIN users u on p.createdBy = u.id where p.id =".$id;
			try{
				$result = $this->connection->query($query);
			}
			catch (PDOException $e){
        	die("Koneksi error: " . $e->getMessage());
    	}
			$rows = [];
			while ($row = $result->fetch(PDO::FETCH_ASSOC)) {
				$rows[] = $row;
			}

			foreach ($rows as $value) {
    		$posts[] = [
					'username' => $value['username'],
					'title' => $value['title'],
					'content' => $value['content'],
					'comment' => $this->getcommentbypost($id)
				];
			}

			return $posts;
		}
		
		public function getpostcomment(){
			$getposts = $this->getpost();
			// var_dump($this->getcommentbypost(1));
			$posts = [];
			foreach ($getposts as $value) {
    		$posts[] = [
					'username' => $value['username'],
					'title' => $value['title'],
					'content' => $value['content'],
					'comment' => $this->getcommentbypost($value['id'])
				];
			}

			return $posts;
		}

		public function insertcomment($comment,$postid){
			// echo $comment;
			// echo $postid;die;
			$query = "INSERT INTO comments VALUES(:id,:comment,:postId)"; //query
			$result = $this->connection->prepare($query);
			try{
				$data = [
					':id'=>'',
					':comment' => $comment,
					':postId'=>$postid
				];
				$result->execute($data);
			}
			catch (PDOException $e){
						die("Koneksi error: " . $e->getMessage());
				}
		}
}
?>