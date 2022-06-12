@extends("layout.appAdminDashboard") 
@section('title')
    Ajouter produits
@endsection
@section("contenu")
{{-- Start content --}}
<div class="main-panel">
   <div class="content-wrapper">
       <div class="row grid-margin">
            <div class="col-lg-12">
                <div class="card">
                <div class="card-body">
                    <h4 class="card-title">Ajouter Produit</h4>
                        @if(Session::has('status'))
                            <div class="alert alert-primary" role="alert">
                                <strong>{{Session::get('status')}}</strong>
                            </div>

                        @endif
                        @if(count($errors)>0)
                            <div class="alert alert-danger">
                                <ul>
                                    @foreach ( $errors->all() as $error)
                                    <li>{{$error}} </li>  
                                    @endforeach
                                
                                </ul>
                            </div>
                   
                        @endif

                        {!!Form::open(['action' => 'App\Http\Controllers\ProduitController@save', 'method' => 'POST', 'class'=>'cmxform', 'id'=>'commentForm',  'enctype' =>'multipart/form-data'  ])!!}
                            {{-- !! IMPORTANT --}}
                               @csrf
                            {{-- !! End  --}}
                
                            <div class="form-group">
                            {{Form::label('', 'Nom du produit',['for'=>'cname'])}}
                            {{Form::text('product_name','', ['class' =>'form-control', 'id'=>'cname'])}} 
                            </div>
                            <div class="form-group">
                                {{Form::label('', 'Prix du produit',['for'=>'cname'])}}
                                {{Form::number('product_price','', ['class' =>'form-control', 'id'=>'cname'])}} 
                            </div>
                            <div class="form-group">
                                {{Form::label('', 'categorie',['for'=>'cname'])}}
                                {{Form::select('product_category',$list_Categories,null,['placeholder' =>'select category', 'class'=>'form-control'] ) }}
                            </div>
                            {{-- <div class="form-group">
                              <label for="">select</label>
                              <select class="form-control" name="" id="">
                                  @foreach($list_Categories as $item)
                                <option>{{$item->category_name}}</option>
                                  @endforeach
                              </select>
                            </div> --}}
                            <div class="form-group">
                                {{Form::label('', 'Image',['for'=>'cname'])}}
                                {{Form::file('product_image',['class' =>'form-control', 'id' => 'cname'] ) }}
                            </div>
                              {{Form::submit('Ajouter', ['class'=>'btn btn-primary ' ])}}
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