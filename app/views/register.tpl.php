<style>
.form-style input{
	border:0;
	height:50px;
	border-radius:0;
    border-bottom:1px solid #ebebeb;	
}
.form-style input:focus{
    border-bottom:1px solid #007bff;	
    box-shadow:none;
    outline:0;
    background-color:#c9ccd1;	
}
.sideline {
    display: flex;
    width: 100%;
    justify-content: center;
    align-items: center;
    text-align: center;
	color:#ccc;
}
button{
    height:50px;	
}
.sideline:before,
.sideline:after {
    content: '';
    border-top: 1px solid #ebebeb;
    margin: 0 20px 0 0;
    flex: 1 0 20px;
}

.sideline:after {
    margin: 0 0 0 20px;
}
</style>


<script src="https://use.fontawesome.com/f59bcd8580.js"></script>
<div class="container">
<div class="row m-5 no-gutters shadow-lg">

<div class="col-md-12 bg-white p-5">
<h3 class="pb-3">Veuillez vous inscrire pour tenter de gagnez un prix</h3>
<div class="form-style">
<form class="registerForm">
  <div class="form-group pb-3">    
    <label>Pseudo: </label> 
    <input type="text" placeholder="Pseudo" class="form-control registerPseudo" id="pseudo" name="pseudo" >   
  </div>
  <div class="form-group pb-3">   
    <label>Nom :</label>  
    <input type="text" placeholder="Nom" class="form-control registerLastname" id="lastname" name="lastname"  >   
  </div>
  <div class="form-group pb-3"> 
    <label>Prénom :</label>    
    <input type="text" placeholder="Prénom" class="form-control registerFirstname" id="firstname" name="firstname" >   
  </div>
  <div class="form-group pb-3">    
    <label>Email :</label>   
    <input type="email" placeholder="Email" class="form-control registerEmail" id="email" name="email" aria-describedby="emailHelp" >   
  </div>
  <div class="form-group pb-3"> 
    <label>Date de naissance :</label>   
    <input type="date" placeholder="" class="form-control registerBirthdate" id="birthdate" name="birthdate" >   
  </div>
  <div class="form-group pb-3">    
    <label>Adresse :</label>   
    <input type="text" placeholder="Adresse" class="form-control registerAddress" id="address" name="address" >   
  </div>
  <div class="form-group pb-3">    
    <label>Code postal :</label>   
    <input type="text" placeholder="Code postal" class="form-control registerPostalcode" id="postalcode" name="postalcode"  >   
  </div>
  <div class="form-group pb-3">    
    <label>Ville :</label>   
    <input type="text" placeholder="Ville" class="form-control registerCity" id="city" name="city" >   
  </div>
  <div class="form-grouppb-3">
            <div class="radio">
                <label>
      <input type="radio" name="radio-input" checked="checked" value="Femme"> Femme
      <span class="checkmark"></span>
      </label>
            </div>
        </div>
        <div class="form-group pb-3">
            <div class="radio">
                <label>
      <input type="radio" name="radio-input" value="Homme"> Homme
      <span class="checkmark"></span>
      </label>
            </div>
        </div>
        <div class="form-group pb-3">
            <div class="radio">
                <label>
      <input type="radio" name="radio-input" value="Autre"> Autre
      <span class="checkmark"></span>
      </label>
            </div>
        </div>

  <div class="form-group pb-3">   
    <label>Mot de passe :</label> 
    <input type="password" placeholder="Mot de passe" class="form-control registerPassword" id="password" name="password" >
  </div>
  <div class="d-flex align-items-center justify-content-between">
</div>
   <div class="pb-2">
  <button type="submit" class="btn btn-dark w-100 font-weight-bold mt-2">Inscription</button>
   </div>
</form>
  <div class="pt-4 text-center">
  Vous avez déjà un compte ? <a href="<?=$url?>">Se connecter</a>
  </div>
</div>

</div>
</div>
</div>