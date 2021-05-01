<table class="table">
  <thead>
    <tr>
      <th scope="col">№</th>
      <th scope="col">id</th>
      <th scope="col">title</th>
      <th scope="col">publish date</th>
      <th scope="col">content</th>
    </tr>
  </thead>
  <tbody>
  @foreach ($news as $val)
  <tr>
      <td>{{ $val->id }}</td>
      <td>{{ $val->title }}</td>
      <td>{{ $val->publish_date }}</td>
      <td>{{ $val->content }}</td>
    </tr>
     @endforeach
  </tbody>
</table>
