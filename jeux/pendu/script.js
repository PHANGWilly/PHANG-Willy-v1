var motSecret;
var now = new Date();
var tableauMot=new Array();
var mots = new Array()
var tailleMot;
var coupsManques = 0;
var lettresTrouvees = 0;
var fini = false;

mots[0]="TITANESQUE";
mots[1]="ANABELLE";
mots[2]="POMPIER";
mots[3]="OBELISQUE";
mots[4]="PLACARD";
mots[5]="RADIATEUR";
mots[6]="DEODORANT";
mots[7]="CAMION";
mots[8]="HORLOGE";
mots[9]="MARGUERITE";
mots[10]="ELEPHANT";
mots[11]="IGLOO";
mots[12]="NAVIRE";

motSecret=mots[now.getSeconds() % mots.length]; //mot à trouver en fonction de la seconde (hh/mm/ss) 
tailleMot=motSecret.length; 

function changeCouleur(element,couleur){
    element.style.backgroundColor=couleur;
}


//quand on click sur une lettre (on click propose (cf index.html))
function propose(element){
    //changement de couleur du lettres cochées
    if(element.style.backgroundColor=="rgb(165, 49, 49)" ||fini) return;

    var lettre=element.innerHTML;
    changeCouleur(element,"rgb(165, 49, 49)");

    var trouve=false; 

    for(var i=0; i<tailleMot; i++) {
    
        if(tableauMot[i].innerHTML==lettre) {
            tableauMot[i].style.visibility='visible';
            trouve=true;
            lettresTrouvees++;
        }
    
    }

    //
    if(!trouve){
        coupsManques++;
        //changement d'image en fonction des coups ratés
        document.images['pendu'].src="images/pendu_"+coupsManques+".jpg"; 
        //a 9 essais ratés la partie est perdu
        if(coupsManques==9){
            alert("Vous avez perdu !"); //alterte si on a perdu
            for(var i=0; i<tailleMot; i++) tableauMot[i].style.visibility='visible';
            fini=true;
        }
    }

    //si les lettres correspondent à la taille du mot chosi = gagné
    if(lettresTrouvees==tailleMot){  
        alert("Bravo ! Vous avez découvert le mot secret !"); //alerte si on a gagné
        fini=true;
    }
}