
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

        @foreach($products as $product)
            <div class="col-md-4">
                <h2>{{ $product->name }}</h2>
                <p>{{ $product->description }}</p>
                <p><a class="btn btn-secondary" href="{{ route('articleShow', ['id' => $product->id]) }}" role="button">Подробнее &raquo;</a></p>

                <form action="{{ route('productDelete',['product' => $product->id]) }}" method="post">

                    {{--<input type="hidden" name="_method" value="DELETE">--}}

                    {{ method_field('DELETE') }}

                    {{ csrf_field() }}

                    <button type="submit" class="btn btn-danger">
                        Delete
                    </button>

                </form>
            </div>
        @endforeach

    </div>

    <hr>

    <footer>
        <p>&copy; Company 2017</p>
    </footer>
</div> <!-- /container -->

    @endsection()