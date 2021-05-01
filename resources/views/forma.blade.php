<form method="POST" action="{{route('news.store')}}">
@csrf
  <div class="mb-3">
    <label>Title</label>
    <input type="text">
  </div>
  <br>
  <div class="mb-3">
    <label>Content</label>
    <input type="text">
  </div>
  <br>
  <div class="mb-3">
    <label>Date</label>
    <input type="date">
  </div>
  <button type="submit">Send</button>
</form>
