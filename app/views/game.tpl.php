<div id='app'>
    <div class="bkgc"></div>
    <div class="partie"> Nombre de partie joué :  {{ nb_partie }} </div> 
    <div class="win"> Nombre de partie gagné : {{ nb_win }} </div>
    <div class="fleche">
        <button type="button" v-on:click="choiceDirection('left')"> Gauche </button>
        <button type="button" v-on:click="choiceDirection('center')"> Centre </button>
        <button type="button" v-on:click="choiceDirection('rigth')"> Droite </button>
    </div>
    <div class="container_goal">
        <div class="goal"></div>
    </div>
</div>


<div class="container mt-5">
        <!-- Button trigger modal -->
<button type="button" class="btn btn-outline-success btn-lg float-right" data-toggle="modal" data-target="#exampleModal">
    Open Modal
  </button>
  
  <!-- Modal -->
  <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h4 class="modal-title" id="exampleModalLabel">Login</h4>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
            <form>
                <div class="form-group">
                    <label>Pseudo</label>
                    <input type="text" class="form-control" placeholder="Pseudo" name="pseudo">
                    <label>Nom</label>
                    <input type="text" class="form-control" placeholder="Nom" name="lastname">
                    <label>Prénom</label>
                    <input type="text" class="form-control" placeholder="Prénom" name="firstname">
                    <label>Email</label>
                    <input type="email" class="form-control" placeholder="Email" name="email">
                    <label>Date d'anniversaire</label>
                    <input type="date" class="form-control"  name="birthdate">
                    <input type="text" class="form-control" placeholder="Adresse" name="address">
                    <label>Adresse</label>
                    <input type="text" class="form-control" placeholder="Code Postal" name="postalcode">
                    <label>Code Postal</label>
                    <input type="text" class="form-control" placeholder="Ville" name="city">
                    <label>Ville</label>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault1">
                        <label class="form-check-label" for="flexRadioDefault1">
                            Femme
                        </label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault2" checked>
                        <label class="form-check-label" for="flexRadioDefault2">
                            Homme
                        </label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault2" checked>
                        <label class="form-check-label" for="flexRadioDefault2">
                            Autre
                        </label>
                    </div>

                </div>
            </form>
        </div>
        <div class="modal-footer">
            <button type="button" class="btn btn-success">Login</button>
          <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
        </div>
      </div>
    </div>
  </div>
    
</div>