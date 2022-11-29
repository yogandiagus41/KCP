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
    <?php foreach ($Get_composer as $Data) { ?>
    <form action="/Update_data_composer/<?= $Data['ID_COMPOSER']; ?>" method="POST" autocomplete="off"
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
                        <!-- ID Composer -->
                        <div class="mb-2">

                            <label for="Id_composer" class="form-label">ID Composer</label>
                            <input type="text" class="form-control" name="Id_composer" id="Id_composer"
                                title="Can't Be Edited" value="<?= $Data['ID_COMPOSER']; ?>" disabled>
                        </div>

                        <!-- Original name -->
                        <div class="mb-2">
                            <label for="Composer_original_name" class="form-label">Original Name</label>
                            <input type="text" class="form-control" name="Composer_original_name"
                                id="Composer_original_name" value="<?= $Data['COMPOSER_ORIGINAL_NAME']; ?>" autofocus>
                        </div>
                        <!-- Photo -->
                        <label for="Id_composer" class="form-label">New Photo</label>
                        <input type="File" class="form-control" name="Photo" id="Photo" value="<?= $Data['PHOTO']; ?>">
                    </div>

                    <!-- Popular name -->
                    <?php } ?>
                    <div class="mb-4" style="margin-top: 5vh;">
                        <label for="Composer_popular_name" class="form-label float-start">Popular Name</label>
                        <?php foreach ($Composer_popular_name[0] as $Data) { ?>


                        <div class="input-group mt-2">
                            <input type="text" class="form-control" name="Composer_popular_name[]" value="<?= $Data; ?>"
                                id="Composer_popular_name">
                        </div>
                        <?php } ?>
                    </div>
                </div>

                <?php foreach ($Get_composer as $Data) { ?>
                <!-- Gender -->
                <div class="mb-4">
                    <label for="Gender" class="form-label">Gender</label>
                    <input type="text" class="form-control" name="Gender" id="Gender" value="<?= $Data['GENDER']; ?>"
                        disabled>
                </div>
                <input type="text" class="form-control" name="Gender" id="Gender" value="<?= $Data['GENDER']; ?>"
                    hidden>
                <!-- Birth Date -->
                <div class="mb-4">
                    <label for="Birth_date" class="form-label">Birth Date</label>
                    <input type="text" class="form-control" name="Birth_date" id="Birth_date"
                        value="<?= $Data['BIRTH_DATE']; ?>" disabled>
                </div>
                <input type="text" class="form-control" name="Birth_date" id="Birth_date"
                    value="<?= $Data['BIRTH_DATE']; ?>" hidden>
                <!-- Birth Place -->
                <div class="mb-4">
                    <label for="Birth_place" class="form-label">Birth Place</label>
                    <input type="text" class="form-control" name="Birth_place" id="Birth_place"
                        value="<?= $Data['BIRTH_PLACE']; ?>" disabled>
                </div>
                <input type="text" class="form-control" name="Birth_place" id="Birth_place"
                    value="<?= $Data['BIRTH_PLACE']; ?>" hidden>
                <!-- Status-->
                <div class="mb-4">
                    <label for="Status" class="form-label">Status</label>
                    <input type="text" class="form-control" name="Status" id="Status" value="<?= $Data['STATUS']; ?>"
                        disabled>
                </div>
                <input type="text" class="form-control" name="Status" id="Status" value="<?= $Data['STATUS']; ?>"
                    hidden>


                <?php } ?>


            </div>
            <div class="tab-pane container-fluid p-4 fade" id="Identity">
                <?php foreach ($Get_composer as $Data) { ?>
                <!-- IPI Number -->
                <div class="mb-4">
                    <div class="mb-4">
                        <label for="IPI_number" class="form-label">IPI Number</label>
                        <input type="text" class="form-control" name="IPI_number" id="IPI_number"
                            value="<?= $Data['IPI_NUMBER']; ?>" disabled>
                    </div>
                    <input type="text" class="form-control" name="IPI_number" id="IPI_number"
                        value="<?= $Data['IPI_NUMBER']; ?>" hidden>
                </div>
                <!-- Identity Number -->
                <div class="mb-4">
                    <label for="Identity_number" class="form-label">Identity Number</label>
                    <input type="text" class="form-control" name="Identity_number" id="Identity_number"
                        value="<?= $Data['IDENTITY_NUMBER']; ?>" disabled>
                </div>
                <input type="text" class="form-control" name="Identity_number" id="Identity_number"
                    value="<?= $Data['IDENTITY_NUMBER']; ?>" hidden>
                <!-- Tax ID Number -->
                <div class="mb-4">
                    <label for="Tax_id_number" class="form-label">Tax ID Number</label>
                    <input type="text" class="form-control" name="Tax_id_number" id="Tax_id_number"
                        value="<?= $Data['TAX_ID_NUMBER']; ?>" disabled>
                </div>
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

                <?php foreach ($Get_composer as $Data) { ?>
                <!-- Email -->
                <div class="mb-4">
                    <label for="Email" class="form-label">Email</label>
                    <input type="email" class="form-control" name="Email" id="Email" value="<?= $Data['EMAIL']; ?>"
                        disabled>
                </div>
                <input type="email" class="form-control" name="Email" id="Email" value="<?= $Data['EMAIL']; ?>" hidden>
                <!-- Address -->
                <div class="mb-4">
                    <label for="Address" class="form-label">Address</label>
                    <input type="text" class="form-control" name="Address" id="Address" value="<?= $Data['ADDRESS']; ?>"
                        disabled>
                </div>
                <input type="text" class="form-control" name="Address" id="Address" value="<?= $Data['ADDRESS']; ?>"
                    hidden>
                <!-- Address Correspondence -->
                <div class="mb-4">
                    <label for="Address_correspondence" class="form-label">Address Correspondence</label>
                    <input type="text" class="form-control" name="Address_correspondence" id="Address_correspondence"
                        value="<?= $Data['ADDRESS_CORRESPONDENCE']; ?>" disabled>
                </div>
                <input type="text" class="form-control" name="Address_correspondence" id="Address_correspondence"
                    value="<?= $Data['ADDRESS_CORRESPONDENCE']; ?>" hidden>
                <!-- City -->
                <div class="mb-4">
                    <label for="City" class="form-label">City</label>
                    <input type="text" class="form-control" name="City" id="City" value="<?= $Data['CITY']; ?>"
                        disabled>
                </div>
                <input type="text" class="form-control" name="City" id="City" value="<?= $Data['CITY']; ?>" hidden>
                <!-- Country -->
                <div class="mb-4">
                    <label for="Country" class="form-label">Country</label>
                    <input type="text" class="form-control" name="Country" id="Country" value="<?= $Data['COUNTRY']; ?>"
                        disabled>
                </div>
                <input type="text" class="form-control" name="Country" id="Country" value="<?= $Data['COUNTRY']; ?>"
                    hidden>
                <!-- Post code -->
                <div class="mb-4">
                    <label for="Post_code" class="form-label">Post Code</label>
                    <input type="text" class="form-control" name="Post_code" id="Post_code"
                        value="<?= $Data['POST_CODE']; ?>" disabled>
                </div>
                <input type="text" class="form-control" name="Post_code" id="Post_code"
                    value="<?= $Data['POST_CODE']; ?>" hidden>
                <?php } ?>

            </div>
            <div class="tab-pane container-fluid p-4 fade" id="Bank_account">
                <?php foreach ($Get_composer as $Data) { ?>

                <!-- Bank Name -->
                <div class="mb-4">
                    <label for="Bank_name" class="form-label">Bank Name</label>
                    <input type="text" class="form-control" name="Bank_name" id="Bank_name"
                        value="<?= $Data['BANK_NAME']; ?>" disabled>
                </div>
                <input type="text" class="form-control" name="Bank_name" id="Bank_name"
                    value="<?= $Data['BANK_NAME']; ?>" hidden>
                <!-- Bank Account Name -->
                <div class="mb-4">
                    <label for="Bank_account_name" class="form-label">Bank Account Name</label>
                    <input type="text" class="form-control" name="Bank_account_name" id="Bank_account_name"
                        value="<?= $Data['BANK_ACCOUNT_NAME']; ?>" disabled>
                </div>
                <input type="text" class="form-control" name="Bank_account_name" id="Bank_account_name"
                    value="<?= $Data['BANK_ACCOUNT_NAME']; ?>" hidden>
                <!-- Bank Account Number -->
                <div class="mb-4">
                    <label for="Bank_account_number" class="form-label">Bank Account Number</label>
                    <input type="text" class="form-control" name="Bank_account_number" id="Bank_account_number"
                        value="<?= $Data['BANK_ACCOUNT_NUMBER']; ?>" disabled>
                </div>
                <input type="text" class="form-control" name="Bank_account_number" id="Bank_account_number"
                    value="<?= $Data['BANK_ACCOUNT_NUMBER']; ?>" hidden>
                <!-- City of Bank -->
                <div class="mb-4">
                    <label for="City_of_Bank" class="form-label">City of Bank</label>
                    <input type="text" class="form-control" name="City_of_Bank" id="City_of_Bank"
                        value="<?= $Data['CITY_OF_BANK']; ?>" disabled>
                </div>
                <input type="text" class="form-control" name="City_of_Bank" id="City_of_Bank"
                    value="<?= $Data['CITY_OF_BANK']; ?>" hidden>
                <!-- Branch-->
                <div class="mb-4">
                    <label for="Branch" class="form-label">Branch</label>
                    <input type="text" class="form-control" name="Branch" id="Branch" value="<?= $Data['BRANCH']; ?>"
                        disabled>
                </div>
                <input type="text" class="form-control" name="Branch" id="Branch" value="<?= $Data['BRANCH']; ?>"
                    hidden>

                <?php } ?>

            </div>
            <div class="tab-pane container-fluid p-4 fade" id="Other">
                <?php foreach ($Get_composer as $Data) { ?>


                <!-- CMO name-->
                <div class="mb-4">
                    <label for="CMO_name" class="form-label">CMO Name</label>
                    <input type="text" class="form-control" name="CMO_name" id="CMO_name"
                        value="<?= $Data['CMO_NAME']; ?>" disabled>
                </div>
                <input type="text" class="form-control" name="CMO_name" id="CMO_name" value="<?= $Data['CMO_NAME']; ?>"
                    hidden>
                <?php } ?>
                <!-- Original Publishing-->
                <div class="mb-4">
                    <label for="Original_publishing" class="form-label">Original Publishing</label>
                    <input type="text" class="form-control" name="Original_publishing" id="Original_publishing"
                        value="<?= $Publishing_name; ?>" disabled>
                </div>
                <input type="text" class="form-control" name="Original_publishing" id="Original_publishing"
                    value="<?= $Publishing_name; ?>" hidden>
                <!-- Sub Publishing-->
                <div class="mb-4">
                    <label for="Sub_publishing" class="form-label">Sub Publishing</label>
                    <input type="text" class="form-control" name="Sub_publishing" id="Sub_publishing"
                        value="<?= $Sub_publishing_name; ?>" disabled>
                </div>
                <input type="text" class="form-control" name="Sub_publishing" id="Sub_publishing"
                    value="<?= $Sub_publishing_name; ?>" hidden>




            </div>
        </div>
        <div class="d-grid">
            <button type="submit" name="submit" class="btn btn-primary btn-block mt-4">Submit</button>
        </div>
    </form>

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
    $(".add-more-composer-popular-name").click(function() {
        var html = $(".copy-composer-popular-name").html();
        $(".after-add-more-composer-popular-name").after(html);
    });

    $("body").on("click", ".remove-composer-popular-name", function() {
        $(this).parents(".input-group").remove();
    });
});
// add and remove new form ipi number
$(document).ready(function() {
    $(".add-more-ipi-number").click(function() {
        var html = $(".copy-ipi-number").html();
        $(".after-add-more-ipi-number").after(html);
    });

    $("body").on("click", ".remove-ipi-number", function() {
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
// add and remove new form mobile phone
$(document).ready(function() {
    $(".add-more-mobile-number").click(function() {
        var html = $(".copy-mobile-number").html();
        $(".after-add-more-mobile-number").after(html);
    });

    $("body").on("click", ".remove-mobile-number", function() {
        $(this).parents(".show_new_form-mobile-number").remove();
    });
});
</script>
<?= $this->endSection(); ?>