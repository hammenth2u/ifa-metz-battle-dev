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