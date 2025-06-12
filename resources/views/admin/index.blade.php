@extends('layouts.admin')

@section('content')
    <div class="d-sm-flex align-items-center justify-content-between mb-4">

        <div class="container mt-5">

            <div class="card">
                <div class="card-body">
                    <form method="POST" action="{{ route('tourism-objects.store') }}" enctype="multipart/form-data">
                        @csrf
                        <div class="container mt-4">
                            <h3 class="text-secondary mb-4">Pariwisata</h3>
                            <div class="row">
                                <div class="col-md-6">
                                    <!-- Title -->
                                    <div class="form-group">
                                        <label for="title">Title</label>
                                        <input type="text" class="form-control" name="title" id="title"
                                            placeholder="Enter title">
                                    </div>
                                    <div class="form-group">
                                        <label for="lokasi">Location</label>
                                        <input type="text" class="form-control" name="lokasi" id="lokasi"
                                            placeholder="Enter location/address">
                                    </div>
                                    <!-- Service -->
                                    <div class="form-group">
                                        <label for="service">Service</label>
                                        <textarea class="form-control" name="service" id="service" placeholder="Enter services"></textarea>
                                    </div>

                                    <!-- Map -->
                                    <div class="form-group">
                                        <label for="map">Google Map Coordinates</label>
                                        <textarea class="form-control" name="map" id="map" placeholder="Latitude, Longitude"></textarea>
                                    </div>

                                    <!-- Lokasi -->


                                    <div class="form-group">
                                        <label for="content">Content</label>
                                        <textarea class="form-control" name="content" id="content" rows="3" placeholder="Enter content"></textarea>
                                    </div>
                                </div>

                                <div class="col-md-6">
                                    <!-- Main Image URL -->
                                    <div class="form-group">
                                        <label for="image">Main Image URL</label>
                                        <input type="url" class="form-control" name="image" id="image"
                                            placeholder="https://example.com/image.jpg">
                                    </div>

                                    <!-- News Image URL -->
                                    <div class="form-group">
                                        <label for="imageberita">News Image URL</label>
                                        <input type="url" class="form-control" name="imageberita" id="imageberita"
                                            placeholder="https://example.com/news-image.jpg">
                                    </div>

                                    <!-- Destination Image URL -->
                                    <div class="form-group">
                                        <label for="imagedestination">Destination Image URL</label>
                                        <input type="url" class="form-control" name="imagedestination"
                                            id="imagedestination" placeholder="https://example.com/destination.jpg">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <button type="submit" class="btn btn-primary">
                            Submit
                        </button>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
