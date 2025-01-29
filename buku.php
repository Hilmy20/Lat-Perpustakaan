<h1 class="mt-4">Buku</h1>
<div class="card">
    <div class="card-body">
        <div class="row">
            <div class="col-md-12">
                <a href="?page=buku_tambah" class="btn btn-primary">+ Tambah</a>
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <tr>
                        <th>No</th>
                        <th>Nama Kategori</th>
                        <th>Judul</th>
                        <th>Penulis</th>
                        <th>Penerbit</th>
                        <th>Tahun Terbit</th>
                        <th>Deskripsi</th>
                        <th>Aksi</th>
                    </tr>
                    <?php
                    $i = 1;
                    $query = mysqli_query($koneksi, "SELECT * FROM buku LEFT JOIN kategori on buku.id_kategori = kategori.id_kategori");
                    while ($data = mysqli_fetch_array($query)) {
                    ?>
                    <tr>
                        <td><?= $i++; ?></td>
                        <td><?= $data['kategori'] ?></td>
                        <td><?= $data['judul'] ?></td>
                        <td><?= $data['penulis'] ?></td>
                        <td><?= $data['penerbit'] ?></td>
                        <td><?= $data['tahun_terbit'] ?></td>
                        <td><?= $data['deskripsi'] ?></td>
                        <td>
                            <a href="?page=buku_ubah&&id=<?= $data['id_buku'] ?>" class="btn btn-primary">Ubah</a>
                            <a onclick="return confirm('Yakin dihapus?')"
                                href="?page=buku_hapus&&id=<?= $data['id_buku'] ?>" class="btn btn-danger">Hapus</a>
                        </td>
                    </tr>
                    <?php
                    }
                    ?>
                </table>
            </div>
        </div>
    </div>
</div>