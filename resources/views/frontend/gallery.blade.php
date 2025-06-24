@extends('frontend.layout_gallery')

@section('title', 'Gallery - Captured Moments')

@section('content')
<div class="container my-5">
    <h1 class="text-center mb-5">Our Gallery</h1>
    <div class="row">
        @for ($i = 1; $i <= 12; $i++)
            <div class="col-md-4 col-sm-6 gallery-item">
                <img src="https://picsum.photos/id/{{ $i + 10 }}/400/300" alt="Gallery Image {{ $i }}" class="img-fluid">
            </div>
        @endfor
    </div>
</div>
@endsection
