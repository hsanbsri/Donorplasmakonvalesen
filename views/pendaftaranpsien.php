<?php 
    include "models/m_tabelpsien.php";

    $rwn = new tabelpasien($connection);
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
    <h3 id="title">Form Pendaftaran Pasien</h3>

    <form id="survey-form" style="center">
      <label class="control-label" for="id" id="name-label">
        <td>ID</td>
        <input type="number" id="id" placeholder="Masukkan ID " required />
      </label>

      <label class="control-label" for="nama" id="name-label">
        <td>Nama</td>
        <input type="text" id="nama" placeholder="Masukkan Nama" required />
      </label>

      <tr>
      <label for="number" id="number-label">
        <td>Umur</td>
        <input type="number" id="number" placeholder="Masukkan Umur" min="18" max="60" />
      </label>
      </tr>

      <label for="member" id="member-label">Jenis Kelamin</label>

      <input type="radio" name="member" value="1" checked required /> Laki-Laki <br />
      <input type="radio" name="member" value="2" required /> Perempuan <br />

      <br /><br />

      <label for="bb" id="bb-label">
        <td>Berat Badan</td>
        <input type="number" id="bb" placeholder="Masukkan Berat badan" required />
      </label>

      <label for="goldar" id="goldar-label">
        <td>Golongan darah</td>
        <input type="text" id="goldar" placeholder="Masukkan Golongan darah" required />
      </label>

      <label for="terpapar" id="terpapar-label">
        <td>Lama Terpapar Covid</td>
        <input type="number" id="terpapar" placeholder="Lama Terpapar" required />
      </label>
      
      <br /><br />

      <label for="komorbid" id="komorbid-label">Penyakit komorbid</label>

      <input type="checkbox" value="Penyakit-jantung" /> Jantung<br />
      <input type="checkbox" value="Penyakit-hipertensi" /> Hipertensi<br />
      <input type="checkbox" value="Penyakit-paru" /> Paru-paru<br />
      <input type="checkbox" value="Penyakit-hati" /> Hati<br />
      <input type="checkbox" value="Penyakit-ginjal" /> Ginjal<br />
      <input type="checkbox" value="Penyakit-kronik" /> Kronik<br />
      <input type="checkbox" value="Penyakit-hiv" /> Hiv<br />

      <br /><br />

      <label for="domisi" id="domisi-label">
        <td>Domisi</td>
        <input type="text" id="domisi" placeholder="Masukkan Domisi" required />
      </label>

      <label for="kontak" id="kontak-label">
        <td>No handphone</td>
        <input type="number" id="kontak" placeholder="Nomor whatsapp" required />
      </label>

      <button id="submit" type="submit">Submit</button>
      <button id="reset" type="reset" name="tambah">reset</button>
    </form>
  </body>
</html>
