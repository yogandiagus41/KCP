<?= $this->extend('Tamplate.php');
$this->section('Content') ?>
<div class="modal" id="Modal_create_publishing">
    <div class="modal-dialog modal-dialog-scrollable modal-xl">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title">Create New Data Publishing</h4>
                <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
            </div>


            <div class="modal-body">
                <form action="/Create_data_publishing" method="POST" autocomplete="off" enctype="multipart/form-data">
                    <!-- ID Composer -->
                    <div class="mb-4">
                        <label for="Id_publishing" class="form-label">ID Publishing</label>
                        <input type="text" class="form-control" name="Id_publishing" id="Id_publishing"
                            value="<?= $Last_id_publishing; ?>" readonly>
                    </div>
                    <!-- Original name -->
                    <div class="mb-4">
                        <label for="Publishing_original_name" class="form-label">Original Name</label>
                        <input type="text" class="form-control" name="Publishing_original_name"
                            id="Publishing_original_name" autofocus required minlength="2">
                    </div>
                    <!-- Alias name -->
                    <label for="Publishing_alias_name" class="form-label">Alias Name </label>
                    <div class="mb-2">
                        <input type="text" class="form-control" name="Publishing_alias_name[]"
                            placeholder="Popular Name 1 (Optional)" id="Publishing_alias_name">
                    </div>
                    <div class="mb-4">
                        <input type="text" class="form-control" name="Publishing_alias_name[]"
                            placeholder="Popular Name 2 (Optional)" id="Publishing_alias_name">

                    </div>
                    <!-- Phone number -->
                    <div class="mb-4">
                        <label for="Phone_number" class="form-label">Phone Number</label>
                        <div class="row">
                            <div class="col">
                                <div class="input-group">
                                    <button class="btn btn-success btn-sm add-more-phone-number"
                                        type="button">Add</button>
                                    <input type="number" class="form-control" name="Phone_number[]"
                                        placeholder="Your number" id="Phone_number">
                                </div>
                            </div>
                            <div class="col">
                                <input type="text" class="form-control" placeholder="Subject"
                                    name="Subject_phone_number[]" id="Subject_phone_number">
                            </div>
                        </div>
                        <div class="after-add-more-phone-number"></div>
                    </div>
                    <!-- Address -->
                    <label for="Address">Address</label>
                    <textarea class="form-control" rows="5" id="Address" name="Address"></textarea>

                    <!-- City -->
                    <div class="mb-2">
                        <label for="City" class="form-label">City</label>
                        <input type="text" class="form-control" name="City" id="City" required minlength="2">
                    </div>

                    <!-- Post code -->
                    <div class="mb-2">
                        <label for="Post_code" class="form-label">Post Code</label>
                        <input type="number" class="form-control" name="Post_code" id="Post_code" required>
                    </div>

                    <!-- Country -->
                    <div class="mb-2">
                        <label for="Country" class="form-label">Country</label>
                        <input type="text" class="form-control" name="Country" id="Country" required minlength="2">
                    </div>

                    <!-- SIUP number -->
                    <div class="mb-2">
                        <label for="SIUP_number" class="form-label">SIUP Number</label>
                        <input type="number" class="form-control" name="SIUP_number" id="SIUP_number" required>
                    </div>
                    <!-- Tax Id Number -->
                    <div class="mb-2">
                        <label for="Tax_id_number" class="form-label">Tax ID Number</label>
                        <input type="number" class="form-control" name="Tax_id_number" id="Tax_id_number" required>
                    </div>
                    <!-- Swift Code -->
                    <div class="mb-2">
                        <label for="Swift_code" class="form-label">Swift_code</label>
                        <input type="number" class="form-control" name="Swift_code" id="Swift_code" required>
                    </div>

                    <!-- Mech Share -->
                    <div class="mb-2">
                        <label for="Mech_share" class="form-label">Mech Share</label>
                        <input type="number" class="form-control" name="Mech_share" id="Mech_share" required>
                    </div>

                    <!-- Sync Share -->
                    <div class="mb-2">
                        <label for="Sync_share" class="form-label">Sync Share</label>
                        <input type="number" class="form-control" name="Sync_share" id="Sync_share" required>
                    </div>

                    <!-- Lyric Share -->
                    <div class="mb-2">
                        <label for="Lyric_share" class="form-label">Lyric Share</label>
                        <input type="number" class="form-control" name="Lyric_share" id="Lyric_share" required>
                    </div>

                    <!-- Performance Share -->
                    <div class="mb-2">
                        <label for="Performance_share" class="form-label">Performance Share</label>
                        <input type="number" class="form-control" name="Performance_share" id="Performance_share"
                            required>
                    </div>

                    <!-- Territory -->
                    <div class="mb-2">
                        <label for="Territory" class="form-label">Territory</label>
                        <input type="number" class="form-control" name="Territory" id="Territory" required>
                    </div>


                    <!-- IP Base -->
                    <div class="mb-2">
                        <label for="Ip_base" class="form-label">IP Base</label>
                        <input type="number" class="form-control" name="Ip_base" id="Ip_base" required>
                    </div>
                    <!-- Bank name -->
                    <div class="mb-2">
                        <label for="Bank_name" class="form-label">Bank Name</label>
                        <select class="form-select" id="Bank_name" name="Bank_name">
                            <option value="BCA">BCA</option>
                            <option value="BNI">BNI</option>
                            <option value="BRI">BRI</option>
                            <option value="CIMB">CIMB</option>
                            <option value="Mandiri">Mandiri</option>

                        </select>
                    </div>

                    <!-- Bank account name -->
                    <div class="mb-2">
                        <label for="Bank_account_name" class="form-label">Bank Account Name</label>
                        <input type="text" class="form-control" name="Bank_account_name" id="Bank_account_name" required
                            minlength="2">
                    </div>

                    <!-- Bank account number -->
                    <div class="mb-2">
                        <label for="Bank_account_number" class="form-label">Bank Account Number</label>
                        <input type="number" class="form-control" name="Bank_account_number" id="Bank_account_number"
                            required>
                    </div>



                    <!--Bank Address -->
                    <label for="Bank_address">Bank Address</label>
                    <textarea class="form-control" rows="5" id="Bank_address" name="Bank_address"></textarea>

                    <!-- Branch -->
                    <div class="mb-2">
                        <label for="Branch" class="form-label">Branch</label>
                        <input type="text" class="form-control" name="Branch" id="Branch" required minlength="2">
                    </div>

                    <!-- IP Name -->
                    <div class="mb-2">
                        <label for="Ip_name" class="form-label">IP Name</label>
                        <input type="text" class="form-control" name="Ip_name" id="Ip_name" required>
                    </div>


                    <div class="d-grid">
                        <button type="submit" name="submit" class="btn btn-primary btn-block mt-4">Submit</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

