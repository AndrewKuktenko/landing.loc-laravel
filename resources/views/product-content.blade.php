
@extends('layouts.site')

@section('content')

    <div class="jumbotron">
        <div class="container">
            <h1 class="display-3">{{ $header }}</h1>
            <p>{{ $message }}</p>
            <p><a class="btn btn-primary btn-lg" href="#" role="button">Learn more &raquo;</a></p>
        </div>
    </div>

    <div class="container">
        <!-- Example row of columns -->
        <div class="row">

            @if($product)

                <div>
                    <h2>{{ $product->name }}</h2>
                    <p>{{ $product->description }}</p>
                </div>
            @endif()

        </div>

        <hr>

        <footer>
            <p>&copy; Company 2017</p>
        </footer>
    </div> <!-- /container -->

@endsection()