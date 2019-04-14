<h1>form</h1>

<form action="/update" method="post">
  {{ csrf_field() }}
  <input type="text" name="title" value="{{ $article->title }}" placeholder="title" />
  <input type="text" name="body" value="{{ $article->body }}" placeholder="body">
  <input type="hidden" name="id" value="{{ $article->id }}">
  <button type="submit">submit</button>
</form>
