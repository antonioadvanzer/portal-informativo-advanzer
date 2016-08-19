var abc = 0; //Declaring and defining global increement variable
var ci = 0;

function chim(e){
        console.log(ci);
        var element = document.getElementById("file"+e);
        //alert(element.value);
        if (element.files && element.files[0]) {ci++;
                 abc += 1; //increementing global variable by 1
				
				var z = abc - 1;
                var x = $(element).parent().find('#previewimg' + z).remove();
                $("#plus").before("<div id='abcd"+ abc +"' class='abcd'><img id='previewimg" + abc + "' src=''/></div>");
               
			    var reader = new FileReader();
                reader.onload = imageIsLoaded;
                reader.readAsDataURL(element.files[0]);
               
			    $(element).hide();
                $("#plus").remove();
                $("#abcd"+ abc).append($("<img/>", {id: 'img', src: ("" + ($("#imgurl").val())), alt: 'delete'}).click(function() {
                $(element).parent().remove().remove();
                }));
            
                addInput();
            }
        //});
    }

// Add input element
    function addInput(){
        $('#add_more').before($("<div/>", {id: 'filediv'}).fadeIn('slow').append(
                $("<input/>", {name: 'file[]', type: 'file', id: 'file'+ci, onchange:'chim('+ci+')', class: 'file'}),
                $("<label id='plus' for='file"+ci+"'><img id='impl' src='"+("" + ($("#imgplus").val()))+"' ></label>"),
                $("<br/><br/>")
                ));
    }

//To preview image     
    function imageIsLoaded(e) {
        $('#previewimg' + abc).attr('src', e.target.result);
    };

$(document).ready(function() {

    //fist input to add image
   /* $('#add_more').before($("<div/>", {id: 'filediv'}).fadeIn('slow').append(
        $("<input/>", {name: 'file[]', type: 'file', id: 'file'+ci}),
        $("<label id='plus' for='file"+ci+"'><img id='impl' src='"+("" + ($("#imgplus").val()))+"' ></label>"),
        $("<br/><br/>")
    ));*/
    
//To add new input file field dynamically, on click of "Add More Files" button below function will be executed
    /*$('body').on('change', '#file'+ci, function(){
    //$('#add_more').click(function() {
        //ci++;
        $('#add_more').before($("<div/>", {id: 'filediv'}).fadeIn('slow').append(
                $("<input/>", {name: 'file[]', type: 'file', id: 'file'+ci, onchange:'chim('+ci+')'}),
                $("<label id='plus' for='file"+ci+"'><img id='impl' src='"+("" + ($("#imgplus").val()))+"' ></label>"),
                $("<br/><br/>")
                ));
    });*/

//following function will executes on change event of file input to select different file	
    /*$('body').on('change', '#file'+ci, function(){alert(ci);
        
        var element = $("#file"+e);
        
        if (element.files && element.files[0]) {
                 abc += 1; //increementing global variable by 1
				
				var z = abc - 1;
                var x = $(element).parent().find('#previewimg' + z).remove();
                $("#plus").before("<div id='abcd"+ abc +"' class='abcd'><img id='previewimg" + abc + "' src=''/></div>");
               
			    var reader = new FileReader();
                reader.onload = imageIsLoaded;
                reader.readAsDataURL(element.files[0]);
               
			    $(element).hide();
                $("#plus").remove();
                $("#abcd"+ abc).append($("<img/>", {id: 'img', src: ("" + ($("#imgurl").val())), alt: 'delete'}).click(function() {
                $(element).parent().parent().remove();
                }));
            }
        });*/

                  
//To preview image     
    /*function imageIsLoaded(e) {
        $('#previewimg' + abc).attr('src', e.target.result);
    };*/

    $('#upload').click(function(e) {
        var name = $(":file").val();
        if (!name)
        {
            alert("First Image Must Be Selected");
            e.preventDefault();
        }
    });
});