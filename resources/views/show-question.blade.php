@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="row">
                    <div class="col-md-12">
                        <div class="card mb-4">
                            <div class="card-header">
                                <h4 class="card-text mb-0">{{$question->title}}</h4>
                                <small class="text-muted">{{$question->user->name}}</small>
                            </div>
                            <div class="card-body">
                                <p class="card-text">{{$question->content}}</p>
                                <div class="d-flex justify-content-between align-items-center">
                                </div>
                            </div>
                        </div>
                        <hr>
                        <h5>Answers: </h5>
                        <ul class="list-group">
                            @foreach($question->answers as $answer)
                                <li class="list-group-item d-flex justify-content-between align-items-center">
                                    <div>
                                        {{$answer->content}}
                                        <button type="button" class="btn btn-outline-dark">Best answer?</button>
                                    </div>

                                    {{--<span class="badge badge-primary badge-pill">14</span>--}}
                                </li>
                            @endforeach
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
