@extends('layouts.template')

@push('csslib')
@endpush

@push('css')
@endpush

@section('content')

<div class="section-header">
    <h1>Top Navigation</h1>
    <div class="section-header-breadcrumb">
        <div class="breadcrumb-item active"><a href="#">Dashboard</a></div>
        <div class="breadcrumb-item"><a href="#">Layout</a></div>
        <div class="breadcrumb-item">Top Navigation</div>
    </div>
</div>

<div class="section-body">
    <h2 class="section-title">This is Example Page</h2>
    <p class="section-lead">This page is just an example for you to create your own page.</p>
    <div class="card">
        <div class="card-header">
            <h4>Example Card</h4>
        </div>
        <div class="card-body">
            <p>Halo selamat datang.</p>
        </div>
        <div class="card-footer bg-whitesmoke">
            This is card footer
        </div>
    </div>
</div>
@endsection

@push('jslib')
@endpush

@push('js')
@endpush
