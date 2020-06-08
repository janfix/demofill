@extends('layouts.app', ['activePage' => 'myItems', 'titlePage' => __('My items')])

@section('content')
<div class="content">
  <div class="container-fluid">
    <div class="row">
      <div class="col-md-12">
        <div class="card">
          <div class="card-header card-header-success">
            <h4 class="card-title ">My item Gallery</h4>
            <p class="card-category"> This item collection can be seen by the Fiil members.</p>
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
                    <th scope="col">Creation Date<i class="fas fa-sort"></i></th>
                    <th scope="col">Translation<i class="fas fa-sort"></i></th>        
                    <th scope="col">Qualification<i class="fas fa-sort"></i></th>
                    <th scope="col">Action </th>
                  </thead>
                  <tbody>
                    <tr>
                      <th scope="row">178</th>
                      <td>Equation</td>
                      <td>France</td>
                      <td>French</td>
                      <td>Math</td>
                      <td>Level 1 Grade 2</td>
                      <td>12/10/2020</td>
                      <td><div class="flag flag-gb"></div>  <div class="flag flag-it"></div>  <div class="flag flag-sp"></div></td>
                      <td>0%</td>
                      <td><a href="#"><i title="Add to package" class="far fa-plus-square"></i></a> | <a href="itemlibcard"><i title="See the details" class="far fa-eye"></i></a> | <a href="#"><i  title="Share item" class="fas fa-share"></i></a> | <a href="#"><i  title="This item is locked" class="fas fa-lock"></i></a> | <a href="#"><i  title="Edit" class="fas fa-edit"></i></a> | <a href="#"><i title="Go for Validation process" class="fas fa-flag-checkered"></i></a>  </td>
                    </tr>
                    <tr>
                      <th scope="row">213</th>
                      <td>Addition</td>
                      <td>Italy</td>
                      <td>Italian</td>
                      <td>Math</td>
                      <td>Level 1 Grade 2</td>
                      <td>12/10/2020</td>
                      <td><div class="flag flag-ge"></div>  <div class="flag flag-it"></div>  <div class="flag flag-fr"></div></td>
                      <td>25%</td>
                      <td><a href="#"><i title="Add to package" class="far fa-plus-square"></i></a> | <a href="itemlibcard"><i title="See the details" class="far fa-eye"></i></a> | <a href="#"><i  title="Share item" class="fas fa-share"></i></a> | <a href="#"><i  title="This item is locked" class="fas fa-lock"></i></a> | <a href="#"><i  title="Edit" class="fas fa-edit"></i></a> | <a href="#"><i title="Go for Validation process" class="fas fa-flag-checkered"></i></a>  </td>
                    </tr>
                    <tr  class="bg_green">
                      <th scope="row">235</th>
                      <td>Division</td>
                      <td>Spain</td>
                      <td>Spanish</td>
                      <td>Math</td>
                      <td>Level 1 Grade 2</td>
                      <td>08/03/2020</td>
                      <td><div class="flag flag-gb"></div>  <div class="flag flag-it"></div>  <div class="flag flag-fr"></div></td>
                      <td>100% <span class="green">Qualified!</span></td>
                      <td><a href="#"><i title="Add to package" class="far fa-plus-square"></i></a> | <a href="itemlibcard"><i title="See the details" class="far fa-eye"></i></a> | <a href="#"><i  title="Share item" class="fas fa-share"></i></a> | <a href="#"><i  title="This item is locked" class="fas fa-lock"></i></a> | <a href="#"><i  title="Edit" class="fas fa-edit"></i></a> | <a href="#"><i title="See FIIL statistics" class="fas fa-trophy"></i></a></td>
                    </tr>
                  </tbody>
                </table>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="col-md-12">
        <div class="card card-plain">
          <div class="card-header card-header-danger">
            <h4 class="card-title mt-0"> My item workshop</h4>
            <p class="card-category"> These items are not public</p>
          </div>
          <div class="card-body">
            <div class="table-responsive">
              <div class="table-responsive">
                <table class="table">
                  <thead class=" text-primary">
                    <th scope="col">Item ID <i class="fas fa-sort"></i></th> 
                    <th scope="col">Title <i class="fas fa-sort"></i></th>
                    
                    <th scope="col">Language <i class="fas fa-sort"></i></th>
                    <th scope="col">Subject <i class="fas fa-sort"></i></th>
                    <th scope="col">Level <i class="fas fa-sort"></i></th>
                    <th scope="col">Creation Date<i class="fas fa-sort"></i></th>
                    <th scope="col">Translation<i class="fas fa-sort"></i></th>        
                    <th scope="col">Action </th>
                  </thead>
                  <tbody>
                    <tr>
                      <th scope="row">178</th>
                      <td>Game of life</td>
                      
                      <td>French</td>
                      <td>Math</td>
                      <td>Level 1 Grade 2</td>
                      <td>12/10/2020</td>
                      <td><div class="flag flag-gb"></div>  <div class="flag flag-it"></div>  <div class="flag flag-sp"></div></td>
                      <td><a href="#"><i title="Add to package" class="far fa-plus-square"></i></a> | <a href="itemlibcard"><i title="See the details" class="far fa-eye"></i></a> | <a href="#"><i  title="Share item" class="fas fa-share"></i></a> | <a href="#"><i  title="This item is locked" class="fas fa-lock"></i></a> | <a href="#"><i  title="Edit" class="fas fa-edit"></i></a></td>
                    </tr>
                    <tr>
                      <th scope="row">213</th>
                      <td>Pyramid challenge</td>
                     
                      <td>Italian</td>
                      <td>Math</td>
                      <td>Level 1 Grade 2</td>
                      <td>12/10/2020</td>
                      <td><div class="flag flag-ge"></div>  <div class="flag flag-it"></div>  <div class="flag flag-fr"></div></td>
                      <td><a href="#"><i title="Add to package" class="far fa-plus-square"></i></a> | <a href="itemlibcard"><i title="See the details" class="far fa-eye"></i></a> | <a href="#"><i  title="Share item" class="fas fa-share"></i></a> | <a href="#"><i  title="This item is locked" class="fas fa-lock"></i></a> | <a href="#"><i  title="Edit" class="fas fa-edit"></i></a></td>
                    </tr>
                    <tr>
                      <th scope="row">235</th>
                      <td>Gold Division</td>
                      
                      <td>Spanish</td>
                      <td>Physics</td>
                      <td>Level 1 Grade 2</td>
                      <td>08/03/2020</td>
                      <td><div class="flag flag-gb"></div>  <div class="flag flag-it"></div>  <div class="flag flag-fr"></div></td>
                      <td><a href="#"><i title="Add to package" class="far fa-plus-square"></i></a> | <a href="itemlibcard"><i title="See the details" class="far fa-eye"></i></a> | <a href="#"><i  title="Share item" class="fas fa-share"></i></a> | <a href="#"><i  title="This item is locked" class="fas fa-lock"></i></a> | <a href="#"><i  title="Edit" class="fas fa-edit"></i></a></td>
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
@endsection