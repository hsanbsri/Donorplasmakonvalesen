<?php 
	class tabelpasien {

		private $mysqli;

		function __construct($conn) {
			$this->mysqli = $conn;
		}

		public function tampil($id = null) {
			$db = $this->mysqli->conn;
			$sql = "SELECT * FROM tb_pasien";
			if($id != null) {
				$sql .= " WHERE id_pasien = $id"  ;
			}
			$query = $db->query($sql) or die ($db->error);
			 return $query;
		}


		public function post($Id_pasien, $nama_pasien, $umur_pasien, $kelamin_pasien, $bb_pasien, $goldar_pasien, $lamaterpapar_pasien, $komorbid_pasien, $domisi_pasien, $kontak_pasien) {
			
			$db = $this->mysqli->conn;
			$db->query("INSERT INTO tb_pasien  VALUES ('Id_pasien', 'nama_pasien', 'umur_pasien', 'kelamin_pasien', 'bb_pasien', 'goldar_pasien', 'lamaterpapar_pasien', 'komorbid_pasien', 'domisi_pasien', 'kontak_pasien'))")or die($db->error);
		}

		public function accessRules()
	{
		return array(
			array('allow',
				'actions'=>array('error','contact','login','captcha'),
				'users'=>array('*'),
			),
			array('allow',
				'actions'=>array('index','logout','update'),
				'users'=>array('@'),
			),
			array('deny',  // deny all users
				'users'=>array('*'),
			),
		);
	}


		 
	}
 ?>
