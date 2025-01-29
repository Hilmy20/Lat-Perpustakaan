<h1 class="mt-4">Dashboard</h1>
<ol class="breadcrumb mb-4">
    <li class="breadcrumb-item active">Dashboard</li>
</ol>
<div class="row">
    <div class="col-xl-3 col-md-6">
        <div class="card bg-primary text-white mb-4">
            <div class="card-body"><?= mysqli_num_rows(mysqli_query($koneksi, "SELECT * FROM kategori")) ?> Total
                Kategori</div>
        </div>
    </div>
    <div class="col-xl-3 col-md-6">
        <div class="card bg-warning text-white mb-4">
            <div class="card-body"><?= mysqli_num_rows(mysqli_query($koneksi, "SELECT * FROM buku")) ?> Total Buku
            </div>
        </div>
    </div>
    <div class="col-xl-3 col-md-6">
        <div class="card bg-success text-white mb-4">
            <div class="card-body"><?= mysqli_num_rows(mysqli_query($koneksi, "SELECT * FROM ulasan")) ?> Total Ulasan
            </div>
        </div>
    </div>
    <div class="col-xl-3 col-md-6">
        <div class="card bg-danger text-white mb-4">
            <div class="card-body"><?= mysqli_num_rows(mysqli_query($koneksi, "SELECT * FROM user")) ?> Total User</div>
        </div>
    </div>
</div>

<div class="card">
    <div class="card-body">
        <table class="table table-bordered">
            <tr>
                <td widht="200">Nama</td>
                <td widht="1">:</td>
                <td><?= $_SESSION['user']['nama'] ?></td>
            </tr>
            <tr>
                <td widht="200">Level User</td>
                <td widht="1">:</td>
                <td><?= $_SESSION['user']['level'] ?></td>
            </tr>
            <tr>
                <td widht="200">Tanggal Login</td>
                <td widht="1">:</td>
                <td><?= date('d/m/Y') ?></td>
            </tr>
        </table>
    </div>
</div>