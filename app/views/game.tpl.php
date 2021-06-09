<?php $url ='http://localhost/ifa-metz-battle-dev/public'?>


<div id='app'>
    <div v-if="game === false && restart === false" class="button_start">
        <button class='start btn btn-primary ' v-on:click="start(true)"> START </button>
    </div>
    <div v-if="game === false && restart === true" class="button_start">
        <button class='start btn btn-primary ' v-on:click="restart_function(true)"> Re-essayer </button>
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
                <div class="goal"> 
                    <img class="goal_img" v-if="goal" src="<?=$url?>/assets/img/goal.png"/> </div>
                    <img class="goal_left" v-if="goal_left" src="<?=$url?>/assets/img/goal_left.png"/>
                    <img class="goal_center" v-if="goal_center" src="<?=$url?>/assets/img/goal_center.png"/>
                    <img class="goal_right" v-if="goal_right" src="<?=$url?>/assets/img/goal_right.png"/>
                    <img class="goal_win" v-if="goal_win" src="<?=$url?>/assets/img/goal_win.png"/>
            </div>
        </div>
    </div>
</div>
<script src="<?=$url?>/assets/js/game.js"></script>