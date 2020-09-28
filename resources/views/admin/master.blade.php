<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>@lang('label.admin')</title>

    <link href="{{ asset('admin/vendor/fontawesome-free/css/all.min.css') }}" rel="stylesheet" type="text/css">
    <link href="{{ asset('admin/css/sb-admin-2.min.css') }}" rel="stylesheet">
    <link href="{{ asset('css/index.css') }}" rel="stylesheet">
    <link href="{{ asset('admin/vendor/datatables/dataTables.bootstrap4.min.css') }}" rel="stylesheet">

</head>

    <body id="page-top">

        <div id="wrapper">

            <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

                <a class="sidebar-brand d-flex align-items-center justify-content-center" href="#">
                    <div class="sidebar-brand-icon rotate-n-15">
                    <i class="fas fa-laugh-wink"></i>
                    </div>
                    <div class="sidebar-brand-text mx-3">@lang('label.title')</div>
                </a>

                <li class="nav-item active">
                    <a class="nav-link" href="{{ route('products.index') }}">
                    <i class="fas fa-fw fa-table"></i>
                    <span>@lang('label.product')</span></a>
                </li>
                <li class="nav-item active">
                    <a class="nav-link" href="{{ route('categories.index') }}">
                    <i class="far fa-list-alt"></i>
                    <span>@lang('label.category')</span></a>
                </li>

                <hr class="sidebar-divider d-none d-md-block">

                <div class="text-center d-none d-md-inline">
                    <button class="rounded-circle border-0" id="sidebarToggle"></button>
                </div>

            </ul>

            <div id="content-wrapper" class="d-flex flex-column">

                <div id="content">

                    <nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">

                        <form class="form-inline">
                            <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
                            <i class="fa fa-bars"></i>
                            </button>
                        </form>

                        <div class="select">
                            <a href="{{ route('lang',['lang' => 'vi']) }}">VI</a>
                            <a href="{{ route('lang',['lang' => 'en' ]) }}">EN</a>
                        </div>
                        
                        <ul class="navbar-nav ml-auto">

                            <div class="topbar-divider d-none d-sm-block"></div>

                            <li class="nav-item dropdown no-arrow">
                                <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button" data-toggle="dropdown"
                                    aria-haspopup="true" aria-expanded="false">
                                    <span class="mr-2 d-none d-lg-inline text-gray-600 small">@lang('label.user_name')</span>
                                    <img class="img-profile rounded-circle" src="#">
                                </a>

                                <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in" aria-labelledby="userDropdown">
                                    <a class="dropdown-item" href="#">
                                        <i class="fas fa-user fa-sm fa-fw mr-2 text-gray-400"></i>
                                        @lang('label.profile')
                                    </a>
                                    <a class="dropdown-item" href="#">
                                        <i class="fas fa-cogs fa-sm fa-fw mr-2 text-gray-400"></i>
                                        @lang('label.setting')
                                    </a>
                                    <a class="dropdown-item" href="#">
                                        <i class="fas fa-list fa-sm fa-fw mr-2 text-gray-400"></i>
                                        @lang('label.activity')
                                    </a>
                                    <div class="dropdown-divider"></div>
                                    <a class="dropdown-item" href="#" data-toggle="modal" data-target="#logoutModal">
                                        <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
                                        @lang('label.logout')
                                    </a>
                                </div>
                            </li>

                        </ul>

                    </nav>

                    @yield('content')

                </div>
               
            </div>

        </div>

        <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
            aria-hidden="true">
            <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">@lang('label.leave')</h5>
                <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">×</span>
                </button>
                </div>
                <div class="modal-body">@lang('label.log_out_description')</div>
                <div class="modal-footer">
                <button class="btn btn-secondary" type="button" data-dismiss="modal">@lang('label.cancel')</button>
                <a class="btn btn-primary" href="#">@lang('label.logout')</a>
                </div>
            </div>
            </div>
        </div>

        <script src="{{ asset('admin/vendor/jquery/jquery.min.js') }}"></script>
        <script src="{{ asset('admin/vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
        <script src="{{ asset('admin/vendor/jquery-easing/jquery.easing.min.js') }}"></script>
        <script src="{{ asset('admin/js/sb-admin-2.min.js') }}"></script>
        <script src="{{ asset('js/custom.js') }}"></script>

    </body>

</html>
