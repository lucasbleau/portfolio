
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
