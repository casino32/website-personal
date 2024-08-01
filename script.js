document.addEventListener('DOMContentLoaded', function() {
    const form = document.querySelector('.contact-form');
    const contactMessage = document.getElementById('contactMessage');

    form.addEventListener('submit', function(event) {
        event.preventDefault();

        const name = document.getElementById('name').value;
        const email = document.getElementById('email').value;
        const message = document.getElementById('message').value;

        if (name && email && message) {
            contactMessage.style.display = 'block';
            contactMessage.innerHTML = `<p>Terima kasih, ${name}! Pesan Anda telah diterima. Kami akan menghubungi Anda melalui ${email}.</p>`;
            form.reset();
        } else {
            alert('Harap isi semua field sebelum mengirim pesan.');
        }
    });
});
