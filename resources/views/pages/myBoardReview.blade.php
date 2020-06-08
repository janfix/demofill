@extends('layouts.app', ['activePage' => 'myBoardReview', 'titlePage' => __('My reviews Dashboard')])

@section('content')
<div class="content">
  <div class="container-fluid">
    <nav class="navbar navbar-expand-lg  bg-success ">
   <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto jpnav">
       <li class="nav-item active">
        <a class="nav-link" data-ong="newReview" href="#">New review <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" data-ong="itemInProcess" href="#">My current reviews <span class="sr-only"></span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" data-ong="RecentlyQualif" href="#">Recently qualified</a>
      </li>
     
    </ul>
    <form class="form-inline my-2 my-lg-0">
      <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
      <button class="btn btn-info my-2 my-sm-0" type="submit">Search</button>
    </form>
  </div>
</nav>


 <div class="newReview jp_tabPage">
    <div class="row">
      <div class="col-md-12">
        <div class="card">
          <div class="card-header card-header-danger">
            <h4 class="card-title ">My new reviews</h4>
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
                    <th scope="col">Action </th>
                  </thead>
                  <tbody>
                    <tr>
                      <th scope="row">178</th>
                      <td>Fantastic four square</td>
                      <td>France</td>
                      <td>French</td>
                      <td>Math</td>
                      <td>Level 1 Grade 2</td>
                      <td>12/10/2020</td>
                      <td><div class="flag flag-gb"></div>  <div class="flag flag-it"></div>  <div class="flag flag-sp"></div></td>
                      <td><a href="#"><i title="Add to package" class="far fa-plus-square"></i></a> | <a href="itemlibcard"><i title="See the details" class="far fa-eye"></i></a> | <a href="#"><i  title="Share item" class="fas fa-share"></i></a> | <a href="#"><i  title="This item is locked" class="fas fa-lock"></i></a> | <a href="#"><i  title="Edit review" class="fas fa-edit"></i></a></td>
                    </tr>
                    <tr>
                      <th scope="row">213</th>
                      <td>Trigonometry and planets</td>
                      <td>Italy</td>
                      <td>Italian</td>
                      <td>Math</td>
                      <td>Level 1 Grade 2</td>
                      <td>12/10/2020</td>
                      <td><div class="flag flag-ge"></div>  <div class="flag flag-it"></div>  <div class="flag flag-fr"></div></td>
                      <td><a href="#"><i title="Add to package" class="far fa-plus-square"></i></a> | <a href="itemlibcard"><i title="See the details" class="far fa-eye"></i></a> | <a href="#"><i  title="Share item" class="fas fa-share"></i></a> | <a href="#"><i  title="This item is locked" class="fas fa-lock"></i></a> | <a href="#"><i  title="Edit review" class="fas fa-edit"></i></a></td>
                    </tr>
                    <tr>
                      <th scope="row">213</th>
                      <td>Evasion of decimals</td>
                      <td>Italy</td>
                      <td>Italian</td>
                      <td>Math</td>
                      <td>Level 1 Grade 2</td>
                      <td>12/10/2020</td>
                      <td><div class="flag flag-ge"></div>  <div class="flag flag-it"></div>  <div class="flag flag-fr"></div></td>
                      <td><a href="#"><i title="Add to package" class="far fa-plus-square"></i></a> | <a href="itemlibcard"><i title="See the details" class="far fa-eye"></i></a> | <a href="#"><i  title="Share item" class="fas fa-share"></i></a> | <a href="#"><i  title="This item is locked" class="fas fa-lock"></i></a> | <a href="#"><i  title="Edit review" class="fas fa-edit"></i></a></td>
                    </tr>
                    <tr>
                      <th scope="row">213</th>
                      <td>Mystery train of molecules</td>
                      <td>Italy</td>
                      <td>Italian</td>
                      <td>Physics</td>
                      <td>Level 1 Grade 2</td>
                      <td>12/10/2020</td>
                      <td><div class="flag flag-ge"></div>  <div class="flag flag-it"></div>  <div class="flag flag-fr"></div></td>
                      <td><a href="#"><i title="Add to package" class="far fa-plus-square"></i></a> | <a href="itemlibcard"><i title="See the details" class="far fa-eye"></i></a> | <a href="#"><i  title="Share item" class="fas fa-share"></i></a> | <a href="#"><i  title="This item is locked" class="fas fa-lock"></i></a> | <a href="#"><i  title="Edit review" class="fas fa-edit"></i></a></td>
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

