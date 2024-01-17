
function gererMenu(obj){
    var sousMenu  = document.getElementById("sousmenu");

    /*****************************************************/
    /** on cache tous les sous-menus pour n'afficher    **/
    /** que celui dont le menu correspondant est cliqué **/
    /** où 4 correspond au nombre de sous-menus         **/
    /*****************************************************/


    if(sousMenu){
        //alert(sousMenu.style.display);
        if(sousMenu.style.display === "block"){
            sousMenu.style.display = "none";
        }
        else{
            sousMenu.style.display = "block";
        }
    }
}

// function fermeMenu(obj){
//     var sousMenu  = document.getElementById("body");
//
//     /*****************************************************/
//     /** on cache tous les sous-menus pour n'afficher    **/
//     /** que celui dont le menu correspondant est cliqué **/
//     /** où 4 correspond au nombre de sous-menus         **/
//     /*****************************************************/
//
//
//     if(sousMenu){
//         //alert(sousMenu.style.display);
//         if(sousMenu.style.display === "block"){
//             sousMenu.style.display = "none";
//         }
//     }
// }



// <!--<div id="menu">-->
// <!--    <div class="menu" id="menu" onclick="gererMenu()" >-->
// <!--        <i class="fa-solid fa-bars" style="color: steelblue"></i>-->
// <!--    </div>-->
// <!--    <div class="sous-menu" id="sousmenu" style="display: none;" ">-->
// <!--            <a href="#bloc1" onclick="gererMenu()">Accueil</a>-->
// <!--            <a href="#bloc2" onclick="gererMenu()">Présentation</a>-->
// <!--            <a href="#bloc3" onclick="gererMenu()">Projets</a>-->
// <!--            <a href="#bloc4" onclick="gererMenu()">Veille technologique</a>-->
// <!--            <a href="#bloc5" onclick="gererMenu()">Passions</a>-->
// <!--            <a href="#bloc6" onclick="gererMenu()">Contact</a>-->
// <!--    </div>-->
// <!--</div>-->