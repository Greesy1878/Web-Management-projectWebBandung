@extends('layouts.admin')

@php
use App\Http\Controllers\TourismObjectController;
use App\Models\UmkmDestination;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
@endphp

@section('content')
<div class="d-sm-flex align-items-center flex-column justify-content-between mb-4">
    <div class="container mt-5">
        <div class="card">
            <div class="card-body">
                <form method="POST" action="{{ route('umkm.update', $umkmdestination->id) }}" enctype="multipart/form-data">
                    @csrf
                    @method('PUT')

                    <div class="container mt-4">
                        <h3 class="text-secondary mb-4">Edit UMKM</h3>
                        <div class="row">
                            <!-- Kolom Kiri -->
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="title">Judul</label>
                                    <input type="text" id="title" name="title" class="form-control" 
                                           value="{{ old('title', $umkmdestination->title) }}" 
                                           placeholder="Masukkan judul">
                                </div>

                                <div class="form-group">
                                    <label for="lokasi">Lokasi</label>
                                    <input type="text" id="lokasi" name="lokasi" class="form-control" 
                                           value="{{ old('lokasi', $umkmdestination->lokasi) }}" 
                                           placeholder="Masukkan alamat/lokasi">
                                </div>

                                <div class="form-group">
                                    <label for="service">Layanan</label>
                                    <textarea id="service" name="service" class="form-control" 
                                              placeholder="Masukkan layanan">{{ old('service', $umkmdestination->service) }}</textarea>
                                </div>

                                <div class="form-group">
                                    <label for="map">Koordinat Google Maps</label>
                                    <textarea id="map" name="map" class="form-control" 
                                              placeholder="Latitude, Longitude">{{ old('map', $umkmdestination->map) }}</textarea>
                                </div>

                                <div class="form-group">
                                    <label for="content">Konten</label>
                                    <textarea id="content" name="content" class="form-control" rows="3" 
                                              placeholder="Masukkan konten">{{ old('content', $umkmdestination->content) }}</textarea>
                                </div>
                            </div>

                            <!-- Kolom Kanan -->
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="image">URL Gambar Utama</label>
                                    <input type="url" id="image" name="image" class="form-control" 
                                           value="{{ old('image', $umkmdestination->image) }}" 
                                           placeholder="https://example.com/image.jpg">
                                </div>

                                <div class="form-group">
                                    <label for="imageberita">URL Gambar Berita</label>
                                    <input type="url" id="imageberita" name="imageberita" class="form-control" 
                                           value="{{ old('imageberita', $umkmdestination->imageberita) }}" 
                                           placeholder="https://example.com/news-image.jpg">
                                </div>

                                <div class="form-group">
                                    <label for="imagedestination">URL Gambar Destinasi</label>
                                    <input type="url" id="imagedestination" name="imagedestination" class="form-control" 
                                           value="{{ old('imagedestination', $umkmdestination->imagedestination) }}" 
                                           placeholder="https://example.com/destination.jpg">
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="mt-4">
                        <button type="submit" class="btn btn-success">Update</button>
                        <a href="{{ route('admin.umkm.index') }}" class="btn btn-secondary ml-2">Batal</a>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection
