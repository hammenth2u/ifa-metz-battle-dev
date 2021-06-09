

<div id='app'>
    <div class="bkgc">
        <div class="partie"> Nombre de parties jouées :  {{ nb_partie }} </div>
        <div class="win"> Nombre de parties gagnées : {{ nb_win }} </div>
        <div class="fleche">
            <button type="button" class="btn btn-success btn-lg" v-on:click="choiceDirection('left')"> &larr; </button>
            <button type="button" class="btn btn-success btn-lg" v-on:click="choiceDirection('center')"> &uarr; </button>
            <button type="button" class="btn btn-success btn-lg" v-on:click="choiceDirection('rigth')"> &rarr; </button>
        </div>

        <div class="container_goal">
            <div class="goal"></div>
        </div>
    </div>
</div>