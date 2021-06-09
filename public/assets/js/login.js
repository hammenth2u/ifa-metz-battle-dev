$('.loginForm').submit((event)=>{
    event.preventDefault();
    let mel = $('.loginEmail').val();
    let pass = $('.loginPassword').val();
    $.ajax({
        url:'/api/connect',
        method:'GET',
        data:{
            email: mel,
            password: pass
        },
        success: function(data){
            data = JSON.parse(data);
            if(data.message == 'ok'){
                let user = [];
                user['pseudo'] = data.pseudo;
                user['email'] = data.email;
                user['lastname'] = data.lastname;
                user['firstname'] = data.firstname;
                user['gender'] = data.gender;
                user['birthdate'] = data.birthdate;
                user['address'] = data.address;
                user['city'] = data.city;
                user['postalcode'] = data.postalcode;
                user['score'] = data.score;
                user['sharedfacebook'] = data.sharedfacebook;
                user['sharedtwitter'] = data.sharedtwitter;
                window.sessionStorage.setItem('user',user);
                window.location.href('/game');
                
            }
            else{
                alert('Identifiants incorrects');
            }
        }
        
    });
});