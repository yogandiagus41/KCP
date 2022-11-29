<?= $this->extend('Tamplate.php');
$this->section('Content') ?>
<div class="card p-4 border-0 shadow">
    <!-- Nav tabs -->
    <ul class="nav nav-tabs">
        <li class="nav-item">
            <a class="nav-link active" data-bs-toggle="tab" href="#Profile">Profile</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" data-bs-toggle="tab" href="#Contact">Contact</a>
        </li>
    </ul>

    <!-- Tab panes -->
    <?php foreach ($Get_performer as $Data) { ?>
    <form action="/Update_data_performer/<?= $Data['ID_PERFORMER'] ?>" method="POST" autocomplete="off"
        enctype="multipart/form-data">
        <div class="tab-content">
            <div class="tab-pane container-fluid p-4 active" id="Profile">
                <div class="row">
                    <div class="col-3">
                        <!-- Photo show -->
                        <label for="PHOTO" class="form-label">Current Photo</label>
                        <div class="card">
                            <div class="card-body">
                                <img src="/Photo/<?= $Data['PHOTO']; ?>" alt="" width="60%" height="90%">
                            </div>
                        </div>

                        <input type="text" class="form-control" name="Photo_compare" value="<?= $Data['PHOTO']; ?>"
                            hidden>
                    </div>
                    <div class="col-9">
                        <!-- ID Performer -->
                        <div class="mb-4">
                            <label for="Id_performer" class="form-label">ID Performer</label>
                            <input type="text" class="form-control" value="<?= $Data['ID_PERFORMER'] ?>" disabled>
                        </div>
                        <!-- Original name -->
                        <div class="mb-4">
                            <label for="Performer_original_name" class="form-label">Original Name</label>
                            <input type="text" class="form-control" name="Performer_original_name"
                                id="Performer_original_name" value="<?= $Data['PERFORMER_ORIGINAL_NAME']; ?>" autofocus
                                required minlength="2">
                        </div>
                        <!-- Photo -->
                        <label for="Id_composer" class="form-label">New Photo</label>
                        <input type="file" class="form-control" name="Photo" id="Photo">
                        <?php } ?>
                    </div>
                </div>

                <!-- Popular name -->
                <div class="mb-4" style="margin-top: 5vh;">
                    <div class="clearfix">
                        <label for="Performer_popular_name" class="form-label float-start">Popular Name</label>
                        <button type="button" class="btn btn-success btn-sm add-more-performer-popular-name float-end"
                            style="margin-left: 20px;">Add
                            Other
                            Popular
                            Name</button>
                    </div>
                    <?php foreach ($Performer_popular_name[0] as $Data) { ?>


                    <div class="input-group mt-2">
                        <button class="btn btn-danger btn-sm remove-performer-popular-name"
                            type="button">Remove</button>
                        <input type="text" class="form-control" name="Performer_popular_name[]" value="<?= $Data; ?>"
                            id="Performer_popular_name">
                    </div>
                    <?php } ?>
                    <div class="after-add-more-performer-popular-name">
                    </div>
                </div>

            </div>

            <div class="tab-pane container-fluid p-4 fade" id="Contact">
                <?php foreach ($Get_performer as $Data) { ?>
                <!-- Address -->
                <div class="mb-4">
                    <label for="Address">Address</label>
                    <input type="text" class="form-control" name="Address" value="<?= $Data['ADDRESS']; ?>" id="Address"
                        disabled>
                </div>

                <?php } ?>
            </div>

        </div>
        <div class="d-grid">
            <button type="submit" name="submit" class="btn btn-primary btn-block mt-4">Submit</button>
        </div>
    </form>
</div>
<!-- Add other populan name -->
<div class="copy-performer-popular-name" hidden>
    <div class="input-group mt-2">
        <button class="btn btn-danger btn-sm remove-performer-popular-name" type="button">Remove</button>
        <input type="text" class="form-control" name="Performer_popular_name[]" id="Performer_popular_name"
            minlength="2">
    </div>
</div>
<script src="https://code.jquery.com/jquery-3.5.1.js"></script>
<script src="https://cdn.datatables.net/1.12.1/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/1.12.1/js/dataTables.bootstrap5.min.js"></script>
<script>
// add and remove new form popular name
$(document).ready(function() {
    $(".add-more-performer-popular-name").click(function() {
        var html = $(".copy-performer-popular-name").html();
        $(".after-add-more-performer-popular-name").after(html);
    });

    $("body").on("click", ".remove-performer-popular-name", function() {
        $(this).parents(".input-group").remove();
    });
});
</script>

<?= $this->endSection(); ?>