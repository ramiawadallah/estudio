<?php 

$lang = app()->getLocale();

?>

@foreach( $pages as $page)

     <li  class="{{ Request::is($page->uri_wildcard) ? 'dropdown' : '' }} {{ count($page->children) ? ($page->isChild() ? 'dropdown' : 'dropdown') : '' }}">

		<a href="{{ url($page->uri) }}" data-toggle="{{ count($page->children) ? ($page->isChild() ? 'dropdown' : 'dropdown') : '' }}">
			<span>{{ $page->trans('title',$lang) }} </span>
		</a>

		@if(count($page->children))
                <span class="{{ $page->isChild() ? 'right' : '' }}"></span>
        @endif

		@if(count($page->children))
            <ul class="dropdown-menu">
                @include('partials.navigation', ['pages' => $page->children])
            </ul>
        @endif
	</li>

@endforeach


