<?= $this->extend('Tamplate.php');
$this->section('Content') ?>



<div class="card p-4 border-0 shadow">
    <!-- Nav tabs -->
    <ul class="nav nav-tabs">
        <li class="nav-item">
            <a class="nav-link active" data-bs-toggle="tab" href="#Profile">Profile</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" data-bs-toggle="tab" href="#Identity">Identity</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" data-bs-toggle="tab" href="#Contact">Contact</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" data-bs-toggle="tab" href="#Bank_account">Bank Account</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" data-bs-toggle="tab" href="#Other">Other</a>
        </li>
    </ul>

    <!-- Tab panes -->
    <?php foreach ($Get_publishing as $Data) { ?>
    <form action="/Update_data_publishing/<?= $Data['ID_PUBLISHING'] ?>" method="POST" autocomplete="off"
        enctype="multipart/form-data">
        <div class="tab-content">
            <div class="tab-pane container-fluid p-4 active" id="Profile">
                <!-- ID Composer -->
                <div class="mb-4">
                    <label for="Id_publishing" class="form-label">ID Publishing</label>
                    <input type="text" class="form-control" name="Id_publishing" id="Id_publishing"
                        value="<?= $Data['ID_PUBLISHING'] ?>" disabled>
                </div>
                <!-- Original name -->
                <div class="mb-4">
                    <label for="Publishing_original_name" class="form-label">Original Name</label>
                    <input type="text" class="form-control" name="Publishing_original_name"
                        value="<?= $Data['PUBLISHING_ORIGINAL_NAME'] ?>" id="Publishing_original_name" autofocus>
                </div>
                <!-- Alias name -->
                <?php } ?>
                <div class="mb-4" style="margin-top: 5vh;">
                    <div class="clearfix">
                        <label for="Publishing_alias_name" class="form-label float-start">Alias Name</label>
                        <button type="button" class="btn btn-success btn-sm add-more-publishing_alias_name float-end"
                            style="margin-left: 20px;">Add
                            Other
                            Alias
                            Name</button>
                    </div>
                    <?php foreach ($Publishing_alias_name[0] as $Data) { ?>


                    <div class="input-group mt-2">
                        <button class="btn btn-danger btn-sm remove-publishing_alias_name" type="button">Remove</button>
                        <input type="text" class="form-control" name="Publishing_alias_name[]" value="<?= $Data; ?>"
                            id="Publishing_alias_name">
                    </div>
                    <?php } ?>
                    <div class=" after-add-more-publishing_alias_name">
                    </div>
                </div>


            </div>
            <div class="tab-pane container-fluid p-4 fade" id="Identity">
                <?php foreach ($Get_publishing as $Data) { ?>
                <!-- SIUP number -->
                <div class="mb-2">
                    <label for="SIUP_number" class="form-label">SIUP Number</label>
                    <input type="number" class="form-control" name="SIUP_number" id="SIUP_number"
                        value="<?= $Data['SIUP_NUMBER'] ?>" disabled>
                </div>
                <input type="number" class="form-control" name="SIUP_number" id="SIUP_number"
                    value="<?= $Data['SIUP_NUMBER'] ?>" hidden>


                <!-- Tax Id Number -->
                <div class="mb-2">
                    <label for="Tax_id_number" class="form-label">Tax ID Number</label>
                    <input type="number" class="form-control" name="Tax_id_number" id="Tax_id_number"
                        value="<?= $Data['TAX_ID_NUMBER'] ?>" disabled>
                </div>
                <input type="number" class="form-control" name="Tax_id_number" id="Tax_id_number"
                    value="<?= $Data['TAX_ID_NUMBER'] ?>" hidden>
                <?php } ?>
            </div>
            <div class="tab-pane container-fluid p-4 fade" id="Contact">
                <!-- Phone Number -->
                <div class="mb-4">
                    <div class="clearfix">
                        <label for="Phone_number" class="form-label float-start">Phone number</label>
                        <button type="button" class="btn btn-success btn-sm add-more-phone-number float-end"
                            style="margin-left: 20px;">Add
                            Other Phone Number</button>
                    </div>
                    <?php
                        $Phone_number = [];
                        $Subject_phone_number = [];
                        foreach ($Get_telephone as $Data) {
                            $Phone_number = explode(",", $Data['TELEPHONE_NUMBER']);
                            $Subject_phone_number = explode(",", $Data['TELEPHONE_SUBJECT']);
                        }
                        for ($i = 0; $i < count($Phone_number); $i++) {
                        ?>
                    <div class="row show_new_form-phone-number">
                        <div class="col">
                            <div class="input-group mt-2">
                                <button class="btn btn-danger btn-sm remove-phone-number" type="button">Remove</button>
                                <input type="number" class="form-control" name="Phone_number[]"
                                    value="<?= $Phone_number[$i]; ?>" id="Phone_number">
                            </div>
                        </div>

                        <div class="col">
                            <div class="input-group mt-2">
                                <input type="text" class="form-control" name="Subject_phone_number[]"
                                    value="<?= $Subject_phone_number[$i]; ?>" id="Subject_phone_number" minlength="2">
                            </div>
                        </div>
                    </div>
                    <?php } ?>
                    <div class="after-add-more-phone-number"></div>
                </div>
                <?php foreach ($Get_publishing as $Data) { ?>
                <!-- Address -->
                <div class="mb-2">
                    <label for="Address">Address</label>
                    <input class="form-control" rows="5" id="Address" name="Address" value="<?= $Data['ADDRESS'] ?>"
                        disabled></input>
                    <input class="form-control" rows="5" id="Address" name="Address" value="<?= $Data['ADDRESS'] ?>"
                        hidden></input>
                </div>

                <!-- City -->
                <div class="mb-2">
                    <label for="City" class="form-label">City</label>
                    <input type="text" class="form-control" name="City" id="City" value="<?= $Data['CITY'] ?>" disabled>
                </div>
                <input type="text" class="form-control" name="City" id="City" value="<?= $Data['CITY'] ?>" hidden>

                <!-- Post code -->
                <div class="mb-2">
                    <label for="Post_code" class="form-label">Post Code</label>
                    <input type="number" class="form-control" name="Post_code" id="Post_code"
                        value="<?= $Data['POST_CODE'] ?>" disabled>
                </div>
                <input type="number" class="form-control" name="Post_code" id="Post_code"
                    value="<?= $Data['POST_CODE'] ?>" hidden>

                <!-- Country -->
                <div class="mb-2">
                    <label for="Country" class="form-label">Country</label>
                    <input type="text" class="form-control" name="Country" id="Country" value="<?= $Data['COUNTRY'] ?>"
                        disabled>
                </div>
                <input type="text" class="form-control" name="Country" id="Country" value="<?= $Data['COUNTRY'] ?>"
                    hidden>
                <?php } ?>
            </div>
            <div class="tab-pane container-fluid p-4 fade" id="Bank_account">
                <?php foreach ($Get_publishing as $Data) { ?>
                <!-- Bank name -->
                <div class="mb-2">
                    <label for="Bank_name" class="form-label">Bank Name</label>
                    <input type="text" class="form-control" name="Bank_name" id="Bank_name"
                        value="<?= $Data['BANK_NAME'] ?>" disabled>
                </div>
                <input type="text" class="form-control" name="Bank_name" id="Bank_name"
                    value="<?= $Data['BANK_NAME'] ?>" hidden>

                <!-- Bank account name -->
                <div class="mb-2">
                    <label for="Bank_account_name" class="form-label">Bank Account Name</label>
                    <input type="text" class="form-control" name="Bank_account_name" id="Bank_account_name"
                        value="<?= $Data['BANK_ACCOUNT_NAME'] ?>" disabled>
                </div>
                <input type="text" class="form-control" name="Bank_account_name" id="Bank_account_name"
                    value="<?= $Data['BANK_ACCOUNT_NAME'] ?>" hidden>

                <!-- Bank account number -->
                <div class="mb-2">
                    <label for="Bank_account_number" class="form-label">Bank Account Number</label>
                    <input type="number" class="form-control" name="Bank_account_number" id="Bank_account_number"
                        value="<?= $Data['BANK_ACCOUNT_NUMBER'] ?>" disabled>
                </div>
                <input type="number" class="form-control" name="Bank_account_number" id="Bank_account_number"
                    value="<?= $Data['BANK_ACCOUNT_NUMBER'] ?>" hidden>



                <!--Bank Address -->
                <div class="mb-2">
                    <label for="Bank_address">Bank Address</label>
                    <input type="text" class="form-control" name="Bank_address" id="Bank_address"
                        value="<?= $Data['BANK_ADDRESS'] ?>" disabled>
                </div>
                <input type="text" class="form-control" name="Bank_address" id="Bank_address"
                    value="<?= $Data['BANK_ADDRESS'] ?>" hidden>

                <!-- Branch -->
                <div class="mb-2">
                    <label for="Branch" class="form-label">Branch</label>
                    <input type="text" class="form-control" name="Branch" id="Branch" value="<?= $Data['BRANCH'] ?>"
                        disabled>
                </div>
                <input type="text" class="form-control" name="Branch" id="Branch" value="<?= $Data['BRANCH'] ?>" hidden>
                <?php } ?>
            </div>
            <div class="tab-pane container-fluid p-4 fade" id="Other">
                <?php foreach ($Get_publishing as $Data) { ?>
                <!-- Swift Code -->
                <div class="mb-2">
                    <label for="Swift_code" class="form-label">Swift_code</label>
                    <input type="number" class="form-control" name="Swift_code" id="Swift_code"
                        value="<?= $Data['SWIFT_CODE'] ?>" disabled>
                </div>
                <input type="number" class="form-control" name="Swift_code" id="Swift_code"
                    value="<?= $Data['SWIFT_CODE'] ?>" hidden>

                <!-- Mech Share -->
                <div class="mb-2">
                    <label for="Mech_share" class="form-label">Mech Share</label>
                    <input type="number" class="form-control" name="Mech_share" id="Mech_share"
                        value="<?= $Data['MECH_SHARE'] ?>" disabled>
                </div>
                <input type="number" class="form-control" name="Mech_share" id="Mech_share"
                    value="<?= $Data['MECH_SHARE'] ?>" hidden>

                <!-- Sync Share -->
                <div class="mb-2">
                    <label for="Sync_share" class="form-label">Sync Share</label>
                    <input type="number" class="form-control" name="Sync_share" id="Sync_share"
                        value="<?= $Data['SYNC_SHARE'] ?>" disabled>
                </div>
                <input type="number" class="form-control" name="Sync_share" id="Sync_share"
                    value="<?= $Data['SYNC_SHARE'] ?>" hidden>

                <!-- Lyric Share -->
                <div class="mb-2">
                    <label for="Lyric_share" class="form-label">Lyric Share</label>
                    <input type="number" class="form-control" name="Lyric_share" id="Lyric_share"
                        value="<?= $Data['LYRIC_SHARE'] ?>" disabled>
                </div>
                <input type="number" class="form-control" name="Lyric_share" id="Lyric_share"
                    value="<?= $Data['LYRIC_SHARE'] ?>" hidden>

                <!-- Performance Share -->
                <div class="mb-2">
                    <label for="Performance_share" class="form-label">Performance Share</label>
                    <input type="number" class="form-control" name="Performance_share" id="Performance_share"
                        value="<?= $Data['PERFORMANCE_SHARE'] ?>" disabled>
                </div>
                <input type="number" class="form-control" name="Performance_share" id="Performance_share"
                    value="<?= $Data['PERFORMANCE_SHARE'] ?>" hidden>

                <!-- Territory -->
                <div class="mb-2">
                    <label for="Territory" class="form-label">Territory</label>
                    <input type="number" class="form-control" name="Territory" id="Territory"
                        value="<?= $Data['TERRITORY'] ?>" disabled>
                </div>
                <input type="number" class="form-control" name="Territory" id="Territory"
                    value="<?= $Data['TERRITORY'] ?>" hidden>

                <!-- IP Base -->
                <div class="mb-2">
                    <label for="Ip_base" class="form-label">IP Base</label>
                    <input type="number" class="form-control" name="Ip_base" id="Ip_base"
                        value="<?= $Data['IP_BASE'] ?>" disabled>
                </div>
                <input type="number" class="form-control" name="Ip_base" id="Ip_base" value="<?= $Data['IP_BASE'] ?>"
                    hidden>

                <!-- IP Name -->
                <div class="mb-2">
                    <label for="Ip_name" class="form-label">IP Name</label>
                    <input type="text" class="form-control" name="Ip_name" id="Ip_name" value="<?= $Data['IP_NAME'] ?>"
                        disabled>
                </div>
                <input type="text" class="form-control" name="Ip_name" id="Ip_name" value="<?= $Data['IP_NAME'] ?>"
                    hidden>
                <?php } ?>
            </div>
        </div>
        <div class="d-grid">
            <button type="submit" name="submit" class="btn btn-primary btn-block mt-4">Submit</button>
        </div>
    </form>
