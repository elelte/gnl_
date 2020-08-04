<template>
    <div class="s-content">
        <div class="masonry-wrap">
            <div class="masonry">
                <div class="grid-sizer">
                    <article class="masonry__brick entry format-standard animate-this" v-for="index in blog" :key="index.id">
                        <div class="entry__thumb">
                            <a href="single-standard.html" class="entry__thumb-link">
                                <img src="/typerite/images/thumbs/masonry/woodcraft-600.jpg" 
                                        srcset="/typerite//images/thumbs/masonry/woodcraft-600.jpg 1x, /typerite//images/thumbs/masonry/woodcraft-1200.jpg 2x" alt="">
                            </a>
                        </div>
                        <div class="entry__text">
                            <div class="entry__header">
                                <h2 class="entry__title"><a href="single-standard.html">{{index.sub_content}}</a></h2>
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
                                <p> asdasda </p>
                            </div>
                        </div>
                    </article> <!-- end article -->
                </div>
            </div>
        </div>

        <div class="row">
            <div class="column large-full">
                <nav class="pgn">
                    <ul>
                        <li v-if="pagination.current_page != 1"><a class="pgn__prev" href="#0" @click="getBlog(pagination.first_page_url)">Prev</a></li>
                        <li v-for="n in getPage()" :key="n">
                            <a v-bind:class="{ current: pagination.current_page == n}" class="pgn__num" href="#" @click="getBlog(pagination.path + '?page=' + n)">{{n}}</a>
                        </li>
                        <li v-if="pagination.current_page != pagination.last_page"><a class="pgn__next" href="#0" @click="getBlog(pagination.last_page_url)">Next</a></li>
                    </ul>
                </nav>
            </div>
        </div>

    </div>
</template>

<script>
    export default {
        data() {
            return {
                url     :'blog',
                blog    : [],
                loading : false,
                pagination: {}
            }
        },
        created() {
            this.getBlog();
        },
        methods: {
            /* GET API BLOG */
            getBlog(url){
                url = url || (this.BASE_URL + this.url);
                axios.get(url)
                .then(response => {
                    // Handle Success
                    this.loading = true;
                    this.blog = response.data.data.data;
                    this.pagination = {
                        from           : response.data.data.from,
                        last_page      : response.data.data.last_page,
                        current_page   : response.data.data.current_page,
                        path           : response.data.data.path,
                        next_page_url  : response.data.data.next_page_url,
                        prev_page_url  : response.data.data.next_page_url,
                        first_page_url : response.data.data.first_page_url,
                        last_page_url  : response.data.data.last_page_url
                    };
                })
                .catch(error => {
                    // Handle Error
                    console.log(error);
                })
                .finally(() => {
                    this.refreshTable();
                });
            },
            refreshTable(){
                var animateEl = $('.animate-this');
                animateEl.each(function(ctr) {
                    var el = $(this);
                    
                    setTimeout(function() {
                        el.addClass('animated');
                    }, ctr * 200);
                });

                $(window).on('resize', function() {
                    // remove animation classes
                    animateEl.removeClass('animate-this animated');
                });

                // init masonry
                $('.masonry').removeData('masonry'); // This line to remove masonry's data

                var containerBricks = $('.masonry');

                containerBricks.masonry({
                    itemSelector: '.masonry__brick',
                });

                // layout Masonry after each image loads
                containerBricks.imagesLoaded().progress( function() {
                    containerBricks.masonry('layout');
                });
            },
            getPage(){
                if (this.pagination.last_page > 5){
                    return 5
                }
                else{
                    return this.pagination.last_page
                }
            }
        }
    }
</script>