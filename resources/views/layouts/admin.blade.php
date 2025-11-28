<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ trans('panel.site_title') }}</title>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" rel="stylesheet" />
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.css" rel="stylesheet" />
    <link href="https://use.fontawesome.com/releases/v5.2.0/css/all.css" rel="stylesheet" />
    <link href="https://cdn.datatables.net/1.10.19/css/jquery.dataTables.min.css" rel="stylesheet" />
    <link href="https://cdn.datatables.net/1.10.19/css/dataTables.bootstrap4.min.css" rel="stylesheet" />
    <link href="https://cdn.datatables.net/buttons/1.2.4/css/buttons.dataTables.min.css" rel="stylesheet" />
    <link href="https://cdn.datatables.net/select/1.3.0/css/select.dataTables.min.css" rel="stylesheet" />
    <link href="https://unpkg.com/@coreui/coreui@2.1.16/dist/css/coreui.min.css" rel="stylesheet" />
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.css" rel="stylesheet" />
    <link href="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.5/css/select2.min.css" rel="stylesheet" />
    <link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datetimepicker/4.17.47/css/bootstrap-datetimepicker.min.css" rel="stylesheet" />
    <link href="https://cdnjs.cloudflare.com/ajax/libs/dropzone/5.5.1/min/dropzone.min.css" rel="stylesheet" />
    <link href="{{ asset('css/custom.css') }}" rel="stylesheet" />
    <style>
        /* Enhanced Sidebar Styles */
        .sidebar {
            background: linear-gradient(180deg, #343a40 0%, #495057 100%);
            box-shadow: 2px 0 10px rgba(0,0,0,0.1);
            overflow-y: auto;
            overflow-x: hidden;
        }

        .sidebar-section {
            margin-bottom: 1.5rem;
            position: relative;
            box-shadow: 0 2px 8px rgba(0,0,0,0.1);
            border-radius: 0.375rem;
            overflow: hidden;
        }

        .sidebar-section:not(:last-child)::after {
            content: '';
            position: absolute;
            bottom: -0.75rem;
            left: 1rem;
            right: 1rem;
            height: 1px;
            background: linear-gradient(90deg, transparent, rgba(255,255,255,0.15), transparent);
            box-shadow: 0 1px 2px rgba(0,0,0,0.1);
        }

        .sidebar .nav-title {
            color: #adb5bd;
            font-size: 0.75rem;
            font-weight: 600;
            text-transform: uppercase;
            letter-spacing: 0.5px;
            padding: 0.875rem 1rem 0.625rem 1rem;
            margin: 0;
            border-bottom: 1px solid rgba(255,255,255,0.1);
            background: linear-gradient(135deg, rgba(255,255,255,0.08) 0%, rgba(255,255,255,0.04) 100%);
            border-radius: 0.375rem 0.375rem 0 0;
            position: relative;
            overflow: hidden;
        }

        .sidebar .nav-title::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
            background: linear-gradient(45deg, transparent 30%, rgba(255,255,255,0.05) 50%, transparent 70%);
            opacity: 0.5;
        }

        .sidebar .nav-title i {
            opacity: 0.9;
            font-size: 0.85em;
            margin-right: 0.5rem;
        }

        .sidebar .nav-title span {
            position: relative;
            z-index: 1;
        }

        .sidebar .nav-section {
            padding: 0.5rem 0;
            margin: 0;
            background: linear-gradient(135deg, rgba(255,255,255,0.03) 0%, rgba(255,255,255,0.01) 100%);
            border-radius: 0 0 0.375rem 0.375rem;
            border: 1px solid rgba(255,255,255,0.05);
            border-top: none;
        }

        .sidebar .nav-link {
            color: rgba(255,255,255,0.8) !important;
            padding: 0.625rem 1rem;
            border-radius: 0;
            transition: all 0.3s ease;
            position: relative;
            margin: 0.125rem 0.5rem;
            border-radius: 0.25rem;
            display: flex;
            align-items: center;
            justify-content: space-between;
        }

        .sidebar .nav-link:hover {
            background-color: rgba(255,255,255,0.1);
            color: #fff !important;
            text-decoration: none;
            transform: translateX(2px);
        }

        .sidebar .nav-link.active {
            background: linear-gradient(135deg, #007bff 0%, #0056b3 100%);
            color: #fff !important;
            box-shadow: 0 4px 12px rgba(0,123,255,0.4), 0 2px 4px rgba(0,123,255,0.3);
            transform: translateX(6px);
            border: 1px solid rgba(255,255,255,0.1);
        }

        .sidebar .nav-link.active::before {
            content: '';
            position: absolute;
            left: 0;
            top: 0;
            bottom: 0;
            width: 4px;
            background-color: #fff;
            border-radius: 0 2px 2px 0;
        }

        .sidebar .nav-link i.nav-icon {
            width: 18px;
            text-align: center;
            margin-right: 12px;
            opacity: 0.8;
            font-size: 0.9em;
        }

        .sidebar .nav-link .nav-text {
            flex: 1;
            font-size: 0.875rem;
        }

        .sidebar .nav-link .nav-badge {
            font-size: 0.7rem;
            padding: 0.25rem 0.5rem;
            border-radius: 0.25rem;
            margin-left: auto;
            flex-shrink: 0;
        }

        .sidebar .nav-link .nav-icon-right {
            font-size: 0.8em;
            margin-left: 8px;
            opacity: 0.7;
        }

        .sidebar .badge {
            font-size: 0.7rem;
            padding: 0.25rem 0.5rem;
            border-radius: 0.25rem;
        }

        .sidebar .badge-primary {
            background-color: #007bff;
        }

        .sidebar .badge-info {
            background-color: #17a2b8;
        }

        .sidebar .badge-success {
            background-color: #28a745;
        }

        .sidebar .badge-warning {
            background-color: #ffc107;
            color: #212529;
        }

        .sidebar .badge-secondary {
            background-color: #6c757d;
        }

        .sidebar .badge-dark {
            background-color: #343a40;
        }

        .sidebar-footer {
            position: absolute;
            bottom: 0;
            left: 0;
            right: 0;
            background-color: rgba(0,0,0,0.3);
            border-top: 1px solid rgba(255,255,255,0.1);
            margin-top: 2rem;
        }

        .sidebar-footer .text-muted {
            color: rgba(255,255,255,0.6) !important;
        }

        /* Responsive adjustments */
        @media (max-width: 991.98px) {
            .sidebar .nav-title {
                padding: 0.5rem 1rem;
                font-size: 0.7rem;
            }

            .sidebar .nav-link {
                padding: 0.5rem 1rem;
                font-size: 0.85rem;
            }

            .sidebar .nav-link .nav-badge {
                display: none;
            }

            .sidebar .nav-link .nav-icon-right {
                display: none;
            }
        }

        /* Animation for active states */
        .sidebar .nav-link {
            transform: translateX(0);
        }

        .sidebar .nav-link.active {
            transform: translateX(4px);
        }

        /* Custom scrollbar for sidebar */
        .sidebar::-webkit-scrollbar {
            width: 6px;
        }

        .sidebar::-webkit-scrollbar-track {
            background: rgba(255,255,255,0.1);
        }

        .sidebar::-webkit-scrollbar-thumb {
            background: rgba(255,255,255,0.3);
            border-radius: 3px;
        }

        .sidebar::-webkit-scrollbar-thumb:hover {
            background: rgba(255,255,255,0.5);
        }

        /* Mobile responsiveness */
        @media (max-width: 768px) {
            .sidebar {
                position: fixed;
                top: 0;
                left: -280px;
                width: 280px;
                height: 100vh;
                z-index: 1000;
                transition: left 0.3s ease;
                box-shadow: 2px 0 10px rgba(0,0,0,0.1);
            }

            .sidebar.show {
                left: 0;
            }

            .main-content {
                margin-left: 0;
            }

            .sidebar-toggler {
                display: block !important;
            }

            .sidebar-section {
                margin-bottom: 1rem;
            }
        }

        /* Enhanced hover effects */
        .sidebar .nav-link:hover {
            transform: translateX(3px);
            box-shadow: 0 2px 8px rgba(0,0,0,0.1);
        }

        .sidebar .nav-link.active {
            transform: translateX(6px);
            box-shadow: 0 4px 12px rgba(0,0,0,0.15);
        }

        /* Badge animations */
        .sidebar .badge {
            animation: pulse 2s infinite;
        }

        @keyframes pulse {
            0% { transform: scale(1); }
            50% { transform: scale(1.05); }
            100% { transform: scale(1); }
        }

        /* Loading states */
        .sidebar .nav-link.loading {
            opacity: 0.6;
            pointer-events: none;
        }

        .sidebar .nav-link.loading::after {
            content: '';
            position: absolute;
            right: 10px;
            top: 50%;
            width: 16px;
            height: 16px;
            margin-top: -8px;
            border: 2px solid #f3f3f3;
            border-top: 2px solid #3498db;
            border-radius: 50%;
            animation: spin 1s linear infinite;
        }

        @keyframes spin {
            0% { transform: rotate(0deg); }
            100% { transform: rotate(360deg); }
        }
    </style>
    @yield('styles')
</head>

<body class="app header-fixed sidebar-fixed aside-menu-fixed pace-done sidebar-lg-show">
    <header class="app-header navbar">
        <button class="navbar-toggler sidebar-toggler d-lg-none mr-auto" type="button" data-toggle="sidebar-show">
            <span class="navbar-toggler-icon"></span>
        </button>
        <button class="navbar-toggler sidebar-toggler d-none d-lg-block" type="button" data-toggle="sidebar-lg-show">
            <span class="navbar-toggler-icon"></span>
        </button>
        <a class="navbar-brand" href="#">
            <span class="navbar-brand-full">{{ trans('panel.site_title') }}</span>
            <span class="navbar-brand-minimized">{{ trans('panel.site_title') }}</span>
        </a>

        <ul class="nav navbar-nav ml-auto">
            @if(count(config('panel.available_languages', [])) > 1)
                <li class="nav-item dropdown d-md-down-none">
                    <a class="nav-link" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">
                        {{ strtoupper(app()->getLocale()) }}
                    </a>
                    <div class="dropdown-menu dropdown-menu-right">
                        @foreach(config('panel.available_languages') as $langLocale => $langName)
                            <a class="dropdown-item" href="{{ url()->current() }}?change_language={{ $langLocale }}">{{ strtoupper($langLocale) }} ({{ $langName }})</a>
                        @endforeach
                    </div>
                </li>
            @endif

            <li class="nav-item dropdown">
                <a class="nav-link" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">
                    <i class="fas fa-user"></i> {{ Auth::user()->name ?? 'Admin' }}
                </a>
                <div class="dropdown-menu dropdown-menu-right">
                    <a class="dropdown-item" href="{{ route('admin.home') }}">
                        <i class="fas fa-tachometer-alt"></i> Dashboard
                    </a>
                    <a class="dropdown-item" href="{{ route('admin.users.edit', Auth::id()) }}">
                        <i class="fas fa-user-edit"></i> Profile
                    </a>
                    <div class="dropdown-divider"></div>
                    <a class="dropdown-item" href="#" onclick="event.preventDefault(); document.getElementById('logoutform').submit();">
                        <i class="fas fa-sign-out-alt"></i> Logout
                    </a>
                </div>
            </li>
        </ul>
    </header>

    <div class="app-body">
        @include('partials.menu')
        <main class="main">


            <div style="padding-top: 20px" class="container-fluid">
                @if(session('message'))
                    <div class="row mb-2">
                        <div class="col-lg-12">
                            <div class="alert alert-success" role="alert">{{ session('message') }}</div>
                        </div>
                    </div>
                @endif
                @if($errors->count() > 0)
                    <div class="alert alert-danger">
                        <ul class="list-unstyled">
                            @foreach($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif
                @yield('content')

            </div>


        </main>
        <form id="logoutform" action="{{ route('logout') }}" method="POST" style="display: none;">
            {{ csrf_field() }}
        </form>
    </div>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>
    <script src="https://unpkg.com/@coreui/coreui@2.1.16/dist/js/coreui.min.js"></script>
    <script src="//cdn.datatables.net/1.10.19/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.10.19/js/dataTables.bootstrap4.min.js"></script>
    <script src="//cdn.datatables.net/buttons/1.2.4/js/dataTables.buttons.min.js"></script>
    <script src="//cdn.datatables.net/buttons/1.2.4/js/buttons.flash.min.js"></script>
    <script src="https://cdn.datatables.net/buttons/1.2.4/js/buttons.html5.min.js"></script>
    <script src="https://cdn.datatables.net/buttons/1.2.4/js/buttons.print.min.js"></script>
    <script src="https://cdn.datatables.net/buttons/1.2.4/js/buttons.colVis.min.js"></script>
    <script src="https://cdn.rawgit.com/bpampuch/pdfmake/0.1.18/build/pdfmake.min.js"></script>
    <script src="https://cdn.rawgit.com/bpampuch/pdfmake/0.1.18/build/vfs_fonts.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/jszip/2.5.0/jszip.min.js"></script>
    <script src="https://cdn.datatables.net/select/1.3.0/js/dataTables.select.min.js"></script>
    <script src="https://cdn.ckeditor.com/ckeditor5/11.0.1/classic/ckeditor.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.22.2/moment.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datetimepicker/4.17.47/js/bootstrap-datetimepicker.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.5/js/select2.full.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/dropzone/5.5.1/min/dropzone.min.js"></script>
    <script src="{{ asset('js/main.js') }}"></script>
    <script>
        $(function() {
            // Enhanced sidebar functionality
            $('.sidebar .nav-link').on('click', function() {
                // Remove active class from all links
                $('.sidebar .nav-link').removeClass('active');

                // Add active class to clicked link
                $(this).addClass('active');

                // Smooth scroll to top if needed
                if ($(window).scrollTop() > 100) {
                    $('html, body').animate({ scrollTop: 0 }, 300);
                }
            });

            // Auto-highlight current page
            var currentPath = window.location.pathname;
            $('.sidebar .nav-link').each(function() {
                var href = $(this).attr('href');
                if (href && currentPath.indexOf(href.replace(window.location.origin, '')) === 0) {
                    $(this).addClass('active');
                }
            });

            // Add tooltip to badges
            $('.sidebar .badge').each(function() {
                var text = $(this).text();
                $(this).attr('title', text + ' items');
            });

            // Sidebar collapse/expand animation
            $('.sidebar-minimizer').on('click', function() {
                setTimeout(function() {
                    // Reinitialize tooltips or other elements if needed
                }, 300);
            });

            // Add loading indicator for external links
            $('.sidebar .nav-link[target="_blank"]').on('click', function() {
                // Could add loading spinner here
            });

            // Mobile sidebar toggle
            $('[data-toggle="sidebar-show"]').on('click', function() {
                $('.sidebar').toggleClass('show');
            });

            // Close sidebar when clicking outside on mobile
            $(document).on('click', function(e) {
                if ($(window).width() < 768) {
                    if (!$(e.target).closest('.sidebar, [data-toggle="sidebar-show"]').length) {
                        $('.sidebar').removeClass('show');
                    }
                }
            });
        });
    </script>
    @yield('scripts')
</body>

</html>
