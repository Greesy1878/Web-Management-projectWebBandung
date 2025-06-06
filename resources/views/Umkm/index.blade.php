<!DOCTYPE html>
<html>

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <meta charset="utf-8" />
    <link rel="stylesheet" href="{{ asset('umkm/globalsss.css') }}" />
    <link rel="stylesheet" href="{{ asset('umkm/styleee.css') }}" />
    <link rel="stylesheet" href="{{ asset('umkm/styleguideee.css') }}" />
</head>

<body>
    <div class="UMKM-user">
        <div class="welcoming-dashboard-wrapper">
            <div class="welcoming-dashboard">
                <header class="header">
                    <div class="list-5">
                        <div class="item-6">
                            <div class="element-16">
                                <a href="{{ route('admin.dashboard') }}" class="nav-item">Home</a>
                            </div>
                        </div>
                        <div class="item-7">
                            <div class="element-16">
                                <a href="{{ route('pariwisata.dashboard') }}" class="nav-item">Pariwisata</a>
                            </div>
                        </div>
                        <div class="item-8">
                            <div class="element-16">
                                <a href="{{ route('umkm.dashboard') }}" class="nav-item active">UMKM</a>
                            </div>
                        </div>
                        
                    </div>
                </header>

                <div class="content">
                    <h1>UMKM Section</h1>
                    <p>Your UMKM content goes here.</p>
                </div>
            </div>
        </div>
    </div>
</body>

</html>