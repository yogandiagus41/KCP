<!DOCTYPE html>
<html lang="en">

<head>
    <title>Bootstrap Example</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" />
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js"></script>
    <link rel="stylesheet"
        href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.2.0/css/bootstrap.min.css" />
    <link rel="stylesheet" href="https://cdn.datatables.net/1.12.1/css/dataTables.bootstrap5.min.css" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css" />


    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" rel="stylesheet" />
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.10.0/js/bootstrap-select.min.js"></script>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.10.0/css/bootstrap-select.min.css"
        rel="stylesheet" />

</head>

<body>

    <div class="container mt-3">

        <?php
        $Content = file_get_contents("https://yogandiagus41.github.io/api-wilayah-indonesia/api/provinces.json");
        $Result = json_decode($Content);
        $List_province_temp = [];
        foreach ($Result as $Data => $D) {
            foreach ($D as $E) {
                array_push($List_province_temp, $E);
            }
        }
        $List_province_id = [];
        $List_province = [];
        for ($i = 0; $i < count($List_province_temp); $i++) {
            if ($i % 2 != 0) {
                array_push($List_province, $List_province_temp[$i]);
            } else {
                array_push($List_province_id, $List_province_temp[$i]);
            }
        }

        $List_regencies_temp = [];
        // for ($i = 0; $i < count($List_province_id); $i++) {
        // $Content_regencies = file_get_contents("https://yogandiagus41.github.io/api-wilayah-indonesia/api/regencies/" . $List_province_id[$i] . ".json");
        $Content_regencies = file_get_contents("https://yogandiagus41.github.io/api-wilayah-indonesia/api/regencies/11.json");
        $Result_regencies = json_decode($Content_regencies);

        foreach ($Result_regencies as $Data => $D) {
            foreach ($D as $E) {
                array_push($List_regencies_temp, $E);
            }
        }
        // }
        $List_regencies = [];
        for ($i = 0; $i < count($List_regencies_temp); $i++) {
            if (strlen($List_regencies_temp[$i]) > 4) {
                array_push($List_regencies, $List_regencies_temp[$i]);
            }
        }
        // foreach ($List_regencies as $Data) {
        //     echo ($Data . " | ");
        // }
        ?>


        <div class="form-group">
            <label for="" class="col-sm-2 form-control-label">Provinces</label>
            <div class="col-sm-10">
                <select class="form-control selectpicker" id="provinces" data-live-search="true">
                    <?php
                    foreach ($List_province as $Data) { ?>
                    <option data-tokens="<?= $Data; ?>"><?= $Data; ?></option>
                    <?php
                    }
                    ?>

                </select>
            </div>
        </div>
        <br>
        <br>

        <div class="form-group">
            <label for="" class="col-sm-2 form-control-label">Provinces</label>
            <div class="col-sm-10">
                <select class="form-control selectpicker" id="provinces" data-live-search="true">
                    <?php
                    foreach ($List_regencies as $Data) { ?>
                    <option data-tokens="<?= $Data; ?>"><?= $Data; ?></option>
                    <?php
                    }
                    ?>

                </select>
            </div>
        </div>




        <script>
        $(function() {
            $('.selectpicker').selectpicker();
        });
        </script>
</body>

</html>