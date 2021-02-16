@extends("../layout.crud-main")

@section("header-title")
  Lista degli articoli
@endsection

@section("main-content")
  <table class="table table-striped table-bordered">
    <thead class="thead-dark">
      <tr>
        @foreach ($articles->toArray()[0] as $key => $value)
          <th>{{ $key }}</th>
        @endforeach
      </tr>
    </thead>

    <tbody>
      @foreach ($articles as $article)
        <tr>
          @foreach ($article->toArray() as $key => $value)
            <td>{{ $key != "blog_content" ? $value : substr($value, 0, 30)."..." }}</td>
          @endforeach
        </tr>
      @endforeach
    </tbody>
  </table>
@endsection
