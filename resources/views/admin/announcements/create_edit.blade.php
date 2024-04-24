@extends('admin.admin')

@section('content')
    <form class="card card-primary" method="POST" action="{{$selectedNavigation->url . (isset($item)? "/{$item->id}" : '')}}" accept-charset="UTF-8" enctype="multipart/form-data">
        <input name="_token" type="hidden" value="{{ csrf_token() }}">
        <input name="_method" type="hidden" value="{{isset($item)? 'PUT':'POST'}}">

        <div class="card-header">
            <h3 class="card-title">
                <span><i class="fa fa-edit"></i></span>
                <span>{{ isset($item)? 'Edit the ' . $item->title . ' entry': 'Create a new Announcement' }}</span>
            </h3>

            <div class="card-tools">
                <button type="button" class="btn btn-tool" data-card-widget="collapse">
                    <i class="fas fa-minus"></i>
                </button>
            </div>
        </div>

        <div class="card-body">
            @include('admin.partials.card.info')

            <fieldset>
                <div class="row">
                    <div class="col-md-8">
                        <div class="form-group">
                            <label for="title">Title</label>
                            <input type="text" class="form-control {{ form_error_class('title', $errors) }}" id="title" name="title" placeholder="Enter Title" value="{{ ($errors && $errors->any()? old('title') : (isset($item)? $item->title : '')) }}">
                            {!! form_error_message('title', $errors) !!}
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-md-12">
                        <div class="form-group">
                            <label for="small_description">Description
                                <span class="small">(Optional)</span></label>
                            <input type="text" class="form-control {{ form_error_class('small_description', $errors) }}" id="small_description" name="small_description" placeholder="Enter Description" value="{{ ($errors && $errors->any()? old('small_description') : (isset($item)? $item->small_description : '')) }}">
                            {!! form_error_message('small_description', $errors) !!}
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col col-6">
                        <div class="form-group">
                            <label for="action_name">Action Name
                                <span class="small">(Optional)</span></label>
                            <input type="text" class="form-control {{ form_error_class('action_name', $errors) }}" id="action_name" name="action_name" placeholder="Enter Action Name" value="{{ ($errors && $errors->any()? old('action_name') : (isset($item)? $item->action_name : '')) }}">
                            {!! form_error_message('action_name', $errors) !!}
                        </div>
                    </div>

                    <div class="col col-6">
                        <div class="form-group">
                            <label for="action_url">Action Url <span class="small">(Optional)</span></label>
                            <div class="input-group">
                                <input type="text" class="form-control {{ form_error_class('action_url', $errors) }}" id="action_url" name="action_url" placeholder="Enter Action Url" value="{{ ($errors && $errors->any()? old('action_url') : (isset($item)? $item->action_url : '')) }}">
                                <div class="input-group-append">
                                    <span class="input-group-text"><i class="fas fa-link"></i></span>
                                </div>
                                {!! form_error_message('action_url', $errors) !!}
                            </div>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-md-12">
                        <div class="form-group">
                            <label for="page_url">Page Url <span class="small">(Optional)</span></label>
                            {!! form_select('page_url', $pages, ($errors && $errors->any() ? old('page_url') : (isset($item) ? $item->page_url : '')), ['class' => 'select2 form-control '.form_error_class('page_url', $errors)]) !!}
                            {!! form_error_message('page_url', $errors) !!}
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col col-6">
                        <div class="form-group">
                            <label for="active_from">Active From
                                <span class="small">(Optional)</span></label>
                            <div class="input-group">
                                <input type="text" class="form-control {{ form_error_class('active_from', $errors) }}" id="active_from" name="active_from" data-date-format="YYYY-MM-DD HH:mm:ss" placeholder="Enter Active From" value="{{ ($errors && $errors->any()? old('active_from') : (isset($item)? $item->active_from : '')) }}">
                                <div class="input-group-append">
                                    <span class="input-group-text"><i class="fas fa-calendar"></i></span>
                                </div>
                                {!! form_error_message('active_from', $errors) !!}
                            </div>
                        </div>
                    </div>

                    <div class="col col-6">
                        <div class="form-group">
                            <label for="active_to">Active To
                                <span class="small">(Optional)</span></label>
                            <div class="input-group">
                                <input type="text" class="form-control {{ form_error_class('active_to', $errors) }}" id="active_to" name="active_to" data-date-format="YYYY-MM-DD HH:mm:ss" placeholder="Enter Active From" value="{{ ($errors && $errors->any()? old('active_to') : (isset($item)? $item->active_to : '')) }}">
                                <div class="input-group-append">
                                    <span class="input-group-text"><i class="fas fa-calendar"></i></span>
                                </div>
                                {!! form_error_message('active_to', $errors) !!}
                            </div>
                        </div>
                    </div>
                </div>

                <div class="form-group">
                    <label>Browse for an Image (800 x 500)</label>
                    <div class="input-group">
                        <input id="photo-label" type="text" class="form-control {{ form_error_class('photo', $errors) }}" readonly placeholder="Browse for an image">
                        <span class="input-group-append">
                            <button type="button" class="btn btn-default" onclick="document.getElementById('photo').click();">Browse</button>
                        </span>
                        <input id="photo" style="display: none" accept="{{ get_file_extensions('image') }}" type="file" name="photo" onchange="document.getElementById('photo-label').value = this.value">
                        {!! form_error_message('photo', $errors) !!}
                    </div>
                </div>

                @if(isset($item) && $item && $item->image)
                    <section>
                        <img src="{{ uploaded_images_url($item->image) }}" style="max-width: 100%; max-height: 300px;">
                        <input type="hidden" name="image" value="{{ $item->image }}">
                    </section>
                @endif
            </fieldset>

        </div>
        @include('admin.partials.form.form_footer')
    </form>

@endsection

@section('scripts')
    @parent
    <script type="text/javascript" charset="utf-8">
        $(function () {
            setDateTimePickerRange('#active_from', '#active_to');
        })
    </script>
@endsection
