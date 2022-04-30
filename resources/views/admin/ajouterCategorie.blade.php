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
          <h4 class="card-title">Ajouter Categorie</h4>

          {!!Form::open(['action' => 'App\Http\Controllers\CategorieController@save', 'method' => 'POST', 'class'=>'cmxform', 'id'=>'commentForm'])!!}
          
              {{-- !! IMPORTANT --}}
              @csrf
              {{-- !! End  --}}
           
              <div class="form-group">
                <label for="cname">Name (required, at least 2 characters)</label>
                <input id="cname" class="form-control" name="name" minlength="2" type="text" required>
              </div>

              {{-- <div class="form-group">
                <label for="cemail">E-Mail (required)</label>
                <input id="cemail" class="form-control" type="email" name="email" required>
              </div>
              <div class="form-group">
                <label for="curl">URL (optional)</label>
                <input id="curl" class="form-control" type="url" name="url">
              </div>
              <div class="form-group">
                <label for="ccomment">Your comment (required)</label>
                <textarea id="ccomment" class="form-control" name="comment" required></textarea>
              </div> --}}
              <input class="btn btn-primary" type="submit" value="Submit">
      
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
      <!-- Custom js for this page-->
  <script src="backend/js/form-validation.js"></script>
  <script src="backend/js/bt-maxLength.js"></script>
  <!-- End custom js for this page-->
@endsection