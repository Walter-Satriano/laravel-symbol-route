@extends("template.cube-template")

@section("letters")

  @foreach ($arrLetters as $letter)

    <div class="lett_list">
      <h2>{{ $letter }}</h2>
    </div>

  @endforeach

@endsection
