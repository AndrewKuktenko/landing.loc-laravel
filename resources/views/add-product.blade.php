@extends('layouts.site')

@section('content')

    <div class="jumbotron">
        <div class="container">
            <h1 class="display-3">{{ $header }}</h1>
            <p>{{ $message }}</p>
            <p><a class="btn btn-primary btn-lg" href="#" role="button">Learn more &raquo;</a></p>
        </div>
    </div>


        <div class="form">
            <form method="post" action="{{ route('productStore') }}">
                <div class="form-group ">
                    <label for="name" class="col-2 col-form-label">Название</label>
                    <div class="col-10">
                        <input class="form-control" type="text" name="name" id="name">
                    </div>
                </div>
                <div class="form-group ">
                    <label for="price" class="col-2 col-form-label">Цена</label>
                    <div class="col-10">
                        <input class="form-control" type="text" name="price"  id="price">
                    </div>
                </div>
                <div class="form-group ">
                    <label for="description" class="col-2 col-form-label">Описание</label>
                    <div class="col-10">
                        <textarea class="form-control" name="description"  id="description"></textarea>
                    </div>
                </div>


                <button type="submit" class="btn btn-default">Submit</button>

                {{ csrf_field() }}
            </form>
        </div>


@endsection()