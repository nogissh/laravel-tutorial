<!-- Link -->
<div>
  <ul>
    <li><a href="/create">create</a></li>
  </ul>
</div>

<div>
@foreach ($articles as $article)
<div>
  <h1>{{ $article->title }}</h1>
  <p>{{ $article->body }}</p>
  <p>
    <a href="/edit/{{ $article->id }}">edit</a>
  </p>
</div>
@endforeach
</div>
