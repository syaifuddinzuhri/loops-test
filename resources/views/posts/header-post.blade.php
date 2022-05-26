<div class="d-flex align-items-center justify-content-between">
    <div class="d-flex align-items-center">
        <img src="https://placeimg.com/480/480/people" class="me-4 rounded-circle img-thumbnail" alt="avatar" width="50">
        <div>
            <p class="m-0 fw-bold">{{ $name }}</p>
            <small class="text-muted">{{ $email }} |
                {{ date('d M Y h:i', strtotime($date)) }}</small>
        </div>
    </div>
    <button class="btn btn-sm btn-primary" type="button" data-bs-toggle="collapse" data-bs-target="#collapseExample_{{ $no }}"
        aria-expanded="false" aria-controls="collapseExample">
        <i class="fas fa-reply"></i></button>
</div>
