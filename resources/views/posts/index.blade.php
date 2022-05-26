@extends('layouts.main')

@section('title_page', 'List semua post')

@section('contents')
    <div class="container">
        <div class="row my-5">
            @if (Auth::check())
                @include('posts.modal')
            @endif
            @if ($errors->any())
                @include('components.alert', [
                    'type' => 'error',
                    'message' => implode('', $errors->all('<div>:message</div>')),
                    'is_array' => true,
                ])
            @endif
            @if (count($data) > 0)
                @if (\Session::has('error'))
                    @include('components.alert', ['type' => 'error', 'message' => Session::get('error')])
                @endif
                @if (\Session::has('success'))
                    @include('components.alert', ['type' => 'success', 'message' => Session::get('success')])
                @endif
                @php
                    $no = 1;
                @endphp
                @foreach ($data as $item)
                    <div class="col-12 mb-4">
                        <div class="card">
                            <div class="card-body">
                                @include('posts.header-post', [
                                    'name' => $item->user->name,
                                    'email' => $item->user->email,
                                    'date' => $item->created_at,
                                    'no' => $item->id,
                                ])
                                <hr>
                                <a href="{{ route('post.detail', $item->slug) }}" class="text-decoration-none text-dark">
                                    <h4>{{ \Illuminate\Support\Str::limit($item->title, $limit = 150, $end = '...') }}
                                    </h4>
                                </a>
                                <p class="text-muted m-0">
                                    {{ \Illuminate\Support\Str::limit($item->content, $limit = 150, $end = '...') }}</p>

                                @include('posts.form-comment', ['post_id' => $item->id, 'no' => $item->id])

                                <div class="card mt-4">
                                    <div class="card-header">
                                        <i class="fas fa-comments"></i> Comments
                                    </div>
                                    <div class="card-body">
                                        <div class="row">
                                            @if (count($item->comments) > 0)
                                                @include('components.comment', [
                                                    'name' => $item->comments[0]->name,
                                                    'comment' => $item->comments[0]->comment,
                                                    'date' => $item->comments[0]->created_at,
                                                ])
                                                <a href="{{ route('post.detail', $item->slug) }}">All Comments...</a>
                                            @else
                                                @include('components.alert', ['type' => 'info', 'message' => 'No comments yet'])
                                            @endif
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach
            @else
                @include('components.alert', ['type' => 'error', 'message' => 'Not posts yet'])
            @endif
        </div>
    </div>
@endsection