</div>
<!-- Add other populan name -->
<div class="copy-publishing_alias_name" hidden>
    <div class="input-group mt-2">
        <button class="btn btn-danger btn-sm remove-publishing_alias_name" type="button">Remove</button>
        <input type="text" class="form-control" name="Publishing_alias_name[]" id="Publishing_alias_name" minlength="2">
    </div>
</div>

<!-- Add other Phone number-->
<div class="copy-phone-number" hidden>
    <div class="row show_new_form-phone-number">
        <div class="col">
            <div class="input-group mt-2">
                <button class="btn btn-danger btn-sm remove-phone-number" type="button">Remove</button>
                <input type="number" class="form-control" name="Phone_number[]" placeholder="Your phone number">
            </div>
        </div>
        <div class="col">
            <input type="text" class="form-control mt-2" placeholder="Your subject phone number"
                name="Subject_phone_number[]">
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

// add and remove new form popular name
$(document).ready(function() {
    $(".add-more-publishing_alias_name").click(function() {
        var html = $(".copy-publishing_alias_name").html();
        $(".after-add-more-publishing_alias_name").after(html);
    });

    $("body").on("click", ".remove-publishing_alias_name", function() {
        $(this).parents(".input-group").remove();
    });
});

// add and remove new form phone number
$(document).ready(function() {
    $(".add-more-phone-number").click(function() {
        var html = $(".copy-phone-number").html();
        $(".after-add-more-phone-number").after(html);
    });

    $("body").on("click", ".remove-phone-number", function() {
        $(this).parents(".show_new_form-phone-number").remove();

    });
});
</script>
<?= $this->endSection(); ?>