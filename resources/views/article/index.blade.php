<div>
@foreach ($articles as $article)
<div>
  <h1>{{ $article->title }}</h1>
  <p>{{ $article->body }}</p>
</div>
@endforeach
</div>
