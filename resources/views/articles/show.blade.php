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

        @can('write-comments')
        <div class="card" style="margin-bottom:2rem">
          <div class="card-header" style="margin-bottom:-20px">
            <h5>Leave comment</h5>
          </div>

          <div class="card-body">
            @if ($errors->any())
                <div>
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li class="text-danger">{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif

            <form action="{{ route('comments.store') }}" method="POST">
                @csrf
                <input type="hidden" name="article_id" value="{{ $article->id }}">
                <textarea class="form-control" name="text" rows="3" style="height: 126px;" required autofocus></textarea>
                <div style="margin-top:20px">
                    <button class="btn btn-primary">Leave comment</button>
                </div>
            </form>
          </div>
        </div>
        @endcan

        <h3>Comments</h3>
        @foreach ($article->comments->sortByDesc('created_at') as $comment)
        <p class="text-primary" style="display: inline;">{{ $comment->fio }}&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;{{ $comment->created_at }}</p>
          <p>{{ $comment->text }}</p>
        @endforeach 
    </div>
@endsection


