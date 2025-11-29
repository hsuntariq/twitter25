<div class="">
    <div class="d-flex justify-content-between cursor-pointer fs-3 w-100 align-items-center">
        <img width="40px" class="logo" src="./assets/images/logo.webp" alt="">
        <i class="bi bi-sun sun"></i>
    </div>
    <ul class="list-unstyled gap-3 my-4 d-flex flex-column">
        <li class="d-flex align-items-center sidebar-li cursor-pointer p-2 rounded-pill fs-6 gap-3 fw-semibold">
            <i class="bi bi-house-fill"></i> <span class="d-none d-lg-block">Home</span>
        </li>
        <li class="d-flex align-items-center sidebar-li cursor-pointer p-2 rounded-pill fs-6 gap-3 fw-semibold">
            <i class="bi bi-search"></i> <span class="d-none d-lg-block">Explore</span>
        </li>
        <li class="d-flex align-items-center sidebar-li cursor-pointer p-2 rounded-pill fs-6 gap-3 fw-semibold">
            <i class="bi bi-bell"></i> <span class="d-none d-lg-block">Notifications</span>
        </li>
        <li class="d-flex align-items-center sidebar-li cursor-pointer p-2 rounded-pill fs-6 gap-3 fw-semibold">
            <i class="bi bi-envelope"></i> <span class="d-none d-lg-block">Messages</span>
        </li>
        <li class="d-flex align-items-center sidebar-li cursor-pointer p-2 rounded-pill fs-6 gap-3 fw-semibold">
            <i class="bi bi-lightning-charge"></i> <span class="d-none d-lg-block">Grok</span>
        </li>
        <li class="d-flex align-items-center sidebar-li cursor-pointer p-2 rounded-pill fs-6 gap-3 fw-semibold">
            <i class="bi bi-card-list"></i> <span class="d-none d-lg-block">Lists</span>
        </li>
        <li class="d-flex align-items-center sidebar-li cursor-pointer p-2 rounded-pill fs-6 gap-3 fw-semibold">
            <i class="bi bi-bookmark"></i> <span class="d-none d-lg-block">Bookmarks</span>
        </li>
        <li class="d-flex align-items-center sidebar-li cursor-pointer p-2 rounded-pill fs-6 gap-3 fw-semibold">
            <i class="bi bi-people"></i> <span class="d-none d-lg-block">Communities</span>
        </li>
        <li class="d-flex align-items-center sidebar-li cursor-pointer p-2 rounded-pill fs-6 gap-3 fw-semibold">
            <i class="bi bi-x-diamond"></i> <span class="d-none d-lg-block">Premium</span>
        </li>
        <li class="d-flex align-items-center sidebar-li cursor-pointer p-2 rounded-pill fs-6 gap-3 fw-semibold">
            <i class="bi bi-person"></i> <span class="d-none d-lg-block">Profile</span>
        </li>
        <li class="d-flex align-items-center sidebar-li cursor-pointer p-2 rounded-pill fs-6 gap-3 fw-semibold">
            <i class="bi bi-three-dots"></i> <span class="d-none d-lg-block">More</span>
        </li>
    </ul>

    <div class="d-flex cursor-pointer logout-parent position-relative gap-3">
        <ul style="top: -50px;right:0"
            class="position-absolute logout w-100 bg-white d-none py-1 px-4 shadow-lg rounded-pill">
            <a href="./logout.php"
                class="d-flex text-decoration-none text-dark align-items-center cursor-pointer p-2 rounded-pill fs-6 gap-3 fw-semibold">
                <i class="bi bi-door-open"></i> <span class="d-none d-lg-block">Logout</span>
            </a>
        </ul>
        <img width="40px" height="40px" class="rounded-circle logout-parent"
            src="https://cdn.pixabay.com/photo/2023/02/18/11/00/icon-7797704_640.png" alt="">
        <div class="">

            <?php 
            if(isset($_SESSION['token'])){
                echo "<h6 class='text-md m-0 p-0 user-select-none logout-parent'>{$_SESSION['token']}</h6>";
            }
            if(isset($_SESSION['email'])){
                echo "<p class='text-sm m-0 p-0 user-select-none logout-parent text-secondary'>{$_SESSION['email']}</p>";
            }
        ?>
        </div>

    </div>

</div>

<script defer>
let logoutParent = document.querySelector('.logout-parent')
let logout = document.querySelector('.logout')


logoutParent.addEventListener('click', () => {
    logout.classList.toggle('d-none')
})

window.addEventListener('click', (e) => {

    let contains = e.target.classList.contains('logout-parent')

    if (!contains) {
        logout.classList.add('d-none')
    }

})
</script>