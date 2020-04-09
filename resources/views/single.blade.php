{{-- File: ./resources/views/single.blade.php --}}
@extends('layouts.master')

@section('content')
    @foreach($data as $isi_post)

        <div class="container">
        <div class="row">
            <div class="col-lg-10 mx-auto">
                <h3 class="mt-4">{{ $isi_post->judul }} <span class="lead"> by <a href="#"> {{ $isi_post->users->name }} </a></span> </h3>
                <hr>
                <p>Posted {{ $isi_post->created_at }} | Category <a href="category.html">{{ $isi_post->category->name }}</a></p>
                <hr>
{{--                <img class="img-fluid rounded" src=" {!! !empty($post->image) ? '/uploads/posts/' . $post->image :  'http://placehold.it/750x300' !!} " alt="">--}}
                <hr>
                <p class="lead">{!! ($isi_post->body) !!}</p>
                <hr>
                <div class="card my-4">
                    <h5 class="card-header">Leave a Comment:</h5>
                    <div class="card-body">
                        <form>
                            <div class="form-group">
                                <textarea class="form-control" rows="3"></textarea>
                            </div>
                            <button type="submit" class="btn btn-primary">Submit</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
            @endforeach
    </div>
@endsection
