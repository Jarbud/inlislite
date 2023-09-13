<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="utf-8">
        <meta content="width=device-width, initial-scale=1.0" name="viewport">

        <title>Digital Library</title>
        <meta content="" name="description">
        <meta content="" name="keywords">

        <!-- Google Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">
        <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet"/>

        <!-- Vendor CSS Files -->
        <link href="/assets/vendor/animate.css/animate.min.css" rel="stylesheet"/>
        <link href="/assets/vendor/aos/aos.css" rel="stylesheet"/>
        <link href="/assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet"/>
        <link href="/assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet"/>
        <link href="/assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet"/>
        <link href="/assets/vendor/remixicon/remixicon.css" rel="stylesheet"/>
        <link href="/assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet"/>

        <!-- Template Main CSS File -->
        <link href="/assets/css/style.css" rel="stylesheet"/>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.0/jquery.min.js" charset="utf-8"></script>
        <script 
            src="https://code.jquery.com/jquery-3.7.1.js" 
            integrity="sha256-eKhayi8LEQwp4NKxN+CfCh+3qOVUtJn3QNZ0TciWLP4=" 
            crossorigin="anonymous">
        </script>
        <script 
            src="https://cdnjs.cloudflare.com/ajax/libs/chosen/1.1.0/chosen.jquery.js" 
            integrity="sha512-XdbznNC/1XvfugL5BhgskCqEpetHgoaYVwwEhM8BE8ssXGrDL/vJw6K0BSvxy6znDIP/ZIXbrlTdQxsrkaraPA==" 
            crossorigin="anonymous" 
            referrerpolicy="no-referrer">
        </script>
        <link 
            rel="stylesheet" 
            href="https://cdnjs.cloudflare.com/ajax/libs/chosen/1.1.0/chosen.css" 
            integrity="sha512-24Ao00m10BsghXEKEp6Eg4lcX309kvlkFJhewN66I6+8HT6v4YmIkFHWQTUf6/8VuQXzCUV6ol8zJAg4hLFumg==" 
            crossorigin="anonymous" 
            referrerpolicy="no-referrer" 
        />
        

    </head>

    <body>

        <!-- ========= Konten ===========-->
        @yield('content')

        <!-- Vendor JS Files -->
        <script src="/assets/vendor/purecounter/purecounter_vanilla.js"></script>
        <script src="/assets/vendor/aos/aos.js"></script>
        <script src="/assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
        <script src="/assets/vendor/swiper/swiper-bundle.min.js"></script>
        <script src="/assets/vendor/php-email-form/validate.js"></script>

        <!-- Template Main JS File -->
        <script src="/assets/js/main.js"></script>

        <script>
            $(document).ready(function() {
                $(".select-box").chosen( {
                    width:"100%", 
                    no_results_text: "Maaf, tidak ada hasil untuk",
                    allow_single_deselect: true,
                });
            });

        </script>

        
            <!-- Ini harusnya ada di dalam script ^

            $('select')
            .chosen()
            .on('chosen:showing_dropdown', function(e) {
                var chosenElement = $(e.currentTarget.nextSibling);
                chosenElement
                    .find('li.active-result:contains(Add a New')
                    .addClass('add-new');

            });-->

    </body>

</html>