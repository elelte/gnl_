@extends('frame.main')

@section('title', 'Home')

@section('content')

    <!-- site content
    ================================================== -->
    <div class="s-content content">
        <main class="row content__page">
            
            <section class="column large-full entry format-standard">

                <div class="media-wrap">
                    <div>
                        <img src     =  " {{ asset('typerite/images/thumbs/contact/contact-1000.jpg') }}" 
                                 srcset  =  " {{ asset('typerite/images/thumbs/contact/contact-2000.jpg') }} 2000w, 
                                              {{ asset('typerite/images/thumbs/contact/contact-1000.jpg') }} 1000w, 
                                              {{ asset('typerite/images/thumbs/contact/contact-500.jpg') }} 500w" 
                                 sizes   =  " (max-width: 2000px) 100vw, 2000px" 
                                 alt     =  " ">
                    </div>
                </div>

                <div class="content__page-header">
                    <h1 class="display-1">
                    Get In Touch.
                    </h1>
                </div> <!-- end content__page-header -->

                <p class="lead drop-cap">
                Duis ex ad cupidatat tempor Excepteur cillum cupidatat 
                fugiat nostrud cupidatat dolor sunt sint sit nisi est eu exercitation 
                incididunt adipisicing veniam velit id fugiat enim mollit amet anim veniam dolor 
                dolor irure velit commodo cillum sit nulla ullamco magna amet magna cupidatat qui 
                labore cillum sit in tempor veniam consequat non laborum adipisicing aliqua 
                ea nisi sint.
                </p>

                <p>
                Duis ex ad cupidatat tempor Excepteur cillum cupidatat fugiat nostrud cupidatat 
                dolor sunt sint sit nisi est eu exercitation incididunt adipisicing veniam velit 
                id fugiat enim mollit amet anim veniam dolor dolor irure velit commodo cillum sit 
                nulla ullamco magna amet magna cupidatat qui labore cillum sit in tempor veniam 
                consequat non laborum adipisicing aliqua ea nisi sint ut quis proident ullamco ut 
                dolore culpa occaecat ut laboris in sit minim cupidatat ut dolor voluptate enim 
                veniam consequat occaecat fugiat in adipisicing in amet Ut nulla nisi non ut enim 
                aliqua laborum mollit quis nostrud sed sed.
                </p>

                <div class="row">
                    <div class="column large-six tab-full">
                        <h4>Where to Find Us</h4>
                        <p>
                            <a href="">Youtube</a> <br>
                            <a href="">Facebook</a> <br>
                            <a href="">Medium</a> <br>
                            <a href="">Behance</a> 
                        </p>
                    </div>

                    <div class="column large-six tab-full">
                        <h4>Contact Info</h4>
                        <p>gaenael@gmail.com</p>
                    </div>
                </div>

            </section>

        </main>

    </div> <!-- end s-content -->

@stop