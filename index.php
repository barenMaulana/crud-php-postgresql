<?php
require 'includes/header.php';

$getUrl = $_SERVER['REQUEST_URI'];
$uri = explode('/', $getUrl);
if ($uri[2] == '' || $uri[2] == 'index.php') {
    $minings = getAll('mining_tb');
}
?>

<div class="container my-4">
    <h3>CRUD | PostgreSQL</h3>


    <div class="row custom-alert d-none">
        <div class="col">
        </div>
    </div>

    <div class="row">
        <div class="col">
            <div class="card shadow">
                <div class="card-body">
                    <table class="table">
                        <thead class="thead-dark">
                            <tr>
                                <th scope="col">#</th>
                                <th scope="col">Mine result</th>
                                <th scope="col">Mine color</th>
                                <th scope="col">Mining date</th>
                                <th scope="col">Mine owner</th>
                                <th scope="col">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php foreach ($minings as $key => $mining) : ?>
                                <tr>
                                    <th scope="row"><?= $key + 1 ?></th>
                                    <td><?= $mining['mine_result'] ?></td>
                                    <td><?= $mining['mine_color'] ?></td>
                                    <td><?= $mining['install_date'] ?></td>
                                    <td><?= $mining['mine_owner'] ?></td>
                                    <td>
                                        <a href="update.php?id=<?= $mining['mine_id'] ?>" class="btn btn-primary shadow"><img src="icon/pencil.svg" width="20"></a>
                                        <a href="#" class="btn btn-danger shadow"><img src="icon/trash.svg" width="20"></a>
                                    </td>
                                </tr>
                            <?php endforeach; ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
        <div class="col col-2 text-center side-navbar">
            <div class="card shadow">
                <div class="card-body">
                    <a href="create.php" class="btn btn-primary btn-sm">Add new</a>
                </div>
            </div>
        </div>
    </div>
</div>

<?php
require 'includes/footer.php';
?>