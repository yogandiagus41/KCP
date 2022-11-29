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
                        <input type="text" class="form-control" value="" disabled>
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
                data-bs-target="#Modal_create_performer">Create New Data User</button>

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