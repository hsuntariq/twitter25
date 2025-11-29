<style>
.toast-container {
    position: fixed;
    top: 20px;
    right: 20px;
    z-index: 9999;
}

.custom-toast {
    border-radius: 12px;
    border: none;
    overflow: hidden;
    max-width: 400px;
    animation: slideInRight 0.5s ease forwards;
}

.toast-header {

    color: white;
    border-bottom: none;
    padding: 12px 15px;
    position: relative;
}

.toast-header::after {
    content: '';
    position: absolute;
    bottom: 0;
    left: 0;
    width: 100%;
    height: 3px;
    background: rgba(255, 255, 255, 0.3);
}

.toast-body {
    padding: 20px;
    background-color: white;
    color: #333;
    font-size: 15px;
    line-height: 1.5;
}

.btn-close-white {
    filter: invert(1);
}

.toast-icon {
    font-size: 20px;
    margin-right: 10px;
}

.toast-progress {
    position: absolute;
    bottom: 0;
    left: 0;
    height: 4px;
    width: 100%;
    background: rgba(255, 255, 255, 0.3);
}

.toast-progress-bar {
    height: 100%;
    width: 100%;
    background: white;
    animation: progress 5s linear forwards;
}

.toast-title {
    font-weight: 600;
    font-size: 16px;
}

@keyframes slideInRight {
    from {
        transform: translateX(100%);
        opacity: 0;
    }

    to {
        transform: translateX(0);
        opacity: 1;
    }
}

@keyframes progress {
    from {
        width: 100%;
    }

    to {
        width: 0%;
    }
}
</style>


<?php 
    function showToast($color,$header,$content){
?>

<div class="toast-container">
    <div class="toast custom-toast show" role="alert" aria-live="assertive" aria-atomic="true">
        <div class="toast-header" style="background: <?php echo $color ?>;">
            <i class="fas fa-exclamation-circle toast-icon"></i>
            <strong class="me-auto toast-title">
                <?php echo $header ?>
            </strong>
            <button type="button" class="btn-close btn-close-white" data-bs-dismiss="toast" aria-label="Close"></button>
            <div class="toast-progress">
                <div class="toast-progress-bar"></div>
            </div>
        </div>
        <div class="toast-body">
            <?php echo $content ?>
        </div>
    </div>
</div>

<?php }




?>