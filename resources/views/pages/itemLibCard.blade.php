@extends('layouts.app', ['activePage' => 'itemLibCard', 'titlePage' => __('Item Card')])



@section('content')
@section('content')
<div class="content">
  <div class="container-fluid">

    <nav aria-label="breadcrumb">
      <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="#">Home</a></li>
        <li class="breadcrumb-item"><a href="#">Library</a></li>
        <li class="breadcrumb-item"><a href="#">Math</a></li>
        <li class="breadcrumb-item"><a href="#">Arithmetic</a></li>
        <li class="breadcrumb-item"><a href="#">Decimal Representation</a></li>
        <li class="breadcrumb-item active" aria-current="page">item n°X3452-fr Decimal challenge on the moon</li>
      </ol>
    </nav>

    
   
   <h2>item n° X3452-fr : Decimal challenge on the moon</h2>
      <ul class="nav nav-tabs navbar navbar-expand-lg bg-info jpnav">
        <li class="nav-item">
          <a data-ong="preview" class="nav-link active" href="#">Preview</a>
        </li>
        <li class="nav-item">
          <a data-ong="description" class="nav-link" href="#">Description</a>
        </li>
        <li class="nav-item">
          <a data-ong="format" class="nav-link" href="#">Format</a>
        </li>
        <li class="nav-item">
          <a data-ong="references" class="nav-link " href="#" tabindex="-1" >References</a>
        </li>
        <li class="nav-item">
          <a data-ong="discussion" class="nav-link " href="#" tabindex="-1" >Discussion</a>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">Download</a>
          <div class="dropdown-menu">
            <a class="dropdown-item" href="#">Download as QTI package</a>
            <a class="dropdown-item" href="#">Download as HTML/JS</a>
            <a class="dropdown-item" href="#">Download as PDF</a>
            <a class="dropdown-item" href="#">Download as Word document</a>
            <div class="dropdown-divider"></div>
            <a class="dropdown-item" href="#">Download PDF description</a>
          </div>
        </li>     
      </ul>
      <div class="preview jp_tabPage">
        <div class=row>
          <div class="col-md-3">
            <div class="card" style="width: 18rem;">
              <img class="card-img-top"  src="images/math1.png">
               <div class="card-body">
                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
              </div>
            </div>
          </div>
          <div class="col-md-3">
            <div class="card" style="width: 18rem;">
              <img class="card-img-top"  src="images/math2.png">
               <div class="card-body">
                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
              </div>
            </div>
          </div>
          <div class="col-md-3">
            <div class="card" style="width: 18rem;">
              <img class="card-img-top"  src="images/math3.png">
               <div class="card-body">
                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
              </div>
            </div>
          </div>
          <div class="col-md-3">
            <div class="card" style="width: 18rem;">
              <img class="card-img-top"  src="images/math4.png">
               <div class="card-body">
                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
              </div>
            </div>
          </div>

        </div>
        <div class="row">
          <div class="embed-responsive embed-responsive-16by9 ">
            <iframe class="embed-responsive-item" src="https://www.geogebra.org/m/W8YzR9KH#material/WJpqn9rq" allowfullscreen ></iframe>
          </div>
        </div>
      </div>
      <div class=" description jp_tabPage">
        DESCRIPTION PAGE
        <div class="row">
          <div class="col-md-4">
            <div class="card card-chart">
              <div class="card-header card-header-success">
                <div class="ct-chart" id="my-jpchart1"></div>
              </div>
              <div class="card-body">
                <h4 class="card-title">Item downloaded</h4>
                <p class="card-category">
                  <span class="text-success"><i class="fa fa-long-arrow-up"></i> 55% </span> increase in today downloads.</p>
              </div>
              <div class="card-footer">
                <div class="stats">
                  <i class="material-icons">access_time</i> updated 4 minutes ago
                </div>
              </div>
            </div>
          </div>
          <div class="col-md-4">
            <div class="card card-chart">
              <div class="card-header card-header-warning">
                <div class="ct-chart" id="my-jpchart2"></div>
              </div>
              <div class="card-body">
                <h4 class="card-title">Difficulty level</h4>
                <p class="card-category">Last Campaign Performance</p>
              </div>
              <div class="card-footer">
                <div class="stats">
                  <i class="material-icons">access_time</i> campaign sent 2 days ago
                </div>
              </div>
            </div>
          </div>
          <div class="col-md-4">
            <div class="card card-chart">
              <div class="card-header card-header-danger">
                <div class="ct-chart" id="my-jpchart3"></div>
              </div>
              <div class="card-body">
                <h4 class="card-title">Skill correspondance</h4>
                <p class="card-category">Last Campaign Performance</p>
              </div>
              <div class="card-footer">
                <div class="stats">
                  <i class="material-icons">access_time</i> campaign sent 2 days ago
                </div>
              </div>
            </div>
          </div>
        </div>
        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Magni illum, laudantium exercitationem error rem similique tempora doloremque. Odio reprehenderit rem voluptate quia quos consequatur officia itaque pariatur obcaecati, cumque illum.</p>
        <p> Consectetur adipisicing elit. Assumenda optio asperiores recusandae officia, dolorum tempora provident suscipit voluptatibus vel? Qui, consequatur? Cum culpa, reprehenderit recusandae ratione sequi expedita quisquam soluta!
        Ratione dignissimos praesentium reprehenderit molestias vel temporibus, in amet quibusdam cumque nemo ad, esse vero optio magni accusantium perferendis totam dicta est enim ipsa laborum rerum facere tempore. Blanditiis, odio?
        Impedit omnis repellendus corporis odit aperiam voluptate beatae ipsum aliquid dolores veritatis, alias aspernatur dicta pariatur perferendis ab ex voluptatem eaque? Quo necessitatibus suscipit totam nulla iusto unde, reprehenderit sapiente.
        Magnam commodi consectetur eveniet facere recusandae iusto nam repudiandae unde deserunt, aut necessitatibus quia placeat nemo aliquam omnis, possimus ullam quam consequatur voluptatum dolorum eligendi. Suscipit autem dolorem ut nam?
        Ea reiciendis, dolorum dignissimos rerum error minima laborum accusamus at molestias, atque ipsa architecto a magnam suscipit sint dolore excepturi explicabo sit blanditiis voluptatibus exercitationem eum adipisci praesentium. Quod, velit!</p>
      </div>
      <div class=" format jp_tabPage">
        FORMAT PAGE<br/>
        This item is available in : 
        <ul>
          <li>QTI</li>
          <li>GEOGEBRA</li>
          <li>WORD</li>
          <li>EXCEL</li>
          <li>PDF</li>
        </ul>
        <h5>Format request :</h5>
        <textarea name="formatRequest" id="formatRequest" cols="50" rows="2" placeholder="precise here specific format(s)"></textarea><br/>
        <button type="button" class="btn btn-outline-success">Send the format request</button>
      </div>
      <div class=" references jp_tabPage">
        REFERENCES PAGE <br/>
        <h4>Author(s)</h4>
        <ul>
          <li>Pierre André - DEPP - France </li>
          <li>Anne-Marie Lapic - DEPP - France</li>
          <li>Suzanne Gramont - DEPP - France</li>
          <li>Jacques Lesieur - DEPP - France</li>
          <li>Piotr Ztravingo - NKVD - Russia</li>
        </ul>
        <h4>Included in Testing</h4>
        <ul>
          <li>14/02/1998 - Test Math level 1 Grade 1 - xxx - yy ref. 1221 Country : France - Psychometry report available <a href="#">here</a></li>
          <li>04/02/2001 - Test Math level 2 Grade 1 - xxx - yy ref. 1221 Country : France - Statistic data available <a href="#">here</a> </li>
          <li>13/07/2004 - Test Math level 1 Grade 2 - xxx - yy ref. 1221 Country : France </li>
          <li>01/06/2006 - Test Math level 1 Grade 3 - xxx - yy ref. 1221 Country : Italy  - Statistic data available <a href="#">here</a></li>
          <li>16/12/2008 - Test Math level 1 Grade 2 - xxx - yy ref. 1221 Country : France </li>
        </ul>

        <h4>Item variation</h4>
        <ul>
          <li>Item 112312 | French</li>
          <li>Item 112314 | English</li>
          <li>Item A4585 | Italian</li>
        </ul>

       <hr />
        <h4>More explanation </h4>
        <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Hic officia dolorem inventore ipsa facere error eligendi, nulla, laboriosam quae deleniti quia suscipit ullam odit explicabo. Animi in neque aliquam voluptas.
        Eius nihil officia soluta mollitia recusandae voluptate, sint modi officiis repellat, deserunt sunt neque placeat ratione rem in beatae molestias necessitatibus delectus? Cum reiciendis ipsam eveniet quasi voluptatem ullam exercitationem?
        Accusantium doloribus voluptate enim tempora illum minus totam, consectetur nemo magni nihil, quia, quae mollitia dignissimos cum nulla temporibus impedit omnis fuga hic? At doloremque illo, vitae in ipsam molestiae.
        Fugiat excepturi officiis possimus perspiciatis ab laboriosam assumenda hic vero iure! Nostrum amet cum molestias qui labore possimus autem. In necessitatibus aperiam obcaecati doloremque perspiciatis, optio dolorum nostrum porro. Cumque!
        Similique ipsa nulla at nam libero eum saepe ratione, dolore perspiciatis atque fugit? Ex molestias debitis fugit dolores quas eum architecto. Aliquam at, nisi esse repellendus illo pariatur officiis quod?
        Non exercitationem dolorum minus omnis iusto? Non id consequatur, impedit exercitationem labore quaerat aliquam iusto delectus qui facere, temporibus, in vero iste excepturi laudantium similique voluptatibus soluta asperiores unde magnam.
        Unde ullam officiis iure vitae, soluta similique vel nobis velit incidunt expedita placeat doloribus temporibus delectus! Ex, minima odio? Veritatis harum aperiam porro quis expedita odio ipsam beatae voluptate id.
        Aliquid nemo, placeat perferendis aspernatur quas amet minus nostrum in culpa dolor, praesentium tempore assumenda reiciendis? Nam, veniam reprehenderit vitae itaque ratione molestiae sapiente minima iste recusandae incidunt, voluptatem natus?
        Magnam aliquam nihil voluptates cupiditate quam beatae et perferendis soluta! Officia praesentium delectus consequuntur maxime, necessitatibus qui maiores. Dolor officia, culpa repellat at fugit voluptate deleniti ratione expedita odio excepturi.
        Accusamus, ipsa architecto? Eos eum, officiis dolorem in delectus aspernatur nulla ullam natus. Veritatis suscipit dolorum quae, necessitatibus quasi in porro magnam placeat iste quaerat atque perferendis ut officiis culpa?</p>
      </div>
      <div class=" discussion jp_tabPage">
        DISCUSSION PAGE<br/>
        <div class="row">
          <div class="col-md-4">
            <button type="button" onclick="md.showNotification('top','left')" class="btn btn-outline-info btn-sm btn-block">Click here to simulate a notification</button>
            
          </div>
        </div>
        <div class="row">
          <button type="button" class="btn btn-warning btn-lg btn-block"><span class="material-icons">add_circle_outline</span> Add a new comment</button>
          <hr>
        </div>
        <div class="row">
        <div class="col-md-12 alert alert-success" role="alert">
          <b class="userChat">Jack101 (Lux)</b> : very usefull item but on id consequatur, impedit exercitationem labore quaerat aliquam iusto delectus qui facere, temporibus, in vero iste excepturi laudantium similique voluptatibus soluta asperiores unde magnam.
          Unde ullam officiis iure vitae, soluta similique vel nobis velit incidunt expedita placeat doloribus temporibus delectus! Ex, minima odio? Veritatis harum aperiam porro quis expedita odio ipsam beatae voluptate id.
          Aliquid nemo, placeat perferendis aspernatur quas amet minus nostrum in culpa dolor, praesentium tempore assumenda reiciendis?<br/>
          
          <div class="chatTools">          
          <span class="material-icons">reply</span>
          <span class="material-icons">report</span>
          <span class="material-icons">create</span>
          <span class="material-icons">delete_sweep</span>
          <span class="material-icons">close</span>
          </div>


        </div>
      </div>
      <div class="row">
        <div class="col-md-3"></div>
        <div class="col-md-9 alert alert-primary" role="alert">
          <b class="userChat">Giovanna (Italy)</b> : Right but on id consequatur, impedit exercitationem labore quaerat aliquam iusto delectus qui facere, temporibus, in vero iste excepturi laudantium similique voluptatibus soluta asperiores unde magnam.
          Unde ullam officiis iure vitae, soluta similique vel nobis velit incidunt expedita placeat doloribus temporibus delectus! Ex, minima odio? Veritatis harum aperiam porro quis expedita odio ipsam beatae voluptate id.
          Aliquid nemo, placeat perferendis aspernatur quas amet minus nostrum in culpa dolor, praesentium tempore assumenda reiciendis?<br/>
          <div class="chatTools">          
            <span class="material-icons">reply</span>
            <span class="material-icons">report</span>
            <span class="material-icons">create</span>
            <span class="material-icons">delete_sweep</span>
            <span class="material-icons">close</span>
            </div>

          </div>        
      </div>
      <div class="row">
        <div class="col-md-3"></div>
        <div class="col-md-9 alert alert-default" role="alert">
          <b class="userChat">Pietro (Italy)</b> : Right but on id consequatur, impedit exercitationem labore quaerat aliquam iusto delectus qui facere, temporibus, in vero iste excepturi laudantium similique voluptatibus soluta asperiores unde magnam.
          Unde ullam officiis iure vitae, soluta similique vel nobis velit incidunt expedita placeat doloribus temporibus delectus! Ex, minima odio? Veritatis harum aperiam porro quis expedita odio ipsam beatae voluptate id.
          Aliquid nemo, placeat perferendis aspernatur quas amet minus nostrum in culpa dolor, praesentium tempore assumenda reiciendis?<br/>
          <div class="chatTools">          
            <span class="material-icons">reply</span>
            <span class="material-icons">report</span>
            <span class="material-icons">create</span>
            <span class="material-icons">delete_sweep</span>
            <span class="material-icons">close</span>
            </div>

          </div>        
      </div>

      </div>


    <div class="row">

    </div>
  </div>
</div>
@endsection
@endsection
