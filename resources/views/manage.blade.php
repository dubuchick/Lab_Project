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
                    {{-- @for($i = 0; $i <= 11; $i++)
                        <div class="form-check-inline">
                            <input class="form-check-input" name="genre" type="checkbox" value="" id="flexCheckDefault"+$i>
                            <label class="form-check-label me-2" for="flexCheckDefault"+$i>Test</label>
                        </div>
                    @endfor --}}
                    @foreach ($genre as $gen)
                        <input class="form-check-input" type="checkbox" id="flexCheckDefault" name="genre">
                        <label for="flexCheckDefault" class="form-check-label me-2">{{ $gen->name }}</label>
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
                        <td></td>
                        <td>{{ $b->price }}</td>
                        <td></td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection
