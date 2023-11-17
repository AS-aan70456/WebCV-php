<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <title>Каталог статей</title>
</head>
<body class="bg-black">  
    <nav class="navbar navbar-expand-lg bg-dark border-bottom border-body sticky-top"   style="top: 0px;"data-bs-theme="dark">
        <div class="container-fluid container-xxl "  >
            <div class="navbar-brand" style="margin-right: 20px; font-size: 23px;" href="#">aainBlog</div>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarTogglerDemo02" aria-controls="navbarTogglerDemo02" aria-expanded="false" aria-label="Toggle navigation">
              <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarTogglerDemo02">
              <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                @yield('nav')
              </ul>
              <form class="d-flex" role="search">
                <input class="form-control me-2 rounded border-white" type="search" placeholder="Search" aria-label="Search">
                <button class="btn btn-outline-success border-white text-white" type="submit">Search</button>
              </form>
            </div>
          </div>
      </nav>


      
    <div class="container-xxl border main bg-dark rounded text-light" data-bs-theme="dark">
        @yield('content')
    </div>

</body>
</html>