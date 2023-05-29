@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">{{ __('Dashboard') }}</div>

                    <div class="card-body">
                        <div class="row p-3">
                            <div class="text-center">
                                <h1>{{ $article->name }}</h1>
                            </div>

                            <br>
                            <div class="w-100 p-3">
                                <img class="w-100" src="{{ $article->image }}">
                            </div>
                            {!! modify_text($article->description) !!}
                            <br>
                            <span>{{ Carbon\Carbon::parse($article->date_in)->format('Y-m-d H:i') }}</span>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
