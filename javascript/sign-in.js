const form = document.querySelector('.signup form'),
    continueBtn = form.querySelector('.button input'),
    errorText = form.querySelector('.error-txt');

form.onsubmit = (event) => {
    event.preventDefault();

}
continueBtn.onclick = () => {
    let xhr = new XMLHttpRequest();
    xhr.open('POST', 'php/signup.php', true);

    xhr.onload = function () {
        if (xhr.readystate === XMLHttpRequest.DONE) {
            if (xhr.status == 200) {
                let data = xhr.response;

                if (data == "success") {
                    location.href = "users.php";
                }
                else {
                    errorText.textContent = data;
                    errorText.style.display = "block";
                }
            }
        }
    }
    let formData = new FormData(form);

    xhr.send(formData);
}
