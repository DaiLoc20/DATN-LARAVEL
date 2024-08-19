document.addEventListener('DOMContentLoaded', function() {
    const rows = document.querySelectorAll('table tbody tr');
    const userDetails = document.getElementById('userDetails');
    const userImage = document.getElementById('userImage');
    const userName = document.getElementById('userName');
    const userEmail = document.getElementById('userEmail');
    const userGender = document.getElementById('userGender');
    const userBirthday = document.getElementById('userBirthday');
    const userPhone = document.getElementById('userPhone');
    const userAddress = document.getElementById('userAddress');

    rows.forEach(row => {
        row.addEventListener('click', function() {
            const data = this.dataset;

            userImage.src = data.image ? '/storage/' + data.image : '/images/default-avatar.jpg';
            userImage.alt = data.name ? 'Ảnh đại diện của ' + data.name : 'Ảnh mặc định';


            userName.textContent = data.name;
            userEmail.textContent = data.email;
            userGender.textContent = data.gender;
            userBirthday.textContent = data.birthday;
            userPhone.textContent = data.phone;
            userAddress.textContent = data.address;

            userDetails.style.display = 'block';
        });
    });
});
