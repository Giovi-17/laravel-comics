@extends('layouts.app')

@section('title_page')
Product
@stop

@section('main_section')

    <div class="background-blue">

        <div class="comic-image">

            <img src="{{ $product_info['thumb'] }}" alt="">

        </div>

    </div>

    <div class="product-adv-container product-container">

        <div class="product-container">

            <h2 class="title">{{ $product_info['title'] }}</h2>
    
            <div class="price">
    
                <span class="ms_color">U.S. Price:</span>{{ $product_info['price'] }}
    
            </div>
    
            <p class="description">{{ $product_info['description'] }}</p>
    
        </div>

        <div class="adv-container">

            <img src="{{ asset('images/adv.jpg') }}" alt="">

        </div>

    </div>

    <div class="extra-product-container">

        <div class="product-container">

            <div class="category">

                <div class="title-container">

                    <h3 class="title">Talent</h3>

                </div>

                <div class="single-mini-title-container">

                    <div class="mini-title-container">

                        <span class="mini-title">Art by:</span>

                    </div>

                    <div class="description-container">

                        <span class="description">
                        
                            @foreach ($product_info['artists'] as $product)
    
                                {{ $product }},
                                
                            @endforeach
    
                        </span>

                    </div>

                </div>

                <div class="single-mini-title-container">

                    <div class="mini-title-container">

                        <span class="mini-title">Written by:</span>

                    </div>

                    <div class="description-container">

                        <span class="description">
                        
                            @foreach ($product_info['writers'] as $product)
    
                                {{ $product }},
                                
                            @endforeach
    
                        </span>

                    </div>

                </div>

            </div>

            <div class="category">

                <div class="title-container">

                    <h3 class="title">Specs</h3>

                </div>

                <div class="single-mini-title-container">

                    <div class="mini-title-container">

                        <span class="mini-title">Series:</span>

                    </div>

                    <div class="description-container">

                        <span class="description description_m">{{ $product_info['series'] }}</span>

                    </div>

                </div>

                <div class="single-mini-title-container">

                    <div class="mini-title-container">

                        <span class="mini-title">U.S Price:</span>

                    </div>

                    <div class="description-container">

                        <span class="description description_b">{{ $product_info['price'] }}</span>

                    </div>

                </div>

                <div class="single-mini-title-container">

                    <div class="mini-title-container">

                        <span class="mini-title">On Sale Date:</span>

                    </div>

                    <div class="description-container">

                        <span class="description description_b">{{ $product_info['sale_date'] }}</span>

                    </div>

                </div>

            </div>

        </div>

    </div>

@stop