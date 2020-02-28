@extends('layouts.master')

@section('content')

<main role="main">

    <div class="jumbotron">
        <div class="container">
            <h2>Add new articol</h2>
        </div>
    </div>
    <div class="container">
        <div class="row">

            <div class="form">
                <form method="post" action="{{route('articleStore')}}">
                    <div class="form-group">
                        <label for="title">Title</label>
                        <input type="text" class="form-control" id="title" name="title"></input>
                    </div>

                    <div class="form-group">
                        <label class="exempleInputFile">Description</label>
                        <textarea class="form-control" name="description"></textarea>
                    </div>

                    <div class="form-group">
                        <label class="exempleInputFile">Content</label>
                        <textarea class="form-control" name="text"></textarea>
                    </div>

                    <div class="form-group">
                        <label for="title">Image</label>
                        <input type="text" class="form-control" id="img" name="img"></input>
                    </div>

                    <button type="submit" class="btn btn-primary">Submit</button>

                    {{csrf_field()}}

                </form>
            </div>

            <hr>
        </div>
    </div>
</main>

@endsection