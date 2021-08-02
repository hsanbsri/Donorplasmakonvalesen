<?php 
    include "models/m_tabelrlwn.php";

    $rwn = new tabelrlwn($connection);
?>
    <div class="row">
        <div class="col-lg-12">
            <h2>Tabel  <small>Data Relawan Donor</small></h2>
            <ol class="breadcrumb">
        <li><a href="?page=dashboard"><i class="icon-dashboard"></i>Informasi</a></li>
	</ol>
</div>
</div>

    <div class="row">
     <div class="col-lg-12">
            <div class="table-responsive">
                <table class="table table-bordered table-hover table-striped" id="tablerelawan">
                    <thead>
                    <tr>
                        <th>No.</th>
                        <th>ID</th>
                        <th>Nama</th>
                        <th>Umur</th>
                        <th>Jenis kelamin</th>
                        <th>Berat badan</th>
                        <th>Golongan darah</th>
                        <th>Lama bebas covid</th>
                        <th>Penyakit komorbid</th>
                        <th>Domisi</th>
                        <th>Kontak</th>
                    </tr>
                    </thead>
                    <tbody>
                    <?php 
                        $tanggal = mktime(date('m'));
                        echo "Tanggal : <b> " . date("d-m-Y", $tanggal ) . "</b>";
                        date_default_timezone_set("Asia/Makassar");
                    ?>
                    <?php 
                        $No = 1;
                        $tampil = $rwn->tampil();
                        while ($data = $tampil->fetch_object()) {
                     ?> 
                    <tr>
                        <td align="center"><?php echo $No++."."; ?></td>
                        <td><?php echo $data->Id_pndnr; ?></td>
                        <td><?php echo $data->nama_pndnr; ?></td>
                        <td><?php echo $data->umur_pndnr; ?></td>
                        <td><?php echo $data->kelamin_pndnr; ?></td>
                        <td><?php echo $data->bb_pndnr; ?></td>
                        <td><?php echo $data->golongandarah_pndnr; ?></td>
                        <td><?php echo $data->lamabebascovid_pndnr; ?></td>
                        <td><?php echo $data->komorbid_pndnr; ?></td>
                        <td><?php echo $data->domisi_pndnr; ?></td>
                        <td><a href="https://wa.me/<?php echo $data->notelpon_pndnr; ?>?text=Halo%20apakah%20anda%20bersedia%20untuk%20menjadi%20pendonor%20plasma" target="blank">Contact Me</a></td>
                    </tr>
            <?php 
                 } ?>
                 </tbody>
            </table>
        </div>
    </div>
</div>