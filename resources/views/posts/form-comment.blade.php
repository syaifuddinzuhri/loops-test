<div class="collapse" id="collapseExample_{{ $no }}">
    <div class="card mt-4">
        <div class="card-header">
            Post Comment
        </div>
        <div class="card-body">
            <form method="POST" action="{{ route('comment.insert') }}">
                @csrf
                <input type="hidden" value="{{ $post_id }}" name="post_id">
                <div class="row">
                    <div class="col-md-4">
                        <div class="mb-3">
                            <label for="name" class="form-label">Name</label>
                            <input type="text" class="form-control" id="name" name="name" placeholder="Name"
                                @if (Auth::check()) value="{{ Auth::user()->name }}" disabled @endif
                                required>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="mb-3">
                            <label for="email" class="form-label">Email</label>
                            <input type="email" class="form-control" id="email" name="email"
                                placeholder="Email"
                                @if (Auth::check()) value="{{ Auth::user()->email }}" disabled @endif
                                required>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="mb-3">
                            <label for="web" class="form-label">Website Link</label>
                            <input type="text" class="form-control" id="web" name="web"
                                placeholder="Website Link">
                        </div>
                    </div>
                    <div class="col-12">
                        <div class="mb-3">
                            <label for="comment" class="form-label">Comment</label>
                            <textarea class="form-control" id="comment" name="comment" rows="3" placeholder="Comment" required></textarea>
                        </div>
                    </div>
                </div>
                <button type="submit" class="btn btn-primary">Submit</button>
            </form>
        </div>
    </div>
</div>
