document.getElementById('contactForm').addEventListener('submit', function(event) {
    event.preventDefault(); // Empêche l'envoi du formulaire par défaut

    // Récupère les données du formulaire
    let formData = new FormData(this);

    // Envoie des données du formulaire via AJAX
    fetch('process_form.php', {
        method: 'POST',
        body: formData
    })
        .then(response => response.json())
        .then(data => {
            // Affiche le message de succès ou d'erreur dans une popup
            alert(data.message);
            if (data.success) {
                // Redirige vers une autre page si l'enregistrement a réussi
                window.location.href = 'contact-sucess.php';
            }
        })
        .catch(error => {
            console.error('Une erreur s\'est produite:', error);
        });
});