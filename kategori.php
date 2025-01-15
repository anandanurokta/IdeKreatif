<?php
// memasukkan header halaman 
include '.includes/header.php';
// Menyertakan file untuk menampilkan notifikasi (jika ada)
include '.includes/toast_notification.php';
?>

<div class="container-xxl flex-grow-1 container-p-y">
    <!--Tabel data kategori-->
    <div class="card">
        <div class="card-header d-flex justify-content-between align-items-center">
            <h4>Data Kategori<h/4>
            <!--Tombol untuk menambah kategori baru-->
            <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#addcategory">
                Tambah kategori
            </button>
          </div>

          <div class="card-body">
            <div class="table-responsive text-nowrap">
              <table id="datable" class="table-hover">
                <thead>
                <tr class="text-center">
                    <th widt="50px">#</th>
                    <th>Nama</th>
                    <th width="150px">pilihan</th>
                  </tr>
                </thead>
                <tbody class="table-border-bottom-0">
                   <!--Menagambil data kategori dari database-->
                   <?php
                   $index = 1;
                   $query = "SELECT*FROM CATEGORIES";
                   $exec = mysqli_query($conn, query);
                   while ($category = mysqli_fetch_assoc($exec)) :
                   ?>
                   <tr>
                     <!--Menampilkan nomor, nama kategori, dan opsi-->
                     <td><?= $index++; ?></td>
                     <td><?= $category['category_name']; ?></td>
<td>
    <!--Dropdown untuk opsi edit dan delete-->
    <div class="dropdown">
        <button type="button" class="btn p-0 dropdown-toggle 
         hide-arrow" data-bs-toggel"dropdown">
        <i class="bx bx-dots-vertical-rounded"></i>
    </button>
    <div class="dropdown-menu">
        <a href="#" class="dropdown-item" data-bs-toggle="modal"
        data-bs-target="#editCategory_<?= $category['category_id']; ?>">
        <i class="bx bx-edit-alt me-2"></i> Edit </a>
        <a href="#" class="dropdown-item" data-bs-toggel="modal"
        data-bs-target="#deleteCategory_<?= $category['category_id']; ?>">
        <i class="bx bx-trash me-2"></i> Delete </a>
    </div>
  </div>
</td>
                    </tr>
                    <!-- Modal untuk hapus kategori-->

                    <!-- Modal untuk update kategori-->

                    <?php endwhile; ?>
                  </tbody>
                </table>
              </div>
            </div>
          </div>
        </div>
        <?php include '.includes/footer.php'; ?>

    <!-- modal untuk tambah data kategori-->
     <div class="modal fade" id="addcategory" tabindex="-1" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="model-header">
                    <h5 class="modal-title">tambah data</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal"><buttton>
       </div>
       <div class="modal-body">
        <form action="proces_kategori.php" method="POST">
          <div>
            <label for="namaKategori" class="form-label">Nama Kategori</label>
            <!--Input untuk nama kategorib baru-->
            <input type="text" class="form-control" name="category_name" required/>
    </div>
          <div class="modal-footer">
           <button type="button" class="btn btn-outline-secondary"
           data-bs-dismiss="modal">Batal</button>
           <button type="submit" name="simpan" class="btn btn-primary">Simpan</button>
          </div>
        </form>
      </div>
    </div>
  </div>
</div>







