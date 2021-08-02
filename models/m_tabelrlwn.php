<?php 
	class tabelrlwn {

		private $mysqli;

		function __construct($conn) {
			$this->mysqli = $conn;
		}

		public function tampil($id = null) {
			$db = $this->mysqli->conn;
			$sql = "SELECT * FROM tb_relawan";
			if($id != null) {
				$sql .= " WHERE id_rlwn = $id"  ;
			}
			$query = $db->query($sql) or die ($db->error);
			 return $query;
		}

		public function post($Id_pndnr, $Nama_pndnr, $Umur_pndnr, $kelamin_pndnr, $bb_pndnr, $golongandarah_pndnr, $lamabebascovid_pndnr, $notelpon_pndnr) {
			
			$db = $this->mysqli->conn;
			$db->query("INSERT INTO tb_rlwn VALUES ('$Id_pndnr', '$Nama_pndnr', '$Umur_pndnr', '$kelamin_pndnr', '$bb_pndnr', '$golongandarah_pndnr' , '$tglpositif_pndnr', '$tglnegatif_pndnr', '$lamabebascovid_pndnr', '$komorbid_pndnr', '$domisi_pndnr', '$notelpon_pndnr')")or die($db->error);
		} 
	}
 ?>