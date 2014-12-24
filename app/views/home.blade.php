@extends('template')

@section('body')
    <section id="main-slider" class="no-margin">
        <div class="carousel slide">
            <ol class="carousel-indicators">
                <?php
                    $path=public_path().'/assets/images/slider';
                    $dir = new DirectoryIterator($path);
                    $count=0;
                    foreach ($dir as $key => $fileinfo) {
                        if (!$fileinfo->isDot()) {
                            if($count==0)
                                echo '<li data-target="#main-slider" data-slide-to="'.$count.'" class="active"></li>
                            ';
                            else
                                echo '<li data-target="#main-slider" data-slide-to="'.$count.'"></li>
                            ';
                            $count++;
                        }
                    }
                ?>
            </ol>
            <div class="carousel-inner">
                @foreach ($dir as $key => $fileinfo)
                        @if (!$fileinfo->isDot())
                            @if($key==0)
                                <div class="item active">
                                    <img src="{{URL::asset('assets/images/slider/'.$fileinfo->getFilename())}}" class="img-responsive">
                                </div><!--/.item-->
                            @else
                                <div class="item">
                                    <img src="{{URL::asset('assets/images/slider/'.$fileinfo->getFilename())}}" class="img-responsive">
                                </div><!--/.item-->
                            @endif
                        @endif
                @endforeach
            </div><!--/.carousel-inner-->
        </div><!--/.carousel-->
        <a class="prev hidden-xs" href="#main-slider" data-slide="prev">
            <i class="fa fa-chevron-left"></i>
        </a>
        <a class="next hidden-xs" href="#main-slider" data-slide="next">
            <i class="fa fa-chevron-right"></i>
        </a>
    </section><!--/#main-slider-->
    <section id="blog" class="container">
        <div class="blog">
            <div class="row">
                <div class="col-md-4">
                </div>
                <div class="col-md-8">
                    <div class="blog-item">
                        <div class="row">
                            <div class="col-xs-12 col-sm-12 blog-content">
                                <h2><a href="blog-item.html">About VIhangam Yoga</a></h2>
                                <h3>Vihangam Yoga Organization is an NGO and a pioneer in yoga and advance meditation training, aiming at uplifting the human life in all aspects. The organization was established in the year 1924 by His Holiness Sadguru Sadafaldeo Ji Maharaj who discovered this wonderful meditation technique after 17 year of strenuous meditation practice. Today, under the holy guidance of present Sadguru His Holiness Shri Swatantradeo Ji Maharaj, Vihangam Yoga has reached around 35 nations with hundreds of Ashrams and has transformed the lives of more than 5 million disciples belonging to different races, </h3>
                                <a class="btn btn-primary readmore" href="blog-item.html">Read More <i class="fa fa-angle-right"></i></a>
                            </div>
                        </div>    
                    </div><!--/.blog-item-->
            </div><!--/.row-->
        </div>
    </section><!--/#blog-->

    <section id="feature" >
        <div class="container">
           <div class="center wow fadeInDown">
                <h2>Initiatives</h2>
                <p class="lead">Hand that rocks the cradle</p>
            </div>

            <div class="row">
                <div class="features">
                    <div class="col-md-3 col-sm-6 wow fadeInDown" data-wow-duration="1000ms" data-wow-delay="600ms">
                        <div class="feature-wrap">
                            <h2>Health</h2>
                            <h3>Good health is key to life. Our expertise in Ayurveda, Naturopathy, Yogasana, Pranayam, Acupressure and other sciences helps you stay in perfect health in a natural way</h3>
                        </div>
                    </div><!--/.col-md-4-->

                    <div class="col-md-3 col-sm-6 wow fadeInDown" data-wow-duration="1000ms" data-wow-delay="600ms">
                        <div class="feature-wrap">
                            <h2>Education</h2>
                            <h3>One of the fundamental rights of mankind is quality education. Vihangam Yoga offer free education and living to needy students, imparting excellent learning</h3>
                        </div>
                    </div><!--/.col-md-4-->

                    <div class="col-md-3 col-sm-6 wow fadeInDown" data-wow-duration="1000ms" data-wow-delay="600ms">
                        <div class="feature-wrap">
                            <h2>Environment</h2>
                            <h3>Vihangam Yoga Ashrams are located in picturesque locales on the banks of the Ganga near the Sangam at Allahabad, have grown ecologically harmonious assortments of trees and plants</h3>
                        </div>
                    </div><!--/.col-md-4-->
                
                    <div class="col-md-3 col-sm-6 wow fadeInDown" data-wow-duration="1000ms" data-wow-delay="600ms">
                        <div class="feature-wrap">
                            <h2>Spritual</h2>
                            <h3>emystify the vicious cycles of life and death, the universe and beyond, "Who am I", with unparalleled workshop on spirituality based on ancient most Brahma Vidya Vihangam Yoga Technique</h3>
                        </div>
                    </div><!--/.col-md-4-->


                </div><!--/.services-->
            </div><!--/.row-->    
        </div><!--/.container-->
    </section><!--/#feature-->

@endsection