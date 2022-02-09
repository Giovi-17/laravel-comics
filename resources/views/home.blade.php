@extends('layouts.app')

@section('title_page')
Homepage
@stop

@section('main_section')

    <div class="jumbotron"></div>

    <div class="currentSeries">

        <div class="container-space mainCurrentSeriesContainer">

            <?php $comics_array = config('comics');?>

            @foreach ($comics_array as $comic)

                <div class="card">

                    <div class="serieImg"><img src="{{ $comic['thumb'] }}" alt="{{ $comic['series'] }}"></div>
        
                    <div class="serieTitle">{{ $comic['series'] }}</div>
        
                </div>

            @endforeach

            <div class="btn btn-primary-color">Load More</div>

        </div>

    </div>

    <div class="main-extra-link">

        <div class="container-space main-extra-container">

            <div class="main-extra-link-single-container">

                <div class="main-extra-link-img"><img src="" alt=""></div>

                <div class="main-extra-link-text">Digital Comics</div>

            </div>

            <div class="main-extra-link-single-container">

                <div class="main-extra-link-img"><img src="" alt=""></div>

                <div class="main-extra-link-text">DC Merchandise</div>

            </div>

            <div class="main-extra-link-single-container">

                <div class="main-extra-link-img"><img src="" alt=""></div>

                <div class="main-extra-link-text">Subscription</div>

            </div>

            <div class="main-extra-link-single-container">

                <div class="main-extra-link-img"><img src="" alt=""></div>

                <div class="main-extra-link-text">Comic Shop Locator</div>

            </div>

            <div class="main-extra-link-single-container">

                <div class="main-extra-link-img"><img src="" alt=""></div>

                <div class="main-extra-link-text">DC Power Visa</div>

            </div>

        </div>

    </div>

@stop