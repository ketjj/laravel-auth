@extends('layouts.app')

@section('content')
  {{-- @dump($posts); --}}
  <div class="container my-5">     
    <table class="k_table">
      <thead>
        <tr>
          <th class="k_head one">ID</th>
          <th class="k_head two">Title</th>
          <th class="k_head three">Actions</th>

        </tr>
      </thead>
      <tbody>
  
          @foreach ($posts as $post)
          <tr>
              <td> {{$post->id}}</td>
              <td> {{$post->title}}</td>
              <td>
                 <a href="#" class="btn btn-warning k_button">SHOW</a>
                  <a href="#" class="btn btn-info k_button">EDIT</a> 
  
                  {{-- <form class="d-inline" 
                  onsubmit="return confirm('Sicuro di cancellare {{ $comic->title}}?')"
                  action="{{ route('comics.destroy', $comic)}}" method="POST">
                  @csrf
                  @method('DELETE'){{ route( 'admin.comics.show', $post->id ) }}
  
                  <button type="submit" class="btn btn-danger k_button">DELETE</button>
  
                  </form> --}}
         
              </td>
            </tr>
          @endforeach
        
      </tbody>
    </table>
    {{ $posts->links()}}
  </div>
@endsection