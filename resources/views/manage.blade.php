@extends('layout')
@section('content')
    <div class= "p-3 border">
        <form action="/manage" method="post" enctype="multipart/form-data">
            {{csrf_field()}}
            <p class="fs-4">Insert Book Form</p>
            <div class="row mb-3">
                <label for="exampleFormControlInput1" class="col-sm-2 col-form-label">Name</label>
                <div class="col-sm-10">
                    <input class="form-control" type="text" aria-label="default input example" name="title">
                </div>
            </div>
            <div class="row mb-3">
                <label for="exampleFormControlInput1" class="col-sm-2 col-form-label">Author</label>
                <div class="col-sm-10">
                    <input class="form-control" type="text" aria-label="default input example" name="author">
                </div>
            </div>
            <div class="row mb-3">
                <label for="exampleFormControlInput1" class="col-sm-2 col-form-label">Synopsis</label>
                <div class="col-sm-10">
                    <textarea class="form-control" id="exampleFormControlTextarea1" rows="10" name="synopsis"></textarea>
                </div>
            </div>
            <div class="row mb-3">
                <label for="exampleFormControlInput1" class="col-sm-2 col-form-label">Genre(s)</label>
                <div class="form-check col-sm-2 form-check-inline">
                    @foreach ($genre as $gen)
                        <div class="form-check-inline">
                            <input class="form-check-input" type="checkbox" id="checkbox{{$gen->id}}" name="genre">
                            <label for="checkbox{{$gen->id}}" class="form-check-label me-2">{{ $gen->name }}</label>
                        </div>
                    @endforeach
                </div>
            </div>
            <div class="row mb-3">
                <label for="exampleFormControlInput1" class="col-sm-2 col-form-label">Price</label>
                <div class="col-sm-10">
                    <input class="form-control" name="price" type="text" aria-label="default input example">
                </div>
            </div>
            <div class="row mb-3">
                <label for="exampleFormControlInput1" class="col-sm-2 col-form-label">Cover</label>
                <div class="col-sm-10">
                    <input class="form-control" name="cover" type="file" id="formFile">
                </div>
            </div>
            <button type="submit" class="btn btn-primary">Import</button>
        </form>
    </div>
    <div>
        <table class="table">
            <thead>
            <tr>
                <th scope="col">Name</th>
                <th scope="col">Author</th>
                <th scope="col">Synopsis</th>
                <th scope="col">Genre</th>
                <th scope="col">Price</th>
                <th scope="col">Action</th>
            </tr>
            </thead>
            <tbody>
                @foreach ($books as $b)
                    <tr>
                        <td>{{ $b->title }}</td>
                        <td>{{ $b->author }}</td>
                        <td>{{ $b->synopsis }}</td>
                        <td>{{ $genre[ $b->genreid - 1]->name }}</td>
                        <td>{{ $b->price }}</td>
                        <td><div class="col sm-1">
                            <form action="/delete-book/{{ $b->id }}" method="post">
                                {{ csrf_field() }}
                                {{ method_field('delete') }}
                                    <button class="btn btn-sm btn-danger" type="submit">Delete</button>
                                </form>
                        </div></td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection
