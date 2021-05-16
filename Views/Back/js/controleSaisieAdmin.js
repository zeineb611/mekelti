function checkEmail(email)
{
    var re = /^(([^<>()[\]\\.,;:\s@\"]+(\.[^<>()[\]\\.,;:\s@\"]+)*)|(\".+\"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
    return re.test(email);
}



function verif()
{

    const username = document.getElementById('username');
    const password = document.getElementById('password');
    const confirmation = document.getElementById('confirmation');
    const email = document.getElementById('email');
    const form = document.getElementById('form');
    const errorElement = document.getElementById('error');

    form.addEventListener('submit', (e) => {
        let messages = []
        if (username.value.length > 10) {
            messages.push("Le nom d'utilisateur ne doit pas dépasser 10 caractères");
        }

        if (password.value != confirmation.value) {
            messages.push("Les mots de passe ne correspondent pas");
        }

        /*if (!checkEmail(email)) {
            messages.push("email invalide");
        }*/

        if (messages.length > 0) {
            e.preventDefault()
            errorElement.innerText = messages.join(', ');
        }
    })

}
