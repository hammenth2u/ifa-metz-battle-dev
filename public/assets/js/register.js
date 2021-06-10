$('.registerForm').submit((event)=>{
    event.preventDefault();
    let birthdate= new Date($('#birthdate').val());
    if(new Date().getFullYear()-birthdate.getFullYear() < 18){
        alert('Désolés, mais ce jeu-concours est accessible uniquement aux personnes de plus de 18 ans.');
        window.location.href = "/";
    }
    birthdate = birthdate.getFullYear()+'-'+(birthdate.getMonth()+1)+"-"+birthdate.getDate();
    let pseudo = $('#pseudo').val();
    let lastname = $('#lastname').val();
    let firstname = $('#firstname').val();
    let email = $('#email').val();
    let address = $('#address').val();
    let postalcode = $('#postalcode').val();
    let city = $('#city').val();
    let gender = $("input:radio[name ='radio-input']:checked").val();
    let password = $('#password').val();
    let score = $('#score').val();
    $.ajax({
        url:'/api/player',
        method:'POST',
        data:{
            email: email,
            password: password,
            pseudo: pseudo,
            birthdate: birthdate,
            firstname: firstname,
            lastname: lastname,
            address: address,
            postalcode: postalcode,
            city: city,
            gender: gender,
            score: score
        },
        success: function(data){
            data = JSON.parse(data);
            if(data.message == 'ok'){
                let user = {};
                user['pseudo'] = pseudo;
                user['email'] = email;
                user['lastname'] = lastname;
                user['firstname'] = firstname;
                user['gender'] = gender;
                user['birthdate'] = birthdate;
                user['address'] = address;
                user['city'] = city;
                user['postalcode'] = postalcode;
                user['score'] = score;
                user['sharedfacebook'] = 0;
                user['sharedtwitter'] = 0;
                window.sessionStorage.setItem('user',JSON.stringify(user));
                window.location.href ='/game';
                
            }
            else{
                alert('Erreur lors de la création du profil');
            }
        }
        
    });

});