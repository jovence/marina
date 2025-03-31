<!DOCTYPE html>
<html lang="en">

<head>
    @include('adminComponents.css')
    @livewireStyles
</head>

<body class="with-welcome-text">
    <div class="container-scroller">
       
        @include('adminComponents.navbar')
        <!-- partial -->
        <div class="container-fluid page-body-wrapper">
            <!-- partial:partials/_sidebar.html -->
            @include('adminComponents.sidebar')
            <!-- partial -->
            <div class="main-panel">
                <div class="content-wrapper">
                    <div class="row">
                        <div class="col-sm-12">
                            <div class="home-tab">
                                
                                <div class="tab-content tab-content-basic">
                                    {{ $slot }}
                                    
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- content-wrapper ends -->
                <!-- partial:partials/_footer.html -->
                <footer class="footer">
                    <div class="d-sm-flex justify-content-center justify-content-sm-between">
                       
                        <span class="float-none float-sm-end d-block mt-1 mt-sm-0 text-center">Copyright © 2025.CRM All
                            rights reserved.</span>
                    </div>
                </footer>
                <!-- partial -->
            </div>
            <!-- main-panel ends -->
        </div>
        <!-- page-body-wrapper ends -->
    </div>
    @livewireScripts
    @include('adminComponents.js')
</body>
    
</html>
