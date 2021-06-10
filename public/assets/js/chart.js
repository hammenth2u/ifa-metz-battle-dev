var app = new Vue({
    el: '#charts',
    data: {
     women : 20, 
     men : 40 , 
     other : 6,
     firstAge : 25,
     secondAge : 37,
     thridAge : 45,
     abscisseGender : ['Femme' , 'Homme' , 'Autres'],
     abscisseAge : ['18-30' , '30-50', '50, +'],
     women_style : {
        height : 20+'%',
        border : '1px dashed green', 
        backgroundColor : 'blue',
        width : '15%',
        padding : '1%'
     },
    men_style : {
        height : 40+'%',
        border : '1px dashed green', 
        backgroundColor : 'green',
        width : '15%',
        padding : '1%'
     },
    other_style : {
        height : 6+'%',
        border : '1px dashed green', 
        backgroundColor : 'purple',
        width : '15%',
        padding : '1%'
     },
     firstAge_style : {
        height : 25+'%',
        border : '1px dashed green', 
        backgroundColor : 'blue',
        width : '15%',
        padding : '1%'
     },
    secondAge_style : {
        height : 37+'%',
        border : '1px dashed green', 
        backgroundColor : 'green',
        width : '15%',
        padding : '1%'
     },
    thridAge_style : {
        height : 45+'%',
        border : '1px dashed green', 
        backgroundColor : 'purple',
        width : '15%',
        padding : '1%'
     }
    },
    async mounted() {
        try {
            /* this.women = await fetch('http://localhost/ifa-metz-battle-dev/api/genders/femme')
            this.men = await fetch('http://localhost/ifa-metz-battle-dev/api/genders/homme')
            this.other = await fetch('http://localhost/ifa-metz-battle-dev/api/genders/autre')
            this.firstAge = await fetch('http://localhost/ifa-metz-battle-dev/api/ages?lower=18&upper=30')
            this.secondAge = await fetch('http://localhost/ifa-metz-battle-dev/api/ages?lower=30&upper=50')
            this.thridAge = await fetch('http://localhost/ifa-metz-battle-dev/api/ages?lower=50&upper=120') */
        } catch (error) {
            console.log(error)
        }
    },
  })