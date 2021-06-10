function getGenderHomme() {
    $.ajax({
        url: '/ifa-metz-battle-dev/public/api/genders/homme',
        method: 'GET',
        success: function(data) {
            data = JSON.parse(data);

        }
    });
}

function getGenderFemme() {
    $.ajax({
        url: '/ifa-metz-battle-dev/public/api/genders/femme',
        method: 'GET',
        success: function(data) {
            data = JSON.parse(data);

        }
    });
}

function getGenderAutre() {
    $.ajax({
        url: '/ifa-metz-battle-dev/public/api/genders/autre',
        method: 'GET',
        success: function(data) {
            data = JSON.parse(data);

        }
    });
}