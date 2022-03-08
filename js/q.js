let step = 1
let stepCount = 7

function toStep() {
    let selected = document.querySelector(".q_blk.active");
    selected.classList.remove("active")

    let tosl =  document.querySelector(".q_blk.step"+step);
    tosl.classList.add("active")

    document.querySelector(".q_steps .as").innerHTML = step;
}

function checkStep() {
    if (step == 1) {
        let list = document.getElementsByName('dolg[]');

        for(var i=0;i<list.length;i++){
            if(list[i].checked == true) return true;
        }
    }

    if (step == 2) { 
        return true;
    }

    if (step == 3) { 
        return true;
    }

    if (step == 4) { 
        return true;
    }

    if (step == 5) { 
        return true;
    }

    if (step == 6) { 
        return true;
    }

    if (step == 7) { 
        let phone = q_tel.value;
        if ((phone != "") && (phone.indexOf("_") < 0)) return true;
    }

    return false;
}

function stepUp() {
    if (!checkStep()) {
        alert("Заполние поля");
        return;
    }

    if (step == stepCount) 
        return;
 
    step++
    toStep()

    if (step == stepCount) {
        q_next.style.display = "none"
        q_send.style.display = "block"
    } else {
        q_next.style.display = "block"
        q_send.style.display = "none"
    }
}

function stepDown() {
    if (step == 1) return;
    step--
    toStep()
}

document.addEventListener("DOMContentLoaded", () => {
    document.querySelector(".q_steps .all").innerHTML = stepCount;
    
    q_next.onclick = (e) => {
        e.preventDefault();
        stepUp();
    }

    q_prev.onclick = (e) => {
        e.preventDefault();
        stepDown();
    }

    q_send.onclick = (e) => {
        e.preventDefault();
        if (!checkStep()) {
            alert("Заполние поле 'Телефон'");
            return;
        }

        let q_form = document.getElementById("q_form")
        var q_data = new FormData(q_form);

        q_data.append("action", "q_send")
        q_data.append("nonce", allAjax.nonce)

        console.log(q_data)

        var xhr = new XMLHttpRequest();

        xhr.onload = function(e) {

            if (xhr.status == 200) {
        
                location.href = "https://fizbankrot46.ru/stranicza-blagodarnosti"
                console.log(xhr);
            } else {
                console.log(xhr.status)
                console.log(xhr.statusText)
                alert("При отправке произошла ошибка")
            }
            
        }
        
        xhr.onerror = function(msg) {
            console.log("eroroa" + xhr.statusText)
        }

        xhr.open('POST', allAjax.ajaxurl, true);
        xhr.send(q_data);
    }
});