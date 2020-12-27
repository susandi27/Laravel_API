@extends('frontend_master')
@section('content')
<!-- Carousel -->
    <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
        <ol class="carousel-indicators">
            <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
        </ol>
        
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="{{ asset('frontend_assets/image/banner/ac.jpg') }}" class="d-block w-100 bannerImg" alt="...">
            </div>
            <div class="carousel-item">
                <img src="{{ asset('frontend_assets/image/banner/giordano.jpg') }}" class="d-block w-100 bannerImg" alt="...">
            </div>
            <div class="carousel-item">
                <img src="{{ asset('frontend_assets/image/banner/garnier.jpg') }}" class="d-block w-100 bannerImg" alt="...">
            </div>
        </div>
    </div>

<!-- Content -->
    <div class="container mt-5 px-5">
        
        <!-- Category -->
        <div class="row">
            @foreach($categories as $category)
            <div class="col-xl-3 col-lg-3 col-md-3 col-sm-6 col-12 ">
                <div class="card categoryCard border-0 shadow-sm p-3 mb-5 rounded text-center">
                    <img src="{{ $category->photo }}" class="card-img-top img-fluid" alt="...">
                    <div class="card-body">
                        <p class="card-text font-weight-bold text-truncate"> {{ $category->name }} </p>
                    </div>
                </div>
            </div>
            @endforeach
        </div>

        <div class="whitespace d-xl-block d-lg-block d-md-none d-sm-none d-none"></div>
        
        <!-- Discount Item -->
        <div class="row mt-5">
            <h1> Discount Item </h1>
        </div>

        <!-- Disocunt Item -->
        <div class="row">
            <div class="col-12">
                <div class="MultiCarousel" data-items="1,3,5,6" data-slide="1" id="MultiCarousel"  data-interval="1000">
                    <div class="MultiCarousel-inner">
                        @foreach($items as $item)
                        @if($item->discount!='')
                        <div class="item">
                            <div class="pad15">
                                <a href="{{ route('itemdetailpage',$item->id) }}"><img src="{{ $item->photo }}" class="img-fluid"></a>
                                <p class="text-truncate">{{ $item->name }}</p>
                                <p class="item-price">
                                    @if($item->discount)
                                        <strike>{{ $item->price }} Ks</strike> 
                                        <span class="d-block">{{ $item->discount }} Ks</span>
                                    @else
                                        <span class="d-block">{{ $item->price }} Ks</span>
                                    @endif 
                                </p>

                                <div class="star-rating">
                                    <ul class="list-inline">
                                        <li class="list-inline-item"><i class='bx bxs-star' ></i></li>
                                        <li class="list-inline-item"><i class='bx bxs-star' ></i></li>
                                        <li class="list-inline-item"><i class='bx bxs-star' ></i></li>
                                        <li class="list-inline-item"><i class='bx bxs-star' ></i></li>
                                        <li class="list-inline-item"><i class='bx bxs-star-half' ></i></li>
                                    </ul>
                                </div>
                                
                                <a href="#" class="addtocartBtn text-decoration-none" data-id='{{ $item->id }}' data-name='{{ $item->name }}' data-photo='{{ $item->photo }}' data-codeno='{{ $item->codeno }}' data-price='{{ $item->price }}' data-discount='{{ $item->discount }}'>Add to Cart</a>

                            </div>
                          
                        </div>
                            @endif
                           @endforeach                     
                    </div>

                    <button class="btn btnMain leftLst"><</button>
                    <button class="btn btnMain rightLst">></button>
                </div>

            </div>
        </div>
        

        <!-- Flash Sale Item -->
        <div class="row mt-5">
            <h1> Flash Sale </h1>
        </div>

        <!-- Flash Sale Item -->
        <div class="row">
            <div class="col-12">
                <div class="MultiCarousel" data-items="1,3,5,6" data-slide="1" id="MultiCarousel"  data-interval="1000">
                    <div class="MultiCarousel-inner">
                        @foreach($flash_items as $flash_item)
                        <div class="item">
                            <div class="pad15">
                                <a href="{{ route('itemdetailpage',$flash_item->id) }}"><img src="{{ $flash_item->photo }}" class="img-fluid"></a>
                                <p class="text-truncate">{{ $flash_item->name }}</p>
                                <p class="item-price">
                                    @if($flash_item->discount !='' )
                                        <strike>{{ $flash_item->price }} Ks</strike> 
                                        <span class="d-block">{{ $flash_item->discount }} Ks</span>
                                    @else
                                        <span class="d-block">{{ $flash_item->price }} Ks</span>
                                    @endif 
                                </p>

                                <div class="star-rating">
                                    <ul class="list-inline">
                                        <li class="list-inline-item"><i class='bx bxs-star' ></i></li>
                                        <li class="list-inline-item"><i class='bx bxs-star' ></i></li>
                                        <li class="list-inline-item"><i class='bx bxs-star' ></i></li>
                                        <li class="list-inline-item"><i class='bx bxs-star' ></i></li>
                                        <li class="list-inline-item"><i class='bx bxs-star-half' ></i></li>
                                    </ul>
                                </div>

                                <a href="#" class="addtocartBtn text-decoration-none" data-id='{{ $flash_item->id }}' data-name='{{ $flash_item->name }}' data-photo='{{ $flash_item->photo }}' data-codeno='{{ $flash_item->codeno }}' data-price='{{ $flash_item->price }}' data-discount='{{ $flash_item->discount }}'>Add to Cart</a>
                            </div>
                            
                        </div>
                        @endforeach
                        
                    </div>
                    <button class="btn btnMain leftLst"><</button>
                    <button class="btn btnMain rightLst">></button>
                </div>
            </div>
        </div>

        <!-- Random Catgory ~ Item -->
        <div class="row mt-5">
            <h1> Fresh Picks </h1>
        </div>

        <!-- Random Item -->
        <div class="row">
            <div class="col-12">
                <div class="MultiCarousel" data-items="1,3,5,6" data-slide="1" id="MultiCarousel"  data-interval="1000">
                    <div class="MultiCarousel-inner">
                       
                        @foreach($fresh_items as $fresh_item)
                        @if($fresh_item->subcategory_id == 10)
                        <div class="item">
                            <div class="pad15">
                                <a href="{{ route('itemdetailpage',$fresh_item->id) }}"><img src="{{ $fresh_item->photo }}" class="img-fluid"></a>
                                <p class="text-truncate">{{ $fresh_item->name }}</p>
                                <p class="item-price">
                                    @if($item->discount !='')
                                        <strike>{{ $fresh_item->price }} Ks</strike> 
                                        <span class="d-block">{{ $fresh_item->discount }} Ks</span>
                                    @else
                                        <span class="d-block">{{ $fresh_item->price }} Ks</span>
                                    @endif 
                                </p>

                                <div class="star-rating">
                                    <ul class="list-inline">
                                        <li class="list-inline-item"><i class='bx bxs-star' ></i></li>
                                        <li class="list-inline-item"><i class='bx bxs-star' ></i></li>
                                        <li class="list-inline-item"><i class='bx bxs-star' ></i></li>
                                        <li class="list-inline-item"><i class='bx bxs-star' ></i></li>
                                        <li class="list-inline-item"><i class='bx bxs-star-half' ></i></li>
                                    </ul>
                                </div>

                                <a href="#" class="addtocartBtn text-decoration-none" data-id='{{ $flash_item->id }}' data-name='{{ $fresh_item->name }}' data-photo='{{ $fresh_item->photo }}' data-codeno='{{ $fresh_item->codeno }}' data-price='{{ $fresh_item->price }}' data-discount='{{ $fresh_item->discount }}'>Add to Cart</a>

                            </div>
                        </div>
                        @endif
                        @endforeach
                        
                    </div>
                    <button class="btn btnMain leftLst"><</button>
                    <button class="btn btnMain rightLst">></button>
                </div>
            </div>
        </div>

        
        <div class="whitespace d-xl-block d-lg-block d-md-none d-sm-none d-none"></div>

        <!-- Brand Store -->
        <div class="row mt-5">
            <h1> Top Brand Stores </h1>
        </div>

        <!-- Brand Store Item -->
        <section class="customer-logos slider mt-5">
            @foreach($brands as $brand)
            <div class="slide">
                <a href="">
                    <img src="{{ $brand->logo }}" class="img-fluid">
                </a>
            </div>
            @endforeach
        </section>

        <div class="whitespace d-xl-block d-lg-block d-md-none d-sm-none d-none"></div>

    </div>
@endsection