@foreach ($collection as $nav)
    <li class="menu-item {{ isset($navigation[$nav->id]) ? 'menu-item-has-children' : '' }}" data-size="60">
        <a href="{{ $nav->url }}"
            @if (isset($navigation[$nav->id])) class="sf-with-ul-pre" @endif>
            {!! $nav->name !!}
        </a>
        @if (isset($navigation[$nav->id]))
            <ul class="sub-menu">
                @include('website.partials.navigation.sub_level', ['collection' => $navigation[$nav->id]])
            </ul>
        @endif
    </li>

@endforeach
