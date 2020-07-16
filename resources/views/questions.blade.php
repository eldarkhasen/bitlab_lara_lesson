@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="row">
                    @foreach($questions as $question)
                    <div class="col-md-12">
                        <div class="card mb-4">
                            <div class="card-header">
                                <h4 class="card-text mb-0">{{$question->title}}</h4>
                                <small class="text-muted">{{$question->user->name}}</small>
                            </div>
                            <div class="card-body">
                                <p class="card-text">{{$question->content}}</p>
                                <div class="d-flex justify-content-between align-items-center">
                                    <div class="btn-group">
                                        <a href="/questions/{{$question->id}}" type="button" class="btn btn-sm btn-outline-primary">View</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    @endforeach
                </div>
            </div>
        </div>
    </div>
@endsection
