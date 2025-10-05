@if ($paginator->hasPages())
    <nav aria-label="Pagination Navigation">
        <ul class="pagination justify-content-center">
            <li class="page-item {{ $paginator->onFirstPage() ? 'disabled' : '' }}">
                @if ($paginator->onFirstPage())
                    <span class="page-link">Previous</span>
                @else
                    <button wire:click="previousPage" wire:loading.attr="disabled" class="page-link" rel="prev">Previous</button>
                @endif
            </li>

            <li class="page-item {{ $paginator->onLastPage() ? 'disabled' : '' }}">
                @if ($paginator->onLastPage())
                    <span class="page-link">Next</span>
                @else
                    <button wire:click="nextPage" wire:loading.attr="disabled" class="page-link" rel="next">Next</button>
                @endif
            </li>
        </ul>
    </nav>
@endif
