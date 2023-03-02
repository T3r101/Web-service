@extends('template.default')

@section('title', 'HOME')
@section('content')

<div class="row gx-4 gx-lg-5 justify-content-center">
                <div class="col-md-10 col-lg-8 col-xl-7">
                    <!-- Post preview-->
                    @foreach ($blogs as $list)
                    <div class="post-preview">
                        <a href="post.html">
                            <h2 class="post-title">{{$list['blogtitle']}}</h2>
                            <h3 class="post-subtitle">{{$list['blogdescription']}}</h3>
                        </a>
                        <p class="post-meta">
                            Posted by
                            <a href="#!">{{$list['postedby']}}</a>
                            on {{$list['date']}}
                        </p>
                    </div>
                    <!-- Divider-->
                    @endforeach

@endsection