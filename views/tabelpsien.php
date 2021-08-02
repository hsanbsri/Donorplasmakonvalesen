<?php 
    include "models/m_tabelpsien.php";

    $rwn = new tabelpasien($connection);
?>
<div class="row">
        <div class="col-lg-12">
            <h2>Tabel  <small>Data pencari donor plasma</small></h2>
            <ol class="breadcrumb">
        <li><a href="?page=dashboard"><i class="icon-dashboard"></i>Informasi</a></li>
    </ol>
</div>
</div>

    <div class="row">
     <div class="col-lg-12">
            <div class="table-responsive">
                <table class="table table-bordered table-hover table-striped" id="tablepasien">
                    <thead>
                    <tr>
                        <th>No.</th>
                        <th>ID</th>
                        <th>Nama</th>
                        <th>Umur</th>
                        <th>Jenis kelamin</th>
                        <th>Berat badan</th>
                        <th>Golongan darah</th>
                        <th>Terpapar covid</th>
                        <th>Penyakit komorbid</th>
                        <th>Domisi</th>
                        <th>Kontak</th>
                    </tr>
                    </thead>
                    <tbody>
                    <?php 
                        $No = 1;
                        $tampil = $rwn->tampil();
                        while ($data = $tampil->fetch_object()) {
                     ?> 
                    <tr>
                        <td align="center"><?php echo $No++."."; ?></td>
                        <td><?php echo $data->Id_pasien; ?></td>
                        <td><?php echo $data->nama_pasien; ?></td>
                        <td><?php echo $data->umur_pasien; ?></td>
                        <td><?php echo $data->kelamin_pasien; ?></td>
                        <td><?php echo $data->bb_pasien; ?></td>
                        <td><?php echo $data->goldar_pasien; ?></td>
                        <td><?php echo $data->lamaterpapar_pasien; ?></td>  
                        <td><?php echo $data->komorbid_pasien; ?></td>
                        <td><?php echo $data->domisi_pasien; ?></td>
                        <td><a href="https://wa.me/<?php echo $data->kontak_pasien; ?>?text=Halo%20apakah%20anda%20bersedia%20untuk%20menjadi%20pendonor%20plasma" target="blank">Contact Me</a></td>
                    </tr>
                    <?php 
                     } ?>
                </tbody>
            </table>
        </div>
    </div>
</div>