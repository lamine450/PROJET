<div class="container">
    <div class="container-header">
        <div class="title">Login Forme</div>
    </div>
    <div class="container-body">                
        <form action="" method="post" id="form-connexion">
            <div class="input-form">
                <div class="icon-form icon-form-login"></div>
                <input type="text"class="form-control" error="error-1" name="" id="" placeholder="Login">
                <div class="error-form"id="error-1"></div>
            </div>

            <div class="input-form">
                <div class="icon-form icon-form-pwd"></div>
                <input type="password"class="form-control" error="error-2" name="" id="" placeholder="Password">
                <div class="error-form" id="error-2"></div>
            </div>

            <div class="input-form">
                <input button="submit"class="btn-form" name="" id="">connexion</button>
                <a href="" class="link-form">S'inscrire pour jouer</a>
            </div>

        </form>
    </div>
</div>
<script>
const inputs= documentElement.ByTagName("input");
for(input of  inputs){
   input.addAventListerner("keyup",function(e){
    if(e.target.hasAtribute("error")){
        var;idDiverror=input.getAtribute("error");
        document.getElementById(idDiverror).innerText="";
    }
   }
   ){

   } 
}


document.getElementById(form-connexion).addEventListerner("submit",function(e){
    const inputs= documentElement.ByTagName("input");
    var error=false
    for(input of inputs){
        if(input.hasAtribute("error")){
         var;idDiverror=input.getAtribute("error");
     if(!input value){
             document.getElementById(idDiverror).innerText="ce champ est obligatoire";
         }
        error=true 
     
     }  
    }
    if (error){

    }
    e.preventDefault();
    return false
    })




</script>