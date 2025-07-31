let logo = document.querySelector('.logo');
let sidebar = document.querySelector('.sidebar');
let toggleIcon = logo.querySelector('ion-icon');

logo.onclick = function () {
    logo.classList.toggle('active');
    sidebar.classList.toggle('active');

    if (sidebar.classList.contains('active')) {
        toggleIcon.setAttribute('name', 'chevron-back-outline');
    } else {
        toggleIcon.setAttribute('name', 'chevron-forward-outline');
    }
};

let MenuList = document.querySelectorAll('.MenuList li');
function activeLink() {
    MenuList.forEach((item) => item.classList.remove('active'));
    this.classList.add('active');
}
MenuList.forEach((item) =>
    item.addEventListener('click', activeLink));

document.addEventListener('click', function (event) {
    const isClickInsideSidebar = sidebar.contains(event.target);
    const isClickOnLogo = logo.contains(event.target);

    if (!isClickInsideSidebar && !isClickOnLogo && sidebar.classList.contains('active')) {
        sidebar.classList.remove('active');
        logo.classList.remove('active');
        toggleIcon.setAttribute('name', 'chevron-forward-outline');
    }
});