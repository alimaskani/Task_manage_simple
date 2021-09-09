@extends('layouts.app');

@section('content')

    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8 mt-5">


                <div class="card">
                    <div class="card-header">
                       ایجاد تسک جدید
                    </div>
                    <div class="card-body">
                        <form action="{{route('todos.store')}}" method="post">
                            @csrf
                            <div class="form-group mt-3">
                                <label for="title">عنوان</label>
                                <input type="text" name="title" id="title" class="form-control @error('title') form-control-invalid @enderror" value="{{old('title')}}">
                                @error('title')
                                    <p class="invalid-feedback d-block">
                                        <strong>{{$message}}</strong>
                                    </p>
                                @enderror
                            </div>
                            <div class="form-group mt-3">
                                <label for="description">توضیحات</label>
                                <textarea id="description" class="form-control @error('description') form-control-invalid @enderror" name="description">{{old('description')}}</textarea>
                                @error('description')
                                <p class="invalid-feedback d-block">
                                    <strong>{{$message}}</strong>
                                </p>
                                @enderror
                            </div>
                            <button type="submit" class="btn btn-outline-dark mt-3">ارسال</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection
