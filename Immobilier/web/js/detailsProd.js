//Affichage des details liés à un produit
alert("bon");
$(".details").on("click",function(){
    var id = $(this).data("id");
    //alert(id);
    $.ajax({
        url:"detailsProd.php?IdSousCat="+id,
        type:"GET",
        dataType:"json",
        success:function(data){
            $(".infotab").html("");
                $("#tabs-1").append("<p>Nom catégories : "+data.nomCategorie+"</p>"+"<p>Nombre de sous catégories: "+data.nombreSousCategorie+"</p>");
                $("#tabs-2").append("<p>Nom sous caégorie : "+data.nomSousCategorie+"</p>"+"<p>Nombre de produit: "+data.nombredeproduits+"</p>");
            
            },
            error: function(res, status, erreur){
               alert(erreur);
            },
            complete:function(){
    
            }
     });
