<!DOCTYPE html>
<html lang="en">
<head>
   <!-- Required meta tags -->
   <meta charset="utf-8">
   <meta name="viewport" content="width=device-width, initial-scale=1">

   <!-- Bootstrap CSS -->
   <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>@yield('title')</title>
</head>
<body>

    <header class="d-flex flex-wrap align-items-center justify-content-center justify-content-md-between py-3 mb-4 border-bottom mr-5">
        <a href="/" class="d-flex align-items-center col-md-3 mb-2 mb-md-0 text-dark text-decoration-none">
          <svg class="bi me-2" width="40" height="32" role="img" aria-label="Bootstrap"><use xlink:href="#bootstrap"></use></svg>
        </a>

        <ul class="nav col-12 col-md-auto mb-2 justify-content-center mb-md-0">
          <li><a href="/" class="nav-link px-2 link-primary">Books List</a></li>

          <li><a href="/movies_list" class="nav-link px-2 link-primary">Movies List</a></li>

          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle " href="/category" id="navbarDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">
              Book Category
            </a>
             <ul class="dropdown-menu aria-labelledby="navbarDropdownMenuLink d-grid gap-1 p-2 rounded-3 mx-0 shadow w-220px">
                <li><a class="dropdown-item rounded-2" href="{{ route('display_category_details', ['id'=> 1]) }}">Action & Adventure</a></li>

                <li><a class="dropdown-item rounded-2" href="{{ route('display_category_details', ['id'=> 2]) }}">Biography</a></li>

                <li><a class="dropdown-item rounded-2" href="{{ route('display_category_details', ['id'=> 3]) }}">Fiction</a></li>
            </ul>
          </li>

          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle " href="/category" id="navbarDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">
              Movie Genres
            </a>
             <ul class="dropdown-menu aria-labelledby="navbarDropdownMenuLink d-grid gap-1 p-2 rounded-3 mx-0 shadow w-220px">
                <li><a class="dropdown-item rounded-2" href="{{ route('display_movie_details', ['id'=>1]) }}">Adventure</a></li>
                <li><a class="dropdown-item rounded-2" href="{{ route('display_movie_details', ['id'=>2]) }}">Fantasy</a></li>
                <li><a class="dropdown-item rounded-2" href="{{ route('display_movie_details', ['id'=>3]) }}">Horror</a></li>
            </ul>
          </li>

        </ul>

        <div class="dropdown text-end">
            <a href="#" class="d-block link-dark text-decoration-none dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">
              <img src="https://github.com/mdo.png" alt="mdo" width="32" height="32" class="rounded-circle">
            </a>
            <ul class="dropdown-menu text-small" style="">
              <li><a class="dropdown-item" href="#">Profile</a></li>
              <li><hr class="dropdown-divider"></li>
              <li><a class="dropdown-item" href="#">Sign out</a></li>
            </ul>
          </div>

        <div class="col-md-3 text-end">
          <button type="button" class="btn btn-outline-primary me-2">Login</button>
          <button type="button" class="btn btn-primary">Sign-up</button>
        </div>


      </header>

      <div class="container mt-4">
        @yield('content')
     </div>

     <!-- Option 1: Bootstrap Bundle with Popper -->
     <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>


</body>
</html>
