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
<div class="col-md-6 d-none d-md-block">
<img src="https://images.unsplash.com/photo-1566888596782-c7f41cc184c5?ixlib=rb-1.2.1&auto=format&fit=crop&w=2134&q=80" class="img-fluid" style="min-height:100%;" />
</div>
<div class="col-md-6 bg-white p-5">
<h3 class="pb-3">Veuillez vous connecter</h3>
<div class="form-style">
<form class="loginForm">
  <div class="form-group pb-3">    
    <input type="email" placeholder="Email" class="form-control loginEmail" id="exampleInputEmail1" aria-describedby="emailHelp" name='email'>   
  </div>
  <div class="form-group pb-3">   
    <input type="password" placeholder="Mot de passe" class="form-control loginPassword" id="exampleInputPassword1" name="password">
  </div>
  <div class="d-flex align-items-center justify-content-between">
<div><a href="#">Mot de passe oublié?</a></div>
</div>
   <div class="pb-2">
  <button type="submit" class="btn btn-dark w-100 font-weight-bold mt-2">Connexion</button>
   </div>
</form>
  <div class="pt-4 text-center">
  Création d'un compte. <a href="#">S'inscrire</a>
  </div>
</div>

</div>
</div>
</div>