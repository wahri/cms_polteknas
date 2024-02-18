@foreach ($collection as $nav)
    <li
        class="menu-item {{ array_search_value($nav->id, $activeParents) ? 'current-menu-item' : '' }} {{ isset($navigation[$nav->id]) ? 'menu-item-has-children' : '' }} kingster-normal-menu">
        <a href="{{ isset($navigation[$nav->id]) ? '#' : $nav->url }}"
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
