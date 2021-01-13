<html>

<!DOCTYPE HTML>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="keywords" content="htmlcss menu fixed on scroll, navbar examples" />
    <meta name="description" content="Bootstrap navbar fixed top examples for any type of project, Bootstrap 4" />

    <title> Add Prodi </title>

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
                </div> <!-- container.// -->
            </nav>
        </div>
    </header>
    <!-- Akhir header -->

    <!-- Awal isi -->

    <br>
    <div class"container">
        <center>
            <h1 class="text-dark">Please Sign Up Here! </h1>
            <form method="POST">
                {{ form.as_p  }}
                {% csrf_token %}
                <input type="submit" class="btn btn-primary bg-success" value="Submit">
            </form>
        </center>
    </div>

    <!-- Akhir isi -->

    <!-- Awal Footer -->
    <footer class="bd-footer p-3 p-md-5 mt-5 bg-light text-center">
        <div class="container">
            <ul class="bd-footer-links ps-0 mb-3">
                <li class="d-inline-block"><a href="#">Instagram</a></li>
                <li class="d-inline-block ms-10"><a href="#">Twitter</a></li>
                <li class="d-inline-block ms-10"><a href="#">Tentang</a></li>
            </ul>
            <p class="text-dark">KEAMANAN SISTEM INFORMASI (KSI) v9.0.0. by AhmadAgungTawakkal</p>
            <p class="text-dark">2020-2021</p>
        </div>
    </footer>
    <!-- Awal Footer -->
</body>

</html>