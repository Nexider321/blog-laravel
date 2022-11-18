
<!DOCTYPE html>
<html lang="en">


<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />


    @yield('meta')

    <!-- Core Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
          integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <!-- Custom Styles -->
    <link href="{{ asset('resources/css/styles.css') }}" rel="stylesheet">

</head>

<body>
<!-- Responsive navbar-->
<nav class="navbar navbar-expand-lg navbar-white bg-white" style="
    /* text-align: center; */
    display: flex;
    flex-wrap: nowrap;
">
    <div class="container">

        <div class="container">
            <a class="navbar-brand text-black" href="/"> Vladislavs </a>

        </div>

        <a class="navbar-brand" href="/">{{ setting('site_title') }}</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav ms-auto mb-2 mb-lg-0 text-black">
                <li class="nav-item  "><a class="nav-link text-black " href="/">Home</a></li>

                <li class="nav-item"><a class="nav-link text-black" href="/admin">Admin</a></li>
            </ul>
        </div>
    </div>
</nav>

@yield('header')

<div class="container mt-5">
    <div class="row">

        @yield('content')

    </div>
</div>

<footer class="py-5 bg-white">
    <div class="container">
        <p class="m-0 text-center text-black">Copyright &copy; {{ setting('site.title') }} 2022</p>
    </div>
</footer>

<!-- Bootstrap core JS-->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous">
</script>
</body>

</html>
