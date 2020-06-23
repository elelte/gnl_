@extends('frame.main')

@section('title', 'Home')

@section('content')

<div class="s-content">
            
    <div class="masonry-wrap">

        <div class="masonry">

            <div class="grid-sizer"></div>

            <article class="masonry__brick entry format-standard animate-this">
                    
                <div class="entry__thumb">
                    <a href="single-standard.html" class="entry__thumb-link">
                        <img src="{{ asset('typerite/images/thumbs/masonry/woodcraft-600.jpg') }}" 
                                srcset="{{ asset('typerite/images/thumbs/masonry/woodcraft-600.jpg 1x') }}, {{ asset('typerite/images/thumbs/masonry/woodcraft-1200.jpg 2x') }}" alt="">
                    </a>
                </div>

                <div class="entry__text">
                    <div class="entry__header">

                        <h2 class="entry__title"><a href="single-standard.html">Just a Standard Format Post.</a></h2>
                        <div class="entry__meta">
                            <span class="entry__meta-cat">
                                <a href="category.html">Design</a> 
                                <a href="category.html">Photography</a>
                            </span>
                            <span class="entry__meta-date">
                                <a href="single-standard.html">Apr 29, 2019</a>
                            </span>
                        </div>
                        
                    </div>
                    <div class="entry__excerpt">
                        <p>
                        Lorem ipsum Sed eiusmod esse aliqua sed incididunt aliqua incididunt mollit id et sit proident dolor nulla sed commodo est ad minim elit reprehenderit nisi officia aute incididunt velit sint in aliqua...
                        </p>
                    </div>
                </div>

            </article> <!-- end article -->

            <article class="masonry__brick entry format-quote animate-this">
                    
                <div class="entry__thumb">
                    <blockquote>
                        <p>Good design is making something intelligible and memorable. Great design is making something memorable and meaningful.</p>

                        <cite>Dieter Rams</cite>
                    </blockquote>
                </div>   

            </article> <!-- end article -->

            <article class="masonry__brick entry format-standard animate-this">
                    
                <div class="entry__thumb">
                    <a href="single-standard.html" class="entry__thumb-link">
                        <img src="{{ asset('typerite/images/thumbs/masonry/tulips-600.jpg') }}" 
                            srcset="{{ asset('typerite/images/thumbs/masonry/tulips-600.jpg 1x') }}, {{ asset('typerite/images/thumbs/masonry/tulips-1200.jpg 2x') }}" alt="">
                    </a>
                </div>

                <div class="entry__text">
                    <div class="entry__header">
                        <h2 class="entry__title"><a href="single-standard.html">10 Interesting Facts About Caffeine.</a></h2>
                        <div class="entry__meta">
                            <span class="entry__meta-cat">
                                <a href="category.html">Health</a>
                            </span>
                            <span class="entry__meta-date">
                                <a href="single-standard.html">Apr 28, 2019</a>
                            </span>
                        </div>
                    </div>
                    <div class="entry__excerpt">
                        <p>
                        Lorem ipsum Sed eiusmod esse aliqua sed incididunt aliqua incididunt mollit id et sit proident dolor nulla sed commodo est ad minim elit reprehenderit nisi officia aute incididunt velit sint in aliqua...
                        </p>
                    </div>
                </div>

            </article> <!-- end article -->
            

            <article class="masonry__brick entry format-standard animate-this">

                <div class="entry__thumb">
                    <a href="single-standard.html" class="entry__thumb-link">
                        <img src="{{ asset('typerite/images/thumbs/masonry/dew-600.jpg') }}" 
                            srcset="{{ asset('typerite/images/thumbs/masonry/dew-600.jpg 1x') }}, {{ asset('typerite/images/thumbs/masonry/dew-1200.jpg 2x') }}" alt="">
                    </a>
                </div>

                <div class="entry__text">
                    <div class="entry__header">
                        <h2 class="entry__title"><a href="single-standard.html">Health Benefits Of Morning Dew.</a></h2>
                        <div class="entry__meta">
                            <span class="entry__meta-cat">
                                <a href="category.html">Lifestyle</a>
                                <a href="category.html">Health</a>
                            </span>
                            <span class="entry__meta-date">
                                <a href="single-standard.html">Apr 28, 2019</a>
                            </span>
                        </div>
                    </div>
                    <div class="entry__excerpt">
                        <p>
                        Lorem ipsum Sed eiusmod esse aliqua sed incididunt aliqua incididunt mollit id et sit proident dolor nulla sed commodo est ad minim elit reprehenderit nisi officia aute incididunt velit sint in aliqua...
                        </p>
                    </div>
                </div>

            </article> <!-- end article -->

            <article class="masonry__brick entry format-standard animate-this">

                    <div class="entry__thumb">
                        <a href="single-standard.html" class="entry__thumb-link">
                            <img src="{{ asset('typerite/images/thumbs/masonry/rucksack-600.jpg') }}" 
                                srcset="{{ asset('typerite/images/thumbs/masonry/rucksack-600.jpg 1x') }}, {{ asset('typerite/images/thumbs/masonry/rucksack-1200.jpg 2x') }}" alt="">
                        </a>
                    </div>
    
                    <div class="entry__text">
                        <div class="entry__header">
                            
                            <h2 class="entry__title"><a href="single-standard.html">The Art Of Visual Storytelling.</a></h2>
                            
                            <div class="entry__meta">
                                <span class="entry__meta-cat">
                                    <a href="category.html">Lifestyle</a>
                                    <a href="category.html">Work</a>
                                </span>
                                <span class="entry__meta-date">
                                    <a href="single-standard.html">Apr 26, 2019</a>
                                </span>
                            </div>
                        </div>
                        <div class="entry__excerpt">
                            <p>
                            Lorem ipsum Sed eiusmod esse aliqua sed incididunt aliqua incididunt mollit id et sit proident dolor nulla sed commodo est ad minim elit reprehenderit nisi officia aute incididunt velit sint in aliqua...
                            </p>
                        </div>
                    </div>
    
                </article> <!-- end article -->

        </div> <!-- end masonry -->

    </div> <!-- end masonry-wrap -->

    <div class="row">
        <div class="column large-full">
            <nav class="pgn">
                <ul>
                    <li><a class="pgn__prev" href="#0">Prev</a></li>
                    <li><a class="pgn__num" href="#0">1</a></li>
                    <li><span class="pgn__num current">2</span></li>
                    <li><a class="pgn__num" href="#0">3</a></li>
                    <li><a class="pgn__num" href="#0">4</a></li>
                    <li><a class="pgn__num" href="#0">5</a></li>
                    <li><span class="pgn__num dots">…</span></li>
                    <li><a class="pgn__num" href="#0">8</a></li>
                    <li><a class="pgn__next" href="#0">Next</a></li>
                </ul>
            </nav>
        </div>
    </div>

</div> <!-- end s-content -->

@stop