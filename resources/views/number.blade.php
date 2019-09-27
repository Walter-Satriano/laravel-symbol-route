@extends("template.cube-template")

@section("numbers")

  @foreach ($arrNum as $num)

    <div class="box_list">
      <h2>{{ $num }}</h2>
    </div>

  @endforeach

@endsection
