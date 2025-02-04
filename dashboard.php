<?php
include (".includes/header.php");
$title = "Dashboard";
// Menyertakan file untuk menampilkan notifikasi (jika ada)
include '.includes/toast_notification.php';
?>
<div class="container-xxl flex-grow-1 container-p-y">
    <!-- Card untuk menampilkan tabel postingan -->
    <div class="card">
        <!-- Tabel dengan baris yang dapat di-hoveer -->
         <div class="card">
            <!-- Header Tabel -->
             <div class="card-header d-flex justify-content-between align-items-center">
                <h4>Semua Postingan</h4>
             </div>
             <div class="card-body">
                <!-- Tabel Responsif -->$_COOKIE
                 <div