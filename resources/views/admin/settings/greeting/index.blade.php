@extends('admin.admin')

@section('content')
    <div class="card  card-primary">
        <div class="card-header">
            <h3 class="card-title">List App Greeting</h3>

            <div class="card-tools">
                <button type="button" class="btn btn-tool" data-card-widget="collapse">
                    <i class="fas fa-minus"></i>
                </button>
            </div>
        </div>

        <div class="card-body">
            @include('admin.partials.card.info')

            @if($items->count() <= 0)
                @include('admin.partials.card.buttons')
            @endif

            <table id="tbl-list" data-page-length="25" class="dt-table table table-sm table-bordered table-striped table-hover">
                <thead>
                <tr>
                    <th>Title</th>
                    <th>Sub Title</th>
                    <th>Message</th>
                    <th>Button Link</th>
                    <th>Image</th>
                    <th>Action</th>
                </tr>
                </thead>
                <tbody>
                @foreach ($items as $item)
                    <tr>
                        <td>{{ $item->title }}</td>
                        <td>{{ $item->subtitle }}</td>
                        <td>{{ $item->message }}</td>
                        <td>{{ $item->buttonlink }}</td>
                        <td>{{ $item->image }}</td>
                        <td>{!! action_row($selectedNavigation->url, $item->id, $item->name, ['edit']) !!}</td>
                        </tr>
                @endforeach
                </tbody>
            </table>
        </div>
    </div>
@endsection
