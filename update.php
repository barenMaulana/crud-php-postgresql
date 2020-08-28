<?php
require 'includes/header.php';

if (isset($_GET['id'])) {
    $data = getById($_GET['id']);
}

if (isset($_POST['update'])) {
    var_dump($_POST);
    $update = update($_POST);
    if ($update == 1) {
        return header('Location: index.php');
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
                        <input type="hidden" name="mine_id" value="<?= $data['mine_id'] ?>">
                        <div class="form-group">
                            <label for="">Hasil tambang</label>
                            <input type="text" name="mine_result" class="form-control" value="<?= $data['mine_result'] ?>">
                        </div>
                        <div class="form-group">
                            <label for="">warna</label>
                            <input type="text" name="mine_color" class="form-control" value="<?= $data['mine_color'] ?>">
                        </div>
                        <div class="form-group">
                            <label for="">tanggal</label>
                            <input type="text" name="install_date" class="form-control " value="<?= $data['install_date'] ?>">
                        </div>
                        <div class="form-group">
                            <label for="">pemilik</label>
                            <input type="text" name="mine_owner" class="form-control" value="<?= $data['mine_owner'] ?>">
                        </div>
                </div>
                <div class="card-footer">
                    <div class="d-flex justify-content-around">
                        <a href="index.php" class="btn btn-danger btn-sm">Batal</a>
                        <button type="submit" name="update" class="btn btn-primary btn-sm">Update</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<?php
require 'includes/footer.php';
?>