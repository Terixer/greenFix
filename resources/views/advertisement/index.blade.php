@extends('layouts.app')

@section('content')
    <header class="masthead masthead-small text-white text-center">
        <div class="overlay"></div>
        <div class="container">
            <div class="row">
                <div class="col-xl-9 mx-auto">
                    <h1 class="mb-5">Build a landing page for your business or project and generate more leads!</h1>
                </div>
                @include('include.searchForm')
            </div>
        </div>
    </header>
    <div class="container-fluid mt-3">
        <div class="card-columns">
            @foreach ($advertisements as $advertisement)
                <a class="text-dark" href="{{route('showAdvertisement', ['id' => $advertisement->id])}}">
                    <div class="card">
                        <img class="card-img-top "
                             src="{{asset('storage/pictures/'.basename($advertisement->pictures[0]->filename))}}"
                             alt="Card image cap">
                        <div class="card-body">
                            <h5 class="card-title">{{$advertisement->title}}</h5>
                            <p class="card-text">{{ str_limit($advertisement->description, $limit = 120, $end = '...') }} </p>
                        </div>
                    </div>
                </a>
            @endforeach
        </div>
    </div>
@endsection
