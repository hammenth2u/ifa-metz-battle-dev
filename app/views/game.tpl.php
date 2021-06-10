<?php $url ='http://localhost/ifa-metz-battle-dev/public'?>


<div id='app'>
    <div v-if="game === false && restart === false" class="button_start">
        <div>
            <h4> Choisissez votre direction de frappe pour essayer de tromper le gardien </h4>
            <p> Attention - La position du gardien sera défini aléatoirement par un algorithme </p>
        </div>
        <button class='start btn btn-primary btn-large-custom ' v-on:click="start(true)"> START </button>
    </div>
    <div v-if="game === false && restart === true" class="button_start">
        <button class='start btn btn-primary btn-large-custom ' v-on:click="restart_function(true)"> REESSAYER </button>
    </div>
    <div v-if='game'>
        <div class="bkgc">
            <div class="partie"> Nombre de parties jouées :  {{ nb_partie }} </div>
            <div class="win"> Nombre de parties gagnées : {{ nb_win }} </div>
            <div v-if="win" class="result">
                <img src="<?=$url?>/assets/img/win.png" class="win_img" alt="win image" />
            </div>
            <div v-if="lost" class="result">
                <img src="<?=$url?>/assets/img/lost.png" alt="lost image" />
            </div>
            <div class="ball_container" v-if="shoot">
                <div class="ball"> </div>
            </div>
            <div class="fleche" v-if="fleche">
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
    <div class="lien" v-if="link">
        <a href='https://fr.pngtree.com/so/posture-de-rebond'>posture de rebond png de fr.pngtree.com</a>
        <a href='https://fr.pngtree.com/so/bondir-la-balle'>bondir la balle png de fr.pngtree.com</a>
        <a href='https://fr.pngtree.com/so/bondir-la-balle'>bondir la balle png de fr.pngtree.com</a>
        <a href='https://fr.pngtree.com/so/posture-de-rebond'>posture de rebond png de fr.pngtree.com</a>
        <a href='https://fr.pngtree.com/so/posture-de-rebond'>posture de rebond png de fr.pngtree.com</a>
        <a href='https://fr.pngtree.com/so/clipart-de-football'>clipart de football png de fr.pngtree.com</a>
    </div>
</div>
<script src="<?=$url?>/assets/js/game.js"></script>