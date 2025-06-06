@extends('layouts.cms-layout')

@section('content')
    <div class="UMKM-user">
        <div class="welcoming-dashboard-wrapper">
            <div class="welcoming-dashboard">
                <header class="header">
                    <div class="list-5">
                        <div class="item-6">
                            <div class="element-16">
                                <div class="text-wrapper-34">Home</div>
                            </div>
                        </div>
                        <div class="item-7">
                            <div class="element-16">
                                <a href="{{ route('pariwisata.dashboard') }}">Pariwisata</a>
                            </div>
                        </div>
                        <div class="item-wrapper">
                            <div class="item-8">
                                <div class="element-16">
                                    <div class="text-wrapper-36">UMKM</div>
                                </div>
                            </div>
                        </div>
                        <div class="element-17">
                            <div class="text-wrapper-37">Login</div>
                        </div>
                    </div>
                </header>
                <div class="content">
                    <h1>Welcome to the Dashboard</h1>
                    <p>Your dashboard content goes here.</p>
                </div>
            </div>
        </div>
    </div>
@endsection
