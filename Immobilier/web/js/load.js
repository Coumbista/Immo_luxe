$(document).ready(function(){
    
    $('.bien').on('click',function(){
        $("#contenu").load("{{ path('list')}}");
        
    });
    $('.localite').on('click',function(){
        $("#contenu").load("{{ path('Listlocalite')}}");
        
    });
    $('.type').on('click',function(){
        $("#contenu").load("{{ path('list')}}");
        
    });
    
    // contenu.html se trouve au même niveau dans l’arborescence.
    
            });