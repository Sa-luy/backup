<aside class="left-sidebar">
    <div class="d-flex no-block nav-text-box align-items-center">
        <span><img src="{{ asset('admin/img/logo.JPG') }}" alt="elegant admin template" width="50px"></span>
        <a class="waves-effect waves-dark ml-auto hidden-sm-down" href="javascript:void(0)"><i
                class="ti-menu"></i></a>
        <a class="nav-toggler waves-effect waves-dark ml-auto hidden-sm-up" href="javascript:void(0)"><i
                class="ti-menu ti-close"></i></a>
    </div>
    <!-- Sidebar scroll-->
    <div class="scroll-sidebar">
        <!-- Sidebar navigation-->
        <nav class="sidebar-nav">
            <ul id="sidebarnav">
                <li> <a class="waves-effect waves-dark" href="#" aria-expanded="false"><i class="fas fa-home"></i><span
                            class="hide-menu">Dashboard</span></a></li>
                <li> <a class="waves-effect waves-dark" href="{{ route('category.index') }}" aria-expanded="false"><i
                            class="fa fa-user-circle-o"></i><span class="hide-menu">Danh Mục
                            Sản Phẩm
                        </span></a></li>
                <li> <a class="waves-effect waves-dark" href="{{ route('product.index') }}" aria-expanded="false"><i
                            class="fa fa-table"></i><span class="hide-menu"></span>Sản phẩm</a></li>
                <li> <a class="waves-effect waves-dark" href="#" aria-expanded="false"><i
                            class="fa fa-smile-o"></i><span class="hide-menu"></span>Kho hàng</a></li>
                {{-- <li> <a class="waves-effect waves-dark" href="#" aria-expanded="false"><i
                            class="fa fa-table"></i><span class="hide-menu"></span>Sản phẩm Sắp Hết Hạn</a></li> --}}
                <li> <a class="waves-effect waves-dark" href="customer.index" aria-expanded="false"><i
                            class="fa fa-user-circle-o"></i><span class="hide-menu"></span>Khách
                        Hàng</a></li>
                <li> <a class="waves-effect waves-dark" href="order.index" aria-expanded="false"><i
                            class="fa fa-question-circle"></i><span class="hide-menu"></span>Đơn dặt hàng</a></li>

            </ul>
        </nav>
        <!-- End Sidebar navigation -->
    </div>
    <!-- End Sidebar scroll-->
</aside>
