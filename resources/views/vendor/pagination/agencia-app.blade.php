<div class="d-flex justify-content-center mt-4 p-4 box text-center">
   @if ($paginator->hasPages())
      <div class="listing-item-container">
         <div class="pagination ml-5">
            @if ($paginator->onFirstPage())
               <span><i class="fa fa-caret-left"></i></span>
            @else
               <a href="{{ $paginator->previousPageUrl() }}" class="prevposts-link"><i class="fa fa-caret-left"></i></a>
            @endif

            @foreach ($elements as $element)
               @if (is_string($element))
                  {{ $element }}
               @endif

               @if (is_array($element))
                  @foreach ($element as $page => $url)
                     @if ($page == $paginator->currentPage())
                        <a href="{{ $url }}" class="current-page">{{ $page }}</a>
                     @else
                     <a href="{{ $url }}">{{ $page }}</a>
                     @endif
                  @endforeach
               @endif
            @endforeach

            @if ($paginator->hasMorePages())
               <a href="{{ $paginator->nextPageUrl() }}" class="nextposts-link"><i class="fa fa-caret-right"></i></a>
            @else
               <span><i class="fa fa-caret-right"></i></span>
            @endif
         </div>
      </div>
   @endif
</div>