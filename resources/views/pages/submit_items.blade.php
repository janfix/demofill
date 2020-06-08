@extends('layouts.app', ['activePage' => 'submit_items', 'titlePage' => __('Submitted items')])

@section('content')
<div class="content">
  <div class="container-fluid">

  <nav class="navbar navbar-expand-lg  bg-success">
   <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
       <li class="nav-item active">
        <a class="nav-link" href="#">New items to review <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">Items in process <span class="sr-only"></span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">Items recently qualified</a>
      </li>
     
    </ul>
    <form class="form-inline my-2 my-lg-0">
      <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
      <button class="btn btn-info my-2 my-sm-0" type="submit">Search</button>
    </form>
  </div>
</nav>
    
    <div class="row">
      <div class="col-md-12">
        <div class="card">
          <div class="card-header card-header-danger">
            <h4 class="card-title ">New items to review</h4>
            <p class="card-category"> Attribute an item to reviewers.</p>
          </div>
          <div class="card-body">
            <div class="table-responsive">
              <div class="table-responsive">
                <table class="table">
                  <thead class=" text-primary">
                    <th scope="col">Item ID <i class="fas fa-sort"></i></th> 
                    <th scope="col">Title <i class="fas fa-sort"></i></th>
                    <th scope="col">Country <i class="fas fa-sort"></i></th>
                    <th scope="col">Language <i class="fas fa-sort"></i></th>
                    <th scope="col">Subject <i class="fas fa-sort"></i></th>
                    <th scope="col">Level <i class="fas fa-sort"></i></th>
                    <th scope="col">Submission Date<i class="fas fa-sort"></i></th>
                    <th scope="col">Reviewers<i class="fas fa-sort"></i></th>        
                    <th scope="col">Qualification<i class="fas fa-sort"></i></th>
                    <th scope="col">Action </th>
                  </thead>
                  <tbody>
                    <tr>
                      <th scope="row">178</th>
                      <td>Math in Kitchen</td>
                      <td>France</td>
                      <td>French</td>
                      <td>Math</td>
                      <td>Level 1 Grade 2</td>
                      <td>12/10/2020</td>
                      <td>Antonio Riberi, Samuel Polo, Jeanne Simon</td>
                      <td>0%</td>
                      <td><a href="itemlibcard"><i title="See the details" class="far fa-eye"></i></a> | <a href="#"><i  title="This item is locked" class="fas fa-lock"></i></a> | <a href="#"><i title="Review details" class="fas fa-microscope"></i></a>  </td>
                    </tr>
                    <tr>
                      <th scope="row">213</th>
                      <td>Math on Mars</td>
                      <td>Italy</td>
                      <td>Italian</td>
                      <td>Math</td>
                      <td>Level 1 Grade 2</td>
                      <td>12/10/2020</td>
                      <td>Simone Rossi, Francesca Vitti</td>
                      <td>25%</td>
                      <td><a href="itemlibcard"><i title="See the details" class="far fa-eye"></i></a> | <a href="#"><i  title="This item is locked" class="fas fa-lock"></i></a> | <a href="#"><i title="Review details" class="fas fa-microscope"></i></a>  </td>
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