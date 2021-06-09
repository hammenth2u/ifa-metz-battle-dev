<?php $url ='http://localhost/ifa-metz-battle-dev/public'?>


<div id='app'>
    <div v-if="game === false" class="button_start">
        <button class='start btn btn-primary ' v-on:click="start(true)"> START </button>
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
            <div class="ball_container" v-if="shoot">
                <img class="ball" src="<?=$url?>/assets/img/ball.png" alt="ballon" />
            </div>
            <div class="fleche">
                <img class="fleche_item" src="<?=$url?>/assets/img/left.png" alt='fleche gauche' v-on:click="choiceDirection('left')" />   
                <img class="fleche_item" src="<?=$url?>/assets/img/center.png" alt='fleche central' v-on:click="choiceDirection('center')" />   
                <img class="fleche_item" src="<?=$url?>/assets/img/right.png" alt='fleche droite' v-on:click="choiceDirection('rigth')" />
            </div>

            <div class="container_goal">
                <div class="goal"> <img class="goal_img" src="<?=$url?>/assets/img/goal.png"/> </div>
            </div>
        </div>
    </div>
</div>
<script src="<?=$url?>/assets/js/game.js"></script>