var app = new Vue({
    el: '#app',
    data: {
      nb_partie: 0,
      nb_win : 0 ,
      game : false,
      win : false , 
      lost : false,
      number : '',
      shoot : false,
      goal : true,
      goal_left : false,
      goal_center : false , 
      goal_right : false , 
      goal_win : false,
      restart : false,
      fleche : true,
      link : false
    },
    methods: {
        choiceDirection(direction) {
            this.shoot = true
            this.fleche = false
            this.goal = false 
            this.link = true
            setTimeout(() => {
                if (this.win || this.lost) {
                    this.win = false 
                    this.lost = false
                }
                this.nb_partie +=1
                this.number = Math.floor(Math.random() * 3);
                if (this.number === 0 && direction === 'center'){
                    this.shoot = false
                    this.lost = true
                    this.goal_center = true
                    setTimeout(() => this.newPartie() , 2500)
                    
                }
                else if (this.number === 1 && direction ==='rigth'){
                    this.shoot = false
                    this.lost = true
                    this.goal_right = true
                    setTimeout(() => this.newPartie() , 2500)
    
                }
                else if (this.number === 2 && direction ==='left') {
                    this.shoot = false
                    this.lost = true
                    this.goal_left = true
                    setTimeout(() => this.newPartie(), 2500)
    
                }  else {
                    this.shoot = false
                    this.nb_win +=1
                    this.win = true
                    this.goal_win = true
                    setTimeout(() => this.newPartie(), 2500)
                }
            },
                1500)
        },
        start(value) {
            this.game = value
        },
        newPartie() {
            this.goal = true
            this.fleche = true
            this.link = false
            this.win = false 
            this.lost = false
            this.goal_center = false 
            this.goal_right = false 
            this.goal_left = false 
            this.goal_win = false 
            if (this.nb_partie === 5 && this.nb_win > 2) {
                window.location.href = '/ifa-metz-battle-dev/public/register'
            }
            if (this.nb_partie === 5 && this.nb_win < 3) {
                this.restart = true
                this.game = false 
            }
        },
        restart_function(value){
            this.restart = false
            window.location.href='/ifa-metz-battle-dev/public/game'
        }
    }
  })