<?php $url ='http://localhost/ifa-metz-battle-dev/public'?>


<div id='app'>
    <div v-if="game === false" class="button_start">
        <button class='btn btn-primary' v-on:click="start(true)"> START </button>
    </div>
    <div v-if='game'>
        <div class="bkgc">
            <div class="partie"> Nombre de parties jouées :  {{ nb_partie }} </div>
            <div class="win"> Nombre de parties gagnées : {{ nb_win }} </div>
            <div v-if="win" class="result">
                <img src="<?=$url?>/assets/img/win.png" alt="win image" />
            </div>
            <div v-if="lost" class="result">
                <img src="<?=$url?>/assets/img/lost.png" alt="lost image" />
            </div>
            <div class="fleche">
                <button type="button" class="btn btn-success btn-lg" v-on:click="choiceDirection('left')"> &larr; </button>
                <button type="button" class="btn btn-success btn-lg" v-on:click="choiceDirection('center')"> &uarr; </button>
                <button type="button" class="btn btn-success btn-lg" v-on:click="choiceDirection('rigth')"> &rarr; </button>
            </div>

            <div class="container_goal">
                <div class="goal"> <img class="goal_img" src="<?=$url?>/assets/img/goal.png"/> </div>
            </div>
        </div>
    </div>
</div>