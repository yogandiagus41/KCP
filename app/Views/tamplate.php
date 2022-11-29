<!DOCTYPE html>
<html>

<head>
    <title>KCP | <?= user()->username ?> | <?= $Url; ?></title>
    <!-- font cdn -->
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@500&family=Ubuntu&display=swap" rel="stylesheet" />

    <!-- Bootstrap, Data Table and JQuery CDN -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" />
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js"></script>
    <link rel="stylesheet"
        href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.2.0/css/bootstrap.min.css" />
    <link rel="stylesheet" href="https://cdn.datatables.net/1.12.1/css/dataTables.bootstrap5.min.css" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css" />

    <!-- select search cdn -->
    <!-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" rel="stylesheet" />
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.10.0/js/bootstrap-select.min.js"></script>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.10.0/css/bootstrap-select.min.css"
        rel="stylesheet" /> -->






    <style>
    /* color 1 = #EFF5F5 */
    /* color 2 = #D6E4E5 */
    /* color 3 = #497174 */
    /* color 4 = #EB6440 */
    body {
        font-family: "Ubuntu", sans-serif;
        background-color: #eff5f5;
    }

    .sidenav {
        height: 100%;
        width: 250px;
        position: fixed;
        z-index: 1;
        top: 0;
        left: 0;
        background-color: #497174;
        overflow-x: hidden;
        transition: 0.5s;
        padding-top: 30px;
    }

    #main {
        transition: margin-left 0.5s;
        margin-left: 250px;
        padding: 16px;
    }

    .button1 {
        padding-left: 20px;
        padding-right: 20px;
        padding-top: 10px;
        padding-bottom: 10px;
        background-color: #eb6440;
        color: white;
        border: none;
        border-radius: 10px;
    }

    .button1:hover {
        background-color: #497174;
    }

    .button2 {
        padding-left: 20px;
        padding-right: 20px;
        padding-top: 10px;
        padding-bottom: 10px;
        margin-left: 100px;
        background-color: #eb6440;
        color: white;
        border: none;
        border-radius: 10px;
    }

    .button2:hover {
        background-color: #eff5f5;
        color: #497174;
    }

    .main_text_sidebar:hover {
        color: #eff5f5;
    }

    .submain_text_sidebar {
        color: #d6e4e5;
        text-decoration: none;
    }

    .submain_text_sidebar:hover {
        color: #eff5f5;
    }

    @media screen and (max-height: 450px) {
        .sidenav {
            padding-top: 15px;
        }
    }
    </style>
</head>

