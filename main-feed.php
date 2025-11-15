<form action="./add-data.php" method="POST" enctype="multipart/form-data"
    class="card theme-card rounded-0 border border-secondary-emphasis">
    <div class="d-flex justify-content-around border border-top-0 border-end-0 border-start-0">
        <h5 class="p-2">For you</h5>
        <h5 class="p-2">Follwing</h5>
    </div>
    <div class="d-flex p-2 gap-3">
        <div class="bg-secondary rounded-circle" style="width:50px;height:50px;"></div>
        <div class="flex flex-column w-100">

            <textarea type="text" name="caption" style="resize: none;" class="border-0 caption w-100 outline-0"
                placeholder="What's happening"></textarea>
            <img width="100%" class="rounded-5 preview-image d-none mb-3"
                src="https://pbs.twimg.com/media/G5qeQFVXoAIkGiq?format=jpg&name=medium" alt="">
            <div class="d-flex w-100 align-items-center justify-content-between">

                <div class="text-info gap-2 d-flex">
                    <input type="file" class="d-none image-input" name="tweet-image" id="image">
                    <label for="image">
                        <i class="bi cursor-pointer bi-image"></i>
                    </label>
                    <i class="bi cursor-pointer bi-filetype-gif"></i>
                    <i class="bi cursor-pointer bi-geo-alt"></i>
                </div>
                <button class="btn btn-dark rounded-pill">
                    Post
                </button>
            </div>
        </div>
    </div>
</form>


<script defer>
let image_input = document.querySelector('.image-input')
let preview_image = document.querySelector('.preview-image')

image_input.addEventListener('input', (e) => {
    let image_file = e.target.files[0]
    let image_url = URL.createObjectURL(image_file)
    console.log(image_url)
    preview_image.classList.remove('d-none')
    preview_image.src = image_url
})
</script>