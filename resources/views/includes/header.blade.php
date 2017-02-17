  <!-- - - - - - - - - - - - - - Header - - - - - - - - - - - - - - - - --> 
  

  <header id="header" class="transparent">

    <div class="header-in clearfix">

      <div id="top-left" class="col-md-6 col-sm-12 col-xs-12">
          <h1 id="logo"><b><a href="{{ Request::path() == 'blog' ? route('home') : '' }}">SMARTVEST INV</a></b></h1> 
          <br/>
          <h4 id="creed">A Penny Saved is A Penny Earned</h4>
         
      </div>


      <a id="responsive-nav-button" class="responsive-nav-button" href="#"></a>

      <nav id="navigation" class="navigation">

        <ul>
          <?php $home = Request::segment(1) ? route('home') : ''; ?>
          <li><a href="{{ $home }}#about">About</a></li>
          <li><a href="{{ $home }}#folio">Products</a></li>
          <li><a href="{{ $home }}#payments">Payments</a></li>
          <li><a href="#footer">Contacts</a></li>
        </ul>

      </nav><!--/ #navigation-->

      <img src="/assets/img/sil3.png" alt="" class="nai hide">

    </div><!--/ .header-in-->

  </header><!--/ #header-->


  <!-- - - - - - - - - - - - - end Header - - - - - - - - - - - - - - - -->