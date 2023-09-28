@extends('client.home')
@section('content')
<div id="main">
    <div id="content" class="site-content">

        <div data-elementor-type="wp-page" data-elementor-id="84"
            class="elementor elementor-84">
             {{-- banner --}}
                       @include('client.layout.banner')
             {{-- ************ --}}
            <section
                class="elementor-section elementor-top-section elementor-element elementor-element-e615b68 elementor-section-boxed elementor-section-height-default elementor-section-height-default"
                data-id="e615b68" data-element_type="section">
                <div
                    class="elementor-container elementor-column-gap-default">
                    <div
                        class="elementor-column elementor-col-100 elementor-top-column elementor-element elementor-element-a503e51"
                        data-id="a503e51" data-element_type="column">
                        <div
                            class="elementor-widget-wrap elementor-element-populated">
                            <div
                                class="elementor-element elementor-element-46cb6f1 elementor-widget elementor-widget-Amy_V2_Movie_Heading"
                                data-id="46cb6f1"
                                data-element_type="widget"
                                data-widget_type="Amy_V2_Movie_Heading.default">
                                <div
                                    class="elementor-widget-container">
                                    <div
                                        class="amy-heading text-center has-seperator    seperator-1 "><header
                                            class="entry-header"><span
                                                class="seperator seperator-left"></span><h2
                                                class="title-heading"><span
                                                    class="title">Now
                                                    Playing</span></h2><span
                                                class="seperator seperator-right"></span></header></div>
                                </div>
                            </div>
                            <div
                                class="elementor-element elementor-element-f8ea438 elementor-widget elementor-widget-Amy_Movie_Grid"
                                data-id="f8ea438"
                                data-element_type="widget"
                                data-widget_type="Amy_Movie_Grid.default">
                                <div
                                    class="elementor-widget-container">
                                    <div
                                        class="amy-shortcode amy-mv-grid layout1">

                                        <div
                                            class="row amy-ajax-content">
                                             {{-- ******** --}}
                                             @foreach ($films as $item)
                                                 
                                           
                                            <div
                                                class="col-md-15 grid-item">
                                                <article
                                                    class="entry-item"
                                                    onclick>
                                                    <div
                                                        class="entry-thumb">
                                                        <img class
                                                            src="{{ asset('storage/images/'.$item->thumb) }}"
                                                            alt="Kubo and the Two Strings" />
                                                        {{-- <div
                                                            class="right-info">
                                                            <span
                                                                class="pg">
                                                                G
                                                            </span>
                                                        </div> --}}
                                                    </div>
                                                    <div
                                                        class="entry-content">
                                                        <h4 class="entry-title">{{ $item->name }}</h4>
                                                        <div class="entry-date">{{ $item->ngayKhoiChieu }}</div>
                                                        <div
                                                            class="entry-button">
                                                            <a
                                                                href="https://player.vimeo.com/video/51834631">
                                                                <i
                                                                    aria-hidden="true"
                                                                    class="fa fa-play"></i>
                                                                Trailer
                                                            </a>
                                                            <a
                                                                href="">
                                                                <i
                                                                    aria-hidden="true"
                                                                    class="fa fa-exclamation"></i>
                                                                Detail
                                                            </a>
                                                        </div>
                                                    </div>
                                                    <div
                                                        class="pic-caption open-left">
                                                        <h4
                                                            class="entry-title">
                                                            <a href="">{{ $item->name }}</a>
                                                        </h4>
                                                        <span
                                                            class="pg">
                                                            G
                                                        </span>
                                                        <div
                                                            class="desc-mv">
                                                            <p><span>Release:</span>{{ $item->ngayKhoiChieu }}</p>

                                                            <p><span>Genre:</span>
                                                                @foreach ($item->categories as $category)
                                                                    {{ $category->name }},
                                                                @endforeach
                                                            
                                                            </p>

                                                            <p><span>Duration:</span>{{ $item->thoiLuongChieu }}</p>

                                                            <p><span>Language:</span>{{ $item->ngonNgu }}</p>
                                                        </div>

                                                        <div
                                                            class="entry-button">
                                                            <a
                                                                href="https://player.vimeo.com/video/51834631"
                                                                class="fancybox.iframe amy-fancybox">
                                                                <i
                                                                    aria-hidden="true"
                                                                    class="fa fa-play"></i>
                                                                Trailer
                                                            </a>
                                                            <a
                                                                href="/detail/{{ $item->id }}">
                                                                <i
                                                                    aria-hidden="true"
                                                                    class="fa fa-exclamation"></i>
                                                                Detail
                                                            </a>
                                                        </div>
                                                    </div>
                                                </article>
                                            </div>

                                            @endforeach
                                             {{-- ******** --}}
                                        </div>

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <section
                class="elementor-section elementor-top-section elementor-element elementor-element-a9d0dcf elementor-section-full_width elementor-section-height-default elementor-section-height-default"
                data-id="a9d0dcf" data-element_type="section">
                <div
                    class="elementor-container elementor-column-gap-default">
                    <div
                        class="elementor-column elementor-col-100 elementor-top-column elementor-element elementor-element-6271200"
                        data-id="6271200" data-element_type="column">
                        <div
                            class="elementor-widget-wrap elementor-element-populated">
                            <div
                                class="elementor-element elementor-element-41c7e7f home-cinema-icon elementor-widget elementor-widget-text-editor"
                                data-id="41c7e7f"
                                data-element_type="widget"
                                data-widget_type="text-editor.default">
                                <div
                                    class="elementor-widget-container">
                                    <style>/*! elementor - v3.6.5 - 27-04-2022 */
