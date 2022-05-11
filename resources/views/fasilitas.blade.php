@extends('layouts.main')

@section('container')
<h2 class="mb-4">Fasilitas</h2>

<div class="fasilitas row g-0 justify-content-between">
    @foreach ($fasilitas as $f)
    <img src="/img/{{ $f->image }}" alt="Kolam Renang" class="border border-dark">
    @endforeach
</div>
@endsection