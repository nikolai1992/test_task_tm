@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>

                <div class="card-body">
                    <div class="row">
                        <h1>Hacker news</h1>
                    </div>
                    <div class="row">
                        @foreach($articles as $article)
                            <div class="col-md-4">
                                <div class="w-100">
                                    <img src="{{ $article->image }}" class="w-100">
                                </div>
                                <p><a href="{{ route('article.read', $article->id) }}">{{ $article->name }}</a></p>
                                <p>{{ $article->short_description }}</p>
                                <p><span>{{ Carbon\Carbon::parse($article->date_in)->format('Y-m-d H:i') }}</span></p>
                                <br>
                            </div>
                        @endforeach
                    </div>
                    <div class="row">
                        {{ $articles->render("pagination::bootstrap-4") }}
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
