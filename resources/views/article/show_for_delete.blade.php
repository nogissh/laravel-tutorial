<h1>Are you sure to delete this article?</h1>

<div>
  <div>
    <span style="font-weight: bold;">title</span> {{ $article->title }}
  </div>
  <div>
    <span style="font-weight: bold;">body</span> {{ $article->body }}
  </div>
</div>

<form action="/delete/" method="post">
  {{ csrf_field() }}
  <input type="hidden" name="id" value="{{ $article->id }}" />
  <button type="submit">Delete</button>
</form>

<p><a href="/">Back to top</a></p>
