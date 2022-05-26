@extends('layouts.main')

@section('title_page', $data ? $data->title : 'Detail')

@section('contents')
    <div class="container">
        <div class="row my-5">
            <div class="col-12">
                @if ($data)
                    @if (\Session::has('error'))
                        @include('components.alert', ['type' => 'error', 'message' => Session::get('error')])
                    @endif
                    @if (\Session::has('success'))
                        @include('components.alert', ['type' => 'success', 'message' => Session::get('success')])
                    @endif
                    @include('posts.header-post', [
                        'name' => $data->user->name,
                        'email' => $data->user->email,
                        'date' => $data->created_at,
                        'no' => 0,
                    ])
                    <div class="mt-4">
                        <p>{{ $data->content }}</p>
                    </div>
                    @include('posts.form-comment', ['post_id' => $data->id, 'no' => 0])
                    <div class="card mt-4">
                        <div class="card-header">
                            <i class="fas fa-comments"></i> Comments
                        </div>
                        <div class="card-body">
                            <div class="row">
                                @if (count($data->comments) > 0)
                                    @foreach ($data->comments as $item)
                                        @include('components.comment', [
                                            'name' => $item->name,
                                            'comment' => $item->comment,
                                            'date' => $item->created_at,
                                        ])
                                    @endforeach
                                @else
                                    @include('components.alert', ['type' => 'info', 'message' => 'No comments yet'])
                                @endif
                            </div>
                        </div>
                    </div>
                @else
                    @include('components.alert', ['type' => 'error', 'message' => 'Data not found'])
                @endif
            </div>
        </div>
    </div>
@endsection
