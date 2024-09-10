document.addEventListener('DOMContentLoaded', function() {
    var notificationContainer = document.getElementById('notification-container');
    if (notificationContainer.children.length > 0) {
        setTimeout(function() {
            notificationContainer.classList.add('show');
        }, 100);
    }
});

function redirectHome() {
    window.location.href = "{{ route('admin.user.list') }}";
}

function closeNotification() {
    var notificationContainer = document.getElementById('notification-container');
    notificationContainer.classList.remove('show');
    setTimeout(function() {
        notificationContainer.innerHTML = '';
    }, 500);
}
