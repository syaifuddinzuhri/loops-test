@php
$arr = false;
if (isset($is_array)) {
    $arr = $is_array;
}
@endphp

<div class="col-12">
    @if ($type == 'success')
        <div class="alert alert-success d-flex align-items-center" role="alert">
            <i class="fas fa-check-circle me-3"></i>
            <div>
                {{ $message }}
            </div>
        </div>
    @elseif ($type == 'info')
        <div class="alert alert-info d-flex align-items-center" role="alert">
            <i class="fas fa-exclamation-circle me-3"></i>
            <div>
                {{ $message }}
            </div>
        </div>
    @else
        <div class="alert alert-danger d-flex align-items-center" role="alert">
            <i class="fas fa-exclamation-circle me-3"></i>
            <div>
                @if ($arr)
                    {!! $message !!}
                @else
                    {{ $message }}
                @endif
            </div>
        </div>
    @endif
</div>
