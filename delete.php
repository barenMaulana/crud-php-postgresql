<?php
include 'includes/header.php';
if (isset($_GET['id'])) {
    $delete = delete($_GET['id']);
    if ($delete == 1) {
        return header('Location: index.php');
    }
}
