@extends("layout.appAdminDashboard") 
@section('title')
    Categories
@endsection
@section("contenu")
<div class="main-panel">
    <div class="content-wrapper">

<input type="text" value="{{$incrementation = 1}}" hidden>

      <div class="card">
        <div class="card-body">
          <h4 class="card-title">Data table</h4>
          <div class="row">
            <div class="col-12">
              <div class="table-responsive">
                <table id="order-listing" class="table">
                  <thead>
                    <tr>
                        <th>Order #</th>
                        <th>Image</th>
                        <th>Nom du produit</th>
                        <th>Catégorie du produit</th>
                        <th>prix</th>
                        <th>status</th>
                        <th>Action</th>
                    </tr>
                  </thead>
                  <tbody>
                    @foreach($list_produit as $item)
                    <tr>
                        <td>{{$incrementation}}</td>
                        <td> <img src="/storage/app/app/mes_image/{{$item->product_image}}" alt="" srcset=""> </td>
                        <td>{{$item->product_name}}</td>
                        <td>{{$item->product_category}}</td>
                        <td>{{$item->product_price}}</td>
                        <td>
                           @if($item->status ==1) 
                           <label for="active" class="badge badge-success">Activé</label>
                           @else
                           <label for="desactive" class="badge badge-danger">Désactivé</label>
                               
                           @endif 
                        </td>
                        {{-- <td>
                           <label class="badge badge-info">On hold</label>
                        </td> --}}
                        <td>
                          <button class="btn btn-outline-primary">View</button>
                          <button class="btn btn-outline-danger "> delete</button>
                        </td>
                    </tr>
                    @endforeach
                    {{Form::hidden('', $incrementation = $incrementation + 1)}}
               </tbody>
                </table>
              </div>
            </div>
          </div>
        </div>
      </div>

      
    </div>
</div>
@endsection

@section('scripts') 
    <!-- Custom js for this page-->
    <script src="{{asset('backend/js/data-table.js')}}"></script>
    <!-- End custom js for this page-->
@endsection