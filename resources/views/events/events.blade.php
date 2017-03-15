@extends('layouts.main')

@section('content')
<!-- Page Title -->
        <div class="page-title-container">
            <div class="container">
                <div class="row">
                    <div class="col-sm-12 wow fadeIn">
                        <i class="fa fa-calendar-o"></i>
                        <h1>Historial de Eventos</h1>
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
	            		<p>&Aacute;lbumes:</p>
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
		                
                        
                    
                        <div class="wrapper">
                          <div class="wrapper_inner">
                            <!-- Gallery -->
                            <section class="gallery">
                              
                                
                            @foreach($events as $e)
                                
                                <!-- Gallery  item -->
                                  <div class="gallery_item">
                                    <!-- Gallery  item preview -->
                                    <span class="gallery_item_preview">
                                      <a href="{{ URL::to('historial_de_eventos/ver_album/'.$e->id) }}" data-js="1">

                                        <svg fill="" class="gallery_top" viewbox="0 3 60 20">
                                          <path d="M 0.65359477,1.3817905 C 60.201925,8.44316 121.92863,11.583451 175.81699,28.832771 l 0.6536,-28.10457531 z"></path>
                                        </svg>

                                        <img src="{{URL::to($e->getImages->first()['path'])}}" alt="" /><span>
                                        <h4>{{ (strlen($t = $e->title) > 27) ? substr($t,0,27)."..." : $t}}</h4>
                                        <p>{{ (strlen($t = $e->summary) > 27) ? substr($t,0,27)."..." : $t}}</p>

                                        </span>
                                      </a>

                                    </span>
                                    <!-- Gallery  item full -->
                                    <!--<div data-lk="1" class="gallery_item_full">
                                      <div class="box">
                                        <img src="http://25.media.tumblr.com/1adc4029ef3a31124f222add70fa3553/tumblr_n2k1499dIp1st5lhmo1_1280.jpg" alt="" />
                                        <h3>Example image</h3>
                                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Inventore rem minima saepe itaque animi fuga consequuntur. Praesentium dolorum neque autem nihil nobis quam animi ullam eos tempora quia eius aliquid?</p>
                                      </div>
                                    </div>-->
                                  </div>
                                
                            @endforeach

                            </section>
                          </div>
                        </div>
                    
                    
                        <div id="pag">
		                {{ $events->links() }}
                        </div>
	            </div>
	        </div>
        </div>
@endsection

@section('script')
        <script>
            $("#publications").addClass("active");
            
            var gallery = (function(){

              'use strict';

              // vars
              var gal_item = $('.gallery_item'),
                  gal_img = $('.gallery_item_preview a img'),
                  gal_full = $('.gallery_item_full'),
                  gal_box = $('.box'),
                  gal_top =  $('.gallery_top');
                
              return {
                // this.js(obj)
                js: function(e){return $("[data-js="+e+"]");},
                // this.lk(obj)
                lk: function(e){return $("[data-lk="+e+"]");},
                // Ready functions
                ready_: function(){this.events();},
                //  functions
                events:function(){
                  var self = this;
                  // add close link
                  gal_full.append('<a href="#" data-js="cl" class="cl">X</a>');
                  // Get all data js and add clickOn function
                  var k = $('a[data-js]');
                  k.each(function(i, v){
                    i = i+1;
                    self.clickOn(i);
                  });
                  // close on click
                  self.js('cl').on("click",function(e){
                    e.preventDefault();
                    self.fx_out(gal_full);
                    self.fx_out(gal_box);
                  });

                  // list style
                  self.js('list').on("click",function(e){
                    e.preventDefault();
                    // toggle class
                    gal_item.toggleClass('gallery_item_list');
                    gal_img.toggleClass('gallery_line');


                    // change icon style
                    if(gal_item.hasClass('gallery_item_list')){
                      $(this).addClass('icon_list_open')
                      .html('<span>•••</span>'+
                            '<span>•••</span>'+
                            '<span>•••</span>');
                      gal_top.attr("class", "gallery_top gallery_hide_top");
                    }else{
                      $(this).removeClass('icon_list_open')
                      .html('<span>• -</span>'+
                            '<span>• -</span>'+
                            '<span>• -</span>');
                      gal_top.attr("class", "gallery_top");
                    }
                  });
                },
                // Show on click
                clickOn: function(i){
                  var self = this;
                  this.js(i).on('click',function(e){
                    /*e.preventDefault();
                    self.fx_in(self.lk(i)); 
                    self.fx_in(gal_box);*/
                  });
                }, 
                // out function
                fx_out: function(el){
                  el.addClass('efOut')
                  .delay(500)
                  .fadeOut('fast')
                  .removeClass('efIn');
                  // show scroll
                  $('body').css({overflow:'auto'});
                  return false;
                }, 
                // in function
                fx_in: function(el){
                  el.removeClass('efOut')
                  .show(200)
                  .addClass('efIn');
                  // hide scroll
                  $('body').css({overflow:'hidden'});
                  return false;
                }
              };
            })();
            // ready function of gallery
            gallery.ready_();
            
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
            
            $('.gallery_top').each(function(){
                $(this).attr('fill','#' + ("000000" + Math.random().toString(16).slice(2, 8).toUpperCase()).slice(-6));
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
                    window.location.href = "{{ URL::to('historial_de_eventos') }}/"+em+"/"+ea;
                }
                
            }
            
        </script>
@endsection