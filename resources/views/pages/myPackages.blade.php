@extends('layouts.app', ['activePage' => 'myPackages', 'titlePage' => __('My packages')])

@section('content')
<div class="content">
  <div class="container-fluid">
    <div class="row">
      <div class="col">
        <div class="card card-stats">
          <div class="card-header card-header-success card-header-icon">
            <div class="card-icon">
              <i class="fas fa-toolbox fa-3x"></i>
            </div>
            <div class="head-presentation">An item package is a private container you can create to grab all items you need in the FIIL. These packages can be stored in your deposit and download in one click to your computer.
            In your deposit, you will have stored all the packages you might need to download many times or you want to share with other FLIP members. </div>
            <div class="head-presentation" style="text-align:center"><i class="far fa-plus-square fa-3x" style="color:#61B765"></i> <h5>Create a new Package</h5></div>
          </div>
          <div class="card-footer">
            <div class="stats">
              Packages contain confidential items and can't be share with FLIP non-members. CF Conditions of use.
            </div>
          </div>
        </div>
     
      </div>
    </div>

    <div class="row">
      <div class="col-md-12">
        <div class="card">
          <div class="card-header card-header-primary">
            <h4 class="card-title ">My deposit</h4>
            <p class="card-category"> Active Filters [ Fields : All | Levels : All | Referentials : All ]</p>
          </div>
          <div class="card-body">
            <div class="table-responsive">
              <table class="table">
                <thead class=" text-primary">
                  <th scope="col">Package ID <i class="fas fa-sort"></i></th> 
                  <th scope="col">Creation date <i class="fas fa-sort"></i></th> 
                  <th scope="col">Title <i class="fas fa-sort"></i></th>
                  <th scope="col">Description <i class="fas fa-sort"></i></th>
                  <th scope="col">Subject(s) <i class="fas fa-sort"></i></th>
                  <th scope="col">Items nb. <i class="fas fa-sort"></i></th>
                  <th scope="col">Action </th>
                </thead>
                <tbody>
                  <tr>
                    <th scope="row">178</th>
                    <td>05/05/2020</td>
                    <td>Math serie Grade 3 - Geometry</td>
                    <td>Preparation assessment 2021 - DEPP</td>
                    <td>Math & Sciences</td>
                    <td>12</td> 
                    <td><a href="#"><i title="Download zip package" class="fas fa-download"></i></a> | <a href="itemlibcard"><i title="See the details" class="far fa-eye"></i></a> | <a href="#"><i  title="Share item" class="fas fa-share"></i></a> | <a href="#"><i title="delete" class="far fa-trash-alt"></i></a> </td>
                  </tr>
                  <tr>
                    <th scope="row">213</th>
                    <td>05/05/2020</td>
                    <td>Sciences serie International shared item 121 - DEPP + INVALSI</td>
                    <td>Prepare European assessment </td>
                    <td>Sciences</td>
                    <td>11</td>
                    <td><a href="#"><i title="Download zip package" class="fas fa-download"></i></a> | <a href="itemlibcard"><i title="See the details" class="far fa-eye"></i></a> | <a href="#"><i  title="Share item" class="fas fa-share"></i></a> | <a href="#"><i title="delete" class="far fa-trash-alt"></i></a> </td>
                  </tr>
                  <tr>
                    <th scope="row">235</th>
                    <td>05/05/2020</td>
                    <td>Lorem ipsum dolor sit amet consectetur adipisicing elit.</td>
                    <td>Lorem </td>
                    <td>Psimiu</td>
                    <td>45</td>
                    <td><a href="#"><i title="Download zip package" class="fas fa-download"></i></a> | <a href="itemlibcard"><i title="See the details" class="far fa-eye"></i></a> | <a href="#"><i  title="Share item" class="fas fa-share"></i></a> | <a href="#"><i title="delete" class="far fa-trash-alt"></i></a> </td>
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