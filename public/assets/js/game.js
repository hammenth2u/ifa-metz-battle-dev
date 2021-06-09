var app = new Vue({
    el: '#app',
    data: {
      nb_partie: 0,
      nb_win : 0 ,
      game : false,
      win : false , 
      lost : false,
      number : '',
      shoot : false
    },
    methods: {
        choiceDirection(direction) {
            this.shoot = true 

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
                    setTimeout(() => this.lost = false , 2000)
                    
                }
                else if (this.number === 1 && direction ==='rigth'){
                    this.lost = true
                    this.shoot = false
                    setTimeout(() => this.lost = false , 2000)
    
                }
                else if (this.number === 2 && direction ==='left') {
                    this.lost = true
                    this.shoot = false
                    setTimeout(() => this.lost = false , 2000)
    
                } else {
                    this.nb_win +=1
                    this.win = true
                    this.shoot = false
                    setTimeout(() => this.win = false , 2000)
                }
            },
                2000)
            
            
        },
        start(value) {
            this.game = value
        }

    }
  })