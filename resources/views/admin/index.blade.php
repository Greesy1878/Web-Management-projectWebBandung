@extends('layouts.admin')

@section('content')
<div class="d-sm-flex align-items-center flex-column justify-content-between mb-4">
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
                                    <input type="text" class="form-control" name="title" id="title" placeholder="Enter title">
                                </div>
                                <div class="form-group">
                                    <label for="lokasi">Location</label>
                                    <input type="text" class="form-control" name="lokasi" id="lokasi" placeholder="Enter location/address">
                                </div>
                                <!-- Service -->
                                <div class="form-group">
                                    <label for="service">Service</label>
                                    <textarea class="form-control" name="service" id="service" placeholder="Enter services"></textarea>
                                </div>
                                <div class="form-group">
                                    <label for="map">Google Map Coordinates</label>
                                    <textarea class="form-control" name="map" id="map" placeholder="Latitude, Longitude"></textarea>
                                </div>
                                <div class="form-group">
                                    <label for="content">Content</label>
                                    <textarea class="form-control" name="content" id="content" rows="3" placeholder="Enter content"></textarea>
                                </div>
                            </div>

                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="image">Main Image URL</label>
                                    <input type="url" class="form-control" name="image" id="image" placeholder="https://example.com/image.jpg">
                                </div>
                                <div class="form-group">
                                    <label for="imageberita">News Image URL</label>
                                    <input type="url" class="form-control" name="imageberita" id="imageberita" placeholder="https://example.com/news-image.jpg">
                                </div>
                                <div class="form-group">
                                    <label for="imagedestination">Destination Image URL</label>
                                    <input type="url" class="form-control" name="imagedestination" id="imagedestination" placeholder="https://example.com/destination.jpg">
                                </div>
                            </div>
                        </div>
                    </div>
                    <button type="submit" class="btn btn-primary">Submit</button>
                </form>
            </div>
        </div>
    </div>

    {{-- TABLE LIST PARIWISATA --}}
    <div class="container mt-5">
        <table class="table table-bordered">
            <thead class="thead-light">
                <tr>
                    <th>ID</th>
                    <th>Title</th>
                    <th>Service</th>
                    <th>Map</th>
                    <th>Lokasi</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($destinations as $destination)
                <tr>
                    <td>{{ $destination->id }}</td>
                    <td>{{ $destination->title }}</td>
                    <td style="max-width: 250px; white-space: normal;">{{ $destination->service }}</td>
                    <td>{{ $destination->map }}</td>
                    <td>{{ $destination->lokasi }}</td>
                    <td>
                        <a href="{{ route('pariwisata.edit', $destination->id) }}" class="btn btn-sm btn-warning">Edit</a>
                        <form action="{{ route('pariwisata.destroy', $destination->id) }}" method="POST" style="display:inline;">
                            @csrf
                            @method('DELETE')
                            <button type="submit" onclick="return confirm('Yakin ingin menghapus data ini?')" class="btn btn-sm btn-danger">Delete</button>
                        </form>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>
@endsection
