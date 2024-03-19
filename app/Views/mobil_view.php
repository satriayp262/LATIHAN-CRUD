<div class="container pt-5">
    <a href="<?= base_url('barang/tambah');?>" class="btn btn-success mb-2">Tambah Data</a>
    <div class="card">
        <div class="card-header bg-info text-white">
            <h4 class="card-title">Data Mobil</h4>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered table-striped">
                    <thead>
                        <tr>
                            <th>No.</th>
                            <th>Nama Mobil</th>
                            <th>Tahun</th>
                            <th>Harga</th>
                            <th>Jumlah</th>
                            <th>Aksi</th>
                        </tr> 
                    </thead>
                    <tbody>
                        <?php $no=1; foreach($getMobil as $isi){?>
                            <tr>
                                <td><?= $no;?></td>
                                <td><?= $isi['nama_mobil'];?></td>
                                <td><?= $isi['tahun_keluar'];?></td>
                                <td>Rp<?= number_format($isi['harga_mobil']);?>,-</td>
                                <td><?= $isi['jumlah_mobil']?></td>
                                <td>
                                    <a href="<?= base_url('mobil/edit/'.$isi['id_mobil']);?>" 
                                    class="btn btn-success">
                                    Edit</a>
                                    <a href="<?= base_url('mobil/hapus/'.$isi['id_mobil']);?>" 
                                    onclick="javascript:return confirm('Apakah ingin menghapus data mobil ?')"
                                    class="btn btn-danger">
                                    Hapus</a>

                                </td>
                            </tr>
                        <?php $no++;}?>
                    </tbody>  

                </table>
            </div>
        </div>
    </div>
</div>