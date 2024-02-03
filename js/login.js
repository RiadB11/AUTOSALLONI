const forma = document.querySelector(".loginform");
const emailRegex = /^[a-zA-Z0-9._%+-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,}$/;
const errorsDiv = document.querySelector(".errors_div");

forma.addEventListener("submit", function (e) {
    errorsDiv.innerHTML = '';
    const email = e.target.email.value;
    const password = e.target.password.value;
    let errors = [];
    
    if(!emailRegex.test(email)) {
        errors.push("Email nuk eshte valid");
    }

    if(password.length <= 7) {
        errors.push("Passwordi duhet t jete me 8+ karaktere");
    }

    if(errors.length > 0) {
        e.preventDefault();
        errors.forEach(error => {
            const paragrafi = document.createElement('p');
            paragrafi.innerText = error;
            errorsDiv.appendChild(paragrafi);
        });
    }
})