// Uppercasin the first letter in name section of form...
const nameInput = document.getElementById("name")
nameInput.addEventListener("input", function() {

    let name = nameInput.value;
    name = name.charAt(0).toUpperCase() + name.slice(1);
    nameInput.value = name;
});

// Limit message input character
var myText = document.getElementById("myText");
var result = document.getElementById("result");
var limit = 255;
result.textContent = 0 + "/" + limit;

myText.addEventListener("input", function() {
    var textLength = myText.value.length;
    result.textContent = textLength + "/" + limit;

    if (textLength > limit) {
        myText.classList.add("exceeded")
        result.style.color = "red";
    } else {
        myText.classList.remove("exceeded")
        result.style.color = "#737373";
    }
});

// Form Inputs managing errors
document.querySelector('#form_container form button').addEventListener('click', function(event) {
    event.preventDefault();

    const regexInput = /^[a-zA-Z\s]{1,50}$/;
    const regexEmailInput = /^[a-z0-9-_.]+@[a-z0-9-_.]+\.[a-z]{2,}$/;
    const regexNumberInput = /^\S+\d{3,20}$/;
    const regexMessageInput = /^[\s\S]{0,255}$/;

    let hasError = false;
    let nameInput = document.getElementById('name');
    if (!nameInput.value.match(regexInput)) {
        ifInputError(nameInput);
        hasError = true;
    } else {
        ifInputSuccess(nameInput);
    }

    let emailInput = document.getElementById('email');
    if (!emailInput.value.match(regexEmailInput)) {
        ifInputError(emailInput);
        hasError = true;
    } else {
        ifInputSuccess(emailInput);
    }

    let numberInput = document.getElementById('number');
    if (!numberInput.value.match(regexNumberInput)) {
        ifInputError(numberInput);
        hasError = true;
    } else {
        ifInputSuccess(numberInput);
    }

    let msgInput = document.getElementById('myText');
    if (!msgInput.value.match(regexMessageInput)) {
        ifInputError(msgInput);
        hasError = true;
    } else {
        ifInputSuccess(msgInput);
    }

    if (!hasError) {
        var formData = new FormData(document.querySelector('#form_container form'));

        fetch('form.php', {
                method: 'POST',
                body: formData
            })
            .then(response => {
                if (!response.ok) {
                    throw new Error('Network response failed..');
                }
                return response.text();
            })
            .then(data => {
                console.log(data);
                document.querySelector('#form_container form').reset();
            })
            .catch(error => {
                console.error('Error:', error);
            });
    }
});

function ifInputError(inputElement) {
    inputElement.classList.add('error');
    inputElement.previousElementSibling.classList.add('error');
}

function ifInputSuccess(inputElement) {
    inputElement.classList.remove('error');
    inputElement.previousElementSibling.classList.remove('error');
}


// Managing to show all the forms in DataBase
let lastDisplayedMessageIndex = 0;

document.getElementById('chargementForm').addEventListener('click', chargementFormProchain);

function chargementFormProchain() {
    fetch(`ajax.php?lastDisplayedMessageIndex=${lastDisplayedMessageIndex}`)
        .then(response => response.json())
        .then(form => {
            const affichageForm = document.getElementById('affichageForm');
            affichageForm.innerHTML = '';
            if (form.length > 0) {
                const dataForm = form[0];

                const chaqueForm = document.createElement('div');
                chaqueForm.classList.add('dataForm');
                chaqueForm.innerHTML = `<p>Name: <strong>${dataForm.name}</strong> <br> Email: <strong>${dataForm.email}</strong>  <br> Number: <strong>${dataForm.number}</strong> <br> Message:<br> <em>${dataForm.message}</em></p>`;
                affichageForm.appendChild(chaqueForm);

                lastDisplayedMessageIndex = dataForm.id;
                affichageForm.style.backgroundColor = 'white';
            } else {
                const noMoreForm = document.createElement('div');
                noMoreForm.classList.add('noMoreForm');
                noMoreForm.innerHTML = '<p>No more form!</p>';
                affichageForm.appendChild(noMoreForm);
            }
        })
        .catch(error => console.error('Error fetching forms:', error));
}