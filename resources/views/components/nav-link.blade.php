{{-- Creacion del path del sistema --}}
@if(Breadcrumbs::has())
    <ol class="list-reset flex">
        @foreach (Breadcrumbs::current() as $crumbs)
            @if ($crumbs->url() && !$loop->last)
                <li class="breadcrumb-item text-sm text-gray-600 hover:text-gray-900 hover:underline">
                    <a href="{{ $crumbs->url() }}">
                        {{ $crumbs->title() }}
                    </a>
                </li>
                <li><span class="text-gray-500 mx-2">/</span></li>
            @else
                <li class="breadcrumb-item active text-sm text-gray-600">
                    {{ $crumbs->title() }}
                </li>
            @endif
        @endforeach
    </ol>
@endif
