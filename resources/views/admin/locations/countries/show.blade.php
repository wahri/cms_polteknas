@extends('admin.admin')

@section('content')
    <div class="card card-primary">
        <div class="card-header">
            <h3 class="card-title">
                <span><i class="fa fa-eye"></i></span>
                <span>Countries - {{ $item->name }}</span>
            </h3>
        </div>
        <form>
            <div class="card-body">
                @include('admin.partials.card.info')
                <fieldset>
                    <div class="row">
                        <section class="col col-6">
                            <section class="form-group">
                                <label>Name</label>
                                <input type="text" class="form-control" value="{{ $item->name }}" readonly>
                            </section>
                        </section>
                        <section class="col col-6">
                            <section class="form-group">
                                <label>Continent</label>
                                <input type="text" class="form-control" value="{{ isset($item->continent)? $item->continent->name : '-' }}" readonly>
                            </section>
                        </section>
                    </div>
                </fieldset>
            </div>
            @include('admin.partials.form.form_footer', ['submit' => false])
        </form>
    </div>

    <div class="card card-primary">
        <div class="card-header">
            <h3 class="card-title">
                <span><i class="fa fa-map-marker"></i></span>
                <span>Google Map</span>
            </h3>
        </div>

        <div class="card-body p-0">
            <div id="map_canvas" class="google_maps" style="height: 450px;">
                &nbsp;
            </div>
        </div>
    </div>

@endsection


@section('scripts')
    @parent
    <script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?key={{ config('app.google_map_key') }}"></script>
    <script type="text/javascript" charset="utf-8">
        $(function ()
        {
            var latitude = {{ isset($item) && strlen($item->latitude) > 2? $item->latitude : -30 }};
            var longitude = {{ isset($item) && strlen($item->longitude) > 2? $item->longitude : 24 }};
            var zoom_level = {{ isset($item) && strlen($item->zoom_level) >= 1? $item->zoom_level : 6 }};

            initGoogleMapView('map_canvas', latitude, longitude, zoom_level);
        })
    </script>
@endsection
