<?php 
	
	class projeto	{
		private $idProjeto;
		private $nome;
		private $latitude;
		private $longitude;
		private $userId;
		private $conn;
		private $tableName = "projeto";

		function setId($idProjeto) { $this->idProjeto = $idProjeto; }
		function getId() { return $this->idProjeto; }
		function setName($nome) { $this->nome = $nome; }
		function getName() { return $this->nome; }
		function setLat($latitude) { $this->latitude = $latitude; }
		function getLat() { return $this->latitude; }
		function setLng($longitude) { $this->longitude = $longitude; }
		function getLng() { return $this->longitude; }
		function setUserId($userId) { $this->userId = $userId; }
		function getUserId() { return $this->userId; }

		public function __construct() {
			require_once('db/DbConnect.php');
			$conn = new DbConnect;
			$this->conn = $conn->connect();
		}

		public function getProjetosBlankLatLng() {
			$sql = "SELECT * FROM $this->tableName WHERE latitude IS NULL AND longitude IS NULL";
			$stmt = $this->conn->prepare($sql);
			$stmt->execute();
			return $stmt->fetchAll(PDO::FETCH_ASSOC);
		}

		public function getAllProjetos() {
			$sql = "SELECT * FROM $this->tableName";
			$stmt = $this->conn->prepare($sql);
			$stmt->execute();
			return $stmt->fetchAll(PDO::FETCH_ASSOC);
		}

		public function updateProjetosWithLatLng() {
			$sql = "UPDATE $this->tableName SET latitude = :latitude, longitude = :longitude WHERE idProjeto = :idProjeto";
			$stmt = $this->conn->prepare($sql);
			$stmt->bindParam(':latitude', $this->latitude);
			$stmt->bindParam(':longitude', $this->longitude);
			$stmt->bindParam(':idProjeto', $this->idProjeto);

			if($stmt->execute()) {
				return true;
			} else {
				return false;
			}
		}
	}

?>