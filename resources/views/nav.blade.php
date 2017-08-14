 <nav class="navbar navbar-default">
  <div class="container-fluid">
  <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
        </div>

    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      <ul class="nav navbar-nav">
        <li {{ Route::currentRouteName()== 'person.create' ? 'class=active' : '' }}><a href="{{ route('person.create') }}">Új személy felvétele<span class="sr-only">(current)</span></a>
        </li>        
        <li {{ Route::currentRouteName()== 'person.index' ? 'class=active' : '' }}><a href="{{ route('person.index') }}">Személyek listázása<span class="sr-only">(current)</span></a>
        </li>       
      </ul>
  </div><!-- /.navbar-collapse -->
</div><!-- /.container-fluid -->
</nav>
<div class="row nav-row">
  <div class="col-xs-12">
    <h4><a {{ Route::currentRouteName()== 'person.create' ? 'class=active nav-link' : 'class=nav-link' }} href="{{ route('person.create') }}">Új személy felvétele</a></h4>
    <h4><a {{ Route::currentRouteName()== 'person.index' ? 'class=active nav-link' : 'class=nav-link' }} href="{{ route('person.index') }}"">Személyek listázása</a></h4>
  </div>
</div>