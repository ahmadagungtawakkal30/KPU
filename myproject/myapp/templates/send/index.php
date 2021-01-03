<html>

<!DOCTYPE HTML>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="keywords" content="htmlcss menu fixed on scroll, navbar examples" />
    <meta name="description" content="Bootstrap navbar fixed top examples for any type of project, Bootstrap 4" />

    <title>- KPU</title>

    <!-- jQuery -->
    <script src="https://code.jquery.com/jquery-2.2.4.min.js" integrity="sha256-BbhdlvQf/xTY9gja0Dq3HiwQF8LaCRTXxZKRutelT44=" crossorigin="anonymous"></script>

    <!-- Bootstrap files (jQuery first, then Popper.js, then Bootstrap JS) -->
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.bundle.min.js" type="text/javascript"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bulma/0.7.5/css/bulma.min.css">
    <script defer src="https://use.fontawesome.com/releases/v5.3.1/js/all.js"></script>


    <script type="text/javascript">
        /// some script

        // jquery ready start
        $(document).ready(function() {
            // jQuery code

            ///////////////// fixed menu on scroll for desctop
            if ($(window).width() > 992) {

                var navbar_height = $('.navbar').outerHeight();

                $(window).scroll(function() {
                    if ($(this).scrollTop() > 300) {
                        $('.navbar-wrap').css('height', navbar_height + 'px');
                        $('#navbar_top').addClass("fixed-top");

                    } else {
                        $('#navbar_top').removeClass("fixed-top");
                        $('.navbar-wrap').css('height', 'auto');
                    }
                });
            } // end if


        }); // jquery end
    </script>

    <style type="text/css">
        .fixed-top.navbar {
            padding: 0px;
        }
    </style>
</head>

<body>

    <!-- Awal header -->
    <header>
        <div class="navbar-wrap">
            <nav id="navbar_top" class="navbar navbar-expand-lg navbar-dark bg-primary">
                <div class="container">
                    <a class="navbar-brand" href="#">KPU</a>
                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#main_nav" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse" id="main_nav">

                        <ul class="navbar-nav ml-auto">
                            <li class="nav-item"><a class="nav-link" href="#"> Menu item </a></li>
                            <li class="nav-item"><a class="nav-link" href="#"> Menu item </a></li>
                            <li class="nav-item dropdown">
                                <a class="nav-link  dropdown-toggle" href="#" data-toggle="dropdown"> Dropdown right </a>
                                <ul class="dropdown-menu dropdown-menu-right">
                                    <li><a class="dropdown-item" href="#"> Submenu item 1</a></li>
                                    <li><a class="dropdown-item" href="#"> Submenu item 2 </a></li>
                                </ul>
                            </li>

                        </ul>

                    </div> <!-- navbar-collapse.// -->
                </div> <!-- container.// -->
            </nav>
        </div>
    </header>
    <!-- Akhir header -->

    <!-- Awal isi -->
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <!-- <center>
        <h1>Aktivasi Data Pemilu Mahasiswa</h1>
        <h2>{{ showpass }}</h2>
    </center> -->

    <!-- Akhir isi -->

    <!-- Awal Footer -->
    <footer class="bd-footer p-3 p-md-5 mt-5 bg-dark text-center text-light">
        <div class="container">
            <ul class="bd-footer-links ps-0 mb-3">
                <li class="d-inline-block"><a href="#">Instagram</a></li>
                <li class="d-inline-block ms-10"><a href="#">Twitter</a></li>
                <li class="d-inline-block ms-10"><a href="#">Tentang</a></li>
            </ul>
            <p class="mb-0">Designed and built with all the love in the world by the <a href="#">Bootstrap team</a> with the help of <a href="#">our contributors</a>.</p>
            <p class="mb-0">KPU v1.0.0. by DevTeam <a href="http://himatif.poltekpos.ac.id/" target="_blank" rel="license noopener">HIMATIF</a>.</p>
            <p class="mb-0">2020-2021</p>
        </div>
    </footer>
    <!-- Awal Footer -->
</body>

</html>