<div class="itemInProcess jp_tabPage">
      <div class="row">
      <div class="col-md-12">
        <div class="card">
          <div class="card-header card-header-success">
            <h4 class="card-title ">My current reviews</h4>
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
                    <th scope="col">Action </th>
                  </thead>
                  <tbody>
                    <tr>
                      <th scope="row">178</th>
                      <td>Two plus two and more</td>
                      <td>France</td>
                      <td>French</td>
                      <td>Math</td>
                      <td>Level 1 Grade 2</td>
                      <td>12/10/2020</td>
                      <td><div class="flag flag-gb"></div>  <div class="flag flag-it"></div>  <div class="flag flag-sp"></div></td>
                      <td><a href="#"><i title="Add to package" class="far fa-plus-square"></i></a> | <a href="itemlibcard"><i title="See the details" class="far fa-eye"></i></a> | <a href="#"><i  title="Share item" class="fas fa-share"></i></a> | <a href="#"><i  title="This item is locked" class="fas fa-lock"></i></a> | <a href="#"><i  title="Edit review" class="fas fa-edit"></i></a></td>
                    </tr>
                    <tr>
                      <th scope="row">213</th>
                      <td>Lonelyness at the center of the circle</td>
                      <td>Italy</td>
                      <td>Italian</td>
                      <td>Math</td>
                      <td>Level 1 Grade 2</td>
                      <td>12/10/2020</td>
                      <td><div class="flag flag-ge"></div>  <div class="flag flag-it"></div>  <div class="flag flag-fr"></div></td>
                      <td><a href="#"><i title="Add to package" class="far fa-plus-square"></i></a> | <a href="itemlibcard"><i title="See the details" class="far fa-eye"></i></a> | <a href="#"><i  title="Share item" class="fas fa-share"></i></a> | <a href="#"><i  title="This item is locked" class="fas fa-lock"></i></a> | <a href="#"><i  title="Edit review" class="fas fa-edit"></i></a></td>
                    </tr>
                    <tr>
                      <th scope="row">213</th>
                      <td>Triangle allucinations</td>
                      <td>Italy</td>
                      <td>Italian</td>
                      <td>Math</td>
                      <td>Level 1 Grade 2</td>
                      <td>12/10/2020</td>
                      <td><div class="flag flag-ge"></div>  <div class="flag flag-it"></div>  <div class="flag flag-fr"></div></td>
                      <td><a href="#"><i title="Add to package" class="far fa-plus-square"></i></a> | <a href="itemlibcard"><i title="See the details" class="far fa-eye"></i></a> | <a href="#"><i  title="Share item" class="fas fa-share"></i></a> | <a href="#"><i  title="This item is locked" class="fas fa-lock"></i></a> | <a href="#"><i  title="Edit review" class="fas fa-edit"></i></a></td>
                    </tr>
                    <tr>
                      <th scope="row">213</th>
                      <td>Hope and nightmare in biology</td>
                      <td>Italy</td>
                      <td>Italian</td>
                      <td>Biology</td>
                      <td>Level 1 Grade 2</td>
                      <td>12/10/2020</td>
                      <td><div class="flag flag-ge"></div>  <div class="flag flag-it"></div>  <div class="flag flag-fr"></div></td>
                      <td><a href="#"><i title="Add to package" class="far fa-plus-square"></i></a> | <a href="itemlibcard"><i title="See the details" class="far fa-eye"></i></a> | <a href="#"><i  title="Share item" class="fas fa-share"></i></a> | <a href="#"><i  title="This item is locked" class="fas fa-lock"></i></a> | <a href="#"><i  title="Edit review" class="fas fa-edit"></i></a></td>
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

