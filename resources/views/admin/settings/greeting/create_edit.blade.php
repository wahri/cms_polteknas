@extends('admin.admin')

@section('content')

    <div class="card card-primary">
        <div class="card-header">
            <h3 class="card-title">
                <span><i class="fa fa-edit"></i></span>
                <span>{{ isset($item)? 'Edit the ' . $item->title . ' entry': 'Create a new Greeting' }}</span>
            </h3>

            <div class="card-tools">
                <button type="button" class="btn btn-tool" data-card-widget="collapse">
                    <i class="fas fa-minus"></i>
                </button>
            </div>
        </div>
        <form method="POST" action="{{$selectedNavigation->url . (isset($item)? "/{$item->id}" : '')}}" accept-charset="UTF-8" enctype="multipart/form-data">
            <div class="card-body">

                <input name="_token" type="hidden" value="{{ csrf_token() }}">
                <input name="_method" type="hidden" value="{{isset($item)? 'PUT':'POST'}}">

                
                <fieldset>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="title">Title</label>
                                <input type="text" class="form-control {{ form_error_class('title', $errors) }}" id="title" name="title" placeholder="Enter title" value="{{ ($errors && $errors->any()? old('title') : (isset($item)? $item->title : '')) }}">
                                {!! form_error_message('title', $errors) !!}
                            </div>
                        </div>

                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="subtitle">Sub Title</label>
                                <input type="text" class="form-control {{ form_error_class('subtitle', $errors) }}" id="subtitle" name="subtitle" placeholder="Enter Sub Title" value="{{ ($errors && $errors->any()? old('subtitle') : (isset($item)? $item->subtitle : '')) }}">
                                {!! form_error_message('subtitle', $errors) !!}
                            </div>
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="message">Message</label>
                        <textarea name="message" id="message" rows="2" class="form-control {{ form_error_class('message', $errors) }}">{{ ($errors && $errors->any()? old('message') : (isset($item)? $item->message : '')) }}</textarea>
                        {!! form_error_message('message', $errors) !!}
                    </div>

                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="buttonlink">Button Link</label>
                                <input type="text" class="form-control {{ form_error_class('buttonlink', $errors) }}" id="buttonlink" name="buttonlink" placeholder="Enter Button Link" value="{{ ($errors && $errors->any()? old('buttonlink') : (isset($item)? $item->buttonlink : '')) }}">
                                {!! form_error_message('buttonlink', $errors) !!}
                            </div>
                        </div>

                        
                    </div>

                    
                    <section class="form-group ">
                                <label>Leader Photo</label>
                                <div class="input-group input-group-sm">
                                    <input id="photo-label" type="text" class="form-control {{ form_error_class('photo', $errors) }}" readonly placeholder="Browse for an image">
                                    <input id="photo" style="display: none" accept="{{ get_file_extensions('image') }}" type="file" name="photo" onchange="document.getElementById('photo-label').value = this.value">
                                    {!! form_error_message('photo', $errors) !!}
                                    <div class="input-group-append">
                                        <button type="button" class="btn btn-secondary" onclick="document.getElementById('photo').click();">Browse</button>
                                    </div>
                                </div>

                            </section>

                            @if(isset($item))
                                <section>
                                    <img src="/uploads/images/logo/{{ $item->image }}" style="max-height: 300px;">
                                    <input type="hidden" name="image" value="{{ $item->image }}">
                                </section>
                            @endif
                </fieldset>

            </div>
            @include('admin.partials.form.form_footer')
        </form>
    </div>

    
@endsection

@section('scripts')
    @parent
    <script type="text/javascript" charset="utf-8">
        
    </script>
   @endsection
