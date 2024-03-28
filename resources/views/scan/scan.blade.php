<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>SB Admin 2 - Dashboard</title>

    <!-- Custom fonts for this template-->
    <link href="{{asset('vendor/fontawesome-free/css/all.min.css')}}" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="{{asset('css')}}/sb-admin-2.min.css" rel="stylesheet">

    <script src="https://cdn.jsdelivr.net/npm/jsqr/dist/jsQR.js"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">


</head>

<body id="page-top">

    <!-- Page Wrapper -->
    <div id="wrapper">
        <!-- Sidebar -->
        <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">
            <!-- Sidebar - Brand -->
            <a class="sidebar-brand d-flex align-items-center justify-content-center" href="{{route('index')}}">
                <div class="sidebar-brand-icon rotate-n-15">
                    <i class="fas fa-laugh-wink"></i>
                </div>
                <div class="sidebar-brand-text mx-3">SB Admin <sup>2</sup></div>
            </a>

            <!-- Divider -->
            <hr class="sidebar-divider my-0">

            <!-- Nav Item - Dashboard -->
            <li class="nav-item active">
                <a class="nav-link" href="{{route('index')}}">
                    <i class="fas fa-fw fa-tachometer-alt"></i>
                    <span>Điểm Danh Sinh Viên</span></a>
            </li>
            <!-- Divider -->
            <hr class="sidebar-divider">

            <!-- Heading -->
            <div class="sidebar-heading">
                Quản Lý DATA
            </div>

            <!-- Nav Item - Pages Collapse Menu -->
            <li class="nav-item">
                <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="true" aria-controls="collapseTwo">
                    <i class="fas fa-fw fa-cog"></i>
                    <span>DATA</span>
                </a>
                <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
                    <div class="bg-white py-2 collapse-inner rounded">
                        <h6 class="collapse-header">DATA</h6>
                        <a class="collapse-item" href="sinhvien">Sinh Viên</a>
                        <a class="collapse-item" href="giangvien">Giảng Viên</a>
                        <a class="collapse-item" href="monhoc">Môn học</a>
                    </div>
                </div>
            </li>
            <!-- Nav Item - Utilities Collapse Menu -->
            <li class="nav-item">
                <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseUtilities" aria-expanded="true" aria-controls="collapseUtilities">
                    <i class="fas fa-fw fa-wrench"></i>
                    <span>Điểm Danh</span>
                </a>
                <div id="collapseUtilities" class="collapse" aria-labelledby="headingUtilities" data-parent="#accordionSidebar">
                    <div class="bg-white py-2 collapse-inner rounded">
                        <h6 class="collapse-header">Điểm Danh</h6>
                        <a class="collapse-item" href="{{route('diemdanh')}}">Quét Mã Điểm Danh</a>
                        <a class="collapse-item" href="{{route('kqdiemdanh')}}">Kết quả điểm danh</a>

                    </div>
                </div>
            </li>

            <hr class="sidebar-divider">

            <div class="text-center d-none d-md-inline">
                <button class="rounded-circle border-0" id="sidebarToggle"></button>
            </div>
        </ul>
        <!-- End of Sidebar -->
        <!-- Content Wrapper -->
        <div id="content-wrapper" class="d-flex flex-column">

            <div id="content">
                <!-- Topbar -->
                <nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">
                    <!-- Sidebar Toggle (Topbar) -->
                    <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
                        <i class="fa fa-bars"></i>
                    </button>

                    <!-- Topbar Navbar -->
                    <ul class="navbar-nav ml-auto">
                        <div class="topbar-divider d-none d-sm-block"></div>

                        <!-- Nav Item - User Information -->
                        <li class="nav-item dropdown no-arrow">
                            <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <span class="mr-2 d-none d-lg-inline text-gray-600 small">Douglas McGee</span>
                                <img class="img-profile rounded-circle" src="{{asset('img/undraw_profile.svg')}}">
                            </a>
                            <!-- Dropdown - User Information -->
                            <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in" aria-labelledby="userDropdown">
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item" href="{{route('dangxuat')}}" data-toggle="modal" data-target="#logoutModal">
                                    <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
                                    Logout
                                </a>
                            </div>
                        </li>

                    </ul>

                </nav>

            </div>
            <!-- Main Content -->
            <div id="content">
                <!-- Begin Page Content -->
                <div class="container-fluid">
                    <!-- Page Heading -->
                    <div class="d-sm-flex align-items-center justify-content-between mb-4">
                        <h1 class="h3 mb-0 text-gray-800">Dashboard</h1>
                    </div>
                    <div class="row">
                        <!-- Area Chart -->
                        <div class="col-xl-6 col-lg-5">
                            <div class="card shadow mb-4">
                                <!-- Card Header - Dropdown -->
                                <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                                    <h6 class="m-0 font-weight-bold text-primary">Quét QR</h6>
                                    <div class="dropdown no-arrow">
                                        <a class="dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                            <i class="fas fa-ellipsis-v fa-sm fa-fw text-gray-400"></i>
                                        </a>
                                    </div>
                                </div>

                                <!-- Card Body -->
                                <div class="card-body">
                                    <div class="container col-lg-4 py-5" style="width: 90%;">
                                        @if(session()->has('thatbai'))
                                        <p style="text-align: center; color:red">Bạn đã điểm danh rồi</p>
                                        @endif

                                        @if(session()->has('thanhcong'))
                                        <p style="text-align: center; color:blue">Thành công</p>
                                        @endif
                                        <div class="card bg-white shadow rounded-3 p-3 border-0">
                                            <video id="preview"></video>
                                            <br></br>
                                            <form action="{{route('diemdanh')}}" method="POST" id="form">
                                                @csrf
                                                <input type="hidden" name="mssv" id="mssv">
                                                <label for="monhoc">Môn:</label>
                                                <select name="cbbmonhoc" id="cbbmonhoc" style="width: 150px;">
                                                    @foreach($mh as $mh)
                                                    <option value="{{ $mh->tenmh }}">{{ $mh->tenmh }}</option>
                                                    @endforeach
                                                </select>
                                                <label for="cbbstatus">Trạng Thái:</label>
                                                <select id="cbbstatus" name="cbbstatus" style="width: 150px;">
                                                    <option value="Vào">Vào</option>
                                                    <option value="Ra">Ra</option>
                                                </select>
                                            </form>
                                        </div>
                                    </div>
                                    <script type="text/javascript" src="https://rawgit.com/schmich/instascan-builds/master/instascan.min.js"></script>
                                    <script type="text/javascript">
                                        let scanner = new Instascan.Scanner({
                                            video: document.getElementById('preview')
                                        });
                                        scanner.addListener('scan', function(content) {
                                            console.log(content);
                                        });
                                        Instascan.Camera.getCameras().then(function(cameras) {
                                            if (cameras.length > 0) {
                                                scanner.start(cameras[0]);
                                            } else {
                                                console.error('No cameras found.');
                                            }
                                        }).catch(function(e) {
                                            console.error(e);
                                        });

                                        scanner.addListener('scan', function(c) {
                                            document.getElementById('mssv').value = c;
                                            document.getElementById('form').submit();
                                        })
                                    </script>
                                </div>
                            </div>
                        </div>
                        <!-- Pie Chart -->
                        <div class="col-xl-6 col-lg-7">
                            <div class="card shadow mb-4">
                                <!-- Card Header - Dropdown -->
                                <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                                    <h6 class="m-0 font-weight-bold text-primary">Kết quả điểm danh</h6>
                                </div>
                                <!-- Card Body -->
                                <div class="card-body">
                                    <div class="table-responsive" style="width: 90%;">
                                        <table class="table table-bordered table-hover">
                                            <thead>
                                                <tr>
                                                    <th>Tên Sinh Viên</th>
                                                    <th>MSSV</th>
                                                    <th>Mon hoc</th>
                                                    <th>Ngay</th>
                                                    <th>Trang thai</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    @foreach($ketquadd as $kq)
                                                    <td>{{$kq->hoten}}</td>
                                                    <td>{{$kq->mssv}}</td>
                                                    <td>{{$kq->monhoc}}</td>
                                                    <td>{{$kq->ngay}}</td>
                                                    <td>{{$kq->trangthai}}</td>
                                                </tr>
                                                @endforeach


                                            </tbody>
                                        </table>

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>

            <!-- End of Main Content -->
            <!-- Footer -->
            <footer class="sticky-footer bg-white">
                <div class="container my-auto">
                    <div class="copyright text-center my-auto">
                        <span>Copyright &copy; Your Website 2021</span>
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

    <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Bạn có chắc muốn thoát không?</h5>
                    <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                </div>
                <div class="modal-body">Chọn "Đăng xuất" để thoát </div>
                <div class="modal-footer">
                    <button class="btn btn-secondary" type="button" data-dismiss="modal">Hủy</button>
                    <a class="btn btn-primary" href="{{route('dangxuat')}}">Đăng xuất</a>
                </div>
            </div>
        </div>
    </div>


    <!-- Bootstrap core JavaScript-->
    <script src="{{asset('vendor/jquery/jquery.min.js')}}"></script>
    <script src="{{asset('vendor/bootstrap/js/bootstrap.bundle.min.js')}}"></script>

    <!-- Core plugin JavaScript-->
    <script src="{{asset('vendor/jquery-easing/jquery.easing.min.js')}}"></script>

    <!-- Custom scripts for all pages-->
    <script src="{{asset('js/sb-admin-2.min.js')}}"></script>

    <!-- Page level plugins -->
    <script src="{{asset('vendor/chart.js/Chart.min.js')}}"></script>

    <!-- Page level custom scripts -->
    <script src="{{asset('js/demo/chart-area-demo.js')}}"></script>
    <script src="{{asset('js/demo/chart-pie-demo.js')}}"></script>
    <script src="{{asset('js/scan.js')}}"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
    <script>
        // Lấy giá trị đã chọn từ Local Storage cho combobox 1
        var selectedValue1 = localStorage.getItem('selectedValue1');

        // Lấy giá trị đã chọn từ Local Storage cho combobox 2
        var selectedValue2 = localStorage.getItem('selectedValue2');

        // Lấy combobox theo ID
        var comboBox1 = document.getElementById('cbbmonhoc');
        var comboBox2 = document.getElementById('cbbstatus');

        // Thiết lập giá trị đã chọn nếu giá trị được lưu trong Local Storage
        if (selectedValue1) {
            cbbmonhoc.value = selectedValue1;
        }

        if (selectedValue2) {
            cbbstatus.value = selectedValue2;
        }

        // Bắt sự kiện khi giá trị của combobox thay đổi
        comboBox1.addEventListener('change', function() {
            // Lưu giá trị đã chọn của combobox 1 vào Local Storage
            localStorage.setItem('selectedValue1', cbbmonhoc.value);
        });

        comboBox2.addEventListener('change', function() {
            // Lưu giá trị đã chọn của combobox 2 vào Local Storage
            localStorage.setItem('selectedValue2', cbbstatus.value);
        });
    </script>
</body>

</html>