<body>
    <div id="mySidenav" class="sidenav shadow-lg">
        <div class="container-fluid">
            <div class="d-grid mb-4">
                <button type="button" class="btn btn-warning btn-block" id="buttonCloseSidebar" onclick="closeNav()">
                    Close Menu
                </button>
            </div>
            <!-- input data  -->
            <?php if (in_groups("Admin")) { ?>
            <button type="button" class="btn btn-link mb-3 mt-4" data-bs-toggle="collapse" data-bs-target="#input_data"
                title="Input Data" style="color: #d6e4e5; text-decoration: none">
                <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor"
                    class=" bi bi-file-earmark-plus" viewBox="0 0 16 16">
                    <path
                        d="M8 6.5a.5.5 0 0 1 .5.5v1.5H10a.5.5 0 0 1 0 1H8.5V11a.5.5 0 0 1-1 0V9.5H6a.5.5 0 0 1 0-1h1.5V7a.5.5 0 0 1 .5-.5z" />
                    <path
                        d="M14 4.5V14a2 2 0 0 1-2 2H4a2 2 0 0 1-2-2V2a2 2 0 0 1 2-2h5.5L14 4.5zm-3 0A1.5 1.5 0 0 1 9.5 3V1H4a1 1 0 0 0-1 1v12a1 1 0 0 0 1 1h8a1 1 0 0 0 1-1V4.5h-2z" />
                </svg>
                <span style="color: #497174">asd</span>
                <span class="main_text_sidebar" id="itemSidebarInputData">Master Data
                </span>
            </button>

            <div id="input_data" class="collapse mb-4 acti">

                <ul>
                    <a href="/Composer" class="submain_text_sidebar" id="subItemSidebarInputData1"
                        title="Composer"><span>Composer</span></a>
                </ul>

                <ul>
                    <a href="/Publishing" class="submain_text_sidebar" id="subItemSidebarInputData2"
                        title="Publishing"><span>Publishing</span></a>
                </ul>

                <ul>
                    <a href="/Performer" class="submain_text_sidebar" id="subItemSidebarInputData3"
                        title="Performer"><span>Performer</span></a>
                </ul>

                <ul>
                    <a href="/Customer" class="submain_text_sidebar" id="subItemSidebarInputData4"
                        title="Customer"><span>Customer</span></a>
                </ul>
                <ul>
                    <a href="/Contract" class="submain_text_sidebar" id="subItemSidebarInputData5"
                        title="Contract"><span>Contract</span></a>
                </ul>

            </div>

            <!-- mport excel -->
            <a href="User_management">
                <button type="button" class="btn btn-link mb-3" style="color: #d6e4e5; text-decoration: none"
                    title="User Management">
                    <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor"
                        class="bi bi-kanban" viewBox="0 0 16 16">
                        <path
                            d="M13.5 1a1 1 0 0 1 1 1v12a1 1 0 0 1-1 1h-11a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1h11zm-11-1a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h11a2 2 0 0 0 2-2V2a2 2 0 0 0-2-2h-11z" />
                        <path
                            d="M6.5 3a1 1 0 0 1 1-1h1a1 1 0 0 1 1 1v3a1 1 0 0 1-1 1h-1a1 1 0 0 1-1-1V3zm-4 0a1 1 0 0 1 1-1h1a1 1 0 0 1 1 1v7a1 1 0 0 1-1 1h-1a1 1 0 0 1-1-1V3zm8 0a1 1 0 0 1 1-1h1a1 1 0 0 1 1 1v10a1 1 0 0 1-1 1h-1a1 1 0 0 1-1-1V3z" />
                    </svg>
                    <span style="color: #497174">asd</span>
                    <span class="main_text_sidebar" id="itemSidebarImportExcel">User Management</span>
                </button>
            </a>
            <?php } ?>

            <!-- transaction -->

            <button type="button" class="btn btn-link mb-3" style="color: #d6e4e5; text-decoration: none"
                title="Transaction">
                <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor"
                    class="bi bi-calculator" viewBox="0 0 16 16">
                    <path
                        d="M12 1a1 1 0 0 1 1 1v12a1 1 0 0 1-1 1H4a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1h8zM4 0a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h8a2 2 0 0 0 2-2V2a2 2 0 0 0-2-2H4z" />
                    <path
                        d="M4 2.5a.5.5 0 0 1 .5-.5h7a.5.5 0 0 1 .5.5v2a.5.5 0 0 1-.5.5h-7a.5.5 0 0 1-.5-.5v-2zm0 4a.5.5 0 0 1 .5-.5h1a.5.5 0 0 1 .5.5v1a.5.5 0 0 1-.5.5h-1a.5.5 0 0 1-.5-.5v-1zm0 3a.5.5 0 0 1 .5-.5h1a.5.5 0 0 1 .5.5v1a.5.5 0 0 1-.5.5h-1a.5.5 0 0 1-.5-.5v-1zm0 3a.5.5 0 0 1 .5-.5h1a.5.5 0 0 1 .5.5v1a.5.5 0 0 1-.5.5h-1a.5.5 0 0 1-.5-.5v-1zm3-6a.5.5 0 0 1 .5-.5h1a.5.5 0 0 1 .5.5v1a.5.5 0 0 1-.5.5h-1a.5.5 0 0 1-.5-.5v-1zm0 3a.5.5 0 0 1 .5-.5h1a.5.5 0 0 1 .5.5v1a.5.5 0 0 1-.5.5h-1a.5.5 0 0 1-.5-.5v-1zm0 3a.5.5 0 0 1 .5-.5h1a.5.5 0 0 1 .5.5v1a.5.5 0 0 1-.5.5h-1a.5.5 0 0 1-.5-.5v-1zm3-6a.5.5 0 0 1 .5-.5h1a.5.5 0 0 1 .5.5v1a.5.5 0 0 1-.5.5h-1a.5.5 0 0 1-.5-.5v-1zm0 3a.5.5 0 0 1 .5-.5h1a.5.5 0 0 1 .5.5v4a.5.5 0 0 1-.5.5h-1a.5.5 0 0 1-.5-.5v-4z" />
                </svg>
                <span style="color: #497174">asd</span>
                <span class="main_text_sidebar" id="itemSidebarTransaction">Transaction</span>
            </button>


            <!-- logout -->
            <a href="/logout">
                <button type="button" class="btn btn-link mb-3" style="color: #d6e4e5; text-decoration: none"
                    title="Logout">
                    <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor"
                        class="bi bi-door-open" viewBox="0 0 16 16">
                        <path d="M8.5 10c-.276 0-.5-.448-.5-1s.224-1 .5-1 .5.448.5 1-.224 1-.5 1z" />
                        <path
                            d="M10.828.122A.5.5 0 0 1 11 .5V1h.5A1.5 1.5 0 0 1 13 2.5V15h1.5a.5.5 0 0 1 0 1h-13a.5.5 0 0 1 0-1H3V1.5a.5.5 0 0 1 .43-.495l7-1a.5.5 0 0 1 .398.117zM11.5 2H11v13h1V2.5a.5.5 0 0 0-.5-.5zM4 1.934V15h6V1.077l-6 .857z" />
                    </svg>
                    <span style="color: #497174">asd</span>
                    <span class="main_text_sidebar" id="itemSidebarLogout">Logout</span>
                </button>
            </a>
        </div>
    </div>

    <div id="main">

        <div class="container-fluid">
            <nav class="navbar navbar-expand-sm bg-light rounded-2 shadow mb-4">
                <div class="container-fluid">
                    <span style="font-size: 25px; cursor: pointer" class="navbar-brand"
                        onclick="openNav()">&#9776;</span>
                    <!-- <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#mynavbar">
                    <span class="navbar-toggler-icon"></span>
                </button> -->
                    <a class="navbar-brand" href="javascript:void(0)">
                        <?= $Url; ?>
                    </a>

                    <div class="collapse navbar-collapse" id="mynavbar">
                        <ul class="navbar-nav me-auto"></ul>
                        <!-- <form class="d-flex">
                            <button class="btn btn-warning" type="button">Logout</button>
                        </form> -->
                    </div>
                </div>
            </nav>
            <div class="row">
                <div class="col">
                    <div class="card border-0" style="background-color: #497174;">
                        <div class="card-body">
                            <?php if (session()->getFlashdata('add')) : ?>
                            <div class="alert alert-success alert-dismissible">
                                <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
                                <strong>Success!</strong> <?php echo (session()->getFlashdata('add')) ?>
                            </div>
                            <?php endif; ?>
                            <?php if (session()->getFlashdata('delete')) : ?>
                            <div class="alert alert-danger alert-dismissible">
                                <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
                                <strong>Success!</strong> <?php echo (session()->getFlashdata('delete')) ?>
                            </div>
                            <?php endif; ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>


        <div class="container-fluid mt-4">
            <?= $this->renderSection('Content'); ?>
        </div>

    </div>

    <script>
    let buttonCloseSidebar = document.querySelector("#buttonCloseSidebar");
    let itemSidebarInputData = document.querySelector(
        "#itemSidebarInputData"
    );
    let subItemSidebarInputData1 = document.querySelector(
        "#subItemSidebarInputData1"
    );
    let subItemSidebarInputData2 = document.querySelector("#subItemSidebarInputData2");
    let subItemSidebarInputData3 = document.querySelector("#subItemSidebarInputData3");
    let subItemSidebarInputData4 = document.querySelector("#subItemSidebarInputData4");
    let itemSidebarImportExcel = document.querySelector(
        "#itemSidebarImportExcel"
    );
    let itemSidebarTransaction = document.querySelector(
        "#itemSidebarTransaction"
    );

    let itemSidebarLogout = document.querySelector("#itemSidebarLogout");

    function openNav() {
        document.getElementById("mySidenav").style.width = "250px";
        document.getElementById("main").style.marginLeft = "250px";
        // buttonCloseSidebar.setAttribute("style", "display:block");
        // itemSidebarInputData.setAttribute("style", "display:block");
        // itemSidebarInputData.setAttribute(
        //     "class",
        //     "d-inline main_text_sidebar"
        // );
        // subItemSidebarInputData1.setAttribute("style", "display:block");
        // subItemSidebarInputData2.setAttribute("style", "display:block");
        // subItemSidebarInputData3.setAttribute("style", "display:block");
        // subItemSidebarInputData4.setAttribute("style", "display:block");

        // itemSidebarImportExcel.setAttribute("style", "display:block");
        // itemSidebarImportExcel.setAttribute(
        //     "class",
        //     "d-inline main_text_sidebar"
        // );
        // itemSidebarTransaction.setAttribute("style", "display:block");
        // itemSidebarTransaction.setAttribute(
        //     "class",
        //     "d-inline main_text_sidebar"
        // );
        // itemSidebarLogout.setAttribute("style", "display:block");
        // itemSidebarLogout.setAttribute("class", "d-inline main_text_sidebar");

    }

    function closeNav() {
        document.getElementById("mySidenav").style.width = "0px";
        document.getElementById("main").style.marginLeft = "0px";
        // buttonCloseSidebar.setAttribute("style", "display:none");
        // itemSidebarInputData.setAttribute("style", "display:none");
        // itemSidebarInputData.setAttribute("class", "main_text_sidebar");
        // subItemSidebarInputData1.setAttribute("style", "display:none");
        // subItemSidebarInputData2.setAttribute("style", "display:none");
        // subItemSidebarInputData3.setAttribute("style", "display:none");
        // subItemSidebarInputData4.setAttribute("style", "display:none");
        // itemSidebarImportExcel.setAttribute("style", "display:none");
        // itemSidebarImportExcel.setAttribute("class", "main_text_sidebar");
        // itemSidebarTransaction.setAttribute("style", "display:none");
        // itemSidebarTransaction.setAttribute("class", "main_text_sidebar");
        // itemSidebarLogout.setAttribute("style", "display:none");
        // itemSidebarLogout.setAttribute("class", "main_text_sidebar");

    }
    </script>
</body>

</html>