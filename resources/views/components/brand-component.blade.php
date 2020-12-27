{{-- <div>
    Simplicity is the ultimate sophistication. - Leonardo da Vinci
</div> --}}

@foreach($brands as $brand)
    <a class="dropdown-item" href="{{ route('filterbrandpage',$brand->id) }}">{{$brand->name}}</a>
    <div class="dropdown-divider"></div>
@endforeach