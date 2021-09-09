@extends('layouts.app');

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <h4 class="text-center mt-5 mb-3"> {{$todo->title}}</h4>
                <div class="card">
                    <div class="card-header">
                        {{$todo->title}}
                    </div>
                    <div class="card-body d-flex justify-content-between align-items-center" >
                      {{$todo->description}}
                        <div class="d-flex align-items-center ">
                            <a href="{{route('todos.edit',['todo'=>$todo->id])}}" class="btn btn-outline-primary mx-1">ویرایش</a>
                            <a href="{{route('todos.delete',['todo'=>$todo->id])}}" class="btn btn-outline-danger mx-1">حذف</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection
