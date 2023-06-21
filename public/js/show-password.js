// Show password icon
var showPasswords = document.querySelectorAll('.show-password');

showPasswords.forEach(showPassword => 
{
    showPassword.addEventListener('click', function() 
    {
        var passwordInput = this.previousElementSibling;
        if (passwordInput.type === 'password') 
        {
            passwordInput.type = 'text';
            this.classList.replace('fa-eye-slash', 'fa-eye')
            this.classList.replace('text-discord-icon', 'text-discord-error')
        } 
        else 
        {
            passwordInput.type = 'password';
            this.classList.replace('fa-eye', 'fa-eye-slash')
            this.classList.replace('text-discord-error', 'text-discord-icon')
        }
    });
});
