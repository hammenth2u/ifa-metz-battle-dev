var app = new Vue({
    el: '#app',
    data: {
      nb_partie: 0,
      nb_win : 0 ,
      game : false,
      win : false , 
      lost : false,
    },
    methods: {
        choiceDirection(direction) {
            if (this.win || this.lost) {
                this.win = false 
                this.lost = false
            }
            this.nb_partie +=1
            var number = Math.floor(Math.random() * 3);
            if (number === 0 && direction === 'center'){
                this.nb_win +=1
                this.win = true
                setTimeout(() => this.win = false , 2000)
                
            }
            else if (number === 1 && direction ==='rigth'){
                this.nb_win +=1
                this.win = true
                setTimeout(() => this.win = false , 2000)

            }
            else if (number === 2 && direction ==='left') {
                this.nb_win +=1
                this.win = true
                setTimeout(() => this.win = false , 2000)

            } else {
                this.lost = true
                setTimeout(() => this.lost = false , 2000)
            }
        },
        start(value) {
            this.game = value
        }

    }
  })