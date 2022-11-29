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
    <?php foreach ($Get_customer as $Data) { ?>
    <form action="/Update_data_customer/<?= $Data['ID_CUSTOMER'] ?>" method="POST" autocomplete="off"
        enctype="multipart/form-data">
        <div class="tab-content">
            <div class="tab-pane container-fluid p-4 active" id="Profile">
                <!-- ID Performer -->
                <div class="mb-4">
                    <label for="Id_customer" class="form-label">ID Customer</label>
                    <input type="text" class="form-control" value="<?= $Data['ID_CUSTOMER']; ?>" disabled>
                </div>
                <!-- Code Performer -->
                <div class="mb-4">
                    <label for="Code_customer" class="form-label">Code Customer</label>
                    <input type="text" class="form-control" name="Code_customer" id="Code_customer"
                        value="<?= $Data['CODE_CUSTOMER']; ?>" disabled>
                </div>
                <!-- customer name -->
                <div class="mb-4">
                    <label for="Customer_name" class="form-label">Customer Name</label>
                    <input type="text" class="form-control" name="Customer_name" id="Customer_name"
                        value="<?= $Data['CUSTOMER_NAME']; ?>" autofocus required minlength="2">
                </div>
                <!-- Tax Id Number -->
                <div class="mb-4">
                    <label for="Tax_id_number" class="form-label">Tax ID Number</label>
                    <input type="number" class="form-control" name="Tax_id_number" id="Tax_id_number"
                        value="<?= $Data['TAX_ID_NUMBER']; ?>" disabled>
                </div>
                <?php } ?>
            </div>
            <div class="tab-pane container-fluid p-4 fade" id="Contact">
                <?php foreach ($Get_customer as $Data) { ?>
                <!-- Address -->
                <div class="mb-4">
                    <label for="Address">Address</label>
                    <input type="text" class="form-control" name="Address" id="Address" value="<?= $Data['ADDRESS']; ?>"
                        disabled>
                </div>
                <!-- City -->
                <div class="mb-2">
                    <label for="City" class="form-label">City</label>
                    <input type="text" class="form-control" name="City" id="City" value="<?= $Data['CITY']; ?>"
                        disabled>
                </div>
                <!-- Post code -->
                <div class="mb-4">
                    <label for="Post_code" class="form-label">Post Code</label>
                    <input type="number" class="form-control" name="Post_code" id="Post_code"
                        value="<?= $Data['POST_CODE']; ?>" disabled>
                </div>
                <?php } ?>
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

            </div>

        </div>


        <div class="d-grid">
            <button type="submit" name="submit" class="btn btn-primary btn-block mt-4">Submit</button>
        </div>
    </form>

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
    // add and remove new form popular name
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