<div class="RecentlyQualif jp_tabPage">
      <div class="row">
      <div class="col-md-12">
        <div class="card">
          <div class="card-header card-header-warning">
            <h4 class="card-title ">Items recently qualified</h4>
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
                    <th scope="col">Action </th>
                  </thead>
                  <tbody>
                    <tr>
                      <th scope="row">178</th>
                      <td>Decimal Silence</td>
                      <td>France</td>
                      <td>French</td>
                      <td>Math</td>
                      <td>Level 1 Grade 2</td>
                      <td>12/10/2020</td>
                      <td><div class="flag flag-gb"></div>  <div class="flag flag-it"></div>  <div class="flag flag-sp"></div></td>
                      <td><a href="#"><i title="Add to package" class="far fa-plus-square"></i></a> | <a href="itemlibcard"><i title="See the details" class="far fa-eye"></i></a> | <a href="#"><i  title="Share item" class="fas fa-share"></i></a> | <a href="#"><i  title="This item is locked" class="fas fa-lock"></i></a> | <a href="#"><i  title="Edit review" class="fas fa-edit"></i></a></td>
                    </tr>
                    <tr>
                      <th scope="row">213</th>
                      <td>Trigonometry call the police</td>
                      <td>Italy</td>
                      <td>Italian</td>
                      <td>Math</td>
                      <td>Level 1 Grade 2</td>
                      <td>12/10/2020</td>
                      <td><div class="flag flag-ge"></div>  <div class="flag flag-it"></div>  <div class="flag flag-fr"></div></td>
                      <td><a href="#"><i title="Add to package" class="far fa-plus-square"></i></a> | <a href="itemlibcard"><i title="See the details" class="far fa-eye"></i></a> | <a href="#"><i  title="Share item" class="fas fa-share"></i></a> | <a href="#"><i  title="This item is locked" class="fas fa-lock"></i></a> | <a href="#"><i  title="Edit review" class="fas fa-edit"></i></a></td>
                    </tr>
                    <tr>
                      <th scope="row">213</th>
                      <td>Hyperball or hyperbola</td>
                      <td>Italy</td>
                      <td>Italian</td>
                      <td>Physics</td>
                      <td>Level 1 Grade 2</td>
                      <td>12/10/2020</td>
                      <td><div class="flag flag-ge"></div>  <div class="flag flag-it"></div>  <div class="flag flag-fr"></div></td>
                      <td><a href="#"><i title="Add to package" class="far fa-plus-square"></i></a> | <a href="itemlibcard"><i title="See the details" class="far fa-eye"></i></a> | <a href="#"><i  title="Share item" class="fas fa-share"></i></a> | <a href="#"><i  title="This item is locked" class="fas fa-lock"></i></a> | <a href="#"><i  title="Edit review" class="fas fa-edit"></i></a></td>
                    </tr>
                    <tr>
                      <th scope="row">213</th>
                      <td>Stranger than odd</td>
                      <td>Italy</td>
                      <td>Italian</td>
                      <td>Math</td>
                      <td>Level 1 Grade 2</td>
                      <td>12/10/2020</td>
                      <td><div class="flag flag-ge"></div>  <div class="flag flag-it"></div>  <div class="flag flag-fr"></div></td>
                      <td><a href="#"><i title="Add to package" class="far fa-plus-square"></i></a> | <a href="itemlibcard"><i title="See the details" class="far fa-eye"></i></a> | <a href="#"><i  title="Share item" class="fas fa-share"></i></a> | <a href="#"><i  title="This item is locked" class="fas fa-lock"></i></a> | <a href="#"><i  title="Edit review" class="fas fa-edit"></i></a></td>
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

@endsection