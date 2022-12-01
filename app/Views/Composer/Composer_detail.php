<?= $this->extend('Tamplate.php');
$this->section('Content') ?>
<!-- Modal edit photo -->
<div class="modal" id="Modal_edit_photo">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-body">
                <!-- Photo -->
                <?php foreach ($Get_composer as $Data) { ?>
                <form action="/Update_data_composer_photo/<?= $Data['ID_COMPOSER']; ?>" method="POST"
                    enctype="multipart/form-data">
                    <input type="File" class="form-control" name="Photo" id="Photo" value="<?= $Data['PHOTO']; ?>">
                    <div class="d-grid">
                        <button type="submit" name="submit" class="btn btn-primary btn-block mt-4">Update Photo</button>
                    </div>
                </form>
                <?php } ?>
            </div>
        </div>
    </div>
</div>
<!-- Modal edit name -->
<div class="modal" id="Modal_edit_name">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-body">
                <?php foreach ($Get_composer as $Data) { ?>
                <form action="/Update_data_composer_name/<?= $Data['ID_COMPOSER']; ?>" method="POST">
                    <input type="text" class="form-control" name="Name" value="<?= $Data['COMPOSER_ORIGINAL_NAME']; ?>">
                    <div class="d-grid">
                        <button type="submit" name="submit" class="btn btn-primary btn-block mt-4">Update Name</button>
                    </div>
                </form>
                <?php } ?>
            </div>
        </div>
    </div>
</div>
<!-- Modal edit popular name -->
<div class="modal" id="Modal_edit_popular_name">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-body">
                <?php foreach ($Get_composer as $Data) { ?>
                <form action="/Update_data_composer_popular_name/<?= $Data['ID_COMPOSER']; ?>" method="POST">
                    <?php } ?>
                    <?php 
                    if(count($Composer_popular_name[0])==1){
                        foreach ($Composer_popular_name[0] as $Data) {?>
                    <input type="text" class="form-control" name="Composer_popular_name[]" value="<?= $Data; ?>">
                    <?php } ?>
                    <input type="text" class="form-control mt-2" name="Composer_popular_name[]">

                    <?php }else{
                    foreach ($Composer_popular_name[0] as $Data) {?>

                    <input type="text" class="form-control mt-2" name="Composer_popular_name[]" value="<?= $Data; ?>"
                        id="Composer_popular_name">

                    <?php }}?>
                    <div class="d-grid">
                        <button type="submit" name="submit" class="btn btn-primary btn-block mt-4">Update Popular
                            Name</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
<!-- Modal edit status -->
<div class="modal" id="Modal_edit_status">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-body">
                <?php foreach ($Get_composer as $Data) { ?>
                <form action="/Update_data_composer_status/<?= $Data['ID_COMPOSER']; ?>" method="POST">
                    <select class="form-select" name="Status">
                        <option value="Active">Active</option>
                        <option value="Non-Active">Non-Active</option>
                    </select>
                    <div class="d-grid">
                        <button type="submit" name="submit" class="btn btn-primary btn-block mt-4">Update
                            Status</button>
                    </div>
                </form>
                <?php } ?>
            </div>
        </div>
    </div>
</div>
<!-- Modal edit gender -->
<div class="modal" id="Modal_edit_gender">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-body">
                <?php foreach ($Get_composer as $Data) { ?>
                <form action="/Update_data_composer_gender/<?= $Data['ID_COMPOSER']; ?>" method="POST">
                    <select class="form-select" name="Gender">
                        <option value="Male">Male</option>
                        <option value="Female">Female</option>
                    </select>
                    <div class="d-grid">
                        <button type="submit" name="submit" class="btn btn-primary btn-block mt-4">Update
                            Gender</button>
                    </div>
                </form>
                <?php } ?>
            </div>
        </div>
    </div>