<!-- Add other Phone number-->
<div class="copy-phone-number" hidden>
    <div class="row show_new_form-phone-number">
        <div class="col">
            <div class="input-group mt-2">
                <button class="btn btn-danger btn-sm remove-phone-number" type="button">Remove</button>
                <input type="number" class="form-control" name="Phone_number[]" placeholder="Your number">
            </div>
        </div>
        <div class="col">
            <input type="text" class="form-control mt-2" placeholder="Subject_phone_number"
                name="Subject_phone_number[]">
        </div>
    </div>
</div>

<div class="card p-4 border-0 shadow">
    <div class="row">
        <ul class="pagination justify-content-end" style="margin:20px 0">
            <button type="button" class="btn btn-primary add-more" data-bs-toggle="modal"
                data-bs-target="#Modal_create_publishing">Create New Data Publishing</button>

        </ul>
    </div>
    <div class="card">
        <div class="card-body">
            <table id="example" class="display" style="width: 100%">

                <thead class="mt-4">

                    <tr>
                        <th>NO</th>
                        <th>NAME</th>
                        <th>ID PUBLISHING</th>
                        <th>COUNTRY</th>
                        <th>ACTION</th>
                    </tr>
                </thead>
                <tbody class="mt-4">
                    <?php
                    $No = 1;
                    foreach ($Get_data_publishing as $Data) {

                    ?>
                    <tr>
                        <td><?= $No; ?></td>
                        <td><?= $Data['PUBLISHING_ORIGINAL_NAME']; ?></td>
                        <td><?= $Data['ID_PUBLISHING']; ?></td>
                        <td><?= $Data['COUNTRY']; ?></td>
                        <td style="padding-left: 5px;"><a href="/Publishing/Detail/<?= $Data['ID_PUBLISHING']; ?>"><svg
                                    xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="#497174"
                                    class="bi bipencil-square" viewBox="0 0 16 16">
                                    <path
                                        d="M15.502 1.94a.5.5 0 0 1 0 .706L14.459 3.69l-2-2L13.502.646a.5.5 0 0 1 .707 0l1.293 1.293zm-1.75 2.456-2-2L4.939 9.21a.5.5 0 0 0-.121.196l-.805 2.414a.25.25 0 0 0 .316.316l2.414-.805a.5.5 0 0 0 .196-.12l6.813-6.814z" />
                                    <path fill-rule="evenodd"
                                        d="M1 13.5A1.5 1.5 0 0 0 2.5 15h11a1.5 1.5 0 0 0 1.5-1.5v-6a.5.5 0 0 0-1 0v6a.5.5 0 0 1-.5.5h-11a.5.5 0 0 1-.5-.5v-11a.5.5 0 0 1 .5-.5H9a.5.5 0 0 0 0-1H2.5A1.5 1.5 0 0 0 1 2.5v11z" />
                                </svg></a> | <a href="Publishing/Delete/<?= $Data['ID_PUBLISHING']; ?>"
                                onclick="return confirm('Apakah anda yakin ingin menghapus data <?= $Data['PUBLISHING_ORIGINAL_NAME']; ?> ?');"><svg
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