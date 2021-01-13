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
    <center>
        <h1>Aktivasi Data Pemilu Mahasiswa</h1>
    </center>

    <section class="section">
        <div class="columns">
            <div class="column is-half is-offset-one-quarter">
                {% for data_user in user %}
                <div class="box">
                    <article class="media">
                        <div class="media-content">
                            <!-- <div class="content">
                                <p>
                                    <strong>{{ data_user.NPM }}</strong> <small>{{ data_user.Nama_Mahasiswa }}</small>
                                    <br>
                                    <h7> Tingkat : {{ data_user.Tingkat }}</h7>
                                    <br>
                                    <h7> Kelas : {{ data_user.Kelas }}</h7>
                                    <br>
                                    <h7> Prodi : {{ data_user.NamaProdi }}</h7>
                                    <br>
                                    <h7> Email : {{ data_user.Email }}</h7>
                                    <br>
                                    <h7> Headphone : {{ data_user.Handphone }}</h7>
                                </p>
                            </div> -->
                            <div class="content">
                                <p>
                                    <strong>{{ data_user.NPM }}</strong> <small>{{ data_user.Nama_Mahasiswa }}</small>
                                    <br>
                                    {{ data_user.Email }}
                                    <br>
                                    {{ data_user.kode_prodi }}
                                </p>
                            </div>
                        </div>
                        <a class="text-white" href="{% url 'sendmail' email=data_user.Email npm=data_user.NPM nama=data_user.Nama_Mahasiswa %}">
                            <button type="submit" class="btn btn-success">send email</button>
                        </a>
                    </article>
                </div>
                {% endfor %}
            </div>
        </div>
    </section>


    <!-- Akhir isi -->

    <!-- Awal Footer -->
    <footer class="bd-footer p-3 p-md-5 mt-5 bg-light text-center">
        <div class="container">
            <ul class="bd-footer-links ps-0 mb-3">
                <li class="d-inline-block"><a href="#">Instagram</a></li>
                <li class="d-inline-block ms-10"><a href="#">Twitter</a></li>
                <li class="d-inline-block ms-10"><a href="#">Tentang</a></li>
            </ul>
            <p class="text-dark">KPU v1.0.0. by DevTeam <a class="text-danger" href="http://himatif.poltekpos.ac.id/" target="_blank" rel="license noopener">HIMATIF</a></p>
            <p class="text-dark">2020-2021</p>
        </div>
    </footer>
    <!-- Awal Footer -->
</body>

</html>