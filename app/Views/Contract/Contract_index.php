<?= $this->extend('Tamplate.php');
$this->section('Content') ?>
<div class="modal" id="Modal_create_songs">
    <div class="modal-dialog modal-dialog-scrollable modal-xl">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title">Create New Data Contract</h4>
                <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
            </div>


            <div class="modal-body">
                <form action="/Create_data_contract" method="POST" autocomplete="off" enctype="multipart/form-data">
                    <!-- ID Performer -->
                    <div class="mb-4">
                        <label for="Id_Contract" class="form-label">ID Contract</label>
                        <input type="text" class="form-control" value="<?= $Last_id_contract ?>" disabled>
                    </div>
                    <!-- Contract Number -->
                    <div class="mb-4">
                        <label for="Contract_number" class="form-label">Contract Number</label>
                        <input type="text" class="form-control" name="Contract_number" id="Contract_number" autofocus
                            required minlength="2">
                    </div>
                    <!-- Composer Name-->
                    <div class="mb-4">
                        <label for="Composer" class="form-label">Composer</label>
                        <select class="form-select" id="Contract" name="Contract">
                            <?php foreach ($Composer_name as $Data) { ?>
                            <option value="<?php echo ($Data['COMPOSER_ORIGINAL_NAME']); ?>">
                                <?php echo ($Data['COMPOSER_ORIGINAL_NAME']); ?></option>
                            <?php } ?>
                        </select>
                    </div>
                    <!-- Songs -->
                    <div class="mb-4">
                        <label for="Songs" class="form-label">Songs</label>
                        <div class="input-group">
                            <button class="btn btn-success btn-sm add-more-songs" type="button">Add</button>
                            <input type="text" class="form-control" name="Songs[]" placeholder="Songs Name" id="Songs">
                        </div>
                        <div class="after-add-more-songs"></div>
                    </div>
                    <!-- Percentage -->
                    <div class="mb-4">
                        <label for="Percentage" class="form-label">Share Percentage</label>
                        <input type="text" class="form-control" name="Percentage" id="Percentage" autofocus required
                            minlength="2">
                    </div>




                    <div class="d-grid">
                        <button type="submit" name="submit" class="btn btn-primary btn-block mt-4">Submit</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

<!-- Add other songs-->
<div class="copy-songs" hidden>
    <div class="input-group show_new_form-songs mt-2">
        <button class="btn btn-danger btn-sm remove-songs" type="button">Remove</button>
        <input type="text" class="form-control" name="Songs[]" placeholder="Songs Name">
    </div>
</div>


<div class="card p-4 border-0 shadow">
    <div class="row">
        <ul class="pagination justify-content-end" style="margin:20px 0">
            <button type="button" class="btn btn-primary add-more" data-bs-toggle="modal"
                data-bs-target="#Modal_create_songs">Create New Data Contract</button>

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
$(document).ready(function() {
    $(".add-more-songs").click(function() {
        var html = $(".copy-songs").html();
        $(".after-add-more-songs").after(html);
    });

    $("body").on("click", ".remove-songs", function() {
        $(this).parents(".show_new_form-songs").remove();
    });
});
</script>

<?= $this->endSection(); ?>