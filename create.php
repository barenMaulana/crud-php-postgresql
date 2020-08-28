<?php
require 'includes/header.php';

if (isset($_POST['tambah'])) {
    if (insert($_POST) == 1) {
        return header('Location: index.php');
    } else {
        return "error";
        exit;
    }
}
?>

<div class="container my-4">
    <div class="row">
        <div class="col col-4 mx-auto">
            <div class="card shadow">
                <div class="card-header">
                    <h4 class="text-center">Tambah hasil tambang</h4>
                </div>
                <div class="card-body">
                    <form action="" method="post">
                        <div class="form-group">
                            <label for="">Hasil tambang</label>
                            <input type="text" name="mine_result" class="form-control">
                        </div>
                        <div class="form-group">
                            <label for="">warna</label>
                            <input type="text" name="mine_color" class="form-control">
                        </div>
                        <div class="form-group">
                            <label for="">tanggal</label>
                            <input type="date" name="install_date" class="form-control">
                        </div>
                        <div class="form-group">
                            <label for="">pemmilik</label>
                            <input type="text" name="mine_owner" class="form-control">
                        </div>
                </div>
                <div class="card-footer">
                    <div class="d-flex justify-content-around">
                        <a href="index.php" class="btn btn-danger btn-sm">Batal</a>
                        <button type="submit" name="tambah" class="btn btn-primary btn-sm">Tambah</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<?php
require 'includes/header.php';
?>