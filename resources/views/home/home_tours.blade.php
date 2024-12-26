<div class="container_ac5676396f39" style="display: flex; flex-wrap: wrap; gap: 10px;">
    @foreach ($national_parks as $index => $tour)
    @if ($index >= 0 && $index <= 2)
        <div class="tour-item" style="flex: 1 1 calc(33.333% - 10px); max-width: calc(33.333% - 10px); box-sizing: border-box;">
            <div class="container_5014426d40fe offset-{{ $index % 3 }}" style="padding: 15px; border: 1px solid #ddd; border-radius: 8px; background-color: #f9f9f9;">
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
        @endif
    @endforeach
</div>

<div class="container_faedaabb4ff1" style="display: flex; flex-wrap: wrap; gap: 10px;">
    @foreach ($national_parks as $index => $tour)
    @if ($index >= 3 && $index <= 5)
        <div class="tour-item" style="flex: 1 1 calc(33.333% - 10px); max-width: calc(33.333% - 10px); box-sizing: border-box;">
            <div class="container_5014426d40fe offset-{{ $index % 3 }}" style="padding: 15px; border: 1px solid #ddd; border-radius: 8px; background-color: #f9f9f9;">
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
        @endif
    @endforeach
</div>

