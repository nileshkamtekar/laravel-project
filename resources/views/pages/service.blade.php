@extends('layout.app')

@section('content')
    <h1>Service page</h1>
    <p>This is service page</p>
    <ul class="list-group">
      @if(count($data))
        @foreach ($data as $item)
          <li class="list-group-item">{{$item}}</li>
        @endforeach
      @endif
    </ul>
@endsection
