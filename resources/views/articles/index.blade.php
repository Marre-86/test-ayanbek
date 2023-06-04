@extends('layouts.main')
@section('content')
    <div class="w-60">
      <div class="card" style="margin-bottom:1rem; min-width:fit-content;">
        <div class="card-header">

                <h3>List of Articles</h3>

        </div>
        <div style="padding: 1rem 0.5rem 0 0.5rem">
          <table class="table table-hover">
            <thead>
                <tr class="text-center" >
                    <th scope="col">Id</th>
                    <th scope="col" style="width:50%">Name</th>
                    <th scope="col">Price</th>
                    <th scope="col">Created At</th>
                </tr>
            </thead>
            <tbody>
                @php $counter = 0; @endphp
                @foreach ($articles as $article)
                    @php $class = $counter % 2 === 0 ? 'table-active' : 'table-default'; @endphp
                    <tr class="{{ $class }} text-center" onclick="window.location='{{ route('articles.show', $article) }}';" style="cursor: pointer; vertical-align:middle;">
                        <td>{{ $article->id }}</td>
                        <td>{{ $article->name }}</td>
                        <td>{{ $article->price }}</td>
                        <td>{{ $article->created_at }}</td>
                    </tr>
                    @php $counter++; @endphp
                @endforeach
            </tbody>
          </table>
          {{ $articles->links() }}
        </div>
      </div>
    </div>
@endsection