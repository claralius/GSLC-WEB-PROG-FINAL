@extends('layouts.app')

@section('title', 'Book Detail')

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
    
    <h1>Book Detail > {{ $book_details->title }}</h1>
        <h6><a href="/"> Go Back</a></h6>

    <div class="card bg-light mb-3 mx-auto" style="max-width: 25rem;">
        <img class="card-img-top" src="{{ $book_details->image }}" alt="{{ $book_details->title }}">
        <div class="card-body">
            <h5 class="card-title">{{ $book_details->title }}</h5>
            <h6 class="card-title">Author: {{ $book_details->author }}</h5>
            <h6 class="card-title">Year: {{ $book_details->year}}</h5>
            <h6 class="card-title">Synopsis</h6>
            <p class="card-text">{{ $book_details->synopsis }}</p>
        </div>
      </div>


@endsection
