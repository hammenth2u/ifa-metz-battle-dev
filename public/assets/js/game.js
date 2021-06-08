var app = new Vue({
    el: '#app',
    data: {
      nb_partie: 0,
      nb_win : 0 
    },
    methods: {
        choiceDirection(direction) {
            this.nb_partie +=1
            var number = Math.floor(Math.random() * 3);
            if (number === 0 && direction === 'center'){
                console.log('gagner')
                this.nb_win +=1
            }
            else if (number === 1 && direction ==='rigth'){
                console.log('gagner')
                this.nb_win +=1
            }
            else if (number === 2 && direction ==='left') {
                console.log('gagner')
                this.nb_win +=1
            } else {
                console.log('perdu')
            }
        }
    }
  })