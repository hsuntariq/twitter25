<?php
    session_start();
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php include './boot.php' ?>

</head>

<body>

    <?php 
    if(isset($_SESSION['invalid_credentials'])){
     
        include './toast.php';


        showToast('red','Invalid Credentials','Please try again with correct credentials');

        unset($_SESSION['invalid_credentials']);
    }
        ?>


    <div class="register-modal transition-lg  d-flex justify-content-center align-items-center min-vh-100 w-100 position-fixed top-0 z-3"
        style="background: rgba(0,0,0,0.4);transform:translateY(-100%)">
        <div style="transform: translateX(-130%);opacity:0"
            class="card position-relative transition-md p-4 col-xl-5 col-lg-7 col-md-9  shadow-lg reg-form">
            <i class="bi bi-x-lg position-absolute cursor-pointer close-modal" style="left:10px;top:10px;"></i>
            <img width="30px" class="mx-auto d-block" src="./assets/images/logo.webp" alt="">
            <div class="px-4">

                <h2>Create your account</h2>

                <form action="./signup.php" method="POST">
                    <div class="position-relative">
                        <div class="text position-absolute transition-lg text-secondary"
                            style="top:50%;left:6%;transform:translate(-50%,-50%);pointer-events:none;">Name
                        </div>
                        <input type="text" name="name" class="form-control input my-input p-3">
                    </div>

                    <div class="position-relative my-2">
                        <div class="text position-absolute  transition-lg text-secondary"
                            style="top:50%;left:6%;transform:translate(-50%,-50%);pointer-events:none;">Email
                        </div>
                        <input type="email" name="email" class="form-control input my-input p-3">
                    </div>
                    <div class="position-relative my-2">
                        <div class="text position-absolute  transition-lg text-secondary"
                            style="top:50%;left:9%;transform:translate(-50%,-50%);pointer-events:none;"> Password
                        </div>
                        <input type="password" name="password" class="form-control input my-input p-3">
                    </div>

                    <h5>Date of birth</h5>
                    <p class="text-secondary">
                        This will not be shown publicly. Confirm your own age, even if this account is for a business, a
                        pet, or something else.
                    </p>


                    <div class="row">
                        <div class="col-md-5">
                            <select name="months" class="form-control input p-3" id="">
                                <option disabled value="" selected>Select Month</option>
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
                            <select name="dates" class="form-control input p-3" id="">
                                <option disabled value="" selected>Select date</option>

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
                            <select name="years" class="form-control input p-3" id="">
                                <option disabled selected value=''>Select Year</option>

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



                    <button class="btn btn-dark next-1 w-100 rounded-pill mt-5 ">
                        Next
                    </button>





                </form>


            </div>
        </div>
    </div>

    <!-- login modal -->

    <div class="auth-modal d-flex justify-content-center align-items-center min-vh-100 w-100 position-fixed top-0 z-3"
        style="background: rgba(0,0,0,0.4); transform: translateY(-100%);">

        <div class="auth-card card position-relative p-4 col-xl-4 col-lg-5 transition-md col-md-7 shadow-lg"
            style="transform: translateX(-130%); opacity: 0;">

            <i class="bi bi-x-lg position-absolute cursor-pointer transition-md close-auth"
                style="left:10px; top:10px;"></i>

            <img width="40px" class="mx-auto d-block" src="./assets/images/logo.webp" alt="">

            <h2 class="text-center mt-3">Login to Continue</h2>

            <form action="./login.php" method="POST" class="mt-4">

                <div class="mb-3">
                    <label class="form-label text-secondary">Email</label>
                    <input type="email" name="email" class="form-control p-3">
                </div>

                <div class="mb-3">
                    <label class="form-label text-secondary">Password</label>
                    <input type="password" name="password" class="form-control p-3">
                </div>



                <button class="btn btn-dark w-100 rounded-pill mt-4">
                    Login
                </button>

            </form>
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

                <button class="btn btn-dark create-btn my-3 w-50 rounded-pill">
                    Create Account
                </button>

                <h6>Already have an account?</h6>
                <button class="btn btn-outline-dark  create2-btn my-3 w-50 rounded-pill">
                    Sign In
                </button>
            </div>
        </div>
    </div>


    <script>
    let myInput = document.querySelectorAll('.my-input')
    let text = document.querySelectorAll('.text')
    let next1 = document.querySelector('.next-1')
    next1.disabled = true

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



    let inputs = document.querySelectorAll('.input')

    inputs.forEach(input => {
        input.addEventListener('input', () => {
            let filled = false;

            for (let i = 0; i < inputs.length; i++) {
                if (inputs[i].value.trim() === '') {
                    filled = false;
                    break;
                } else {
                    filled = true
                }
            }

            if (filled) {
                next1.disabled = false
            } else {
                next1.disabled = true

            }
        });
    });


    let create = document.querySelector('.create-btn')
    let form = document.querySelector('.reg-form')
    let registerUnderlay = document.querySelector('.register-modal')
    let closeModal = document.querySelector('.bi-x-lg')

    create.addEventListener('click', () => {
        registerUnderlay.style.transform = 'translateY(0)'
        setTimeout(() => {
            form.style.transform = 'translateX(0)'
            form.style.opacity = '1'
        }, 300);
    })
    closeModal.addEventListener('click', () => {
        form.style.transform = 'translateX(-140%)'
        form.style.opacity = '0'
        setTimeout(() => {
            registerUnderlay.style.transform = 'translateY(-100%)'
        }, 300);
    })



    // login trigger

    let createBtn2 = document.querySelector('.create2-btn');
    let authCard = document.querySelector('.auth-card');
    let authModal = document.querySelector('.auth-modal');
    let closeAuth = document.querySelector('.close-auth');

    createBtn2.addEventListener('click', () => {
        authModal.style.transform = 'translateY(0)';
        setTimeout(() => {
            authCard.style.transform = 'translateX(0)';
            authCard.style.opacity = '1';
        }, 300);
    });

    closeAuth.addEventListener('click', () => {
        authCard.style.transform = 'translateX(-140%)';
        authCard.style.opacity = '0';
        setTimeout(() => {
            authModal.style.transform = 'translateY(-100%)';
        }, 300);
    });
    </script>


</body>

</html>