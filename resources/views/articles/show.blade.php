@extends('layouts.main')
@section('content')
    <div class="w-60">
        <div class="card mb-3">
          <h3 class="card-header">{{ $article->name }}</h3>
            <div class="card-body">
              @php
                $paragraphs = explode("\n", $article->description);
              @endphp
              @foreach ($paragraphs as $index => $paragraph)
                <p class="card-text">{{ $paragraph }}</p>
              @endforeach
            </div>
        </div>
    </div>
@endsection


