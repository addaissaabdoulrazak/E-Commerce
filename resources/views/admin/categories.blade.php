@extends("layout.appAdminDashboard") 
@section('title')
    Categories
@endsection
<input type="number" value="{{$incrementation=1}}" hidden>
@section("contenu")
<div class="main-panel">
    <div class="content-wrapper">



      <div class="card">
        <div class="card-body">
          <h4 class="card-title">Liste des categories</h4>
          @if(Session::has('status'))
          <div class="alert alert-success">
                 {{session::get("status")}}
          </div>
      @endif
          <div class="row">
            <div class="col-12">
              <div class="table-responsive">
                <table id="order-listing" class="table">
                  <thead>
                    <tr>
                        <th>Order #</th>
                        <th>Nom de la Categories</th>
                        <th>Action</th>
                    </tr>
                  </thead>
                  <tbody>
                  @foreach($list_categories as $cat)
                  <tr>
                    <td>{{$incrementation}}</td>
                    <td>{{$cat->category_name}}</td>
                    {{-- <td>
                       <label class="badge badge-info">On hold</label>
                    </td> --}}
                    <td>       
                        <button class="btn btn-outline-primary" onclick="window.location='{{url('categorie/edit/'.$cat->id)}}'">View</button>
                        {{-- <a class="btn btn-outline-primary" href="{{route('categorie.edit',$cat->id)}}">View</a> --}}
                        <button class="btn btn-outline-danger">Delete</button>
                    </td>
                </tr>
                {{Form::hidden('', $incrementation = $incrementation + 1)}}
                  @endforeach

                  
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
  <script src="{{asset('backend/js/form-validation.js')}}"></script>
  <script src="{{asset('backend/js/bt-maxLength.js')}}"></script>
  <!-- End custom js for this page-->
    <!-- Custom js for this page-->
    <script src="{{asset('backend/js/data-table.js')}}"></script>
    <!-- End custom js for this page-->
@endsection