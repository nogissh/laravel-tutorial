<h1>form</h1>

<form action="/create" method="post">
  {{ csrf_field() }}
  <input name="title" placeholder="title" />
  <input name="body" placeholder="body">
  <button type="submit">submit</button>
</form>
