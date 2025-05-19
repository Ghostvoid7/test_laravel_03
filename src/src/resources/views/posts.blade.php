@extends('layouts.layout')

@section('title', 'Posts')

@section('content')
    <div id="main">
        <div class="inner">
            <section>
                <header class="major">
                    <h2>Posts</h2>
                </header>
                <div class="posts">
                    @foreach($posts as $post)
                        <article>
                            <h3> <?= $post['title'] ?> </h3>
                            <p> <?= $post['content'] ?> </p>
                        </article>
                    @endforeach
                </div>
            </section>
        </div>
    </div>
@endsection


