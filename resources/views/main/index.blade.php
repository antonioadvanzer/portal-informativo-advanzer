@extends('layouts.main')

@section('content')
<!-- Slider -->
        <div class="slider-container">
            <div class="container">
                <div class="row">
                    <div class="col-sm-10 col-sm-offset-1 slider">
                        <div class="flexslider">
                            <ul class="slides">
                                <li data-thumb="{{ URL::to('img/slider/1.jpg') }}">
                                    <img src="{{ URL::to('img/slider/1.jpg') }}">
                                    <div class="flex-caption">
                                    	Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et. 
                                    	Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et. 
                                    	Lorem ipsum dolor sit amet, consectetur.
                                    </div>
                                </li>
                                <li data-thumb="{{ URL::to('img/slider/2.jpg') }}">
                                    <img src="{{ URL::to('img/slider/2.jpg') }}">
                                    <div class="flex-caption">
                                    	Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit 
                                    	lobortis nisl ut aliquip ex ea commodo consequat.
                                    </div>
                                </li>
                                <li data-thumb="{{ URL::to('img/slider/3.jpg') }}">
                                    <img src="{{ URL::to('img/slider/3.jpg') }}">
                                    <div class="flex-caption">
                                    	Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et. 
                                    	Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et. 
                                    	Lorem ipsum dolor sit amet, consectetur.
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
@endsection

@section('script')
<script>
    $("#home").addClass("active");
</script>
@endsection