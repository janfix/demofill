@extends('layouts.app', ['activePage' => 'reviewer_Management', 'titlePage' => __('Reviewer Management')])

@section('content')
<div class="content">
  <div class="container-fluid">
    <div class="row">
      <div class="col">
        <button class="btn btn-primary btn-lg"> <i class="material-icons">add_circle_outline</i> Add a new FIIL Reviewer</button>
      </div>
    </div>
    <div class="row">
      <div class="col-md-12">
        <div class="card">
          <div class="card-header card-header-success">
            <h4 class="card-title ">FIIL Reviewers</h4>
            <p class="card-category"> This list is only seen by users that have the Reviewer-manager role.</p>
          </div>
          <div class="card-body">
            <div class="table-responsive">
              <div class="table-responsive">
                <table class="table">
                  <thead class=" text-primary">
                    <th scope="col">ID <i class="fas fa-sort"></i></th> 
                    <th scope="col">Firstname <i class="fas fa-sort"></i></th>
                    <th scope="col">Name <i class="fas fa-sort"></i></th>
                    <th scope="col">Country <i class="fas fa-sort"></i></th>
                    <th scope="col">Institution <i class="fas fa-sort"></i></th>
                    <th scope="col">Topics <i class="fas fa-sort"></i></th>
                    <th scope="col">Creation Date<i class="fas fa-sort"></i></th>
                    <th scope="col">Languages<i class="fas fa-sort"></i></th>        
                    <th scope="col">Activity<i class="fas fa-sort"></i></th>
                    <th scope="col">Action </th>
                  </thead>
                  <tbody>
                    <tr>
                      <th scope="row">1587</th>
                      <td>Jacques</td>
                      <td>Marin</td>
                      <td>France</td>
                      <td>DEPP</td>
                      <td>Math, French, English, Physics</td>
                      <td>12/10/2020</td>
                      <td><div class="flag flag-gb"></div>  <div class="flag flag-it"></div>  <div class="flag flag-sp"></div></td>
                      <td>1254 items reviewed</td>
                      <td><a href="#"><i title="See the details" class="far fa-eye"></i></a> | <a href="#"><i  title="Send a message" class="fas fa-envelope"></i></a> | <a href="#"><i  title="Edit" class="fas fa-edit"></i></a></td>
                    </tr>
                    <tr>
                      <th scope="row">213</th>
                      <td>Paolo</td>
                      <td>Rossi</td>
                      <td>Italy</td>
                      <td>INVALSI</td>
                      <td>Physics, Sciences, History </td>
                      <td>12/10/2020</td>
                      <td><div class="flag flag-ge"></div>  <div class="flag flag-it"></div>  <div class="flag flag-fr"></div></td>
                      <td>3256 items reviewed</td>
                      <td><a href="#"><i title="See the details" class="far fa-eye"></i></a> | <a href="#"><i  title="Send a message" class="fas fa-envelope"></i></a> | <a href="#"><i  title="Edit" class="fas fa-edit"></i></a></td>
                    </tr>
                    <tr  class="bg_green">
                      <th scope="row">235</th>
                      <td>Joan</td>
                      <td>Conte</td>
                      <td>Brazil</td>   
                      <td>CAED</td>
                      <td>Math, Sciences</td>
                      <td>08/03/2020</td>
                      <td><div class="flag flag-gb"></div>  <div class="flag flag-por"></div>  <div class="flag flag-fr"></div></td>
                      <td>24 879 items reviewed</td>
                      <td><a href="#"><i title="See the details" class="far fa-eye"></i></a> | <a href="#"><i  title="Send a message" class="fas fa-envelope"></i></a> | <a href="#"><i  title="Edit" class="fas fa-edit"></i></a></td>
                    </tr>
                  </tbody>
                </table>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
</div>

    </div>
  </div>
</div>
@endsection