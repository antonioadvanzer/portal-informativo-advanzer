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
                    <select id="mounth">
                        <option value="hide">-- Mes --</option>
                        <option value="01" rel="icon-temperature">Enero</option>
                        <option value="02">Febrero</option>
                        <option value="03">Marzo</option>
                        <option value="04">Abril</option>
                        <option value="05">Mayo</option>
                        <option value="06">Junio</option>
                        <option value="07">Julio</option>
                        <option value="08">Agosto</option>
                        <option value="09">Septiembre</option>
                        <option value="10">Octubre</option>
                        <option value="11">Noviembre</option>
                        <option value="12">Diciembre</option>
                    </select> 

                    <select id="year">
                        <option value="hide">-- Año --</option>
                        <option value="2017">2017</option>
                    </select>
                    
                    <!--<a class="btn btn-default" href="#">
                    <i class="fa fa-search fa-2x"></i></a>-->
                    
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
            
            $('select').each(function(){
                var $this = $(this), numberOfOptions = $(this).children('option').length;

                $this.addClass('select-hidden'); 
                $this.wrap('<div class="select"></div>');
                $this.after('<div class="select-styled"></div>');

                var $styledSelect = $this.next('div.select-styled');
                $styledSelect.text($this.children('option').eq(0).text());

                var $list = $('<ul />', {
                    'class': 'select-options'
                }).insertAfter($styledSelect);

                for (var i = 0; i < numberOfOptions; i++) {
                    $('<li />', {
                        text: $this.children('option').eq(i).text(),
                        rel: $this.children('option').eq(i).val()
                    }).appendTo($list);
                }

                var $listItems = $list.children('li');

                $styledSelect.click(function(e) {
                    e.stopPropagation();
                    $('div.select-styled.active').not(this).each(function(){
                        $(this).removeClass('active').next('ul.select-options').hide();
                    });
                    $(this).toggleClass('active').next('ul.select-options').toggle();
                });

                $listItems.click(function(e) {
                    e.stopPropagation();
                    $styledSelect.text($(this).text()).removeClass('active');
                    $this.val($(this).attr('rel'));
                    $list.hide();
                    console.log($this.val());
                    console.log($this.attr('id'));
                    
                    searchEvent($this.attr('id'),$this.val());
                });

                $(document).click(function() {
                    $styledSelect.removeClass('active');
                    $list.hide();
                });

            });
            
            var anio = false;
            var mes = false;
            var ea = "";
            var em = "";
            
            function searchEvent(element, value){
                
                if(element == "mounth"){
                    mes = true;
                    em = value;
                }else if(element == "year"){
                    anio = true;
                    ea = value;
                }
                
                if(anio & mes){
                    //alert(ea+" "+em);
                    window.location.href = "{{ URL::to('noticias') }}/"+em+"/"+ea;
                }
                
            }
            
            
        </script>
@endsection