$('.registerForm').submit((event)=>{
    event.preventDefault();
    let birthdate= new Date($('#birthdate').val());
    if(Date.now().getFullYear-birthdate.getFullYear() < 18){
        alert('Désolés, mais ce jeu-concours est accessible uniquement aux personnes de plus de 18 ans.');
        window.location.href('/');
    }
    birthdate = birthdate.getFullYear()+'-'+birthdate.getMonth()+"-"+birthdate.getDay();
    

});