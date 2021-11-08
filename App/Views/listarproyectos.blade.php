@extends('layouts.auth')

@section('content')
   <section>
      <h1>Proyectos Activos: ({{ $total }})</h1>
      <div class="mx-auto" style="width: 200px;">
        <a href="#" class="btn btn-info text-white">Crear nuevo proyecto</a>
      </div>
      <br />
      @if(count($proyectos) > 0)
         @foreach($proyectos as $proyecto)
            @include('components.card-project', ['nombre' => $proyecto->nombre])
         @endforeach
      @else
         <p>Proyectos no agregados...</p>
      @endif
   </section>
@endsection
