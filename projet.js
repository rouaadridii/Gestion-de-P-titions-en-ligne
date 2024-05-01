/*----------INSCRIPTION----------*/
function verif(){

       var nom = document.getElementById("nom").value;
       var pn = document.getElementById("pn").value;
       var mdp = document.getElementById("mdp").value;
       var mdp2 = document.getElementById("mdp2").value;
       var em = document.getElementById("email").value;
       var erreur;

      if (mdp!=mdp2){
          erreur="Confirmation de mot de passe incorrecte";
       }
       if (mdp.length<4){
        erreur="longeur minimale du mot de passe est de 4 caractéres";
       }
       if (mdp==""){
          erreur="Veillez renseignez un mot de passe";
       }
       if (em==""){
          erreur="Veillez renseignez un email";
       }
       if(document.getElementById("prof").checked==false && document.getElementById("etud").checked==false && document.getElementById("admin").checked==false){
          erreur="Veillez cocher votre profession";
       }
       if (pn==""){
          erreur="Veillez renseignez votre prénom";
       }              
       if (nom==""){
          erreur="Veillez renseignez votre nom";
       }

       if (erreur) {
       	document.getElementById("erreur").innerHTML=erreur;	
        
        return false;
       }      
}

function verif2(){

       var mdp = document.getElementById("mdp2").value;
       var confirm_mdp = document.getElementById("mdp3").value;
       var erreur;

       if (mdp!=confirm_mdp){
          erreur="Confirmation de mot de passe incorrecte";
       }
       if (mdp.length<4){
        erreur="longeur minimale du mot de passe est de 4 caractéres";
       }
       if (mdp==""){
          erreur="Veillez renseignez un mot de passe";
       }

       if (erreur) {
        document.getElementById("erreur").innerHTML=erreur; 
        
        return false;
       } 
}

function verif3(){

       var titre_pet = document.getElementById("titre").value;
       var des = document.getElementById('des').value;
       var erreur;

       if (des==""){
          erreur="Veillez renseignez une descreption";
       }
       if (titre_pet==""){
          erreur="Veillez renseignez un titre";
       }

       if (erreur) {
        document.getElementById("erreur").innerHTML=erreur; 
        
        return false;
       } 
}