</div>
<!-- Modal edit birth place -->
<div class="modal" id="Modal_edit_birth_place">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-body">
                <?php foreach ($Get_composer as $Data) { ?>
                <form action="/Update_data_composer_birth_place/<?= $Data['ID_COMPOSER']; ?>" method="POST">
                    <select class="form-select" name="Birth_place">
                        <option value="Bekasi">Bekasi</option>
                        <option value="Jakarta">Jakarta</option>
                        <option value="Bandung">Bandung</option>
                    </select>
                    <div class="d-grid">
                        <button type="submit" name="submit" class="btn btn-primary btn-block mt-4">Update
                            Birth Place</button>
                    </div>
                </form>
                <?php } ?>
            </div>
        </div>
    </div>
</div>
<!-- Modal edit birth date -->
<div class="modal" id="Modal_edit_birth_date">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-body">
                <?php foreach ($Get_composer as $Data) { ?>
                <form action="/Update_data_composer_birth_date/<?= $Data['ID_COMPOSER']; ?>" method="POST">
                    <input type="date" class="form-control" name="Birth_date">
                    <div class="d-grid">
                        <button type="submit" name="submit" class="btn btn-primary btn-block mt-4">Update
                            Birth Date</button>
                    </div>
                </form>
                <?php } ?>
            </div>
        </div>
    </div>
</div>
<!-- Modal edit IPI Number -->
<div class="modal" id="Modal_edit_ipi_number">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-body">
                <?php foreach ($Get_composer as $Data) { ?>
                <form action="/Update_data_composer_ipi_number/<?= $Data['ID_COMPOSER']; ?>" method="POST">
                    <input type="number" class="form-control" name="IPI_number" value="<?= $Data['IPI_NUMBER']; ?>">
                    <div class="d-grid">
                        <button type="submit" name="submit" class="btn btn-primary btn-block mt-4">Update
                            IPI Number</button>
                    </div>
                </form>
                <?php } ?>
            </div>
        </div>
    </div>
</div>
<!-- Modal edit Identity Number -->
<div class="modal" id="Modal_edit_identity_number">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-body">
                <?php foreach ($Get_composer as $Data) { ?>
                <form action="/Update_data_composer_identity_number/<?= $Data['ID_COMPOSER']; ?>" method="POST">
                    <input type="number" class="form-control" name="Identity_number"
                        value="<?= $Data['IDENTITY_NUMBER']; ?>">
                    <div class="d-grid">
                        <button type="submit" name="submit" class="btn btn-primary btn-block mt-4">Update
                            IPI Number</button>
                    </div>
                </form>
                <?php } ?>
            </div>
        </div>
    </div>
</div>
<!-- Modal edit tax id Number -->
<div class="modal" id="Modal_edit_tax_id_number">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-body">
                <?php foreach ($Get_composer as $Data) { ?>
                <form action="/Update_data_composer_tax_id_number/<?= $Data['ID_COMPOSER']; ?>" method="POST">
                    <input type="number" class="form-control" name="Tax_id_number"
                        value="<?= $Data['TAX_ID_NUMBER']; ?>">
                    <div class="d-grid">
                        <button type="submit" name="submit" class="btn btn-primary btn-block mt-4">Update
                            IPI Number</button>
                    </div>
                </form>
                <?php } ?>
            </div>
        </div>
    </div>
