<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php 
        include './boot.php';
    ?>
</head>

<body>

    <div class="container p-3">
        <div class="row">
            <!-- sidebar -->
            <div class="col-3">
                <?php include './sidebar.php' ?>
            </div>
            <!-- main feed -->
            <div class="col-md-6 col-9">
                <?php 
                include './main-feed.php';
                include './single-post.php';
                ?>
            </div>
            <!-- news bar -->
            <div class="col-lg-3"></div>
        </div>
    </div>


    <script>
    let sun = document.querySelector('.sun')
    let cards = document.querySelectorAll('.theme-card')
    let caption = document.querySelector('.caption')
    let theme = localStorage.getItem('theme')
    let text = document.querySelectorAll('h1, h2, h3, h4, h5, h6,p,li');
    let logo = document.querySelector('.logo')

    if (theme == 'dark') {
        sun.classList.add('bi-moon')
        sun.classList.remove('bi-sun')
        document.body.style.backgroundColor = '#1A1A1A'
        document.body.style.color = 'white'

        cards.forEach(item => {
            item.style.setProperty('background-color', '#2C2C2C', 'important');
            item.style.setProperty('color', '#FFFFFF', 'important');
            item.style.setProperty('border', '1px solid #444', 'important');
            item.style.setProperty('box-shadow', '0 4px 10px rgba(0,0,0,0.4)', 'important');
        });

        // inputs
        caption.style.setProperty('background-color', '#2A2A2A', 'important')
        caption.style.setProperty('color', '#fff', 'important')

        // text
        text.forEach((item, index) => {
            item.style.setProperty('color', '#fff', 'important')
        })

        // logo

        logo.src = './assets/images/logo2.png'
    } else {
        sun.classList.add('bi-sun')
        sun.classList.remove('bi-moon')
        document.body.style.backgroundColor = 'white'
        document.body.style.color = 'black'
        // cards
        cards.forEach(item => {
            item.style.setProperty('background-color', '#FFFFFF', 'important');
            item.style.setProperty('color', '#111', 'important');
            item.style.setProperty('border', '1px solid #E5E5E5', 'important');
            item.style.setProperty('box-shadow', '0 4px 10px rgba(0,0,0,0.1)', 'important');
        });

        // caption
        caption.style.setProperty('background-color', 'white', 'important')
        caption.style.setProperty('color', '#000', 'important')

        // text
        text.forEach((item, index) => {
            item.style.setProperty('color', '#000', 'important')
        })

        // logo
        logo.src = './assets/images/logo.webp'
    }



    sun.addEventListener('click', () => {

        const isDark = sun.classList.contains('bi-sun'); // check BEFORE changing icon

        if (isDark) {
            // DARK MODE
            localStorage.setItem('theme', 'dark');

            // change icon properly
            sun.classList.replace('bi-sun', 'bi-moon');

            // body
            document.body.style.setProperty('background-color', '#1A1A1A', 'important');
            document.body.style.setProperty('color', '#F1F1F1', 'important');
            // inputs
            caption.style.setProperty('background-color', '#2A2A2A', 'important')
            caption.style.setProperty('color', '#fff', 'important')

            // text
            text.forEach((item, index) => {
                item.style.setProperty('color', '#fff', 'important')
            })

            // logo

            logo.src = './assets/images/logo2.png'

            // cards
            cards.forEach(item => {
                item.style.setProperty('background-color', '#2C2C2C', 'important');
                item.style.setProperty('color', '#FFFFFF', 'important');
                item.style.setProperty('border', '1px solid #444', 'important');
                item.style.setProperty('box-shadow', '0 4px 10px rgba(0,0,0,0.4)', 'important');
            });

        } else {
            // LIGHT MODE
            localStorage.setItem('theme', 'light');

            // change icon
            sun.classList.replace('bi-moon', 'bi-sun');

            // body
            document.body.style.setProperty('background-color', '#FFFFFF', 'important');
            document.body.style.setProperty('color', '#111111', 'important');

            // caption
            caption.style.setProperty('background-color', 'white', 'important')
            caption.style.setProperty('color', '#000', 'important')

            // text
            text.forEach((item, index) => {
                item.style.setProperty('color', '#000', 'important')
            })

            // logo
            logo.src = './assets/images/logo.webp'



            // cards
            cards.forEach(item => {
                item.style.setProperty('background-color', '#FFFFFF', 'important');
                item.style.setProperty('color', '#111', 'important');
                item.style.setProperty('border', '1px solid #E5E5E5', 'important');
                item.style.setProperty('box-shadow', '0 4px 10px rgba(0,0,0,0.1)', 'important');
            });
        }
    });
    </script>


</body>

</html>