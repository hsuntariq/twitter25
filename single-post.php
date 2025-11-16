<div class="card theme-card p-2 pe-4 pb-3 my-2 rounded-0 border">


    <?php 
    include './config.php';
    $read = "SELECT * FROM posts ORDER BY(id) DESC";
    $result = mysqli_query($connection,$read);
    foreach($result as $row){
?>

    <div class="d-flex  gap-1">
        <img src="https://png.pngtree.com/png-vector/20231019/ourmid/pngtree-user-profile-avatar-png-image_10211467.png"
            width="60px" height="60px" class="rounded-circle border" alt="">
        <div class="">

            <div class="d-flex  gap-1">
                <p class="m-0 p-0 text-dark fw-semibold">Full name</p>
                <p class="text-secondary m-0 p-0">@username</p>
                <i class="bi bi-dot"></i>
                <p class="text-secondary m-0 p-0">13h</p>
            </div>
            <p class="text-secondary"><?php echo $row['caption']?> <span class="text-primary cursor-pointer">Read
                    More</span></p>
            <img class="rounded-4" src="./tweet-images/<?php echo $row['assets']?>" width="100%" alt="">
            <div class="d-flex mt-2 text-secondary justify-content-between align-items-center">
                <div class="d-flex gap-1 cursor-pointer align-items-center">
                    <i class="bi bi-chat"></i>
                    <p class="text-sm m-0">1</p>
                </div>
                <div class="d-flex gap-1 cursor-pointer align-items-center">
                    <i class="bi bi-arrow-down-up"></i>
                    <p class="text-sm m-0">1</p>
                </div>
                <div class="d-flex gap-1 cursor-pointer align-items-center">
                    <i class="bi bi-heart"></i>
                    <p class="text-sm m-0">1</p>
                </div>
                <div class="d-flex gap-1 cursor-pointer align-items-center">
                    <i class="bi bi-bookmark"></i>
                    <p class="text-sm m-0">1</p>
                </div>
            </div>
        </div>


    </div>

    <?php }?>

</div>