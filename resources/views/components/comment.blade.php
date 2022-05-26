<div class="col-12 my-2">
    <div class="card card-body">
        <div class="d-flex align-items-center mb-2">
            <img src="https://placeimg.com/480/480/people" class="me-3 rounded-circle" alt="avatar" width="30">
            <div>
                <small class="fw-bold">{{ $name }}
                    :
                </small>
            </div>
        </div>
        <small class="text-muted mb-2">{{ date('d M Y h:i', strtotime($date)) }}</small>
        <p class="m-0">{{ $comment }}</p>
    </div>
</div>
