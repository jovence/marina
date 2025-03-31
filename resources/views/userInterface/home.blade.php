<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <meta name="description" content="">
    <meta name="author" content="">

    <title>CRM</title>

    <!-- CSS FILES -->
    <link rel="preconnect" href="https://fonts.googleapis.com">

    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>

    <link
        href="https://fonts.googleapis.com/css2?family=Montserrat:wght@300;400&family=Sono:wght@200;300;400;500;700&display=swap"
        rel="stylesheet">

    <link rel="stylesheet" href="{{ asset('user/assets/css/bootstrap.min.css') }}">

    <link rel="stylesheet" href="{{ asset('user/assets/css/bootstrap-icons.css') }}">

    <link rel="stylesheet" href="{{ asset('user/assets/css/owl.carousel.min.css') }}">

    <link rel="stylesheet" href="{{ asset('user/assets/css/owl.theme.default.min.css') }}">

    <link href="{{ asset('user/assets/css/templatemo-pod-talk.css') }}" rel="stylesheet">
    <!--

TemplateMo 584 Pod Talk

https://templatemo.com/tm-584-pod-talk

-->
</head>

<body>

    <main>


        @include('userInterface.userComponents.navbar')

        <header class="site-header d-flex flex-column justify-content-center align-items-center">
            <div class="container">
                <div class="row">

                    <div class="col-lg-12 col-12 text-center">

                        <h2 class="mb-0"> Welcome</h2>
                    </div>

                </div>
            </div>
        </header>




        <section class="trending-podcast-section section-padding pt-0">
            <div class="container">
                @include('userInterface.userComponents.main')
            </div>
        </section>
    </main>


    @include('userInterface.userComponents.footer')

    <!-- JAVASCRIPT FILES -->
    <script src="{{ asset('user/assets/js/jquery.min.js') }}"></script>
    <script src="{{ asset('user/assets/js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('user/assets/js/owl.carousel.min.js') }}"></script>
    <script src="{{ asset('user/assets/js/custom.js') }}"></script>

</body>

</html>
