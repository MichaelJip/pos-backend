@extends('layouts.app')

@section('title', 'General Dashboard')

@push('style')
    <!-- CSS Libraries -->
    <link rel="stylesheet" href="{{ asset('library/jqvmap/dist/jqvmap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('library/summernote/dist/summernote-bs4.min.css') }}">
@endpush

@section('main')
    <div class="main-content">
        <section class="section">
            <div class="section-header">
                <h1>Dashboard</h1>
            </div>
            <div class="section-body">
                <div class="row">
                    <!-- Card for Users -->
                    <div class="col-lg-3 col-md-6 col-sm-12">
                        <div class="card">
                            <div class="card-body text-center">
                                <h5 class="card-title">Users</h5>
                                <p class="card-text">Manage users and their information.</p>
                                <a href="{{ route('users.index') }}" class="btn btn-primary">View Users</a>
                            </div>
                        </div>
                    </div>

                    <!-- Card for Products -->
                    <div class="col-lg-3 col-md-6 col-sm-12">
                        <div class="card">
                            <div class="card-body text-center">
                                <h5 class="card-title">Products</h5>
                                <p class="card-text">Manage all products in the system.</p>
                                <a href="{{ route('products.index') }}" class="btn btn-primary">View Products</a>
                            </div>
                        </div>
                    </div>

                    <!-- Card for Categories -->
                    <div class="col-lg-3 col-md-6 col-sm-12">
                        <div class="card">
                            <div class="card-body text-center">
                                <h5 class="card-title">Categories</h5>
                                <p class="card-text">Organize products by categories.</p>
                                <a href="{{ route('categories.index') }}" class="btn btn-primary">View Categories</a>
                            </div>
                        </div>
                    </div>

                    <!-- Card for Discounts -->
                    <div class="col-lg-3 col-md-6 col-sm-12">
                        <div class="card">
                            <div class="card-body text-center">
                                <h5 class="card-title">Discounts</h5>
                                <p class="card-text">Manage discount offers and promotions.</p>
                                <a href="{{ route('discounts.index') }}" class="btn btn-primary">View Discounts</a>
                            </div>
                        </div>
                    </div>
                </div>
        </section>
    </div>
@endsection

@push('scripts')
    <!-- JS Libraies -->
    <script src="{{ asset('library/simpleweather/jquery.simpleWeather.min.js') }}"></script>
    <script src="{{ asset('library/chart.js/dist/Chart.min.js') }}"></script>
    <script src="{{ asset('library/jqvmap/dist/jquery.vmap.min.js') }}"></script>
    <script src="{{ asset('library/jqvmap/dist/maps/jquery.vmap.world.js') }}"></script>
    <script src="{{ asset('library/summernote/dist/summernote-bs4.min.js') }}"></script>
    <script src="{{ asset('library/chocolat/dist/js/jquery.chocolat.min.js') }}"></script>

    <!-- Page Specific JS File -->
    <script src="{{ asset('js/page/index-0.js') }}"></script>
@endpush
