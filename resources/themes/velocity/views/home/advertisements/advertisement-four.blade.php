@php
    $isRendered = false;
    $advertisementFour = null;
@endphp

@if ($velocityMetaData && $velocityMetaData->advertisement)
    @php
        $advertisement = json_decode($velocityMetaData->advertisement, true);

        if (isset($advertisement[4]) && is_array($advertisement[4])) {
            $advertisementFour = array_values(array_filter($advertisement[4]));
        }

        $one = '/promocao';
    @endphp

    @if ($advertisementFour)
        @php
            $isRendered = true;
        @endphp

        <div class="advertisement-four-container">
            <div class="shell">
                <div class="rows-nm">

                    @if (isset($advertisementFour[0]))
                    <div class="banner">
                        <a @if (isset($one)) href="{{ $one }}" @endif >
                            <img class="col-12" src="{{ asset('/storage/' . $advertisementFour[0]) }}" />
                        </a>
                    </div>
                    @endif

                    @if ( isset($advertisementFour[1]))
                    <div class="banner">
                        <a @if (isset($two)) href="{{ $two }}" @endif class="row col-12 remove-padding-margin">
                            <img class="col-12 offers-ct-top" src="{{ asset('/storage/' . $advertisementFour[1]) }}" />
                        </a>
                    </div>
                    @endif

                    @if ( isset($advertisementFour[2]))
                    <div class="banner">
                        <a @if (isset($three)) href="{{ $three }}" @endif class="row col-12 remove-padding-margin">
                            <img class="col-12 offers-ct-bottom" src="{{ asset('/storage/' . $advertisementFour[2]) }}" />
                        </a>
                    </div>
                    @endif


                    @if ( isset($advertisementFour[3]))
                    <div class="banner">
                        <a @if (isset($four)) href="{{ $four }}" @endif >
                            <img class="col-12" src="{{ asset('/storage/' . $advertisementFour[3]) }}" />
                        </a>
                    </div>
                    @endif
                </div>
            </div>
        </div>
    @endif
@endif

@if (! $isRendered)
    <div class="advertisement-four-container">
        <div class="shell rows-nm">
            <div class="row">
                <a @if (isset($one)) href="{{ $one }}" @endif >
                    <img class="col-12" src="{{ asset('/themes/velocity/assets/images/big-sale-banner.png') }}" />
                </a>

                <div class="col-lg-4 col-12 offers-ct-panel">
                    <a @if (isset($two)) href="{{ $two }}" @endif class="row col-12 remove-padding-margin">
                        <img class="col-12 offers-ct-top" src="{{ asset('/themes/velocity/assets/images/seasons.png') }}" />
                    </a>
                    <a @if (isset($three)) href="{{ $three }}" @endif class="row col-12 remove-padding-margin">
                        <img class="col-12 offers-ct-bottom" src="{{ asset('/themes/velocity/assets/images/deals.png') }}" />
                    </a>
                </div>

                <a @if (isset($four)) href="{{ $four }}" @endif >
                    <img class="col-12" src="{{ asset('/themes/velocity/assets/images/kids.png') }}" />
                </a>
            </div>
        </div>
    </div>
@endif