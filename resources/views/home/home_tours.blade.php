
<div class="container_ac5676396f39 specifics" style="">
    <div class="tour-grid" style="display: flex; flex-wrap: wrap; gap: 10px; flex-grow: 1;">
        @foreach ($national_parks as $index => $tour)
        <div class="tour-item" style="box-sizing: border-box;">
            <div class="container_5014426d40fe" style="padding: 15px; border: 1px solid #ddd; border-radius: 8px; background-color: #f9f9f9;">
                {{-- Tour Image --}}
                <figure class="imageview_d367edd9719b wp-block-image">
                    <img decoding="async" src="https://cdn.yotako.io/95521a4f-a0a8-413a-a79e-c14ca627a987/98:12.webp" alt="{{ $tour->title }}" />
                </figure>

                {{-- Spacer --}}
                <div class="wp-block-group is-layout-flow">
                    <div class="wp-block-spacer" style="height: 0px" aria-hidden="true"></div>
                </div>

                {{-- Tour Title --}}
                <p class="text_7b9fe75ec2d5 has-text-color has-background has-text-align-left">
                    <strong>{{ $tour->title }}</strong>
                </p>

                {{-- Tour Description --}}
                <p class="text_4a7faa3c87ab has-text-color has-background has-text-align-left">
                    {{ $tour->description }}
                </p>

                {{-- Tour Days --}}
                <p class="text_70f0facd0c87 has-text-color has-background has-text-align-left">
                    {{ $tour->days }} Days
                </p>

                {{-- Tour People --}}
                <p class="text_f9636a23dbf6 has-text-color has-background has-text-align-left">
                    {{ $tour->people }} People
                </p>

                {{-- Tour Price --}}
                <h3 class="text_f0972393c91b has-text-color has-background has-text-align-left wp-block-heading">
                    ${{ $tour->amount }}
                </h3>
            </div>
        </div>
        @endforeach
    </div>

    <!-- Pagination -->
    <div class="tour-links" style="margin-top: 20px; margin-bottom: 20px;">
        <ul class="pagination justify-content-center">
            {{-- Previous Page Link --}}
            @if ($national_parks->onFirstPage())
            <li class="page-item disabled">
                <a class="page-link" href="#" tabindex="-1">Previous</a>
            </li>
            @else
            <li class="page-item">
                <a class="page-link" href="{{ $national_parks->previousPageUrl() }}">Previous</a>
            </li>
            @endif

            {{-- Pagination Elements --}}
            @foreach ($national_parks->links()->elements as $element)
            {{-- "Three Dots" Separator --}}
            @if (is_string($element))
            <li class="page-item disabled">
                <a class="page-link" href="#">{{ $element }}</a>
            </li>
            @endif

            {{-- Array Of Links --}}
            @if (is_array($element))
            @foreach ($element as $page => $url)
            @if ($page == $national_parks->currentPage())
            <li class="page-item active">
                <a class="page-link" href="#">{{ $page }}</a>
            </li>
            @else
            <li class="page-item">
                <a class="page-link" href="{{ $url }}">{{ $page }}</a>
            </li>
            @endif
            @endforeach
            @endif
            @endforeach

            {{-- Next Page Link --}}
            @if ($national_parks->hasMorePages())
            <li class="page-item">
                <a class="page-link" href="{{ $national_parks->nextPageUrl() }}">Next</a>
            </li>
            @else
            <li class="page-item disabled">
                <a class="page-link" href="#" tabindex="-1">Next</a>
            </li>
            @endif
        </ul>
    </div>


    
</div>



<div class="container_home_banner">
    <figure class="imageview_0971821a99a6 wp-block-image">
        <img decoding="async"
            src="https://cdn.yotako.io/95521a4f-a0a8-413a-a79e-c14ca627a987/207:940.webp" />
</figure>



@include('shared.footer');
</div>