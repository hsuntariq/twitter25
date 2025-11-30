<div class="card theme-card p-2 pe-4 pb-3 my-2 rounded-0 border">


    <?php 
    include './config.php';
    $read = "SELECT posts.id AS post_id,posts.assets,posts.caption,users.id AS user_id,users.name,users.email FROM posts JOIN users ON posts.user_id = users.id ORDER BY(posts.id) DESC";
    $result = mysqli_query($connection,$read);
    foreach($result as $row){
?>


    <!-- comment modal -->

    <!-- Modal -->
    <form action="./add-comment.php" method="POST" class="modal fade" id="exampleModal-<?php echo $row['post_id'] ?>"
        tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="exampleModalLabel">Modal title</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <?php echo $row['caption'] ?>
                    <img class="rounded-3 my-3" src="./tweet-images/<?php echo $row['assets'] ?>" width="100%" alt="">

                    <div class="d-flex">
                        <input type="hidden" name="post_id" value="<?php echo $row['post_id']?>">
                        <img src="https://png.pngtree.com/png-vector/20231019/ourmid/pngtree-user-profile-avatar-png-image_10211467.png"
                            width="40px" height="40px" class="rounded-circle" alt="">
                        <textarea name="comment" placeholder="Post Your Reply..." class="form-control border-0"
                            style="box-shadow: none;resize: none;" id=""></textarea>
                    </div>

                </div>
                <div class="modal-footer">

                    <button class="btn btn-primary">Comment</button>
                </div>
            </div>
        </div>
    </form>




    <div class="d-flex  gap-1">
        <img src="https://png.pngtree.com/png-vector/20231019/ourmid/pngtree-user-profile-avatar-png-image_10211467.png"
            width="60px" height="60px" class="rounded-circle border" alt="">
        <div class="">

            <div class="d-flex  gap-1">
                <p class="m-0 p-0 text-capitalize text-dark fw-semibold">
                    <?php echo $row['name'] ?>
                </p>
                <p class="m-0 p-0 text-secondary"><?php echo $row['email'] ?></p>
                <i class="bi bi-dot"></i>
                <p class="text-secondary m-0 p-0">13h</p>
            </div>
            <p class="text-secondary"><?php echo $row['caption']?> <span class="text-primary cursor-pointer">Read
                    More</span></p>
            <img class="rounded-4" src="./tweet-images/<?php echo $row['assets']?>" width="100%" alt="">
            <div class="d-flex mt-2 text-secondary justify-content-between align-items-center">
                <div type="button" data-bs-toggle="modal" data-bs-target="#exampleModal-<?php echo $row['post_id']?>"
                    class="d-flex gap-1 cursor-pointer align-items-center">
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