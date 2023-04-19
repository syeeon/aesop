/* admin header */ 

function admin_header() {
    const menuIcon = document.querySelector('.menu_icon');
    const closeIcon = document.querySelector('.close_icon');
    const sideBar = document.querySelector('.sidebar');
    const gnbWrap = document.querySelector('.gnb_wrap');

    menuIcon.addEventListener('click', toggle);
    closeIcon.addEventListener('click', toggle);

    function toggle() {
        if (gnbWrap.style.display === '') {
            gnbWrap.style.display = 'block';
            sideBar.style.width = '250px';
            menuIcon.style.display = "none"
            closeIcon.style.display = "block"
          } else {
            sideBar.style.width = '50px';
            gnbWrap.style.display = '';
            menuIcon.style.display = "block";
            closeIcon.style.display = "none";
          }
    }
}
