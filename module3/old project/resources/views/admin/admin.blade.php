@extends('layouts.main')
@section('content')
    <div class="page-wrapper">

        <center>
            <h1>Hello :Admin_name</h1>
        </center>
        <a href="{{route('show.login')}}">
        <button>Dang Nhap</button></a>
        <center>
            <h1>Danh Sách Sản Phẩm</h1>
        </center>
        <div class="row">
            <div class="col-lg-8">
                <div class="card">
                    <div class="card-body">
                        <h4 class="card-title">Basic Table</h4>
                        <h6 class="card-subtitle">Add class <code>.table</code></h6>
                        <div class="table-responsive">
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th>#</th>
                                        <th>First Name</th>
                                        <th>Last Name</th>
                                        <th>Username</th>
                                        <th>Role</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>1</td>
                                        <td>Deshmukh</td>
                                        <td>Prohaska</td>
                                        <td>@Genelia</td>
                                        <td><span class="label label-danger">admin</span> </td>
                                    </tr>
                                    <tr>
                                        <td>2</td>
                                        <td>Deshmukh</td>
                                        <td>Gaylord</td>
                                        <td>@Ritesh</td>
                                        <td><span class="label label-info">member</span> </td>
                                    </tr>
                                    <tr>
                                        <td>3</td>
                                        <td>Sanghani</td>
                                        <td>Gusikowski</td>
                                        <td>@Govinda</td>
                                        <td><span class="label label-warning">developer</span> </td>
                                    </tr>
                                    <tr>
                                        <td>4</td>
                                        <td>Roshan</td>
                                        <td>Rogahn</td>
                                        <td>@Hritik</td>
                                        <td><span class="label label-success">supporter</span> </td>
                                    </tr>
                                    <tr>
                                        <td>5</td>
                                        <td>Joshi</td>
                                        <td>Hickle</td>
                                        <td>@Maruti</td>
                                        <td><span class="label label-info">member</span> </td>
                                    </tr>
                                    <tr>
                                        <td>6</td>
                                        <td>Nigam</td>
                                        <td>Eichmann</td>
                                        <td>@Sonu</td>
                                        <td><span class="label label-success">supporter</span> </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="card">
                    <div class="card-body">
                        <ul class="navbar-nav mr-auto">
                            <!-- This is  -->
                            <li class="nav-item hidden-sm-up"> <a class="nav-link nav-toggler waves-effect waves-light"
                                    href="javascript:void(0)"><i class="ti-menu"></i></a></li>
                            <!-- ============================================================== -->
                            <!-- Search -->
                            <!-- ============================================================== -->
                            <li class="nav-item search-box"> <a class="nav-link waves-effect waves-dark"
                                    href="javascript:void(0)"><i class="fa fa-search"></i></a>
                                <form class="app-search">
                                    <input type="text" class="form-control" placeholder="Search &amp; enter"> <a
                                        class="srh-btn"><i class="fa fa-times"></i></a>
                                </form>
                            </li>
                        </ul>
                        <h5 class="card-title">Khách hàng đã mua</h5>
                        <h6 class="card-subtitle">hiển thị gần nhất</h6>
                        <div class="card">
                            <div class="card-body">
                                <h4 class="card-title">Basic Table</h4>
                                <h6 class="card-subtitle">Add class <code>.table</code></h6>
                                <div class="table-responsive">
                                    <table class="table">
                                        <thead>
                                            <tr>
                                                <th>#</th>
                                                <th>First Name</th>
                                                <th>Last Name</th>
                                                <th>Username</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>1</td>
                                                <td>Deshmukh</td>
                                                <td>Prohaska</td>
                                                <td>@Genelia</td>
                                            </tr>
                                            <tr>
                                                <td>2</td>
                                                <td>Deshmukh</td>
                                                <td>Gaylord</td>
                                                <td>@Ritesh</td>
                                            </tr>
                                            <tr>
                                                <td>3</td>
                                                <td>Sanghani</td>
                                                <td>Gusikowski</td>
                                                <td>@Govinda</td>
                                            </tr>
                                            <tr>
                                                <td>4</td>
                                                <td>Roshan</td>
                                                <td>Rogahn</td>
                                                <td>@Hritik</td>
                                            </tr>

                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="table-responsive">
            <table class="table table-hover">
                <thead>
                    <tr>
                        <th class="text-center">#</th>
                        <th>NAME</th>
                        <th>DATE</th>
                        <th>PRICE</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td class="text-center">1</td>
                        <td class="txt-oflo">Elite admin</td>
                        <td class="txt-oflo">April 18, 2017</td>
                        <td><span class="text-success">$24</span></td>
                    </tr>
                    <tr>
                        <td class="text-center">2</td>
                        <td class="txt-oflo">Real Homes WP Theme</td>
                        <td class="txt-oflo">April 19, 2017</td>
                        <td><span class="text-info">$1250</span></td>
                    </tr>
                    <tr>
                        <td class="text-center">3</td>
                        <td class="txt-oflo">Ample Admin</td>
                        <td class="txt-oflo">April 19, 2017</td>
                        <td><span class="text-info">$1250</span></td>
                    </tr>
                    <tr>
                        <td class="text-center">4</td>
                        <td class="txt-oflo">Medical Pro WP Theme</td>
                        <td class="txt-oflo">April 20, 2017</td>
                        <td><span class="text-danger">-$24</span></td>
                    </tr>
                    <tr>
                        <td class="text-center">5</td>
                        <td class="txt-oflo">Hosting press html</td>
                        <td class="txt-oflo">April 21, 2017</td>
                        <td><span class="text-success">$24</span></td>
                    </tr>
                    <tr>
                        <td class="text-center">6</td>
                        <td class="txt-oflo">Digital Agency PSD</td>
                        <td class="txt-oflo">April 23, 2017</td>
                        <td><span class="text-danger">-$14</span></td>
                    </tr>
                    <tr>
                        <td class="text-center">7</td>
                        <td class="txt-oflo">Helping Hands WP Theme</td>
                        <td class="txt-oflo">April 22, 2017</td>
                        <td><span class="text-success">$64</span></td>
                    </tr>
                    <tr>
                        <td class="text-center">8</td>
                        <td class="txt-oflo">Helping Hands WP Theme</td>
                        <td class="txt-oflo">April 22, 2017</td>
                        <td><span class="text-success">$64</span></td>
                    </tr>
                    <tr>
                        <td class="text-center">9</td>
                        <td class="txt-oflo">Ample Admin</td>
                        <td class="txt-oflo">April 19, 2017</td>
                        <td><span class="text-info">$1250</span></td>
                    </tr>
                </tbody>
            </table>
        </div>
        <p>kho hàng</p>


    </div>
@endsection
