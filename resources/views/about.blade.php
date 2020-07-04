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
                            <img src     =  " {{ asset('typerite/images/thumbs/about/about-1000.jpg') }}" 
                                 srcset  =  " {{ asset('typerite/images/thumbs/about/about-2000.jpg') }} 2000w, 
                                              {{ asset('typerite/images/thumbs/about/about-1000.jpg') }} 1000w, 
                                              {{ asset('typerite/images/thumbs/about/about-500.jpg') }} 500w" 
                                 sizes   =  " (max-width: 2000px) 100vw, 2000px" 
                                 alt     =  " ">
                        </div>
                    </div>

                    <div class="content__page-header">
                        <h1 class="display-1">
                            Hello, We Are TypeRite.
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
                        dolore culpa occaecat.
                    </p>

                    <h2>This Is Our Story</h2>

                    <p>
                    Odio dignissimos ducimus qui blanditiis praesentium voluptatum deleniti atque corrupti 
                    dolores et quas molestias excepturi sint occaecati cupiditate non provident, similique 
                    sunt in culpa. Aenean eu leo quam. Pellentesque ornare sem lacinia quam venenatis 
                    
                    <p>
                        Duis ex ad cupidatat tempor Excepteur cillum cupidatat fugiat nostrud cupidatat dolor 
                        sunt sint sit nisi est eu exercitation incididunt adipisicing veniam velit id fugiat enim 
                        mollit amet anim veniam dolor dolor irure velit commodo cillum sit nulla ullamco. Lorem 
                        ipsum Nisi amet fugiat eiusmod et aliqua ad qui ut nisi Ut aute anim mollit fugiat aute.
                    </p>

                </section>

            </main>

        </div> <!-- end s-content -->

@stop