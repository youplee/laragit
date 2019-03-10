@extends('layouts.site')

@section('content')
<section class="site-section py-sm">
    <div class="container">
        <div class="row">
        <div class="col-md-6">
            <h2 class="mb-4">Latest Posts</h2>
        </div>
        </div>
        <div class="row blog-entries">
        <div class="col-md-12 col-lg-8 main-content">
            <div class="row">
            <div class="col-md-6">
                <a href="blog-single.html" class="blog-entry element-animate" data-animate-effect="fadeIn">
                <img src="images/img_5.jpg" alt="Image placeholder">
                <div class="blog-content-body">
                    <div class="post-meta">
                    <span class="author mr-2"><img src="images/person_1.jpg" alt="Colorlib"> Colorlib</span>&bullet;
                    <span class="mr-2">March 15, 2018 </span> &bullet;
                    <span class="ml-2"><span class="fa fa-comments"></span> 3</span>
                    </div>
                    <h2>How to Find the Video Games of Your Youth</h2>
                </div>
                </a>
            </div>
            </div>

        </div>
    </div>
</section>
@endsection