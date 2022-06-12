@extends("layout.appAdminDashboard") 
@section('title')
Edit Categorie
@endsection
@section("contenu")
{{-- Start content --}}
<div class="main-panel">
 <div class="content-wrapper">
  <div class="row grid-margin">
    <div class="col-lg-12">
      <div class="card">
        <div class="card-body">
          <h4 class="card-title">Edit Categorie</h4>
          @if(Session::has('status'))
              <div class="alert alert-success">
                     {{session::get("status")}}
              </div>
          @endif

          {!!Form::open(['action' => 'App\Http\Controllers\CategorieController@update', 'method' => 'POST', 'class'=>'cmxform', 'id'=>'commentForm'])!!}
           {{Form::hidden('id', $categ->id)}}
              {{-- !! IMPORTANT --}}
              @csrf
              {{-- !! End  --}}
           
              <div class="form-group">
                {{Form::label('', 'Nom de la catégorie',['for'=>'cname'])}}
                {{Form::text('category_name',$categ->category_name, ['class' =>'form-control', 'id'=>'cname'])}} 
            
              </div>

             {{Form::submit('Modifier', ['class'=>'btn btn-primary ' ])}}
            {!!Form::close()!!}
        </div>
      </div>
    </div>
  </div>
 </div>
</div>
{{-- end section --}}
@endsection

@section('scripts')
@endsection