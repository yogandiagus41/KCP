<?= $this->extend('Tamplate.php');
$this->section('Content') ?>
<div class="modal" id="Modal_create_performer">
    <div class="modal-dialog modal-dialog-scrollable modal-xl">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title">Create New Data Performer</h4>
                <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
            </div>


            <div class="modal-body">
                <form action="/Create_data_performer" method="POST" autocomplete="off" enctype="multipart/form-data">
                    <!-- ID Performer -->
                    <div class="mb-4">
                        <label for="Id_performer" class="form-label">ID Performer</label>
                        <input type="text" class="form-control" value="<?= $Last_id_performer; ?>" disabled>
                    </div>
                    <!-- Original name -->
                    <div class="mb-4">
                        <label for="Performer_original_name" class="form-label">Original Name</label>
                        <input type="text" class="form-control" name="Performer_original_name"
                            id="Performer_original_name" autofocus required minlength="2">
                    </div>
                    <!-- Popular name -->
                    <div class="mb-2">
                        <label for="Performer_popular_name" class="form-label">Popular Name</label>
                        <input type="text" class="form-control" name="Performer_popular_name[]"
                            placeholder="Popular Name 1 (Optional)" id="Performer_popular_name">
                    </div>
                    <div class="mb-4">
                        <input type="text" class="form-control" name="Performer_popular_name[]"
                            placeholder="Popular Name 2 (Optional)" id="Performer_popular_name">
                    </div>
                    <!-- Address -->
                    <div class="mb-4">
                        <label for="Address">Address</label>
                        <textarea class="form-control" rows="5" id="Address" name="Address"></textarea>
                    </div>
                    <!-- Photo -->
                    <div class="mb-4">
                        <label for="Photo" class="form-label">Photo</label>
                        <input type="file" class="form-control" name="Photo" id="Photo" required>
                    </div>



                    <div class="d-grid">
                        <button type="submit" name="submit" class="btn btn-primary btn-block mt-4">Submit</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

<div class="card p-4 border-0 shadow">
    <div class="row">
        <ul class="pagination justify-content-end" style="margin:20px 0">
            <button type="button" class="btn btn-primary add-more" data-bs-toggle="modal"
                data-bs-target="#Modal_create_performer">Create New Data Perforemer</button>

        </ul>
    </div>
    <div class="card">
        <div class="card-body">
            <table id="example" class="display" style="width: 100%">

                <thead class="mt-4">

                    <tr>
                        <th>NO</th>
                        <th>NAME</th>
                        <th>POPULAR NAME</th>
                        <th>ID PERFORMER</th>
                        <th>ACTION</th>
                    </tr>
                </thead>
                <tbody class="mt-4">
                    <?php
                    $No = 1;
                    foreach ($Get_data_performer as $Data) {

                    ?>
                    <tr>
                        <td><?= $No; ?></td>
                        <td><?= $Data['PERFORMER_ORIGINAL_NAME']; ?></td>
                        <td><?= $Data['PERFORMER_POPULAR_NAME']; ?></td>
                        <td><?= $Data['ID_PERFORMER']; ?></td>
                        <td style="padding-left: 5px;"><a href="/Performer/Detail/<?= $Data['ID_PERFORMER']; ?>"><svg
                                    xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="#497174"
                                    class="bi bipencil-square" viewBox="0 0 16 16">
                                    <path
                                        d="M15.502 1.94a.5.5 0 0 1 0 .706L14.459 3.69l-2-2L13.502.646a.5.5 0 0 1 .707 0l1.293 1.293zm-1.75 2.456-2-2L4.939 9.21a.5.5 0 0 0-.121.196l-.805 2.414a.25.25 0 0 0 .316.316l2.414-.805a.5.5 0 0 0 .196-.12l6.813-6.814z" />
                                    <path fill-rule="evenodd"
                                        d="M1 13.5A1.5 1.5 0 0 0 2.5 15h11a1.5 1.5 0 0 0 1.5-1.5v-6a.5.5 0 0 0-1 0v6a.5.5 0 0 1-.5.5h-11a.5.5 0 0 1-.5-.5v-11a.5.5 0 0 1 .5-.5H9a.5.5 0 0 0 0-1H2.5A1.5 1.5 0 0 0 1 2.5v11z" />
                                </svg></a> | <a href="Performer/Delete/<?= $Data['ID_PERFORMER']; ?>"
                                onclick="return confirm('Apakah anda yakin ingin menghapus data <?= $Data['PERFORMER_ORIGINAL_NAME']; ?> ?');"><svg
                                    xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="#EB6440"
                                    class="bi bi-trash" viewBox="0 0 16 16">
                                    <path
                                        d="M5.5 5.5A.5.5 0 0 1 6 6v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5zm2.5 0a.5.5 0 0 1 .5.5v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5zm3 .5a.5.5 0 0 0-1 0v6a.5.5 0 0 0 1 0V6z" />
                                    <path fill-rule="evenodd"
                                        d="M14.5 3a1 1 0 0 1-1 1H13v9a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V4h-.5a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1H6a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1h3.5a1 1 0 0 1 1 1v1zM4.118 4 4 4.059V13a1 1 0 0 0 1 1h6a1 1 0 0 0 1-1V4.059L11.882 4H4.118zM2.5 3V2h11v1h-11z" />
                                </svg></a></td>

                    </tr>
                    <?php $No++;
                    } ?>

                </tbody>
            </table>
        </div>
    </div>
</div>






<script src="https://code.jquery.com/jquery-3.5.1.js"></script>
<script src="https://cdn.datatables.net/1.12.1/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/1.12.1/js/dataTables.bootstrap5.min.js"></script>
<script>
$(document).ready(function() {
    $("#example").DataTable();
});
</script>

<?= $this->endSection(); ?>