.elementor-widget-text-editor.elementor-drop-cap-view-stacked .elementor-drop-cap{background-color:#818a91;color:#fff}.elementor-widget-text-editor.elementor-drop-cap-view-framed .elementor-drop-cap{color:#818a91;border:3px solid;background-color:transparent}.elementor-widget-text-editor:not(.elementor-drop-cap-view-default) .elementor-drop-cap{margin-top:8px}.elementor-widget-text-editor:not(.elementor-drop-cap-view-default) .elementor-drop-cap-letter{width:1em;height:1em}.elementor-widget-text-editor .elementor-drop-cap{float:left;text-align:center;line-height:1;font-size:50px}.elementor-widget-text-editor .elementor-drop-cap-letter{display:inline-block}</style>
                                    <div class="amy-widget-content"><ul><li><a
                                                    href="#">Cinemas</a></li><li><a
                                                    href="#">Promations</a></li><li><a
                                                    href="#">Vouchers
                                                    &amp; Cards</a></li><li><a
                                                    href="#">Buy
                                                    Tickets</a></li><li>popcorn</li></ul></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <section
                class="elementor-section elementor-top-section elementor-element elementor-element-d06313b elementor-section-full_width elementor-section-height-default elementor-section-height-default"
                data-id="d06313b" data-element_type="section"
                data-settings="{&quot;background_background&quot;:&quot;classic&quot;}">
                <div
                    class="elementor-container elementor-column-gap-default">
                    <div
                        class="elementor-column elementor-col-100 elementor-top-column elementor-element elementor-element-5d23715"
                        data-id="5d23715" data-element_type="column">
                        <div
                            class="elementor-widget-wrap elementor-element-populated">
                            <div
                                class="elementor-element elementor-element-af4aa50 elementor-widget elementor-widget-heading"
                                data-id="af4aa50"
                                data-element_type="widget"
                                data-widget_type="heading.default">
                                <div
                                    class="elementor-widget-container">
                                    <style>/*! elementor - v3.6.5 - 27-04-2022 */
.elementor-heading-title{padding:0;margin:0;line-height:1}.elementor-widget-heading .elementor-heading-title[class*=elementor-size-]>a{color:inherit;font-size:inherit;line-height:inherit}.elementor-widget-heading .elementor-heading-title.elementor-size-small{font-size:15px}.elementor-widget-heading .elementor-heading-title.elementor-size-medium{font-size:19px}.elementor-widget-heading .elementor-heading-title.elementor-size-large{font-size:29px}.elementor-widget-heading .elementor-heading-title.elementor-size-xl{font-size:39px}.elementor-widget-heading .elementor-heading-title.elementor-size-xxl{font-size:59px}</style><h2
                                        class="elementor-heading-title elementor-size-default">Top
                                        movies in theatres</h2>
                                </div>
                            </div>
                            <div
                                class="elementor-element elementor-element-b83f4fa elementor-widget elementor-widget-Amy_Movie_Carousel"
                                data-id="b83f4fa"
                                data-element_type="widget"
                                data-widget_type="Amy_Movie_Carousel.default">
                                <div
                                    class="elementor-widget-container">
                                    <div
                                        class="amy-shortcode amy-mv-carousel">

                                        <div class="amy-slick "
                                            data-slick='{"slidesToShow":5,"slidesToScroll":5,"autoplay":true,"autoplaySpeed":3000,"arrows":true,"infinite":true,"centerMode":true,"responsive": [{"breakpoint": 480,"settings": {"slidesToShow": 1,"slidesToScroll": 1}},{"breakpoint": 979,"settings": {"slidesToShow": 3,"slidesToScroll": 3}},{"breakpoint": 1199,"settings": {"slidesToShow": 5,"slidesToScroll": 5}},{"breakpoint": 1999,"settings": {"slidesToShow": 7,"slidesToScroll": 7}},{"breakpoint": 4999,"settings": {"slidesToShow": 20,"slidesToScroll": 20}}],"dots":true}'>

                                                @foreach ($filmss as $item)
                                                
                                            <div
                                                class="carousel-item">
                                                <div
                                                    class="carousel-thumb">
                                                    <a
                                                        href="http://demo.amytheme.com/movie/demo/elementor-single-cinema/movie/supersonic/">
                                                        <img class
                                                            src="{{ asset('storage/images/'.$item->thumb) }}"
                                                            alt="Supersonic" />
                                                    </a>
                                                </div>
                                                <div
                                                    class="carousel-content">
                                                    <h2
                                                        class="carousel-title">
                                                        <a href="">{{ $item->name }}</a>
                                                    </h2>
                                                    <div
                                                        class="carousel-release">Release:<span>{{ $item->ngayKhoiChieu }}</span>
                                                    </div>
                                                    <div
                                                        class="carousel-button">
                                                        <a
                                                            href="https://player.vimeo.com/video/51834631"
                                                            class="fancybox.iframe amy-fancybox">
                                                            <i
                                                                aria-hidden="true"
                                                                class="fa fa-play"></i>
                                                            Trailer
                                                        </a>
                                                        <a
                                                            href="http://demo.amytheme.com/movie/demo/elementor-single-cinema/movie/supersonic/">
                                                            <i
                                                                aria-hidden="true"
                                                                class="fa fa-exclamation"></i>
                                                            Detail
                                                        </a>
                                                    </div>
                                                </div>
                                            </div>

                                            @endforeach

                                        </div>
                                    </div> </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <section
                class="elementor-section elementor-top-section elementor-element elementor-element-bae4559 elementor-section-boxed elementor-section-height-default elementor-section-height-default"
                data-id="bae4559" data-element_type="section">
                <div
                    class="elementor-container elementor-column-gap-default">
                    <div
                        class="elementor-column elementor-col-50 elementor-top-column elementor-element elementor-element-c982f26"
                        data-id="c982f26" data-element_type="column">
                        <div
                            class="elementor-widget-wrap elementor-element-populated">
                            <div
                                class="elementor-element elementor-element-4a8597b elementor-widget elementor-widget-heading"
                                data-id="4a8597b"
                                data-element_type="widget"
                                data-widget_type="heading.default">
                                <div
                                    class="elementor-widget-container">
                                    <h2
                                        class="elementor-heading-title elementor-size-default">Videos
                                        and photos</h2> </div>
                            </div>
                            <div
                                class="elementor-element elementor-element-846ee5c elementor-widget elementor-widget-image"
                                data-id="846ee5c"
                                data-element_type="widget"
                                data-widget_type="image.default">
                                <div
                                    class="elementor-widget-container">
                                    <style>/*! elementor - v3.6.5 - 27-04-2022 */
.elementor-widget-image{text-align:center}.elementor-widget-image a{display:inline-block}.elementor-widget-image a img[src$=".svg"]{width:48px}.elementor-widget-image img{vertical-align:middle;display:inline-block}</style>
                                    <img
                                        src="http://demo.amytheme.com/movie/demo/elementor-single-cinema/wp-content/uploads/sites/2/2022/05/img_30.jpg"
                                        title alt /> </div>
                            </div>
                            <div
                                class="elementor-element elementor-element-8d1a5bd elementor-widget elementor-widget-text-editor"
                                data-id="8d1a5bd"
                                data-element_type="widget"
                                data-widget_type="text-editor.default">
                                <div
                                    class="elementor-widget-container">
                                    <div class="amy-widget-content"><h4>10
                                            Cloverfield Lane</h4><p>A
                                            young woman wakes up
                                            after a terrible
                                            accident to find that
                                            she’s… locked in a
                                            cellar with a doomsday
                                            prepper,… who insists
                                            that he saved her life
                                            and that the world
                                            outside is uninhabitable
                                            following an apocalyptic
                                            catastrophe. Uncertain
                                            what to believe, the
                                            woman soon….</p></div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div
                        class="elementor-column elementor-col-50 elementor-top-column elementor-element elementor-element-16ca592"
                        data-id="16ca592" data-element_type="column">
                        <div
                            class="elementor-widget-wrap elementor-element-populated">
                            <div
                                class="elementor-element elementor-element-9df2d84 elementor-widget elementor-widget-Amy_V2_Movie_Gallery_Grid"
                                data-id="9df2d84"
                                data-element_type="widget"
                                data-widget_type="Amy_V2_Movie_Gallery_Grid.default">
                                <div
                                    class="elementor-widget-container">
                                    <div
                                        class="amy-gallery-grid amy-gallery ">
                                        <div
                                            class="gallery-grid-inner amy-lightgallery"
                                            data-column="3">

                                            <div
                                                class="grid-item col-sm-6 col-md-4"
                                                data-src="http://demo.amytheme.com/movie/demo/elementor-single-cinema/wp-content/uploads/sites/2/2022/05/img_60.jpg">
                                                <a
                                                    href="http://demo.amytheme.com/movie/demo/elementor-single-cinema/wp-content/uploads/sites/2/2022/05/img_60.jpg"
                                                    class="amy-fancybox">
                                                    <span
                                                        class="thumbnail">
                                                        <img
                                                            width="750"
                                                            height="500"
                                                            src="http://demo.amytheme.com/movie/demo/elementor-single-cinema/wp-content/uploads/sites/2/2022/05/img_60.jpg"
                                                            class="attachment-full size-full"
                                                            alt
                                                            loading="lazy"
                                                            srcset="http://demo.amytheme.com/movie/demo/elementor-single-cinema/wp-content/uploads/sites/2/2022/05/img_60.jpg 750w, http://demo.amytheme.com/movie/demo/elementor-single-cinema/wp-content/uploads/sites/2/2022/05/img_60-300x200.jpg 300w"
                                                            sizes="(max-width: 750px) 100vw, 750px" />
                                                    </span>
                                                    <span
                                                        class="fa fa-search"></span>
                                                </a>
                                            </div>

                                            <div
                                                class="grid-item col-sm-6 col-md-4"
                                                data-src="http://demo.amytheme.com/movie/demo/elementor-single-cinema/wp-content/uploads/sites/2/2022/05/img_59.jpg">
                                                <a
                                                    href="http://demo.amytheme.com/movie/demo/elementor-single-cinema/wp-content/uploads/sites/2/2022/05/img_59.jpg"
                                                    class="amy-fancybox">
                                                    <span
                                                        class="thumbnail">
                                                        <img
                                                            width="750"
                                                            height="500"
                                                            src="http://demo.amytheme.com/movie/demo/elementor-single-cinema/wp-content/uploads/sites/2/2022/05/img_59.jpg"
                                                            class="attachment-full size-full"
                                                            alt
                                                            loading="lazy"
                                                            srcset="http://demo.amytheme.com/movie/demo/elementor-single-cinema/wp-content/uploads/sites/2/2022/05/img_59.jpg 750w, http://demo.amytheme.com/movie/demo/elementor-single-cinema/wp-content/uploads/sites/2/2022/05/img_59-300x200.jpg 300w"
                                                            sizes="(max-width: 750px) 100vw, 750px" />
                                                    </span>
                                                    <span
                                                        class="fa fa-search"></span>
                                                </a>
                                            </div>

                                            <div
                                                class="grid-item col-sm-6 col-md-4"
                                                data-src="http://demo.amytheme.com/movie/demo/elementor-single-cinema/wp-content/uploads/sites/2/2022/05/img_58.jpg">
                                                <a
                                                    href="http://demo.amytheme.com/movie/demo/elementor-single-cinema/wp-content/uploads/sites/2/2022/05/img_58.jpg"
                                                    class="amy-fancybox">
                                                    <span
                                                        class="thumbnail">
                                                        <img
                                                            width="750"
                                                            height="500"
                                                            src="http://demo.amytheme.com/movie/demo/elementor-single-cinema/wp-content/uploads/sites/2/2022/05/img_58.jpg"
                                                            class="attachment-full size-full"
                                                            alt
                                                            loading="lazy"
                                                            srcset="http://demo.amytheme.com/movie/demo/elementor-single-cinema/wp-content/uploads/sites/2/2022/05/img_58.jpg 750w, http://demo.amytheme.com/movie/demo/elementor-single-cinema/wp-content/uploads/sites/2/2022/05/img_58-300x200.jpg 300w"
                                                            sizes="(max-width: 750px) 100vw, 750px" />
                                                    </span>
                                                    <span
                                                        class="fa fa-search"></span>
                                                </a>
                                            </div>

                                            <div
                                                class="grid-item col-sm-6 col-md-4"
                                                data-src="http://demo.amytheme.com/movie/demo/elementor-single-cinema/wp-content/uploads/sites/2/2022/05/img_57.jpg">
                                                <a
                                                    href="http://demo.amytheme.com/movie/demo/elementor-single-cinema/wp-content/uploads/sites/2/2022/05/img_57.jpg"
                                                    class="amy-fancybox">
                                                    <span
                                                        class="thumbnail">
                                                        <img
                                                            width="750"
                                                            height="500"
                                                            src="http://demo.amytheme.com/movie/demo/elementor-single-cinema/wp-content/uploads/sites/2/2022/05/img_57.jpg"
                                                            class="attachment-full size-full"
                                                            alt
                                                            loading="lazy"
                                                            srcset="http://demo.amytheme.com/movie/demo/elementor-single-cinema/wp-content/uploads/sites/2/2022/05/img_57.jpg 750w, http://demo.amytheme.com/movie/demo/elementor-single-cinema/wp-content/uploads/sites/2/2022/05/img_57-300x200.jpg 300w"
                                                            sizes="(max-width: 750px) 100vw, 750px" />
                                                    </span>
                                                    <span
                                                        class="fa fa-search"></span>
                                                </a>
                                            </div>

                                            <div
                                                class="grid-item col-sm-6 col-md-4"
                                                data-src="http://demo.amytheme.com/movie/demo/elementor-single-cinema/wp-content/uploads/sites/2/2022/05/img_56.jpg">
                                                <a
                                                    href="http://demo.amytheme.com/movie/demo/elementor-single-cinema/wp-content/uploads/sites/2/2022/05/img_56.jpg"
                                                    class="amy-fancybox">
                                                    <span
                                                        class="thumbnail">
                                                        <img
                                                            width="750"
                                                            height="500"
                                                            src="http://demo.amytheme.com/movie/demo/elementor-single-cinema/wp-content/uploads/sites/2/2022/05/img_56.jpg"
                                                            class="attachment-full size-full"
                                                            alt
                                                            loading="lazy"
                                                            srcset="http://demo.amytheme.com/movie/demo/elementor-single-cinema/wp-content/uploads/sites/2/2022/05/img_56.jpg 750w, http://demo.amytheme.com/movie/demo/elementor-single-cinema/wp-content/uploads/sites/2/2022/05/img_56-300x200.jpg 300w"
                                                            sizes="(max-width: 750px) 100vw, 750px" />
                                                    </span>
                                                    <span
                                                        class="fa fa-search"></span>
                                                </a>
                                            </div>

                                            <div
                                                class="grid-item col-sm-6 col-md-4"
                                                data-src="http://demo.amytheme.com/movie/demo/elementor-single-cinema/wp-content/uploads/sites/2/2022/05/img_55.jpg">
                                                <a
                                                    href="http://demo.amytheme.com/movie/demo/elementor-single-cinema/wp-content/uploads/sites/2/2022/05/img_55.jpg"
                                                    class="amy-fancybox">
                                                    <span
                                                        class="thumbnail">
                                                        <img
                                                            width="750"
                                                            height="500"
                                                            src="http://demo.amytheme.com/movie/demo/elementor-single-cinema/wp-content/uploads/sites/2/2022/05/img_55.jpg"
                                                            class="attachment-full size-full"
                                                            alt
                                                            loading="lazy"
                                                            srcset="http://demo.amytheme.com/movie/demo/elementor-single-cinema/wp-content/uploads/sites/2/2022/05/img_55.jpg 750w, http://demo.amytheme.com/movie/demo/elementor-single-cinema/wp-content/uploads/sites/2/2022/05/img_55-300x200.jpg 300w"
                                                            sizes="(max-width: 750px) 100vw, 750px" />
                                                    </span>
                                                    <span
                                                        class="fa fa-search"></span>
                                                </a>
                                            </div>

                                            <div
                                                class="grid-item col-sm-6 col-md-4"
                                                data-src="http://demo.amytheme.com/movie/demo/elementor-single-cinema/wp-content/uploads/sites/2/2022/05/img_54.jpg">
                                                <a
                                                    href="http://demo.amytheme.com/movie/demo/elementor-single-cinema/wp-content/uploads/sites/2/2022/05/img_54.jpg"
                                                    class="amy-fancybox">
                                                    <span
                                                        class="thumbnail">
                                                        <img
                                                            width="750"
                                                            height="500"
                                                            src="http://demo.amytheme.com/movie/demo/elementor-single-cinema/wp-content/uploads/sites/2/2022/05/img_54.jpg"
                                                            class="attachment-full size-full"
                                                            alt
                                                            loading="lazy"
                                                            srcset="http://demo.amytheme.com/movie/demo/elementor-single-cinema/wp-content/uploads/sites/2/2022/05/img_54.jpg 750w, http://demo.amytheme.com/movie/demo/elementor-single-cinema/wp-content/uploads/sites/2/2022/05/img_54-300x200.jpg 300w"
                                                            sizes="(max-width: 750px) 100vw, 750px" />
                                                    </span>
                                                    <span
                                                        class="fa fa-search"></span>
                                                </a>
                                            </div>

                                            <div
                                                class="grid-item col-sm-6 col-md-4"
                                                data-src="http://demo.amytheme.com/movie/demo/elementor-single-cinema/wp-content/uploads/sites/2/2022/05/img_53.jpg">
                                                <a
                                                    href="http://demo.amytheme.com/movie/demo/elementor-single-cinema/wp-content/uploads/sites/2/2022/05/img_53.jpg"
                                                    class="amy-fancybox">
                                                    <span
                                                        class="thumbnail">
                                                        <img
                                                            width="750"
                                                            height="500"
                                                            src="http://demo.amytheme.com/movie/demo/elementor-single-cinema/wp-content/uploads/sites/2/2022/05/img_53.jpg"
                                                            class="attachment-full size-full"
                                                            alt
                                                            loading="lazy"
                                                            srcset="http://demo.amytheme.com/movie/demo/elementor-single-cinema/wp-content/uploads/sites/2/2022/05/img_53.jpg 750w, http://demo.amytheme.com/movie/demo/elementor-single-cinema/wp-content/uploads/sites/2/2022/05/img_53-300x200.jpg 300w"
                                                            sizes="(max-width: 750px) 100vw, 750px" />
                                                    </span>
                                                    <span
                                                        class="fa fa-search"></span>
                                                </a>
                                            </div>

                                            <div
                                                class="grid-item col-sm-6 col-md-4"
                                                data-src="http://demo.amytheme.com/movie/demo/elementor-single-cinema/wp-content/uploads/sites/2/2022/05/img_52.jpg">
                                                <a
                                                    href="http://demo.amytheme.com/movie/demo/elementor-single-cinema/wp-content/uploads/sites/2/2022/05/img_52.jpg"
                                                    class="amy-fancybox">
                                                    <span
                                                        class="thumbnail">
                                                        <img
                                                            width="750"
                                                            height="500"
                                                            src="http://demo.amytheme.com/movie/demo/elementor-single-cinema/wp-content/uploads/sites/2/2022/05/img_52.jpg"
                                                            class="attachment-full size-full"
                                                            alt
                                                            loading="lazy"
                                                            srcset="http://demo.amytheme.com/movie/demo/elementor-single-cinema/wp-content/uploads/sites/2/2022/05/img_52.jpg 750w, http://demo.amytheme.com/movie/demo/elementor-single-cinema/wp-content/uploads/sites/2/2022/05/img_52-300x200.jpg 300w"
                                                            sizes="(max-width: 750px) 100vw, 750px" />
                                                    </span>
                                                    <span
                                                        class="fa fa-search"></span>
                                                </a>
                                            </div>
                                        </div>
                                    </div> </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <section
                class="elementor-section elementor-top-section elementor-element elementor-element-d4a6835 elementor-section-boxed elementor-section-height-default elementor-section-height-default"
                data-id="d4a6835" data-element_type="section"
                data-settings="{&quot;background_background&quot;:&quot;classic&quot;}">
                <div
                    class="elementor-container elementor-column-gap-default">
                    <div
                        class="elementor-column elementor-col-100 elementor-top-column elementor-element elementor-element-7609416"
                        data-id="7609416" data-element_type="column">
                        <div
                            class="elementor-widget-wrap elementor-element-populated">
                            <div
                                class="elementor-element elementor-element-5717a5b elementor-widget elementor-widget-heading"
                                data-id="5717a5b"
                                data-element_type="widget"
                                data-widget_type="heading.default">
                                <div
                                    class="elementor-widget-container">
                                    <h2
                                        class="elementor-heading-title elementor-size-default">Latest
                                        News</h2> </div>
                            </div>
                            <div
                                class="elementor-element elementor-element-5131c14 elementor-widget elementor-widget-Amy_Movie_Blog"
                                data-id="5131c14"
                                data-element_type="widget"
                                data-widget_type="Amy_Movie_Blog.default">
                                <div
                                    class="elementor-widget-container">
                                    <div
                                        class="amy-shortcode amy-mv-blog layout1 ">

                                        <div class="row">
                                            <div
                                                class="col-md-3 wide"><div
                                                    class="entry-item"><div
                                                        class="entry-thumb"><img
                                                            loading="lazy"
                                                            width="750"
                                                            height="500"
                                                            src="http://demo.amytheme.com/movie/demo/elementor-single-cinema/wp-content/uploads/sites/2/2022/05/img_59.jpg"
                                                            class="attachment-full size-full wp-post-image"
                                                            alt
                                                            srcset="http://demo.amytheme.com/movie/demo/elementor-single-cinema/wp-content/uploads/sites/2/2022/05/img_59.jpg 750w, http://demo.amytheme.com/movie/demo/elementor-single-cinema/wp-content/uploads/sites/2/2022/05/img_59-300x200.jpg 300w"
                                                            sizes="(max-width: 750px) 100vw, 750px" /></div><div
                                                        class="entry-content"><h2
                                                            class="entry-title"><a
                                                                href="http://demo.amytheme.com/movie/demo/elementor-single-cinema/2022/04/28/six-book-to-film-adaptations-to-get-excited-about-this-autumn/">Six
                                                                book-to-film
                                                                adaptations
                                                                to
                                                                get
                                                                excited
                                                                about
                                                                this
                                                                autumn</a></h2><a
                                                            class="entry-btn"
                                                            href="http://demo.amytheme.com/movie/demo/elementor-single-cinema/2022/04/28/six-book-to-film-adaptations-to-get-excited-about-this-autumn/">Read
                                                            more</a></div><div
                                                        class="clearfix"></div></div><div
                                                    class="entry-item"><div
                                                        class="entry-thumb"><img
                                                            width="750"
                                                            height="500"
                                                            src="http://demo.amytheme.com/movie/demo/elementor-single-cinema/wp-content/uploads/sites/2/2022/05/img_57.jpg"
                                                            class="attachment-full size-full wp-post-image"
                                                            alt
                                                            loading="lazy"
                                                            srcset="http://demo.amytheme.com/movie/demo/elementor-single-cinema/wp-content/uploads/sites/2/2022/05/img_57.jpg 750w, http://demo.amytheme.com/movie/demo/elementor-single-cinema/wp-content/uploads/sites/2/2022/05/img_57-300x200.jpg 300w"
                                                            sizes="(max-width: 750px) 100vw, 750px" /></div><div
                                                        class="entry-content"><h2
                                                            class="entry-title"><a
                                                                href="http://demo.amytheme.com/movie/demo/elementor-single-cinema/2022/04/28/the-beatles-eight-days-a-week-the-touring/">The
                                                                Beatles:
                                                                Eight
                                                                Days
                                                                a
                                                                Week
                                                                –
                                                                The
                                                                Touring</a></h2><a
                                                            class="entry-btn"
                                                            href="http://demo.amytheme.com/movie/demo/elementor-single-cinema/2022/04/28/the-beatles-eight-days-a-week-the-touring/">Read
                                                            more</a></div><div
                                                        class="clearfix"></div></div></div><div
                                                class="col-md-6 full"><div
                                                    class="entry-item"><div
                                                        class="entry-thumb"><img
                                                            width="750"
                                                            height="500"
                                                            src="http://demo.amytheme.com/movie/demo/elementor-single-cinema/wp-content/uploads/sites/2/2022/05/img_57.jpg"
                                                            class="attachment-full size-full wp-post-image"
                                                            alt
                                                            loading="lazy"
                                                            srcset="http://demo.amytheme.com/movie/demo/elementor-single-cinema/wp-content/uploads/sites/2/2022/05/img_57.jpg 750w, http://demo.amytheme.com/movie/demo/elementor-single-cinema/wp-content/uploads/sites/2/2022/05/img_57-300x200.jpg 300w"
                                                            sizes="(max-width: 750px) 100vw, 750px" /></div><div
                                                        class="entry-content"><h2
                                                            class="entry-title"><a
                                                                href="http://demo.amytheme.com/movie/demo/elementor-single-cinema/2022/04/28/win-a-wizarding-world-holiday-with-fantastic/">Win
                                                                a
                                                                Wizarding
                                                                World
                                                                holiday
                                                                with
                                                                Fantastic</a></h2><div
                                                            class="entry-summary">Sed
                                                            ut
                                                            perspiciatis
                                                            unde
                                                            omnis
                                                            iste
                                                            natus
                                                            error
                                                            sit
                                                            voluptatem
                                                            accusantium
                                                            doloremque
                                                            laudantium,
                                                            totam
                                                            rem
                                                            aperiam,
                                                            eaque
                                                            ipsa
                                                            quae ab
                                                            illo
                                                            inventore
                                                            veritatis
                                                            et quasi
                                                            architecto
                                                            beatae
                                                            vitae
                                                            dicta
                                                            sunt
                                                            explicabo.
                                                            Nemo
                                                            enim
                                                            ipsam
                                                            voluptatem
                                                            quia
                                                            voluptas
                                                            sit
                                                            aspernatur
                                                            aut odit
                                                            aut
                                                            fugit,
                                                            sed quia
                                                            consequuntur
                                                            magni
                                                            dolores
                                                            eos qui
                                                            ratione
                                                            voluptatem
                                                            sequi
                                                            nesciunt.
                                                            Neque
                                                            [&hellip;]</div><a
                                                            class="entry-btn"
                                                            href="http://demo.amytheme.com/movie/demo/elementor-single-cinema/2022/04/28/win-a-wizarding-world-holiday-with-fantastic/">Read
                                                            more</a></div><div
                                                        class="clearfix"></div></div></div><div
                                                class="col-md-3 wide"><div
                                                    class="entry-item"><div
                                                        class="entry-thumb"><img
                                                            width="750"
                                                            height="500"
                                                            src="http://demo.amytheme.com/movie/demo/elementor-single-cinema/wp-content/uploads/sites/2/2022/05/img_54.jpg"
                                                            class="attachment-full size-full wp-post-image"
                                                            alt
                                                            loading="lazy"
                                                            srcset="http://demo.amytheme.com/movie/demo/elementor-single-cinema/wp-content/uploads/sites/2/2022/05/img_54.jpg 750w, http://demo.amytheme.com/movie/demo/elementor-single-cinema/wp-content/uploads/sites/2/2022/05/img_54-300x200.jpg 300w"
                                                            sizes="(max-width: 750px) 100vw, 750px" /></div><div
                                                        class="entry-content"><h2
                                                            class="entry-title"><a
                                                                href="http://demo.amytheme.com/movie/demo/elementor-single-cinema/2022/04/28/doctor-strange-assembles-with-the-avengers/">Doctor
                                                                Strange
                                                                assembles
                                                                with
                                                                the
                                                                Avengers</a></h2><a
                                                            class="entry-btn"
                                                            href="http://demo.amytheme.com/movie/demo/elementor-single-cinema/2022/04/28/doctor-strange-assembles-with-the-avengers/">Read
                                                            more</a></div><div
                                                        class="clearfix"></div></div><div
                                                    class="entry-item"><div
                                                        class="entry-thumb"><img
                                                            width="750"
                                                            height="500"
                                                            src="http://demo.amytheme.com/movie/demo/elementor-single-cinema/wp-content/uploads/sites/2/2022/05/img_53.jpg"
                                                            class="attachment-full size-full wp-post-image"
                                                            alt
                                                            loading="lazy"
                                                            srcset="http://demo.amytheme.com/movie/demo/elementor-single-cinema/wp-content/uploads/sites/2/2022/05/img_53.jpg 750w, http://demo.amytheme.com/movie/demo/elementor-single-cinema/wp-content/uploads/sites/2/2022/05/img_53-300x200.jpg 300w"
                                                            sizes="(max-width: 750px) 100vw, 750px" /></div><div
                                                        class="entry-content"><h2
                                                            class="entry-title"><a
                                                                href="http://demo.amytheme.com/movie/demo/elementor-single-cinema/2022/04/28/5-movies-to-watch-this-week-29-sep-2016/">5
                                                                movies
                                                                to
                                                                watch
                                                                this
                                                                week
                                                                (29
                                                                Sep
                                                                2016)</a></h2><a
                                                            class="entry-btn"
                                                            href="http://demo.amytheme.com/movie/demo/elementor-single-cinema/2022/04/28/5-movies-to-watch-this-week-29-sep-2016/">Read
                                                            more</a></div><div
                                                        class="clearfix"></div></div></div>
                                        </div>
                                    </div> </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        </div>

    </div>
</div>
@endsection