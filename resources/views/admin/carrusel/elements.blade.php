@extends('layouts.admin')

@section('content')
<meta name="_token" content="{!! csrf_token() !!}"/>
<div class="row">
    <div class="content-box-large">
  				<div class="panel-heading">
					<div class="panel-title">Elementos de Carrusel</div>
                    
				</div>
                <br><br>
  				<div class="cc">
                    <!--<a class="btn btn-success" href="{{ URL::to('advanzer-admin/nueva_noticia') }}">Nuevo</a><br><br>-->
                    
                    <h1 class="title"></h1>
                    {{--
                    <!--<section class="section-container">
                      <ul>
                        @foreach($elements as $e)
                        <li class="list-item">
                            <a class="removeItem" id="{{ $e->circular()->first()->id }}"><img width="30px" src="{{ URL::to('img/elementos/remove.png') }}"></a>
                            {{ $e->circular()->first()->getType()->first()->name ." - ". $e->circular()->first()->title }}
                        </li>
                        @endforeach
                      </ul>
                    </section>-->
                    --}}
                    <section id="sc" class="section-container-carrusel">
                        
                        {{-- @foreach($elements as $e)
                        <div id="{{ 'itli'.$e->location }}" class="list-item">
                            <div class="item-content">
                                <a class="removeItem" id="{{ $e->location }}"><img width="30px" src="{{ URL::to('img/elementos/remove.png') }}"></a>
                              <span class="order">{{$e->location}}</span> {{ $e->circular()->first()->getType()->first()->name ." - ". $e->circular()->first()->title }}
                            </div>
                        </div>
                         @endforeach --}}
                        
                      <!--<div class="list-item">
                        <div class="item-content">
                          <span class="order">1</span> Alpha
                        </div>
                      </div>

                      <div class="list-item">
                        <div class="item-content">
                          <span class="order">2</span> Bravo
                        </div>
                      </div>

                      <div class="list-item">
                        <div class="item-content">
                          <span class="order">3</span> Charlie
                        </div>
                      </div>

                      <div class="list-item">
                        <div class="item-content">
                          <span class="order">4</span> Delta
                        </div>
                      </div>-->

                    </section>
  					
  				</div><br><br><br>
                    <div>
                        <a id="save" class="btn btn-success" href="#">Guardar</a>
                        <a class="btn btn-primary" href="{{ URL::to('advanzer-admin') }}">Cancelar</a>
                    </div>
  			</div>
</div>

@endsection

@section('script')
<script src='https://cdnjs.cloudflare.com/ajax/libs/gsap/1.18.4/TweenMax.min.js'></script>
<script src='https://cdnjs.cloudflare.com/ajax/libs/gsap/1.18.4/utils/Draggable.min.js'></script>
<script>
    $(document).ready(function(){
        
        $.ajaxSetup({
            headers: { 'X-CSRF-Token' : $('meta[name=_token]').attr('content') }
        });
        
        refreshCarrusel();
        
        $("#save").click( function (event){        
            saveChanges();
        });
        
    });
    
    function refreshCarrusel(){
        x = "{{ URL::to('img/elementos/remove.png') }}";
        $.ajax({

            url: "{{ URL::to('advanzer-admin/get_elements_carrusel') }}",
            type: "GET",
            dataType: "json",
            processData: false,
            contentType: false

        }).done(function(data) {
            console.log(data);
            
            sc = "";
            
            for(i = 0; i < data.length; i++){
                sc += '<div id="itli'+data[i]['id']+'" class="list-item-c">'
                    + '<div class="item-content-c">'
                    + '<a class="removeItem" id="'+data[i]['id']+'"><img width="30px" src="'+x+'"></a>'
                    + '<span class="order">'+data[i]['location']+'</span> '+data[i]['name']+' - '+data[i]['title']+''
                    + '</div>'
                    + '</div>';
            }
            
            $('#sc').html(sc);
            
            $(".removeItem").click( function (event){        
                //window.location.href = urlE + '/' + this.id;
                //alert(this.id);
                $('#itli'+this.id).remove();
            });
            
            sortElements();
            
        }).fail(function(data) {
            console.log(data);
        });
        
    }
    
    function saveChanges(){
        
        var elements = new Array();
        
        $(".list-item-c").each( function() {
                    
            ide = $(this).find(".removeItem").attr('id');
            //alert(ide);
            elements.push(ide);
            
        });
        
        console.log(elements);
        
        $.ajax({
            url: '{{ URL::to("advanzer-admin/update_carrusel") }}',
            type: 'POST',
            data: {
                    _token: $('meta[name=_token]').attr('content'),
                    array: JSON.stringify(elements)
                    },
            //contentType: 'application/json; charset=utf-8',
            dataType: 'text',
            async: false,
            success: function(msg) {
                console.log(msg);
                refreshCarrusel();
                sortElements();
            }
        });
        
    }
    
