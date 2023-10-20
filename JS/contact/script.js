const formButton = document.querySelector(".form-button");
const mainDiv = document.querySelector(".main");

formButton.addEventListener("click", function() {
    // Tworzymy nowy div z obrazem
    const successDiv = document.createElement('div');
    successDiv.className = 'main';
    const img = document.createElement('img');
    img.src = './success.png';
    successDiv.appendChild(img);

    // Zamieniamy oryginalny div na nowy div z obrazem
    mainDiv.replaceWith(successDiv);
});