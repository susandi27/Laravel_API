@extends('backend_master')
@section('content')
  
    <main class="app-content">
        <div class="app-title">
            <div>
                <h1><i class="fa fa-dashboard"></i> Items</h1>
                <p>A free and open source Bootstrap 4 admin template</p>
            </div>
            <ul class="app-breadcrumb breadcrumb">
                <li class="breadcrumb-item"><i class="fa fa-home fa-lg"></i></li>
                <li class="breadcrumb-item"><a href="#">Items</a></li>
            </ul>
        </div>

        <div class="row">
          <div class="col-md-12">
            <div class="tile">
              <div class="tile-body">
                <h4 class="d-inline-block">Items List</h4>
                <a href="{{route('items.create')}}" class="btn btn-success float-right">Add New</a>

                <div class="table-responsive mt-3">
                  <table class="table table-bordered" id="sampleTable">
                    <thead class="thead-dark">
                      <tr>
                        <th>#</th>
                        <th>Code No</th>
                        <th>Name</th>
                        <th>Photo</th>
                        <th>Price</th>
                        <th>Discount</th>
                        <th>Description</th>
                        <th>Brand name</th>
                        <th>Subcategory Name</th>
                        <th>Actions</th>
                      </tr>
                    </thead>
                    <tbody>
                      @php $i=1; @endphp
                      @foreach($items as $item)
                      <tr>
                        <td>{{$i++}}</td>
                        <td>{{ $item->codeno }}</td>
                        <td>{{$item->name}}</td>
                        <td><img src="{{asset($item->photo)}}" width="100"></td>
                        <td>{{ $item->price }}</td>
                        <td>{{ $item->discount }}</td>
                        <td>{{ $item->description }}</td>
                        <td>{{ $item->brand->name }}</td>
                        <td>{{ $item->subcategory->name }}</td>
                        
                        <td>
                          <a href="{{route('items.edit',$item->id)}}" class="btn btn-warning btn-sm">Edit</a>
                          <form method="post" action="{{route('items.destroy',$item->id)}}" onsubmit="return confirm('Are you sure?')" class="d-inline-block">
                            @csrf
                            @method('DELETE')
                            <input type="submit" name="btnsubmit" class="btn btn-danger btn-sm" value="Delete">
                          </form>
                        </td>
                      </tr>
                      @endforeach
                    </tbody>
                  </table>
                </div>
              </div>
            </div>
          </div>   
        </div>    
  </main>
@endsection

@section('script')
    <script type="text/javascript" src="{{  asset('backend_assets/js/plugins/jquery.dataTables.min.js') }}"></script>
    <script type="text/javascript" src="{{  asset('backend_assets/js/plugins/dataTables.bootstrap.min.js') }}"></script>
    <script type="text/javascript">$('#sampleTable').DataTable();</script>
@endsection
