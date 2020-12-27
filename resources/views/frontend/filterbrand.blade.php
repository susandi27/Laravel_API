@extends('frontend_master')
@section('content')

<!-- Subcategory Title -->
    <div class="jumbotron jumbotron-fluid subtitle">
        <div class="container">
            <h1 class="text-center text-white"> {{ $brand->name }} </h1>
        </div>
    </div>
    
    <!-- Content -->
    <div class="container">

        <!-- Breadcrumb -->
        <nav aria-label="breadcrumb ">
            <ol class="breadcrumb bg-transparent">
                <li class="breadcrumb-item">
                    <a href="#" class="text-decoration-none secondarycolor"> Home </a>
                </li>
                <li class="breadcrumb-item">
                    <a href="#" class="text-decoration-none secondarycolor"> {{ $brand->name }} </a>
                </li>
            </ol>
        </nav>

        <div class="row mt-5">
        
            <div class="col-xl-8 col-lg-8 col-md-12 col-sm-12 col-12">
                

                <div class="row">
                    @foreach($brand->item as $item)
                    <div class="col-xl-4 col-lg-4 col-md-12 col-sm-12 col-12">
                        <div class="card pad15 mb-3">
                            <img src="{{ $item->photo }}" class="card-img-top" alt="...">
                            
                            <div class="card-body text-center">
                                <h5 class="card-title text-truncate">{{$item->name }}</h5>
                                
                                <p class="item-price">
                                    <strike>{{ $item->price }} Ks</strike> 
                                    <span class="d-block">{{$item->discount }} Ks</span>
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
                        
                    </div>
                    @endforeach
                </div>


                <nav aria-label="Page navigation example">
                    <ul class="pagination justify-content-end">
                        <li class="page-item disabled">
                            <a class="page-link" href="#" tabindex="-1" aria-disabled="true"><i class="icofont-rounded-left"></i>
                            </a>
                        </li>
                        <li class="page-item">
                            <a class="page-link" href="#">1</a>
                        </li>
                        <li class="page-item active">
                            <a class="page-link" href="#">2</a>
                        </li>
                        <li class="page-item">
                            <a class="page-link" href="#">3</a>
                        </li>
                        <li class="page-item">
                            <a class="page-link" href="#">
                                <i class="icofont-rounded-right"></i>
                            </a>
                        </li>
                    </ul>
                </nav>
            </div>
        </div>

        
    </div>
    
@endsection