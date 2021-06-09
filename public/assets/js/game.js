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
      restart : false
    },
    methods: {
        choiceDirection(direction) {
            if (this.nb_partie === 5 && this.nb_win > 2) {
                window.location.href = '/register'
            }
            this.shoot = true
            this.goal = false 
            setTimeout(() => {
                if (this.win || this.lost) {
                    this.win = false 
                    this.lost = false
                }
                this.nb_partie +=1
                this.number = Math.floor(Math.random() * 3);
                if (this.number === 0 && direction === 'center'){
                    this.lost = true
                    this.shoot = false
                    this.goal_center = true
                    setTimeout(() => this.newPartie() , 2000)
                    
                }
                else if (this.number === 1 && direction ==='rigth'){
                    this.lost = true
                    this.shoot = false
                    this.goal_right = true
                    setTimeout(() => this.newPartie() , 2000)
    
                }
                else if (this.number === 2 && direction ==='left') {
                    this.lost = true
                    this.shoot = false
                    this.goal_left = true
                    setTimeout(() => this.newPartie(), 2000)
    
                }  else {
                    this.nb_win +=1
                    this.win = true
                    this.shoot = false
                    this.goal_win = true
                    setTimeout(() => this.newPartie(), 2000)
                }
            },
                1000)
            
            
        },
        start(value) {
            this.game = value
        },
        newPartie() {
            this.goal = true
            this.win = false 
            this.lost = false
            this.goal_center = false 
            this.goal_right = false 
            this.goal_left = false 
            this.goal_win = false 
            if (this.nb_partie === 5 && this.nb_win > 4) {
                window.location.href = '/register'
            }
            if (this.nb_partie === 5 && this.nb_win < 4) {
                this.restart = true
                this.game = false 
            }
        },
        restart_function(value){
            this.restart = false
            window.location.href='/game'
        }
    }
  })