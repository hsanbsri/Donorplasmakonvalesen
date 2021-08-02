<?php 
    include "models/m_tabelrlwn.php";

    $rwn = new tabelrlwn($connection);
?>


<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="assets/css/style.css" />
  </head>
  <body>
    <h3 id="title">Form Pendaftaran Relawan</h3>

    <form action="" id="survey-form" style="center">
      <label class="control-label" for="id" id="name-label" name="Id_pndnr">
        <td>ID</td>
        <input type="number" id="id"  placeholder="Masukkan ID " required />
      </label>

      <label class="control-label" for="nama" id="name-label" name="nama_pndnr">
        <td>Nama</td>
        <input type="text" id="nama" n placeholder="Masukkan Nama" required />
      </label>

      <tr>
      <label for="umur" id="number-label" name="umur_pndnr">
        <td>Umur</td>
        <input type="number" id="umur"  placeholder="Masukkan Umur" min="18" max="60" />
      </label>
      </tr>

      <label for="member" id="member-label" name="kelamin_pndnr">Jenis Kelamin</label>

      <input type="radio" name="member" value="1" checked required /> Laki-Laki <br />
      <input type="radio" name="member" value="2" required /> Perempuan <br />

      <br /><br />

      <label for="bb" id="bb-label" name="bb_pndnr">
        <td>Berat Badan</td>
        <input type="number" id="bb"  placeholder="Masukkan Berat badan" required />
      </label>

      <label for="goldar" id="goldar-label" name="golongandarah_pndnr">
        <td>Golongan darah</td>
        <input type="text" id="goldar"  placeholder="Masukkan Golongan darah" required />
      </label>

      <label for="terpapar" id="terpapar-label" name="tglpositif_pndnr">
        <td>Tanggal positif</td>
        <input type="date" id="terpapar"  />
      </label>

      <label for="sembuh" id="sembuh-label" name="tglnegatif_pndnr">
        <td>Tanggal negatif</td>
        <input type="date" id="sembuh" />
      </label>

      <label for="pasca" id="sembuh-label" name="lamabebascovid_pndnr"  >
        <td>Lama pasca covid</td>
        <input type="number" id="pasca"  required />
      </label>      
      
      <br /><br />

      <label for="komorbid" id="komorbid-label" name="komorbid_pndnr">Penyakit komorbid</label>

      <input type="checkbox" value="Penyakit-jantung" /> Jantung<br />
      <input type="checkbox" value="Penyakit-hipertensi" /> Hipertensi<br />
      <input type="checkbox" value="Penyakit-paru" /> Paru-paru<br />
      <input type="checkbox" value="Penyakit-hati" /> Hati<br />
      <input type="checkbox" value="Penyakit-ginjal" /> Ginjal<br />
      <input type="checkbox" value="Penyakit-kronik" /> Kronik<br />
      <input type="checkbox" value="Penyakit-hiv" /> Hiv<br />

      <br /><br />

      <label for="domisi" id="domisi-label"  name="domisi_pndnr">
        <td>Domisi</td>
        <input type="text" id="domisi" placeholder="Masukkan Domisi" required />
      </label>

      <label for="kontak" id="kontak-label" name="notelpon_pndnr">
        <td>No handphone</td>
        <input type="number" id="kontak"  placeholder="Nomor whatsapp" required />
      </label>

      <button id="submit" type="submit" name="post" data-target="#tambah" >Submit</button>
      <button id="reset" type="reset" name="reset">reset</button>
    </form>
  </body>
</html>

<?php 
//Include file koneksi ke database
include "koneksi.php";

//menerima nilai dari kiriman form input-barang 
 if (@$_POST['post']) {
      
      $id_pndnr   = ($_POST['id_pndnr']);
      $nama_pndnr = ($_POST['nama_pndnr']);
      $umur_pndnr = ($_POST['umur_pndnr']);
      $kelamin_pndnr = ($_POST['kelamin_pndnr']);
      $bb_pndnr = ($_POST['bb_pndnr']);
      $golongandarah_pndnr = ($_POST['golongandarah_pndnr']);
      $tanggalpositif_pndnr =($_POST['tanggalpositif_pndnr']);
      $tanggalnegatif_pndnr =($_POST['tanggalnegatif_pndnr']);
      $lamabebascovid_pndnr =($_POST['lamabebascovid_pndnr']);
      $komorbid_pndnr = ($_POST['komorbid_pndnr']);
      $domisi_pndnr = ($_POST['domisi_pndnr']);
      $kontak_pndnr = ($_POST['kontak_pndnr']);
    }

//Query input menginput data kedalam tabel barang
  $sql="INSERT INTO tb_relawan (id_pndnr,nama_pndnr,umur_pndnr,kelamin_pndn,bb_pndnr,golongandarah_pndnr,tanggalpositif_pndnr,tanggalnegatif_pndnr,lamabebascovid_pndnr,komorbid_pndnr,domisi_pndnr,kontak_pndnr) values
    ($id_pndnr,$nama_pndnr,$umur_pndnr,$kelamin_pndn,$bb_pndnr,$golongandarah_pndnr,$tanggalpositif_pndnr,$tanggalnegatif_pndnr,$lamabebascovid_pndnr,$komorbid_pndnr,$domisi_pndnr,$kontak_pndnr$)";

//Mengeksekusi/menjalankan query diatas 
  $hasil=mysqli_query($kon,$sql);

//Kondisi apakah berhasil atau tidak
  if ($hasil) {
  echo "Berhasil insert data";
  exit;
  }
else {
  echo "Gagal insert data";
  exit;
}  



