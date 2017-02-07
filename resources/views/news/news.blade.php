@extends('layouts.main')

@section('content')
<!-- Page Title -->
        <div class="page-title-container">
            <div class="container">
                <div class="row">
                    <div class="col-sm-12 wow fadeIn">
                        <i class="fa fa-newspaper-o"></i>
                        <h1>Noticias </h1>
                        <p></p>
                    </div>
                </div>
            </div>
        </div>
        
        <!-- Políticas -->
        <div class="portfolio-container">
	        <div class="container">
	            <div class="row">
	            	<div class="col-sm-12 portfolio-filters wow fadeInLeft">
	            		<p>Selecciona la Noticia que quieres ver:</p>
	            	</div>
	            </div>
	            <div class="row">
		                
                        <div class="container">
                            
                            <div class="circulares">
                                
                                @foreach($news as $n)
                                <?php $img = URL::to($n->getImages->first()['path']) ?>
                                
                                <a class="circular" href="{{ URL::to('noticias/ver_noticia/'.$n->id) }}">
                                    <span class="circular-header" style="background-image: url('{{ $img }}');">
                                        <span class="circular-title">
                                            <h3>{{ $n->title }}</h3>
                                        </span>
                                    </span>
                                    <span class="circular-summary">
                                        {{ $n->summary }}
                                    </span>
                                    <span class="circular-meta">
                                        Publicado: {{ $n->created_at }}
                                    </span>
                                </a>
                                    
                                @endforeach
                                
                                <!--<a class="circular" href="#">
                                    <span class="circular-header" style="background-image: url(http://placeimg.com/400/200/animals);">
                                        <span class="circular-title">
                                            <h3>This is a title for a circular</h3>
                                        </span>
                                    </span>
                                    <span class="circular-summary">
                                        A summary will also be present. Usually two to three brief sentences about the content on the detail page.
                                    </span>
                                    <span class="circular-meta">
                                        Published: June 18th, 2015
                                    </span>
                                </a>

                                <a class="circular" href="#">
                                    <span class="circular-header" style="background-image: url(http://placeimg.com/640/480/nature);">
                                        <span class="circular-title">
                                            <h3>This is a title for a circular that is a bit longer in length</h3>
                                        </span>
                                    </span>
                                    <span class="circular-summary">
                                        Each circular is created from an &lt;a&gt; tag so the whole circular is linked.
                                    </span>
                                    <span class="circular-meta">
                                        Published: June 18th, 2015
                                    </span>
                                </a>

                                <a class="circular" href="#">
                                    <span class="circular-header" style="background-image: url(http://placeimg.com/400/400/people)">
                                        <span class="circular-title">
                                            <h3>This is a title for a circular</h3>
                                        </span>
                                    </span>
                                    <span class="circular-summary">
                                        Using Flexbox is such a an easy, well supported way for grid-style content, such as circulars. The circulars height will expand to match the longest item.
                                    </span>
                                    <span class="circular-meta">
                                        Published: June 18th, 2015
                                    </span>
                                </a>

                                <a class="circular" href="#">
                                    <span class="circular-header" style="background-image: url(http://placeimg.com/400/200/tech);">
                                        <span class="circular-title">
                                            <h3>This is a title for a circular</h3>
                                        </span>
                                    </span>
                                    <span class="circular-summary">
                                        A summary will also be present. Usually two to three brief sentences about the content on the detail page.
                                    </span>
                                    <span class="circular-meta">
                                        Published: June 18th, 2015
                                    </span>
                                </a>

                                <a class="circular" href="#">
                                    <span class="circular-header" style="background-image: url(http://placeimg.com/400/200/people);">
                                        <span class="circular-title">
                                            <h3>This is a title for a circular</h3>
                                        </span>
                                    </span>
                                    <span class="circular-summary">
                                        Each circular is created from an &lt;a&gt; tag so the whole circular is linked.
                                    </span>
                                    <span class="circular-meta">
                                        Published: June 18th, 2015
                                    </span>
                                </a>

                                <a class="circular" href="#">
                                    <span class="circular-header" style="background-image: url(http://placeimg.com/400/250/nature);">
                                        <span class="circular-title">
                                            <h3>This is a title for a circular</h3>
                                        </span>
                                    </span>
                                    <span class="circular-summary">
                                        Using Flexbox is such a an easy, well supported way for grid-style content, such as circulars. The circulars height will expand to match the longest item.
                                    </span>
                                    <span class="circular-meta">
                                        Published: June 18th, 2015
                                    </span>
                                </a>

                                <a class="circular" href="#">
                                    <span class="circular-header" style="background-image: url(http://placeimg.com/400/250/animals);">
                                        <span class="circular-title">
                                            <h3>This is a title for a circular</h3>
                                        </span>
                                    </span>
                                    <span class="circular-summary">
                                        A summary will also be present. Usually two to three brief sentences about the content on the detail page.
                                    </span>
                                    <span class="circular-meta">
                                        Published: June 18th, 2015
                                    </span>
                                </a>

                                <a class="circular" href="#">
                                    <span class="circular-header" style="background-image: url(http://placeimg.com/600/600/people);">
                                        <span class="circular-title">
                                            <h3>This is a title for a circular</h3>
                                        </span>
                                    </span>
                                    <span class="circular-summary">
                                        Each circular is created from an &lt;a&gt; tag so the whole circular is linked.
                                    </span>
                                    <span class="circular-meta">
                                        Published: June 18th, 2015
                                    </span>
                                </a>

                                <a class="circular" href="#">
                                    <span class="circular-header" style="background-image: url(http://placeimg.com/400/400/tech);">
                                        <span class="circular-title">
                                            <h3>This is a title for a circular</h3>
                                        </span>
                                    </span>
                                    <span class="circular-summary">
                                        Using Flexbox is such a an easy, well supported way for grid-style content, such as circulars. The circulars height will expand to match the longest item.
                                    </span>
                                    <span class="circular-meta">
                                        Published: June 18th, 2015
                                    </span>
                                </a>-->
                            </div>
                            
                        </div>
                        <div id="pag">
		                {{ $news->links() }}
                        </div>
	            </div>
	        </div>
        </div>
@endsection

@section('script')
        <script>
            $("#publications").addClass("active");
        </script>
@endsection