@extends('frontend.base')


@section('articles')

<article class="entry entry-single">

    <div class="entry-img">
        <img src="{{$article->image}}" alt="" class="img-fluid">
    </div>

    <h2 class="entry-title">
        <a href="#">{{ $article->title }}</a>
    </h2>

    <div class="entry-meta">
        <ul>
            <li class="d-flex align-items-center"><i class="bi bi-person"></i> <a href="#">Author</a></li>
            <li class="d-flex align-items-center"><i class="bi bi-clock"></i> <a href="#"><time datetime="2020-01-01">Date</time></a></li>
            <li class="d-flex align-items-center"><i class="bi bi-chat-dots"></i> <a href="#">Many comments</a></li>
        </ul>
    </div>

    <div class="entry-content">
        <p>
            {{ $article->content }}
        </p>
    </div>

    <div class="entry-footer">
        <i class="bi bi-folder"></i>
        <ul class="cats">
            <li><a href="#">Business</a></li>
        </ul>

        <i class="bi bi-tags"></i>
        <ul class="tags">
            <li><a href="#">Creative</a></li>
            <li><a href="#">Tips</a></li>
            <li><a href="#">Marketing</a></li>
        </ul>
    </div>

</article>
@endsection
