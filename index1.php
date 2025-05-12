<!DOCTYPE html>
<?php include('function.php'); ?>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css"
        integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"
        crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js"
        integrity="sha512-v2CJ7UaYy4JwqLDIrZUI/4hqeoQieOmAZNXBeQyjo21dadnwR+8ZaIJVT8EE2iyI61OV8e6M8PP2/4hpQINQ/g=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>
</head>

<body class="d-flex">
    <!-- Offcanvas Sidebar -->
    <div class="offcanvas offcanvas-start w-25 bg-dark text-white" tabindex="-1" id="sidebar">
        <div class="offcanvas-header">
            <h5 class="offcanvas-title">About Me</h5>
            <button type="button" class="btn-close btn-close-white text-reset" data-bs-dismiss="offcanvas" aria-label="Close"></button>
        </div>
        <div class="offcanvas-body p-0">
            <div class="list-group list-group-flush">
                <a href="#" class="list-group-item list-group-item-action bg-dark text-white border-secondary">
                    <i class="fa-solid fa-store me-2"></i> Topic : Product Information
                </a>
                <a href="#" class="list-group-item list-group-item-action bg-dark text-white border-secondary">
                    <i class="fa-solid fa-user-tie me-2"></i> Name :  Lung Sreypich
                </a>
                <a href="#" class="list-group-item list-group-item-action bg-dark text-white border-secondary">
                    <i class="fa-solid fa-landmark me-2"></i> Class : A6 Year3 Semesster2
                </a>
                <a href="#" class="list-group-item list-group-item-action bg-dark text-white border-secondary">
                    <i class="fa-solid fa-school me-2"></i> School :  Royal University of Phnom Penh
                </a>
            </div>
        </div>
    </div>

    <!-- Main Content -->
    <div class="flex-grow-1">
        <div class="container-fluid bg-dark p-3">
            <div class="d-flex justify-content-between align-items-center">
                <h1 class="text-light m-0">
                    <button class="btn btn-dark" data-bs-toggle="offcanvas" data-bs-target="#sidebar">
                        <i class="fa-solid fa-bars"></i>
                    </button>
                    Product Information
                </h1>
                <button id="openAdd" type="button" class="btn btn-primary" data-bs-toggle="modal"
                    data-bs-target="#exampleModal">
                    <i class="fa-solid fa-plus"></i> Add Product
                </button>
            </div>
        </div>
        
        <!-- Modal -->
        <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="title">Modal title</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <form action="" method="post" enctype="multipart/form-data">
                            <input type="text" name="name" id="name" class="form-control" placeholder="Enter name" required>
                            <input type="text" name="qty" id="qty" class="form-control mt-3" placeholder="Enter qty"
                                required>
                            <input type="text" name="price" id="price" class="form-control  mt-3" placeholder="Enter price"
                                required>
                            <input type="file" name="thumbnail" id="thumbnail" class="form-control  mt-3"
                                placeholder="Choose image">
                            <div class="modal-footer">
                                <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Close</button>
                                <button name="btnSave" id="btnSave" type="submit" class="btn btn-primary">Save</button>
                                <button name="btnUpdate" id="btnUpdate" type="submit"class="btn btn-success">Update</button>
                            </div>
                            <!-- Hide thumbnail -->
                            <input type="hidden" name="hide_thumbnail" id="hide_thumbnail">
                            <!-- Hide Id -->
                            <input type="hidden" name="hide_id" id="hide_id">
                        </form>
                    </div>
                </div>
            </div>
        </div>
        
        <!-- Modal Delete -->
        <div class="modal fade" id="exampleModalDelete" tabindex="-1" aria-labelledby="exampleModalLabel"
            aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title">Are you sure?</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <form action="" method="post" enctype="multipart/form-data">
                            <input type="hidden" name="tmp_id" id="id">
                            <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Cancel</button>
                            <button name="btnDelete" id="btnDelete" type="submit" class="btn btn-primary">Yes,Delete
                                its.</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        
        <div class="container-fluid p-3">
            <table class="table table-dark table-hover align-middle" style="table-layout: fixed;">
                <thead>
                    <tr>
                        <th>Id</th>
                        <th>Name</th>
                        <th>Qty</th>
                        <th>Price</th>
                        <th>Thumbnail</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody>
                    <?php readData(); ?>
                </tbody>
            </table>
        </div>
    </div>
</body>
<script>
    $(document).ready(function () {
        $("#openAdd").click(function () {
            $("#title").text("Enter Product Information");
            $("#btnSave").show();
            $("#btnUpdate").hide();
        });
        
        $("body").on("click", "#openUpdate", function () {
            $("#title").text("Edit Product Information");
            $("#btnSave").hide();
            $("#btnUpdate").show();
            var id = $(this).parents("tr").find("td").eq(0).text();
            var name = $(this).parents("tr").find("td").eq(1).text();
            var qty = $(this).parents("tr").find("td").eq(2).text();
            var price = $(this).parents("tr").find("td").eq(3).text();
            var thumbnail = $(this).parents("tr").find("td:eq(4) img").attr("alt");

            $("#name").val(name);
            $("#qty").val(qty);
            $("#price").val(price);
            $("#hide_thumbnail").val(thumbnail);
            $("#hide_id").val(id);
        });
        
        $("body").on("click", "#openDelete", function () {
            var id = $(this).parents("tr").find("td").eq(0).text();
            $("#id").val(id);
        });
    });
</script>
</html>