</div>



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

    <div class="tab-content">
        <div class="tab-pane container-fluid p-4 active" id="Profile">
            <div class="row mt-4">
                <div class="col-3">

                    <!-- Photo show -->
                    <div class="card mb-1">
                        <div class="card-body">
                            <div class="clearfix">
                                <label for="Phone_number" class="form-label float-start">Photo</label>
                                <a class="float-end" style="text-decoration: none;" type="button" data-bs-toggle="modal"
                                    data-bs-target="#Modal_edit_photo">Edit Photo</a>
                            </div>
                            <?php if($Data['PHOTO']){?>
                            <img src="/Photo/<?= $Data['PHOTO']; ?>" alt="" width="100%" height="90%">
                            <?php } else{?>
                            <img src="/Photo/default.jpg" alt="" width="100%" height="90%">
                            <?php }?>
                        </div>
                    </div>
                </div>

                <div class="col-2">
                    <p>ID Composer</p>
                    <p>Name</p>
                    <p>Popular Name</p>
                    <p>Status</p>
                </div>
                <div class="col-1">
                    <p>:</p>
                    <p>:</p>
                    <p>:</p>
                    <p>:</p>
                </div>
                <div class="col-6">
                    <?php foreach ($Get_composer as $Data){?>
                    <!-- ID Composer -->
                    <p><?= $Data['ID_COMPOSER']; ?></p>
                    <!-- Original name -->
                    <p><?= $Data['COMPOSER_ORIGINAL_NAME']; ?> <a style="text-decoration: none; color: #497174;"
                            type="button" data-bs-toggle="modal" data-bs-target="#Modal_edit_name"><svg
                                xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="#497174"
                                class="bi bipencil-square" viewBox="0 0 16 16">
                                <path
                                    d="M15.502 1.94a.5.5 0 0 1 0 .706L14.459 3.69l-2-2L13.502.646a.5.5 0 0 1 .707 0l1.293 1.293zm-1.75 2.456-2-2L4.939 9.21a.5.5 0 0 0-.121.196l-.805 2.414a.25.25 0 0 0 .316.316l2.414-.805a.5.5 0 0 0 .196-.12l6.813-6.814z" />
                                <path fill-rule="evenodd"
                                    d="M1 13.5A1.5 1.5 0 0 0 2.5 15h11a1.5 1.5 0 0 0 1.5-1.5v-6a.5.5 0 0 0-1 0v6a.5.5 0 0 1-.5.5h-11a.5.5 0 0 1-.5-.5v-11a.5.5 0 0 1 .5-.5H9a.5.5 0 0 0 0-1H2.5A1.5 1.5 0 0 0 1 2.5v11z" />
                            </svg></a>
                    </p>
                    <!-- Popular name -->
                    <p><?= $Data['COMPOSER_POPULAR_NAME']; ?> <a style="text-decoration: none; color: #497174;"
                            type="button" data-bs-toggle="modal" data-bs-target="#Modal_edit_popular_name"><svg
                                xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="#497174"
                                class="bi bipencil-square" viewBox="0 0 16 16">
                                <path
                                    d="M15.502 1.94a.5.5 0 0 1 0 .706L14.459 3.69l-2-2L13.502.646a.5.5 0 0 1 .707 0l1.293 1.293zm-1.75 2.456-2-2L4.939 9.21a.5.5 0 0 0-.121.196l-.805 2.414a.25.25 0 0 0 .316.316l2.414-.805a.5.5 0 0 0 .196-.12l6.813-6.814z" />
                                <path fill-rule="evenodd"
                                    d="M1 13.5A1.5 1.5 0 0 0 2.5 15h11a1.5 1.5 0 0 0 1.5-1.5v-6a.5.5 0 0 0-1 0v6a.5.5 0 0 1-.5.5h-11a.5.5 0 0 1-.5-.5v-11a.5.5 0 0 1 .5-.5H9a.5.5 0 0 0 0-1H2.5A1.5 1.5 0 0 0 1 2.5v11z" />
                            </svg></a></p>
                    <!-- Status -->
                    <?php if($Data['STATUS']){?>
                    <p><?= $Data['STATUS']; ?> <a style="text-decoration: none; color: #497174;" type="button"
                            data-bs-toggle="modal" data-bs-target="#Modal_edit_status"><svg
                                xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="#497174"
                                class="bi bipencil-square" viewBox="0 0 16 16">
                                <path
                                    d="M15.502 1.94a.5.5 0 0 1 0 .706L14.459 3.69l-2-2L13.502.646a.5.5 0 0 1 .707 0l1.293 1.293zm-1.75 2.456-2-2L4.939 9.21a.5.5 0 0 0-.121.196l-.805 2.414a.25.25 0 0 0 .316.316l2.414-.805a.5.5 0 0 0 .196-.12l6.813-6.814z" />
                                <path fill-rule="evenodd"
                                    d="M1 13.5A1.5 1.5 0 0 0 2.5 15h11a1.5 1.5 0 0 0 1.5-1.5v-6a.5.5 0 0 0-1 0v6a.5.5 0 0 1-.5.5h-11a.5.5 0 0 1-.5-.5v-11a.5.5 0 0 1 .5-.5H9a.5.5 0 0 0 0-1H2.5A1.5 1.5 0 0 0 1 2.5v11z" />
                            </svg></a>
                    </p>
                    <?php } else { ?>
                    <p><a style="text-decoration: none; color: #497174;" type="button" data-bs-toggle="modal"
                            data-bs-target="#Modal_edit_status">Edit Status</a></p>
                    <?php }
                        } ?>
                </div>
            </div>


        </div>
        <div class="tab-pane container-fluid p-4 fade" id="Identity">
            <?php foreach ($Get_composer as $Data) { ?>
            <div class="row">
                <div class="col-3">
                    <p>Gender</p>
                    <p>Birth Place</p>
                    <p>Birth Date</p>
                    <p>IPI Number</p>
                    <p>Identity Number</p>
                    <p>Tax ID Number</p>
                </div>
                <div class="col-1">
                    <p>:</p>
                    <p>:</p>
                    <p>:</p>
                    <p>:</p>
                    <p>:</p>
                    <p>:</p>
                </div>
                <div class="col-8">
                    <!-- Gender -->
                    <p><?= $Data['GENDER']; ?>
                        <a style="text-decoration: none; color: #497174;" type="button" data-bs-toggle="modal"
                            data-bs-target="#Modal_edit_gender"><svg xmlns="http://www.w3.org/2000/svg" width="20"
                                height="20" fill="#497174" class="bi bipencil-square" viewBox="0 0 16 16">
                                <path
                                    d="M15.502 1.94a.5.5 0 0 1 0 .706L14.459 3.69l-2-2L13.502.646a.5.5 0 0 1 .707 0l1.293 1.293zm-1.75 2.456-2-2L4.939 9.21a.5.5 0 0 0-.121.196l-.805 2.414a.25.25 0 0 0 .316.316l2.414-.805a.5.5 0 0 0 .196-.12l6.813-6.814z" />
                                <path fill-rule="evenodd"
                                    d="M1 13.5A1.5 1.5 0 0 0 2.5 15h11a1.5 1.5 0 0 0 1.5-1.5v-6a.5.5 0 0 0-1 0v6a.5.5 0 0 1-.5.5h-11a.5.5 0 0 1-.5-.5v-11a.5.5 0 0 1 .5-.5H9a.5.5 0 0 0 0-1H2.5A1.5 1.5 0 0 0 1 2.5v11z" />
                            </svg></a>
                    </p>
                    <p><?= $Data['BIRTH_PLACE']; ?>
                        <a style="text-decoration: none; color: #497174;" type="button" data-bs-toggle="modal"
                            data-bs-target="#Modal_edit_birth_place"><svg xmlns="http://www.w3.org/2000/svg" width="20"
                                height="20" fill="#497174" class="bi bipencil-square" viewBox="0 0 16 16">
                                <path
                                    d="M15.502 1.94a.5.5 0 0 1 0 .706L14.459 3.69l-2-2L13.502.646a.5.5 0 0 1 .707 0l1.293 1.293zm-1.75 2.456-2-2L4.939 9.21a.5.5 0 0 0-.121.196l-.805 2.414a.25.25 0 0 0 .316.316l2.414-.805a.5.5 0 0 0 .196-.12l6.813-6.814z" />
                                <path fill-rule="evenodd"
                                    d="M1 13.5A1.5 1.5 0 0 0 2.5 15h11a1.5 1.5 0 0 0 1.5-1.5v-6a.5.5 0 0 0-1 0v6a.5.5 0 0 1-.5.5h-11a.5.5 0 0 1-.5-.5v-11a.5.5 0 0 1 .5-.5H9a.5.5 0 0 0 0-1H2.5A1.5 1.5 0 0 0 1 2.5v11z" />
                            </svg></a>
                    </p>
                    <p><?= $Data['BIRTH_DATE']; ?>
                        <a style="text-decoration: none; color: #497174;" type="button" data-bs-toggle="modal"
                            data-bs-target="#Modal_edit_birth_date"><svg xmlns="http://www.w3.org/2000/svg" width="20"
                                height="20" fill="#497174" class="bi bipencil-square" viewBox="0 0 16 16">
                                <path
                                    d="M15.502 1.94a.5.5 0 0 1 0 .706L14.459 3.69l-2-2L13.502.646a.5.5 0 0 1 .707 0l1.293 1.293zm-1.75 2.456-2-2L4.939 9.21a.5.5 0 0 0-.121.196l-.805 2.414a.25.25 0 0 0 .316.316l2.414-.805a.5.5 0 0 0 .196-.12l6.813-6.814z" />
                                <path fill-rule="evenodd"
                                    d="M1 13.5A1.5 1.5 0 0 0 2.5 15h11a1.5 1.5 0 0 0 1.5-1.5v-6a.5.5 0 0 0-1 0v6a.5.5 0 0 1-.5.5h-11a.5.5 0 0 1-.5-.5v-11a.5.5 0 0 1 .5-.5H9a.5.5 0 0 0 0-1H2.5A1.5 1.5 0 0 0 1 2.5v11z" />
                            </svg></a>
                    </p>
                    <p><?= $Data['IPI_NUMBER']; ?>
                        <a style="text-decoration: none; color: #497174;" type="button" data-bs-toggle="modal"
                            data-bs-target="#Modal_edit_ipi_number"><svg xmlns="http://www.w3.org/2000/svg" width="20"
                                height="20" fill="#497174" class="bi bipencil-square" viewBox="0 0 16 16">
                                <path
                                    d="M15.502 1.94a.5.5 0 0 1 0 .706L14.459 3.69l-2-2L13.502.646a.5.5 0 0 1 .707 0l1.293 1.293zm-1.75 2.456-2-2L4.939 9.21a.5.5 0 0 0-.121.196l-.805 2.414a.25.25 0 0 0 .316.316l2.414-.805a.5.5 0 0 0 .196-.12l6.813-6.814z" />
                                <path fill-rule="evenodd"
                                    d="M1 13.5A1.5 1.5 0 0 0 2.5 15h11a1.5 1.5 0 0 0 1.5-1.5v-6a.5.5 0 0 0-1 0v6a.5.5 0 0 1-.5.5h-11a.5.5 0 0 1-.5-.5v-11a.5.5 0 0 1 .5-.5H9a.5.5 0 0 0 0-1H2.5A1.5 1.5 0 0 0 1 2.5v11z" />
                            </svg></a>
                    </p>
                    <p><?= $Data['IDENTITY_NUMBER']; ?>
                        <a style="text-decoration: none; color: #497174;" type="button" data-bs-toggle="modal"
                            data-bs-target="#Modal_edit_identity_number"><svg xmlns="http://www.w3.org/2000/svg"
                                width="20" height="20" fill="#497174" class="bi bipencil-square" viewBox="0 0 16 16">
                                <path
                                    d="M15.502 1.94a.5.5 0 0 1 0 .706L14.459 3.69l-2-2L13.502.646a.5.5 0 0 1 .707 0l1.293 1.293zm-1.75 2.456-2-2L4.939 9.21a.5.5 0 0 0-.121.196l-.805 2.414a.25.25 0 0 0 .316.316l2.414-.805a.5.5 0 0 0 .196-.12l6.813-6.814z" />
                                <path fill-rule="evenodd"
                                    d="M1 13.5A1.5 1.5 0 0 0 2.5 15h11a1.5 1.5 0 0 0 1.5-1.5v-6a.5.5 0 0 0-1 0v6a.5.5 0 0 1-.5.5h-11a.5.5 0 0 1-.5-.5v-11a.5.5 0 0 1 .5-.5H9a.5.5 0 0 0 0-1H2.5A1.5 1.5 0 0 0 1 2.5v11z" />
                            </svg></a>
                    </p>
                    <p><?= $Data['TAX_ID_NUMBER']; ?>
                        <a style="text-decoration: none; color: #497174;" type="button" data-bs-toggle="modal"
                            data-bs-target="#Modal_edit_tax_id_number"><svg xmlns="http://www.w3.org/2000/svg"
                                width="20" height="20" fill="#497174" class="bi bipencil-square" viewBox="0 0 16 16">
                                <path
                                    d="M15.502 1.94a.5.5 0 0 1 0 .706L14.459 3.69l-2-2L13.502.646a.5.5 0 0 1 .707 0l1.293 1.293zm-1.75 2.456-2-2L4.939 9.21a.5.5 0 0 0-.121.196l-.805 2.414a.25.25 0 0 0 .316.316l2.414-.805a.5.5 0 0 0 .196-.12l6.813-6.814z" />
                                <path fill-rule="evenodd"
                                    d="M1 13.5A1.5 1.5 0 0 0 2.5 15h11a1.5 1.5 0 0 0 1.5-1.5v-6a.5.5 0 0 0-1 0v6a.5.5 0 0 1-.5.5h-11a.5.5 0 0 1-.5-.5v-11a.5.5 0 0 1 .5-.5H9a.5.5 0 0 0 0-1H2.5A1.5 1.5 0 0 0 1 2.5v11z" />
                            </svg></a>
                    </p>

                </div>
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
            <input type="text" class="form-control" name="Address" id="Address" value="<?= $Data['ADDRESS']; ?>" hidden>
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
                <input type="text" class="form-control" name="City" id="City" value="<?= $Data['CITY']; ?>" disabled>
            </div>
            <input type="text" class="form-control" name="City" id="City" value="<?= $Data['CITY']; ?>" hidden>
            <!-- Country -->
            <div class="mb-4">
                <label for="Country" class="form-label">Country</label>
                <input type="text" class="form-control" name="Country" id="Country" value="<?= $Data['COUNTRY']; ?>"
                    disabled>
            </div>
            <input type="text" class="form-control" name="Country" id="Country" value="<?= $Data['COUNTRY']; ?>" hidden>
            <!-- Post code -->
            <div class="mb-4">
                <label for="Post_code" class="form-label">Post Code</label>
                <input type="text" class="form-control" name="Post_code" id="Post_code"
                    value="<?= $Data['POST_CODE']; ?>" disabled>
            </div>
            <input type="text" class="form-control" name="Post_code" id="Post_code" value="<?= $Data['POST_CODE']; ?>"
                hidden>
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
            <input type="text" class="form-control" name="Bank_name" id="Bank_name" value="<?= $Data['BANK_NAME']; ?>"
                hidden>
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
            <input type="text" class="form-control" name="Branch" id="Branch" value="<?= $Data['BRANCH']; ?>" hidden>

            <?php } ?>

        </div>
        <div class="tab-pane container-fluid p-4 fade" id="Other">
            <?php foreach ($Get_composer as $Data) { ?>


            <!-- CMO name-->
            <div class="mb-4">
                <label for="CMO_name" class="form-label">CMO Name</label>
                <input type="text" class="form-control" name="CMO_name" id="CMO_name" value="<?= $Data['CMO_NAME']; ?>"
                    disabled>
            </div>
            <input type="text" class="form-control" name="CMO_name" id="CMO_name" value="<?= $Data['CMO_NAME']; ?>"
                hidden>

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
            <?php } ?>
        </div>
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