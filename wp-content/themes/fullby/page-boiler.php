<?php 
/*
Template Name: Boiler
*/
get_header(); ?>			
		<div class="wrap">
<div class="buddyb wrap">		
  <div class="col-md-12" id="map">
        <div class="layer" style="width:1920px; height:400px;" id="grid"> </div>
        <img src="http://placehold.it/200" class="layer">
        <div class="layer" style="width:400px; height:400px; text-align:center;"><p>hello</p></div>
 </div>
	<div class="col-md-9 single">
	
		<div class="col-md-12">
			<div class="single-in">
      <!-- Main jumbotron for a primary marketing message or call to action -->
      <div class="jumbotron">
        <h1>Theme example</h1>
        <p>This is a template showcasing the optional theme stylesheet included in Bootstrap. Use it as a starting point to create something more unique by building on or modifying it.</p>
      </div>


      <div class="page-header">
        <h1>Buttons</h1>
      </div>
      <p>
        <button class="btn btn-lg btn-default" type="button">Default</button>
        <button class="btn btn-lg btn-primary" type="button">Primary</button>
        <button class="btn btn-lg btn-success" type="button">Success</button>
        <button class="btn btn-lg btn-info" type="button">Info</button>
        <button class="btn btn-lg btn-warning" type="button">Warning</button>
        <button class="btn btn-lg btn-danger" type="button">Danger</button>
        <button class="btn btn-lg btn-link" type="button">Link</button>
      </p>
      <p>
        <button class="btn btn-default" type="button">Default</button>
        <button class="btn btn-primary" type="button">Primary</button>
        <button class="btn btn-success" type="button">Success</button>
        <button class="btn btn-info" type="button">Info</button>
        <button class="btn btn-warning" type="button">Warning</button>
        <button class="btn btn-danger" type="button">Danger</button>
        <button class="btn btn-link" type="button">Link</button>
      </p>
      <p>
        <button class="btn btn-sm btn-default" type="button">Default</button>
        <button class="btn btn-sm btn-primary" type="button">Primary</button>
        <button class="btn btn-sm btn-success" type="button">Success</button>
        <button class="btn btn-sm btn-info" type="button">Info</button>
        <button class="btn btn-sm btn-warning" type="button">Warning</button>
        <button class="btn btn-sm btn-danger" type="button">Danger</button>
        <button class="btn btn-sm btn-link" type="button">Link</button>
      </p>
      <p>
        <button class="btn btn-xs btn-default" type="button">Default</button>
        <button class="btn btn-xs btn-primary" type="button">Primary</button>
        <button class="btn btn-xs btn-success" type="button">Success</button>
        <button class="btn btn-xs btn-info" type="button">Info</button>
        <button class="btn btn-xs btn-warning" type="button">Warning</button>
        <button class="btn btn-xs btn-danger" type="button">Danger</button>
        <button class="btn btn-xs btn-link" type="button">Link</button>
      </p>


      <div class="page-header">
        <h1>Tables</h1>
      </div>
      <div class="row">
        <div class="col-md-6">
          <table class="table">
            <thead>
              <tr>
                <th>#</th>
                <th>First Name</th>
                <th>Last Name</th>
                <th>Username</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <td>1</td>
                <td>Mark</td>
                <td>Otto</td>
                <td>@mdo</td>
              </tr>
              <tr>
                <td>2</td>
                <td>Jacob</td>
                <td>Thornton</td>
                <td>@fat</td>
              </tr>
              <tr>
                <td>3</td>
                <td>Larry</td>
                <td>the Bird</td>
                <td>@twitter</td>
              </tr>
            </tbody>
          </table>
        </div>
        <div class="col-md-6">
          <table class="table table-striped">
            <thead>
              <tr>
                <th>#</th>
                <th>First Name</th>
                <th>Last Name</th>
                <th>Username</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <td>1</td>
                <td>Mark</td>
                <td>Otto</td>
                <td>@mdo</td>
              </tr>
              <tr>
                <td>2</td>
                <td>Jacob</td>
                <td>Thornton</td>
                <td>@fat</td>
              </tr>
              <tr>
                <td>3</td>
                <td>Larry</td>
                <td>the Bird</td>
                <td>@twitter</td>
              </tr>
            </tbody>
          </table>
        </div>
      </div>

      <div class="row">
        <div class="col-md-6">
          <table class="table table-bordered">
            <thead>
              <tr>
                <th>#</th>
                <th>First Name</th>
                <th>Last Name</th>
                <th>Username</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <td rowspan="2">1</td>
                <td>Mark</td>
                <td>Otto</td>
                <td>@mdo</td>
              </tr>
              <tr>
                <td>Mark</td>
                <td>Otto</td>
                <td>@getbootstrap</td>
              </tr>
              <tr>
                <td>2</td>
                <td>Jacob</td>
                <td>Thornton</td>
                <td>@fat</td>
              </tr>
              <tr>
                <td>3</td>
                <td colspan="2">Larry the Bird</td>
                <td>@twitter</td>
              </tr>
            </tbody>
          </table>
        </div>
        <div class="col-md-6">
          <table class="table table-condensed">
            <thead>
              <tr>
                <th>#</th>
                <th>First Name</th>
                <th>Last Name</th>
                <th>Username</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <td>1</td>
                <td>Mark</td>
                <td>Otto</td>
                <td>@mdo</td>
              </tr>
              <tr>
                <td>2</td>
                <td>Jacob</td>
                <td>Thornton</td>
                <td>@fat</td>
              </tr>
              <tr>
                <td>3</td>
                <td colspan="2">Larry the Bird</td>
                <td>@twitter</td>
              </tr>
            </tbody>
          </table>
        </div>
      </div>


      <div class="page-header">
        <h1>Thumbnails</h1>
      </div>
      <img alt="200x200" class="img-thumbnail" data-src="holder.js/200x200" style="width: 200px; height: 200px;" src="data:image/svg+xml;base64,PD94bWwgdmVyc2lvbj0iMS4wIiBlbmNvZGluZz0iVVRGLTgiIHN0YW5kYWxvbmU9InllcyI/PjxzdmcgeG1sbnM9Imh0dHA6Ly93d3cudzMub3JnLzIwMDAvc3ZnIiB3aWR0aD0iMjAwIiBoZWlnaHQ9IjIwMCIgdmlld0JveD0iMCAwIDIwMCAyMDAiIHByZXNlcnZlQXNwZWN0UmF0aW89Im5vbmUiPjxkZWZzLz48cmVjdCB3aWR0aD0iMjAwIiBoZWlnaHQ9IjIwMCIgZmlsbD0iI0VFRUVFRSIvPjxnPjx0ZXh0IHg9IjczLjA0MTY2NjAzMDg4Mzc5IiB5PSIxMDAiIHN0eWxlPSJmaWxsOiNBQUFBQUE7Zm9udC13ZWlnaHQ6Ym9sZDtmb250LWZhbWlseTpBcmlhbCwgSGVsdmV0aWNhLCBPcGVuIFNhbnMsIHNhbnMtc2VyaWYsIG1vbm9zcGFjZTtmb250LXNpemU6MTBwdDtkb21pbmFudC1iYXNlbGluZTpjZW50cmFsIj4yMDB4MjAwPC90ZXh0PjwvZz48L3N2Zz4=" data-holder-rendered="true">


      <div class="page-header">
        <h1>Labels</h1>
      </div>
      <h1>
        <span class="label label-default">Default</span>
        <span class="label label-primary">Primary</span>
        <span class="label label-success">Success</span>
        <span class="label label-info">Info</span>
        <span class="label label-warning">Warning</span>
        <span class="label label-danger">Danger</span>
      </h1>
      <h2>
        <span class="label label-default">Default</span>
        <span class="label label-primary">Primary</span>
        <span class="label label-success">Success</span>
        <span class="label label-info">Info</span>
        <span class="label label-warning">Warning</span>
        <span class="label label-danger">Danger</span>
      </h2>
      <h3>
        <span class="label label-default">Default</span>
        <span class="label label-primary">Primary</span>
        <span class="label label-success">Success</span>
        <span class="label label-info">Info</span>
        <span class="label label-warning">Warning</span>
        <span class="label label-danger">Danger</span>
      </h3>
      <h4>
        <span class="label label-default">Default</span>
        <span class="label label-primary">Primary</span>
        <span class="label label-success">Success</span>
        <span class="label label-info">Info</span>
        <span class="label label-warning">Warning</span>
        <span class="label label-danger">Danger</span>
      </h4>
      <h5>
        <span class="label label-default">Default</span>
        <span class="label label-primary">Primary</span>
        <span class="label label-success">Success</span>
        <span class="label label-info">Info</span>
        <span class="label label-warning">Warning</span>
        <span class="label label-danger">Danger</span>
      </h5>
      <h6>
        <span class="label label-default">Default</span>
        <span class="label label-primary">Primary</span>
        <span class="label label-success">Success</span>
        <span class="label label-info">Info</span>
        <span class="label label-warning">Warning</span>
        <span class="label label-danger">Danger</span>
      </h6>
      <p>
        <span class="label label-default">Default</span>
        <span class="label label-primary">Primary</span>
        <span class="label label-success">Success</span>
        <span class="label label-info">Info</span>
        <span class="label label-warning">Warning</span>
        <span class="label label-danger">Danger</span>
      </p>


      <div class="page-header">
        <h1>Badges</h1>
      </div>
      <p>
        <a href="#">Inbox <span class="badge">42</span></a>
      </p>
      <ul role="tablist" class="nav nav-pills">
        <li class="active" role="presentation"><a href="#">Home <span class="badge">42</span></a></li>
        <li role="presentation"><a href="#">Profile</a></li>
        <li role="presentation"><a href="#">Messages <span class="badge">3</span></a></li>
      </ul>


      <div class="page-header">
        <h1>Dropdown menus</h1>
      </div>
      <div class="dropdown theme-dropdown clearfix">
        <a aria-expanded="false" role="button" data-toggle="dropdown" class="sr-only dropdown-toggle" href="#" id="dropdownMenu1">Dropdown <span class="caret"></span></a>
        <ul aria-labelledby="dropdownMenu1" role="menu" class="dropdown-menu">
          <li role="presentation" class="active"><a href="#" tabindex="-1" role="menuitem">Action</a></li>
          <li role="presentation"><a href="#" tabindex="-1" role="menuitem">Another action</a></li>
          <li role="presentation"><a href="#" tabindex="-1" role="menuitem">Something else here</a></li>
          <li class="divider" role="presentation"></li>
          <li role="presentation"><a href="#" tabindex="-1" role="menuitem">Separated link</a></li>
        </ul>
      </div>


      <div class="page-header">
        <h1>Navs</h1>
      </div>
      <ul role="tablist" class="nav nav-tabs">
        <li class="active" role="presentation"><a href="#">Home</a></li>
        <li role="presentation"><a href="#">Profile</a></li>
        <li role="presentation"><a href="#">Messages</a></li>
      </ul>
      <ul role="tablist" class="nav nav-pills">
        <li class="active" role="presentation"><a href="#">Home</a></li>
        <li role="presentation"><a href="#">Profile</a></li>
        <li role="presentation"><a href="#">Messages</a></li>
      </ul>


      <div class="page-header">
        <h1>Navbars</h1>
      </div>

      <nav class="navbar navbar-default">
        <div class="container">
          <div class="navbar-header">
            <button data-target=".navbar-collapse" data-toggle="collapse" class="navbar-toggle collapsed" type="button">
              <span class="sr-only">Toggle navigation</span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
            </button>
            <a href="#" class="navbar-brand">Project name</a>
          </div>
          <div class="navbar-collapse collapse">
            <ul class="nav navbar-nav">
              <li class="active"><a href="#">Home</a></li>
              <li><a href="#about">About</a></li>
              <li><a href="#contact">Contact</a></li>
              <li class="dropdown">
                <a aria-expanded="false" role="button" data-toggle="dropdown" class="dropdown-toggle" href="#">Dropdown <span class="caret"></span></a>
                <ul role="menu" class="dropdown-menu">
                  <li><a href="#">Action</a></li>
                  <li><a href="#">Another action</a></li>
                  <li><a href="#">Something else here</a></li>
                  <li class="divider"></li>
                  <li class="dropdown-header">Nav header</li>
                  <li><a href="#">Separated link</a></li>
                  <li><a href="#">One more separated link</a></li>
                </ul>
              </li>
            </ul>
          </div><!--/.nav-collapse -->
        </div>
      </nav>

      <nav class="navbar navbar-inverse">
        <div class="container">
          <div class="navbar-header">
            <button data-target=".navbar-collapse" data-toggle="collapse" class="navbar-toggle collapsed" type="button">
              <span class="sr-only">Toggle navigation</span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
            </button>
            <a href="#" class="navbar-brand">Project name</a>
          </div>
          <div class="navbar-collapse collapse">
            <ul class="nav navbar-nav">
              <li class="active"><a href="#">Home</a></li>
              <li><a href="#about">About</a></li>
              <li><a href="#contact">Contact</a></li>
              <li class="dropdown">
                <a aria-expanded="false" role="button" data-toggle="dropdown" class="dropdown-toggle" href="#">Dropdown <span class="caret"></span></a>
                <ul role="menu" class="dropdown-menu">
                  <li><a href="#">Action</a></li>
                  <li><a href="#">Another action</a></li>
                  <li><a href="#">Something else here</a></li>
                  <li class="divider"></li>
                  <li class="dropdown-header">Nav header</li>
                  <li><a href="#">Separated link</a></li>
                  <li><a href="#">One more separated link</a></li>
                </ul>
              </li>
            </ul>
          </div><!--/.nav-collapse -->
        </div>
      </nav>


      <div class="page-header">
        <h1>Alerts</h1>
      </div>
      <div role="alert" class="alert alert-success">
        <strong>Well done!</strong> You successfully read this important alert message.
      </div>
      <div role="alert" class="alert alert-info">
        <strong>Heads up!</strong> This alert needs your attention, but it's not super important.
      </div>
      <div role="alert" class="alert alert-warning">
        <strong>Warning!</strong> Best check yo self, you're not looking too good.
      </div>
      <div role="alert" class="alert alert-danger">
        <strong>Oh snap!</strong> Change a few things up and try submitting again.
      </div>


      <div class="page-header">
        <h1>Progress bars</h1>
      </div>
      <div class="progress">
        <div style="width: 60%;" aria-valuemax="100" aria-valuemin="0" aria-valuenow="60" role="progressbar" class="progress-bar"><span class="sr-only">60% Complete</span></div>
      </div>
      <div class="progress">
        <div style="width: 40%" aria-valuemax="100" aria-valuemin="0" aria-valuenow="40" role="progressbar" class="progress-bar progress-bar-success"><span class="sr-only">40% Complete (success)</span></div>
      </div>
      <div class="progress">
        <div style="width: 20%" aria-valuemax="100" aria-valuemin="0" aria-valuenow="20" role="progressbar" class="progress-bar progress-bar-info"><span class="sr-only">20% Complete</span></div>
      </div>
      <div class="progress">
        <div style="width: 60%" aria-valuemax="100" aria-valuemin="0" aria-valuenow="60" role="progressbar" class="progress-bar progress-bar-warning"><span class="sr-only">60% Complete (warning)</span></div>
      </div>
      <div class="progress">
        <div style="width: 80%" aria-valuemax="100" aria-valuemin="0" aria-valuenow="80" role="progressbar" class="progress-bar progress-bar-danger"><span class="sr-only">80% Complete (danger)</span></div>
      </div>
      <div class="progress">
        <div style="width: 60%" aria-valuemax="100" aria-valuemin="0" aria-valuenow="60" role="progressbar" class="progress-bar progress-bar-striped"><span class="sr-only">60% Complete</span></div>
      </div>
      <div class="progress">
        <div style="width: 35%" class="progress-bar progress-bar-success"><span class="sr-only">35% Complete (success)</span></div>
        <div style="width: 20%" class="progress-bar progress-bar-warning"><span class="sr-only">20% Complete (warning)</span></div>
        <div style="width: 10%" class="progress-bar progress-bar-danger"><span class="sr-only">10% Complete (danger)</span></div>
      </div>


      <div class="page-header">
        <h1>List groups</h1>
      </div>
      <div class="row">
        <div class="col-sm-4">
          <ul class="list-group">
            <li class="list-group-item">Cras justo odio</li>
            <li class="list-group-item">Dapibus ac facilisis in</li>
            <li class="list-group-item">Morbi leo risus</li>
            <li class="list-group-item">Porta ac consectetur ac</li>
            <li class="list-group-item">Vestibulum at eros</li>
          </ul>
        </div><!-- /.col-sm-4 -->
        <div class="col-sm-4">
          <div class="list-group">
            <a class="list-group-item active" href="#">
              Cras justo odio
            </a>
            <a class="list-group-item" href="#">Dapibus ac facilisis in</a>
            <a class="list-group-item" href="#">Morbi leo risus</a>
            <a class="list-group-item" href="#">Porta ac consectetur ac</a>
            <a class="list-group-item" href="#">Vestibulum at eros</a>
          </div>
        </div><!-- /.col-sm-4 -->
        <div class="col-sm-4">
          <div class="list-group">
            <a class="list-group-item active" href="#">
              <h4 class="list-group-item-heading">List group item heading</h4>
              <p class="list-group-item-text">Donec id elit non mi porta gravida at eget metus. Maecenas sed diam eget risus varius blandit.</p>
            </a>
            <a class="list-group-item" href="#">
              <h4 class="list-group-item-heading">List group item heading</h4>
              <p class="list-group-item-text">Donec id elit non mi porta gravida at eget metus. Maecenas sed diam eget risus varius blandit.</p>
            </a>
            <a class="list-group-item" href="#">
              <h4 class="list-group-item-heading">List group item heading</h4>
              <p class="list-group-item-text">Donec id elit non mi porta gravida at eget metus. Maecenas sed diam eget risus varius blandit.</p>
            </a>
          </div>
        </div><!-- /.col-sm-4 -->
      </div>


      <div class="page-header">
        <h1>Panels</h1>
      </div>
      <div class="row">
        <div class="col-sm-4">
          <div class="panel panel-default">
            <div class="panel-heading">
              <h3 class="panel-title">Panel title</h3>
            </div>
            <div class="panel-body">
              Panel content
            </div>
          </div>
          <div class="panel panel-primary">
            <div class="panel-heading">
              <h3 class="panel-title">Panel title</h3>
            </div>
            <div class="panel-body">
              Panel content
            </div>
          </div>
        </div><!-- /.col-sm-4 -->
        <div class="col-sm-4">
          <div class="panel panel-success">
            <div class="panel-heading">
              <h3 class="panel-title">Panel title</h3>
            </div>
            <div class="panel-body">
              Panel content
            </div>
          </div>
          <div class="panel panel-info">
            <div class="panel-heading">
              <h3 class="panel-title">Panel title</h3>
            </div>
            <div class="panel-body">
              Panel content
            </div>
          </div>
        </div><!-- /.col-sm-4 -->
        <div class="col-sm-4">
          <div class="panel panel-warning">
            <div class="panel-heading">
              <h3 class="panel-title">Panel title</h3>
            </div>
            <div class="panel-body">
              Panel content
            </div>
          </div>
          <div class="panel panel-danger">
            <div class="panel-heading">
              <h3 class="panel-title">Panel title</h3>
            </div>
            <div class="panel-body">
              Panel content
            </div>
          </div>
        </div><!-- /.col-sm-4 -->
      </div>


      <div class="page-header">
        <h1>Wells</h1>
      </div>
      <div class="well">
        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas sed diam eget risus varius blandit sit amet non magna. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Praesent commodo cursus magna, vel scelerisque nisl consectetur et. Cras mattis consectetur purus sit amet fermentum. Duis mollis, est non commodo luctus, nisi erat porttitor ligula, eget lacinia odio sem nec elit. Aenean lacinia bibendum nulla sed consectetur.</p>
      </div>


      <div class="page-header">
        <h1>Carousel</h1>
      </div>
      <div data-ride="carousel" class="carousel slide" id="carousel-example-generic">
        <ol class="carousel-indicators">
          <li class="" data-slide-to="0" data-target="#carousel-example-generic"></li>
          <li data-slide-to="1" data-target="#carousel-example-generic" class=""></li>
          <li data-slide-to="2" data-target="#carousel-example-generic" class="active"></li>
        </ol>
        <div role="listbox" class="carousel-inner">
          <div class="item">
            <img alt="First slide [1140x500]" data-src="holder.js/1140x500/auto/#777:#555/text:First slide" src="data:image/svg+xml;base64,PD94bWwgdmVyc2lvbj0iMS4wIiBlbmNvZGluZz0iVVRGLTgiIHN0YW5kYWxvbmU9InllcyI/PjxzdmcgeG1sbnM9Imh0dHA6Ly93d3cudzMub3JnLzIwMDAvc3ZnIiB3aWR0aD0iMTE0MCIgaGVpZ2h0PSI1MDAiIHZpZXdCb3g9IjAgMCAxMTQwIDUwMCIgcHJlc2VydmVBc3BlY3RSYXRpbz0ibm9uZSI+PGRlZnMvPjxyZWN0IHdpZHRoPSIxMTQwIiBoZWlnaHQ9IjUwMCIgZmlsbD0iIzc3NyIvPjxnPjx0ZXh0IHg9IjQwMi4xMDAwMDYxMDM1MTU2IiB5PSIyNTAiIHN0eWxlPSJmaWxsOiM1NTU7Zm9udC13ZWlnaHQ6Ym9sZDtmb250LWZhbWlseTpBcmlhbCwgSGVsdmV0aWNhLCBPcGVuIFNhbnMsIHNhbnMtc2VyaWYsIG1vbm9zcGFjZTtmb250LXNpemU6NTNwdDtkb21pbmFudC1iYXNlbGluZTpjZW50cmFsIj5GaXJzdCBzbGlkZTwvdGV4dD48L2c+PC9zdmc+" data-holder-rendered="true">
          </div>
          <div class="item">
            <img alt="Second slide [1140x500]" data-src="holder.js/1140x500/auto/#666:#444/text:Second slide" src="data:image/svg+xml;base64,PD94bWwgdmVyc2lvbj0iMS4wIiBlbmNvZGluZz0iVVRGLTgiIHN0YW5kYWxvbmU9InllcyI/PjxzdmcgeG1sbnM9Imh0dHA6Ly93d3cudzMub3JnLzIwMDAvc3ZnIiB3aWR0aD0iMTE0MCIgaGVpZ2h0PSI1MDAiIHZpZXdCb3g9IjAgMCAxMTQwIDUwMCIgcHJlc2VydmVBc3BlY3RSYXRpbz0ibm9uZSI+PGRlZnMvPjxyZWN0IHdpZHRoPSIxMTQwIiBoZWlnaHQ9IjUwMCIgZmlsbD0iIzY2NiIvPjxnPjx0ZXh0IHg9IjM1MS4wNTAwMDMwNTE3NTc4IiB5PSIyNTAiIHN0eWxlPSJmaWxsOiM0NDQ7Zm9udC13ZWlnaHQ6Ym9sZDtmb250LWZhbWlseTpBcmlhbCwgSGVsdmV0aWNhLCBPcGVuIFNhbnMsIHNhbnMtc2VyaWYsIG1vbm9zcGFjZTtmb250LXNpemU6NTNwdDtkb21pbmFudC1iYXNlbGluZTpjZW50cmFsIj5TZWNvbmQgc2xpZGU8L3RleHQ+PC9nPjwvc3ZnPg==" data-holder-rendered="true">
          </div>
          <div class="item active">
            <img alt="Third slide [1140x500]" data-src="holder.js/1140x500/auto/#555:#333/text:Third slide" src="data:image/svg+xml;base64,PD94bWwgdmVyc2lvbj0iMS4wIiBlbmNvZGluZz0iVVRGLTgiIHN0YW5kYWxvbmU9InllcyI/PjxzdmcgeG1sbnM9Imh0dHA6Ly93d3cudzMub3JnLzIwMDAvc3ZnIiB3aWR0aD0iMTE0MCIgaGVpZ2h0PSI1MDAiIHZpZXdCb3g9IjAgMCAxMTQwIDUwMCIgcHJlc2VydmVBc3BlY3RSYXRpbz0ibm9uZSI+PGRlZnMvPjxyZWN0IHdpZHRoPSIxMTQwIiBoZWlnaHQ9IjUwMCIgZmlsbD0iIzU1NSIvPjxnPjx0ZXh0IHg9IjM5MC4zNTAwMDYxMDM1MTU2IiB5PSIyNTAiIHN0eWxlPSJmaWxsOiMzMzM7Zm9udC13ZWlnaHQ6Ym9sZDtmb250LWZhbWlseTpBcmlhbCwgSGVsdmV0aWNhLCBPcGVuIFNhbnMsIHNhbnMtc2VyaWYsIG1vbm9zcGFjZTtmb250LXNpemU6NTNwdDtkb21pbmFudC1iYXNlbGluZTpjZW50cmFsIj5UaGlyZCBzbGlkZTwvdGV4dD48L2c+PC9zdmc+" data-holder-rendered="true">
          </div>
        </div>
        <a data-slide="prev" role="button" href="#carousel-example-generic" class="left carousel-control">
          <span aria-hidden="true" class="glyphicon glyphicon-chevron-left"></span>
          <span class="sr-only">Previous</span>
        </a>
        <a data-slide="next" role="button" href="#carousel-example-generic" class="right carousel-control">
          <span aria-hidden="true" class="glyphicon glyphicon-chevron-right"></span>
          <span class="sr-only">Next</span>
        </a>
      </div>


	        
		</div>
	</div>	
		 

	</div>			

	<div class="col-md-3 sidebar">
	<div class="well"> <?php get_sidebar( 'primary' ); ?></div>
		    
	</div>
		
<?php get_footer(); ?>