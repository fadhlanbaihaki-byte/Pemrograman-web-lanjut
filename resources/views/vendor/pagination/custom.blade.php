@if ($paginator->hasPages())
<nav>
    <ul class="pagination-custom" style="list-style:none;padding:0;margin:0;display:flex;gap:6px;align-items:center;justify-content:center;flex-wrap:wrap;">

        {{-- Prev --}}
        @if ($paginator->onFirstPage())
            <li>
                <button class="page-btn" disabled style="width:40px;height:40px;border:1.5px solid var(--color-border);border-radius:50%;background:white;opacity:0.4;cursor:not-allowed;display:flex;align-items:center;justify-content:center;">
                    <i class="bi bi-chevron-left"></i>
                </button>
            </li>
        @else
            <li>
                <a href="{{ $paginator->previousPageUrl() }}" class="page-btn" style="width:40px;height:40px;border:1.5px solid var(--color-border);border-radius:50%;background:white;display:flex;align-items:center;justify-content:center;text-decoration:none;color:var(--color-text);transition:var(--transition);">
                    <i class="bi bi-chevron-left"></i>
                </a>
            </li>
        @endif

        {{-- Pages --}}
        @foreach ($elements as $element)
            @if (is_string($element))
                <li><span style="padding:0 4px;color:var(--color-muted);">...</span></li>
            @endif
            @if (is_array($element))
                @foreach ($element as $page => $url)
                    @if ($page == $paginator->currentPage())
                        <li>
                            <button class="page-btn" style="width:40px;height:40px;border:1.5px solid var(--color-primary);border-radius:50%;background:var(--color-primary);color:white;font-weight:600;display:flex;align-items:center;justify-content:center;font-size:14px;">
                                {{ $page }}
                            </button>
                        </li>
                    @else
                        <li>
                            <a href="{{ $url }}" style="width:40px;height:40px;border:1.5px solid var(--color-border);border-radius:50%;background:white;display:flex;align-items:center;justify-content:center;text-decoration:none;color:var(--color-text);font-size:14px;transition:var(--transition);">
                                {{ $page }}
                            </a>
                        </li>
                    @endif
                @endforeach
            @endif
        @endforeach

        {{-- Next --}}
        @if ($paginator->hasMorePages())
            <li>
                <a href="{{ $paginator->nextPageUrl() }}" class="page-btn" style="width:40px;height:40px;border:1.5px solid var(--color-border);border-radius:50%;background:white;display:flex;align-items:center;justify-content:center;text-decoration:none;color:var(--color-text);transition:var(--transition);">
                    <i class="bi bi-chevron-right"></i>
                </a>
            </li>
        @else
            <li>
                <button class="page-btn" disabled style="width:40px;height:40px;border:1.5px solid var(--color-border);border-radius:50%;background:white;opacity:0.4;cursor:not-allowed;display:flex;align-items:center;justify-content:center;">
                    <i class="bi bi-chevron-right"></i>
                </button>
            </li>
        @endif

    </ul>
</nav>
@endif
