<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php include './boot.php' ?>
</head>

<body>

    <div class="register-modal d-flex justify-content-center align-items-center min-vh-100 w-100 position-fixed top-0 z-3"
        style="background: rgba(0,0,0,0.4);">
        <div class="card p-4 col-xl-5 col-lg-7 col-md-9  shadow-lg reg-form">
            <img width="30px" class="mx-auto d-block" src="./assets/images/logo.webp" alt="">
            <div class="px-4">

                <h2>Create your account</h2>

                <form action="">
                    <div class="position-relative">
                        <div class="text position-absolute transition-lg text-secondary"
                            style="top:50%;left:6%;transform:translate(-50%,-50%);pointer-events:none;">Name
                        </div>
                        <input type="text" class="form-control my-input p-3">
                    </div>

                    <div class="position-relative my-2">
                        <div class="text position-absolute  transition-lg text-secondary"
                            style="top:50%;left:6%;transform:translate(-50%,-50%);pointer-events:none;">Email
                        </div>
                        <input type="email" class="form-control my-input p-3">
                    </div>

                    <h5>Date of birth</h5>
                    <p class="text-secondary">
                        This will not be shown publicly. Confirm your own age, even if this account is for a business, a
                        pet, or something else.
                    </p>


                    <div class="row">
                        <div class="col-md-5">
                            <select name="months" class="form-control p-3" id="">
                                <?php 
                                    $months = [ "January","February","March","April","May","June","July","August","September","October","November","December"];

                                    foreach($months as $item){
                                        echo "<option value='$item'>
                                            $item
                                        </option>";
                                    }


                                ?>
                            </select>
                        </div>
                        <div class="col-md-3">
                            <select name="dates" class="form-control p-3" id="">
                                <?php 
                                    for($i =1;$i<=31;$i++){
                                        echo "<option value='$i'>
                                            $i
                                        </option>";
                                    }
                                ?>
                            </select>
                        </div>
                        <div class="col-md-4">
                            <select name="dates" class="form-control p-3" id="">
                                <?php 
                                    for($i = 2025;$i>=1905;$i--){
                                        echo "<option value='$i'>
                                            $i
                                        </option>";
                                    }
                                ?>
                            </select>
                        </div>
                    </div>



                    <button disabled class="btn btn-dark w-100 rounded-pill mt-5 ">
                        Next
                    </button>





                </form>


            </div>
        </div>
    </div>

    <div class="container">
        <div class="row">
            <div class="col-lg-6">
                <img src="./assets/images/logo.webp" alt="">
            </div>
            <div class="col-lg-6">
                <h1 class="display-2 fw-semibold">
                    Happening now
                </h1>
                <h3>Join today.</h3>
                <div class="rounded-pill d-flex justify-content-between border w-50 px-3 align-items-center">
                    <div class="d-flex">
                        <img src="https://lh3.googleusercontent.com/a/ACg8ocKvQlYTazJW20ceC9OvSnyKI04XciV-wu2Z6gvokhvM38XV6OwH=s96-c"
                            width="35px" height="35px" alt="">
                        <div class="">
                            <h6 class="m-0 p-0">login as mail</h6>
                            <p class="text-secondary m-0 p-0 text-sm">
                                user@mail.com
                            </p>
                        </div>
                    </div>
                    <div class="">
                        <i class="bi bi-google"></i>
                    </div>
                </div>

                <button class="btn btn-dark my-3 w-50 rounded-pill">
                    Create Account
                </button>

            </div>
        </div>
    </div>


    <script>
    let myInput = document.querySelectorAll('.my-input')
    let text = document.querySelectorAll('.text')



    myInput.forEach((item, index) => {
        item.addEventListener('focus', () => {
            text[index].style.transform = 'translate(-70%,-25px)'
            text[index].classList.add('text-sm')
            text[index].classList.add('text-primary')
            text[index].classList.remove('text-secondary')
        })
    })
    myInput.forEach((item, index) => {
        item.addEventListener('focusout', () => {
            text[index].style.transform = 'translate(-50%,-50%)'
            text[index].classList.remove('text-sm')
            text[index].classList.remove('text-primary')
            text[index].classList.add('text-secondary')
        })
    })
    </script>


</body>

</html>