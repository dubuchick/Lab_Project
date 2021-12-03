@extends('layout')
@section('content')
    <div class= "p-3 border">
        <form>
            <p class="fs-4">Insert Book Form</p>
            <div class="row mb-3">
                <label for="exampleFormControlInput1" class="col-sm-2 col-form-label">Name</label>
                <div class="col-sm-10">
                    <input class="form-control" type="text" aria-label="default input example">
                </div>
            </div>
            <div class="row mb-3">
                <label for="exampleFormControlInput1" class="col-sm-2 col-form-label">Author</label>
                <div class="col-sm-10">
                    <input class="form-control" type="text" aria-label="default input example">
                </div>
            </div>
            <div class="row mb-3">
                <label for="exampleFormControlInput1" class="col-sm-2 col-form-label">Synopsis</label>
                <div class="col-sm-10">
                    <textarea class="form-control" id="exampleFormControlTextarea1" rows="10"></textarea>
                </div>
            </div>
            <div class="row mb-3">
                <label for="exampleFormControlInput1" class="col-sm-2 col-form-label">Genre(s)</label>
                <div class="form-check col-sm-2 form-check-inline">
                    @for($i = 0; $i <= 11; $i++)
                        <div class="form-check-inline">
                            <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault"+$i>
                            <label class="form-check-label me-2" for="flexCheckDefault"+$i>Test</label>
                        </div>
                    @endfor
                </div>
            </div>
            <div class="row mb-3">
                <label for="exampleFormControlInput1" class="col-sm-2 col-form-label">Price</label>
                <div class="col-sm-10">
                    <input class="form-control" type="text" aria-label="default input example">
                </div>
            </div>
            <div class="row mb-3">
                <label for="exampleFormControlInput1" class="col-sm-2 col-form-label">Cover</label>
                <div class="col-sm-10">
                    <input class="form-control" type="file" id="formFile">
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
                <th scope="col">Synopsis</th>
            </tr>
            </thead>
            <tbody>
                    <tr>
                        <td>1</td>
                        <td>2</td>
                        <td>3</td>
                        <td>4</td>
                        <td>5</td>
                        <td>6</td>
                    </tr>
            </tbody>
        </table>
    </div>
@endsection
