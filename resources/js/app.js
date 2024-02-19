import '../scss/app.scss';

document.querySelectorAll('.delete-btn').forEach(button => {
    button.addEventListener('click', function(event) {

        if (!confirm('Sei sicuro di voler eliminare questo fumetto?')) {
            event.preventDefault(); 
        }
        
    });
});
