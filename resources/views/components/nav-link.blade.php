{{-- Creacion del path del sistema --}}
@if(Breadcrumbs::has())
    <ol class="breadcrumb border-0 m-0">
        @foreach (Breadcrumbs::current() as $crumbs)
            @if ($crumbs->url() && !$loop->last)
                <li class="breadcrumb-item text-sm">
                    <a href="{{ $crumbs->url() }}">
                        {{ $crumbs->title() }}
                    </a>
                </li>
            @else
                <li class="breadcrumb-item active text-sm">
                    {{ $crumbs->title() }}
                </li>
            @endif
        @endforeach
    </ol>
@endif
