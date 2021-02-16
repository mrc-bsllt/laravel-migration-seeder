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
            <td>{{ ($key != "blog_content") && ($key != "subtitle") ? $value : substr($value, 0, 30)."..." }}</td>
          @endforeach
          <td><a class="btn btn-primary" href="#"><i class="fas fa-eye"></i></a></td>
          <td><a class="btn btn-primary" href="#"><i class="fas fa-pencil-alt"></i></a></td>
          <td></td>
        </tr>
      @endforeach
    </tbody>
  </table>
@endsection
