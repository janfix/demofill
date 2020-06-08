@extends('layouts.app', ['activePage' => 'item_lib', 'titlePage' => __('Item Library')])

@section('content')
<div class="content">
  <div class="container-fluid">

   <div class="row">
        <div class="col-md-6">
          <div class="card">
            <div class="card-header card-header-info">
              <div class="input-group mb-3 mt-3">
                <div class="input-group-prepend">
                  <label class="input-group-text" for="inputGroupSelect01">Subjects</label>
                </div>
                <select class="custom-select" id="inputGroupSelect01">
                  <option selected>Mathematics</option>
                  <option value="1">First language</option>
                  <option value="2">Sciences</option>
                  <option value="3">Technology</option>
                  <option value="3">Foreign languages</option>
                </select>
              </div>
              <h4 class="card-title ">Math</h4>
              <p class="card-category"> Mathematics items</p>
              </div>
            <div class="card-body">
              <input class="form-control" type="text" placeholder="Type here a key word or choose a selector below..."/>
              
              <div class="input-group mb-3 mt-3">
                <div class="input-group-prepend">
                  <label class="input-group-text" for="inputGroupSelect01">Level and grade</label>
                </div>
                <select class="custom-select" id="inputGroupSelect01">
                  <option selected>Choose...</option>
                  <option value="1">First level - 1rst Grade</option>
                  <option value="2">First level - 2nd Grade</option>
                  <option value="3">First level - 3rd Grade</option>
                </select>
              </div>

              <div class="input-group mb-3">
                <div class="input-group-prepend">
                  <label class="input-group-text" for="inputGroupSelect01">Fields</label>
                </div>
                <select class="custom-select" id="inputGroupSelect01">
                  <option selected>Choose...</option>
                  <option value="1">Arithmetic</option>
                  <option value="2">Algebra</option>
                  <option value="3">Geometry</option>
                  <option value="3">Analysis</option>
                  <option value="3">Logic</option>
                </select>
              </div>

              <div class="input-group mb-3">
                <div class="input-group-prepend">
                  <label class="input-group-text" for="inputGroupSelect01">Referential</label>
                </div>
                <select class="custom-select" id="inputGroupSelect01">
                  <option selected>Choose...</option>
                  <option value="1">France : Référentiel de compétences en mathématiques pour les cycles 3 et 4 </option>
                  <option value="2">Two</option>
                  <option value="3">Three</option>
                </select>
              </div>
              {{-- <button class="btn btn-info">Level</button>
              <button class="btn btn-info">Category</button>
              <button class="btn btn-info">Referential</button> --}}
              <hr>
            </div>  
          </div>
        </div>  
        <div class="col-md-6 pt-5">
          <img class="painting" src="images/Euclid.jpg" width="50%">
        </div> 
       
   </div>

    <div class="row">
      <div class="col-md-12">
        <div class="card">
          <div class="card-header card-header-primary">
            <h4 class="card-title ">Mathematic items</h4>
            <p class="card-category"> Active Filters [ Fields:Arithmetic | Level : All | Referential : All ]</p>
          </div>
          <div class="card-body">
            <div class="table-responsive">
              <table class="table">
                <thead class=" text-primary">
                  <th scope="col">Item ID <i class="fas fa-sort"></i></th> 
                  <th scope="col">Title <i class="fas fa-sort"></i></th>
                  <th scope="col">Author <i class="fas fa-sort"></i></th>
                  <th scope="col">Country <i class="fas fa-sort"></i></th>
                  <th scope="col">Language <i class="fas fa-sort"></i></th>
                  <th scope="col">Subject <i class="fas fa-sort"></i></th>
                  <th scope="col">Level <i class="fas fa-sort"></i></th>
                  <th scope="col">Creation Date <i class="fas fa-sort"></i></th>
                  <th scope="col">Translation <i class="fas fa-sort"></i></th>        
                  <th scope="col">Exported <i class="fas fa-sort"></i></th>
                  <th scope="col">Action </th>
                </thead>
                <tbody>
                  <tr>
                    <th scope="row">178</th>
                    <td>Equation</td>
                    <td>Pierre</td>
                    <td>France</td>
                    <td>French</td>
                    <td>Math</td>
                    <td>Level 1 Grade 2</td>
                    <td>12/10/2020</td>
                    <td><div class="flag flag-gb"></div>  <div class="flag flag-it"></div>  <div class="flag flag-sp"></div></td>
                    <td>12</td>
                    <td><a href="#"><i title="Add to package" class="far fa-plus-square"></i></a> | <a href="itemlibcard"><i title="See the details" class="far fa-eye"></i></a> | <a href="#"><i  title="Share item" class="fas fa-share"></i></a></td>
                  </tr>
                  <tr>
                    <th scope="row">213</th>
                    <td>Addition</td>
                    <td>Pietro</td>
                    <td>Italy</td>
                    <td>Italian</td>
                    <td>Math</td>
                    <td>Level 1 Grade 2</td>
                    <td>12/10/2020</td>
                    <td><div class="flag flag-ge"></div>  <div class="flag flag-it"></div>  <div class="flag flag-fr"></div></td>
                    <td>25</td>
                    <td><a href="#"><i title="Add to package" class="far fa-plus-square"></i></a> | <a href="itemlibcard"><i title="See the details" class="far fa-eye"></i></a> | <a href="#"><i  title="Share item" class="fas fa-share"></i></a></td>
                  </tr>
                  <tr>
                    <th scope="row">235</th>
                    <td>Division</td>
                    <td>Pedro</td>
                    <td>Spain</td>
                    <td>Spanish</td>
                    <td>12/10/2020</td>
                    <td>Level 1 Grade 2</td>
                    <td>08/03/2020</td>
                    <td><div class="flag flag-gb"></div>  <div class="flag flag-it"></div>  <div class="flag flag-fr"></div></td>
                    <td>1</td>
                    <td><a href="#"><i title="Add to package" class="far fa-plus-square"></i></a> | <a href="itemlibcard"><i title="See the details" class="far fa-eye"></i></a> | <a href="#"><i  title="Share item" class="fas fa-share"></i></a></td>
                  </tr>
                </tbody>
              </table>
            </div>
          </div>
        </div>
      </div>
      {{-- <div class="col-md-12">
        <div class="card card-plain">
          <div class="card-header card-header-primary">
            <h4 class="card-title mt-0"> Table on Plain Background</h4>
            <p class="card-category"> Here is a subtitle for this table</p>
          </div>
          <div class="card-body">
            <div class="table-responsive">
              <table class="table table-hover">
                <thead class="">
                  <th>
                    ID
                  </th>
                  <th>
                    Name
                  </th>
                  <th>
                    Country
                  </th>
                  <th>
                    City
                  </th>
                  <th>
                    Salary
                  </th>
                </thead>
                <tbody>
                  <tr>
                    <td>
                      1
                    </td>
                    <td>
                      Dakota Rice
                    </td>
                    <td>
                      Niger
                    </td>
                    <td>
                      Oud-Turnhout
                    </td>
                    <td>
                      $36,738
                    </td>
                  </tr>
                  <tr>
                    <td>
                      2
                    </td>
                    <td>
                      Minerva Hooper
                    </td>
                    <td>
                      Curaçao
                    </td>
                    <td>
                      Sinaai-Waas
                    </td>
                    <td>
                      $23,789
                    </td>
                  </tr>
                  <tr>
                    <td>
                      3
                    </td>
                    <td>
                      Sage Rodriguez
                    </td>
                    <td>
                      Netherlands
                    </td>
                    <td>
                      Baileux
                    </td>
                    <td>
                      $56,142
                    </td>
                  </tr>
                  <tr>
                    <td>
                      4
                    </td>
                    <td>
                      Philip Chaney
                    </td>
                    <td>
                      Korea, South
                    </td>
                    <td>
                      Overland Park
                    </td>
                    <td>
                      $38,735
                    </td>
                  </tr>
                  <tr>
                    <td>
                      5
                    </td>
                    <td>
                      Doris Greene
                    </td>
                    <td>
                      Malawi
                    </td>
                    <td>
                      Feldkirchen in Kärnten
                    </td>
                    <td>
                      $63,542
                    </td>
                  </tr>
                  <tr>
                    <td>
                      6
                    </td>
                    <td>
                      Mason Porter
                    </td>
                    <td>
                      Chile
                    </td>
                    <td>
                      Gloucester
                    </td>
                    <td>
                      $78,615
                    </td>
                  </tr>
                </tbody>
              </table>
            </div>
          </div>
        </div>
      </div> --}}
    </div>
  </div>
</div>
@endsection