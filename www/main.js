is_waiting_response = false;
old_resp = "";

function reload(){
    sec = document.getElementsByClassName('mdl-components__page')
    for (i= 0;i < sec.length;i++){
        sec[i].classList.remove("is-active")
    }
    act = document.getElementById(document.location.href.split("#")[1])

    if (act == null)
        act = sec[0]

    act.classList.add("is-active")
    document.getElementsByClassName("mdl-layout-title")[0].innerHTML = act.getAttribute("name")
}

function download_lab(elemID){
    selected = document.getElementById(elemID).getElementsByClassName("is-selected")
    for (i= 0; i < selected.length;i++){
        window.open(
            selected[i].getElementsByClassName("mdl-data-table__cell--non-numeric")[0].getAttribute(
                "href"
            ), '_blank'
        );
    }
}

function addComment(index){
    var isOkay = true;

    adding_author.value = adding_author.value.trim();
    adding_comment.value = adding_comment.value.trim();

    adding_author_div.classList.remove("is-invalid");
    adding_comment_div.classList.remove("is-invalid");

    if (index != 0 && index != 1) {
        return;
    }

    if (is_waiting_response)
        return;


    if (adding_author.value.length == 0) {
        adding_author_div.classList.add("is-invalid");
        isOkay = false;
    }
    if (adding_comment.value.length == 0) {
        adding_comment_div.classList.add("is-invalid");
        isOkay = false;
    }

    if (!isOkay) {
        showMessage("Заполните все поля");
        return;
    }


    is_waiting_response = true;

    var formData = new FormData ();

    formData.append("category", encodeURIComponent(index));
    formData.append("name", encodeURIComponent(adding_author.value));
    formData.append("comment", encodeURIComponent(adding_comment.value));

    var xhr = new XMLHttpRequest ()

    xhr.open('POST', '/scripts/add_comment.php', true)

    xhr.send(formData)

    xhr.onreadystatechange = function() {
        if (xhr.readyState != 4) return;

        if (xhr.status == 0) {
            showMessage("Пропало соединение");
            return;
        }

        if (xhr.status != 200) {
            showMessage("Произошла ошибка в базе данных");
        } else {
            var resp = JSON.parse(xhr.responseText);

            switch(resp.code) {
                case 0:
                case 11:
                adding_comment.value = "";

                setComments(0)

                showMessage("Комментарий успешно добавлен");
                break;
                case 1:
                adding_author_div.classList.add("is-invalid");
                adding_comment_div.classList.add("is-invalid");

                showMessage("Заполните все поля");
                break;
                case 5:
                showMessage("Ошибка в БД");
                break;
            }
        }
        is_waiting_response = false;
    }
}

function getIcoName(name){
    var hash = 0;//[0;55]

    for (j= 0; j < name.length; j++){
        hash += name.codePointAt(j) * j;
    }

    hash = hash % 55;

    //128512/128567

    return 128512 + hash;
}

function commentToHTML(obj){
    var ico = getIcoName(obj.name);

    return `<div class = "mdl-grid mdl-cell mdl-cell--12-col mdl-cell--12-col-tablet mdl-card mdl-shadow--4dp">
    <div class="mdl-cell mdl-cell--1-col mdl-cell--12-col-tablet font-50 margin-auto">
    &#`+ico+`;
    </div>
    <div class="mdl-cell mdl-cell--11-col mdl-cell--12-col-tablet">
    <div class="display-flex">
    <div class="mdl-card__title-text bold">`+obj.name+`</div>
    <div class="mdl-card__title-text margin-h16 comment-date">`+obj.date+`</div>
    </div>
    <div class="no-left-padding">
    <p>`+obj.text+`</p>
    </div>
    </div>
    </div>`;
}

function setComments(index){
    if (index != 0 && index != 1) {
        return;
    }

    var xhr = new XMLHttpRequest ()

    xhr.open('GET', '/scripts/get_comments.php?category=' + index, true)

    xhr.send()

    xhr.onreadystatechange = function() {
        if (xhr.readyState != 4) return;

        if (xhr.status == 0) {
            return;
        }

        if (xhr.status != 200) {
        } else {
            var resp = JSON.parse(xhr.responseText);

            if (old_resp == xhr.responseText)
                return;

            old_resp = xhr.responseText;

            switch(resp.code) {
                case 0:
                comments_block_0.innerHTML = "";
                comments = resp.comments;

                for (i= 0; i < comments.length; i++){
                comments_block_0.innerHTML += commentToHTML(comments[i]);
            }
                break;
                case 1:
                break;
                case 5:
                break;
            }
        }
        is_waiting_response = false;
    }
}

function showMessage(text) {
    'use strict';

    var data = {
        message: text,
        timeout: 3000,
        actionHandler: function () {},
        actionText: " "
    };
    document.getElementById("demo-snackbar-example").MaterialSnackbar.showSnackbar(data);

    document.getElementById("snackbar-cancel").classList.add('hide');
    document.getElementById("snackbar-cancel_div").classList.add('snackbar-nocancel');

}

function heartBeat() {
    let timerId = setInterval (() => {
        setComments(0);
    }, 2000);
}

reload()
heartBeat();
setComments(0)
window.onhashchange = reload;