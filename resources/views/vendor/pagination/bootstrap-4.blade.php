@if ($paginator->hasPages())
    <ul class="pagination">
        <!-- Previous Page Link -->
        @if ($paginator->onFirstPage())
            <li class="page-item page-item-prev disabled"><span class="page-link"><i class="fa fa-angle-left"></i> <span>@lang('pagination.short_previous')</span></span></li>
        @else
            <li class="page-item page-item-prev"><a class="page-link" href="{{ $paginator->previousPageUrl() }}" rel="prev"><i class="fa fa-angle-left"></i> <span>@lang('pagination.short_previous')</span></a></li>
        @endif

        <!-- Pagination Elements -->
        @foreach ($elements as $element)
            <!-- "Three Dots" Separator -->
            @if (is_string($element))
                <li class="page-item disabled"><span class="page-link">{{ $element }}</span></li>
            @endif

            <!-- Array Of Links -->
            @if (is_array($element))
                @foreach ($element as $page => $url)
                    @if ($page == $paginator->currentPage())
                        <li class="page-item active"><span class="page-link">{{ $page }}</span></li>
                    @else
                        <li class="page-item"><a class="page-link" href="{{ $url }}">{{ $page }}</a></li>
                    @endif
                @endforeach
            @endif
        @endforeach

        <!-- Next Page Link -->
        @if ($paginator->hasMorePages())
            <li class="page-item page-item-next"><a class="page-link" href="{{ $paginator->nextPageUrl() }}" rel="next"><span>@lang('pagination.short_next')</span> <i class="fa fa-angle-right"></i></a></li>
        @else
            <li class="page-item page-item-next disabled"><span class="page-link"><span>@lang('pagination.short_next')</span> <i class="fa fa-angle-right"></i></span></li>
        @endif
    </ul>
@endif
