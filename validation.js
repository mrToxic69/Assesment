document.addEventListener('DOMContentLoaded', () => {
    const forms = document.querySelectorAll('form');

    forms.forEach(form => {
        form.addEventListener('submit', (e) => {
            const inputs = form.querySelectorAll('input[required]');
            let valid = true;

            inputs.forEach(input => {
                if (!input.checkValidity()) {
                    valid = false;
                    const error = document.createElement('div');
                    error.className = 'error';
                    error.textContent = input.validationMessage;
                    input.parentElement.appendChild(error);
                }
            });

            if (!valid) {
                e.preventDefault();
            }
        });
    });
});
