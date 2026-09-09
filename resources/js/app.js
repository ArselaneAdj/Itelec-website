import '../css/app.scss';
document.querySelectorAll('.filter-blogs a').forEach(link => {
    link.addEventListener('click', function(e) {
        e.preventDefault();
        document.querySelectorAll('.filter-blogs a').forEach(a => a.classList.remove('active'));
        this.classList.add('active');

    });
});