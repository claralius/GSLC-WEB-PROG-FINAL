@extends('layouts.app')

@section('title', 'Category Page')

@section('content')

    <ul class="nav col-12 col-md-auto mb-2 justify-content-center mb-md-0">
        <li><a href="/" class="nav-link px-2 link-primary">Books List</a></li>

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
    </ul>

    @foreach ($category_details as $cgd)
        <h1>Category : {{ $cgd->category_name }}</h1>
        @break
    @endforeach

    <div class="row pt-3">
        @foreach ($category_details as $cgd)
            <div class="col-4 themed-grid-col">

                <div class="card" style="width: 15rem;">
                    <img class="card-img-top" src="{{ $cgd->image }}" alt="{{ $cgd->title }}">
                    <div class="card-body">
                    <h5 class="card-title">{{ $cgd->title }}</h5>
                    <p class="card-text">by <br> {{ $cgd->author }}</p>

                    <form action="{{ route('display_book_details', ['id' => $cgd->id])  }}">
                        <button type="submit" class="btn btn-primary">Detail</a>
                    </form>

                    </div>
                </div>

            </div>
        @endforeach
    </div>



@endsection