</script>
<script>
    $("#carrusel").addClass("current");
    
    //var urlE = "{{ URL::to('advanzer-admin/cambiar_estado_elemento_carrusel') }}"
    
"use strict";

function sortElements(){
    this.rowSize = 100; // => container height / number of items
    this.container = document.querySelector(".section-container-carrusel");
    this.listItems = Array.from(document.querySelectorAll(".list-item-c")); // Array of elements
    this.sortables = listItems.map(Sortable); // Array of sortables
    this.total = sortables.length;

    TweenLite.to(container, 0.5, { autoAlpha: 1 });
}

var rowSize = null;
var container = null;
var listItems = null;
var sortables = null;
var total = null;
    
/*var rowSize = 100; // => container height / number of items
var container = document.querySelector(".section-container");
var listItems = Array.from(document.querySelectorAll(".list-item")); // Array of elements
var sortables = listItems.map(Sortable); // Array of sortables
var total = sortables.length;

TweenLite.to(container, 0.5, { autoAlpha: 1 });*/

function changeIndex(item, to) {

  // Change position in array
  arrayMove(sortables, item.index, to);

  // Change element's position in DOM. Not always necessary. Just showing how.
  if (to === total - 1) {
    container.appendChild(item.element);
  } else {
    var i = item.index > to ? to : to + 1;
    container.insertBefore(item.element, container.children[i]);
  }

  // Set index for each sortable
  sortables.forEach(function (sortable, index) {
    return sortable.setIndex(index);
  });
}

function Sortable(element, index) {

  var content = element.querySelector(".item-content-c");
  var order = element.querySelector(".order");

  var animation = TweenLite.to(content, 0.3, {
    boxShadow: "rgba(0,0,0,0.2) 0px 16px 32px 0px",
    force3D: true,
    scale: 1.1,
    paused: true
  });

  var dragger = new Draggable(element, {
    onDragStart: downAction,
    onRelease: upAction,
    onDrag: dragAction,
    cursor: "inherit",
    type: "y"
  });

  // Public properties and methods
  var sortable = {
    dragger: dragger,
    element: element,
    index: index,
    setIndex: setIndex
  };

  TweenLite.set(element, { y: index * rowSize });

  function setIndex(index) {

    sortable.index = index;
    order.textContent = index + 1;

    // Don't layout if you're dragging
    if (!dragger.isDragging) layout();
  }

  function downAction() {
    animation.play();
    this.update();
  }

  function dragAction() {

    // Calculate the current index based on element's position
    var index = clamp(Math.round(this.y / rowSize), 0, total - 1);

    if (index !== sortable.index) {
      changeIndex(sortable, index);
    }
  }

  function upAction() {
    animation.reverse();
    layout();
  }

  function layout() {
    TweenLite.to(element, 0.3, { y: sortable.index * rowSize });
  }

  return sortable;
}

// Changes an elements's position in array
function arrayMove(array, from, to) {
  array.splice(to, 0, array.splice(from, 1)[0]);
}

// Clamps a value to a min/max
function clamp(value, a, b) {
  return value < a ? a : value > b ? b : value;
}
    
</script>
    
        
@endsection