<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>Campus site Ecomm</title>

    <!-- Custom fonts for this template -->
    <link href="/adminDash/vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="/adminDash/css/sb-admin-2.min.css" rel="stylesheet">

    <!-- Custom styles for this page -->
    <link href="/adminDash/vendor/datatables/dataTables.bootstrap4.min.css" rel="stylesheet">

</head>

<body id="page-top">

    <!-- Page Wrapper -->
    <div id="wrapper">

        <!-- Sidebar -->
        <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

            <!-- Sidebar - Brand -->
            <a class="sidebar-brand d-flex align-items-center justify-content-center" href="{{route('adminDashboard')}}">
                
                <div class="sidebar-brand-text mx-3">Campus site Ecomm</div>
            </a>

            <!-- Divider -->
            <hr class="sidebar-divider my-0">

            <!-- Nav Item - Dashboard -->
            <li class="nav-item">
                <a class="nav-link" href="{{route('adminDashboard')}}">
                    <i class="fas fa-fw fa-tachometer-alt"></i>
                    <span>ADMIN</span></a>
            </li>

            <!-- Divider -->
            <hr class="sidebar-divider">

            <!-- Heading -->
            

            <!-- Nav Item - Charts -->
            <li class="nav-item active">
                <a class="nav-link" href="{{route('adminDashboard')}}">
                    <i class="fas fa-fw fa-chart-area"></i>
                    <span>Commodities</span></a>
            </li>

            <!-- Nav Item - Tables -->
            <li class="nav-item">
                <a class="nav-link" href="{{route('transactions')}}">
                    <i class="fas fa-fw fa-table"></i>
                    <span>Transaction</span></a>
            </li>

            <li class="nav-item">
                <a class="nav-link" href="{{route('logout')}}">
                <i class="fa fa-sign-out" aria-hidden="true"></i>
                    <span>Logout</span></a>
            </li>

            <!-- Divider -->
            <hr class="sidebar-divider d-none d-md-block">

            <!-- Sidebar Toggler (Sidebar) -->
            <div class="text-center d-none d-md-inline">
                <button class="rounded-circle border-0" id="sidebarToggle"></button>
            </div>

        </ul>
        <!-- End of Sidebar -->

        <!-- Content Wrapper -->
        <div id="content-wrapper" class="d-flex flex-column">

            <!-- Main Content -->
            <div id="content">

                <!-- Topbar -->
                <nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">

                    <!-- Sidebar Toggle (Topbar) -->
                    <form class="form-inline">
                        <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
                            <i class="fa fa-bars"></i>
                        </button>
                    </form>

                 
                    

                </nav>
                <!-- End of Topbar -->

                <!-- Begin Page Content -->
                <div class="container-fluid">

                    <!-- Page Heading -->
                    <h1 class="h3 mb-2 text-gray-800">Commodities</h1>
                    <p class="mb-4">All the Commodities</p>

                    <!-- DataTales Example -->
                    <div class="card shadow mb-4">
                        <div class="card-header py-3">
                            <h6 class="m-0 font-weight-bold text-primary">List</h6>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                    <thead>
                                        <tr>
                                            <th>Commodioty ID</th>
                                            <th>Name</th>
                                            <th>Price</th>
                                            <th>Picture</th>
                                            <th>Quantity</th>
                                            <th>Student ID</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tfoot>
                                        <tr>
                                            <th>Commodioty ID</th>
                                            <th>Name</th>
                                            <th>Price</th>
                                            <th>Picture</th>
                                            <th>Quantity</th>
                                            <th>Student ID</th>
                                            <th>Action</th>
                                        </tr>
                                    </tfoot>
                                    <tbody id="tableId">
                                        @for($i = 0; $i < count($data); $i++)
                                            <tr id="{{$data[$i]['studentId']}}">
                                                <td>{{$data[$i]['commoditiesId']}}</td>
                                                <td>{{$data[$i]['name']}}</td>
                                                <td>{{$data[$i]['price']}}</td>
                                                <td>{{$data[$i]['picture']}}</td>
                                                <td>{{$data[$i]['quantity']}}</td>
                                                <td>{{$data[$i]['studentId']}}</td>
                                                <td><button class="btn btn-danger deleteRecord" data-id="{{$data[$i]['studentId']}}" >Delete</button></td>
                                            </tr>
                                        @endfor                                     
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>

                </div>
                <!-- /.container-fluid -->

            </div>
            <!-- End of Main Content -->

            <!-- Footer -->
            <footer class="sticky-footer bg-white">
                <div class="container my-auto">
                    <div class="copyright text-center my-auto">
                        <span>Copyright &copy; Your Website 2020</span>
                    </div>
                </div>
            </footer>
            <!-- End of Footer -->

        </div>
        <!-- End of Content Wrapper -->

    </div>
    <!-- End of Page Wrapper -->

    <!-- Scroll to Top Button-->
    <a class="scroll-to-top rounded" href="#page-top">
        <i class="fas fa-angle-up"></i>
    </a>

    <!-- Logout Modal-->
    <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
                    <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                </div>
                <div class="modal-body">Select "Logout" below if you are ready to end your current session.</div>
                <div class="modal-footer">
                    <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
                    <a class="btn btn-primary" href="login.html">Logout</a>
                </div>
            </div>
        </div>
    </div>

    <!-- Bootstrap core JavaScript-->
    <script src="/adminDash/vendor/jquery/jquery.min.js"></script>
    <script src="/adminDash/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Core plugin JavaScript-->
    <script src="/adminDash/vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Custom scripts for all pages-->
    <script src="/adminDash/js/sb-admin-2.min.js"></script>

    <!-- Page level plugins -->
    <script src="/adminDash/vendor/datatables/jquery.dataTables.min.js"></script>
    <script src="/adminDash/vendor/datatables/dataTables.bootstrap4.min.js"></script>

    <!-- Page level custom scripts -->
    <script src="/adminDash/js/demo/datatables-demo.js"></script>

</body>

</html>

<script>
    $(".deleteRecord").click(function(){
    var id = $(this).data("id");
    var token = $("meta[name='csrf-token']").attr("content");
   
    $.ajax(
    {
        url: "delete/"+id,
        type: 'get',
        data: {
            "id": id,
            "_token": token,
        },
        success: function (){
            $(`#${id}`).remove();
        }
    });
   
});
</script>