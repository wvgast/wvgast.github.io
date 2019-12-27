$(document).ready(() => {
    getJsonConfig();
});

function createCardPanelProjects(obj) {
    let div = document.createElement('div');
    $(div).addClass('col-3');
    let card = document.createElement('div');
    $(card).addClass('card');
    $(card).css('style', '18rem');
    let img = document.createElement('img');
    $(img).addClass('card-img-top');
    $(img).attr('src', obj.image);
    $(card).append(img);
    let cardBody = document.createElement('div');
    $(cardBody).addClass('card-body');
    let p = document.createElement('p');
    $(p).addClass('card-text');
    $(p).html(obj.message);
    $(cardBody).append(p);
    $(card).append(cardBody);
    $(div).append(card);
    // <img src="image/front-end/link-manager.PNG" class="card-img-top" alt="...">
    if (obj.slide) {
        $(div).addClass('pointer');
    }
    return div;
}

function getJsonConfig() {
    var xmlhttp = new XMLHttpRequest();
    xmlhttp.onreadystatechange = function() {
        if (this.readyState == 4 && this.status == 200) {
            var myObj = JSON.parse(this.responseText);
            myObj.projetos["front-end"].forEach(element => {
                $('#panelProjects .row').append(createCardPanelProjects(element));
            });

        }
    };
    xmlhttp.open("GET", "config/config.json", true);
    xmlhttp.send();
}