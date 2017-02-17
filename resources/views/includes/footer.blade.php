
<!-- - - - - - - - - - - - - - Footer - - - - - - - - - - - - - - - - -->


<footer id="footer">
    
    <section class="section padding-bottom-off">

        <div class="container">

            <div class="row">

                <div class="col-xs-12">
                         
                </div>

            </div><!--/ .row-->

        </div><!--/ .container-->

    </section><!--/ .section-->


    <section class="section parallax parallax-bg-4">

        <div class="full-bg-image"></div>

        <div class="container" id="contact">

            <div class="row">

               
                <div class="col-md-2">

                   
                </div>

                <div class="col-md-8 opacity">
                    <h2>Contact us </h2>
                    <form action="contact"  method="post" class="contact-form">
                        <input type="hidden" name="_token" value="{{ csrf_token() }}" />
                        <p class="input-block">
                            <input type="text" name="name" id="name" placeholder="Name *" required="required" value="{{ Request::old('name') }}" />
                        </p>

                        <p class="input-block">
                            <input type="email" name="email" id="email" placeholder="Email *" required="required" value="{{ Request::old('email') }}" />
                        </p>

                        <p class="input-block">
                            <textarea name="body" id="body" placeholder="Message *" required="required" rows="15">{{ Request::old('body') }}</textarea>   
                        </p>

                        <p class="input-block">
                            <button class="button turquoise submit" type="submit" id="submit"><i class="icon-paper-plane-2"></i></button>
                        </p>

                    </form><!--/ .contact-form-->   

                </div>
                <div class="col-md-2">

                                   
                                </div>

            </div><!--/ .row-->

        </div><!--/ .container-->

    </section><!--/ .section--> 

    <div class="logo-in-footer">

        <div class="container">

            <div class="row">
                <div class="col-xs-12">
                    <h1><b><a href="{{ route('frontend.home') }}">SMARTVEST INV</a></b></h1>
                </div>
            </div><!--/ .row-->

        </div><!--/ .container-->

    </div><!--/ .logo-in-footer-->

</footer><!--/ #footer-->


<!-- - - - - - - - - - - - - end Footer - - - - - - - - - - - - - - - -->
