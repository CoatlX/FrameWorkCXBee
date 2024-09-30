<?php require_once INCLUDES.'inc_header.php';?>
<div class = "container">
    <div class="row">
        <div class="col-6 text-center offset-xl-3">
            <img src="<?php echo IMAGES.'coatlx-logo-trans.png' ?> " alt="CoatlX White" 
            style = "width: 200px;">
            <h2 class="text-white mt-1 mb-3"><span class="text-danger">CoatlX</span> Framework</h2>

            <?php echo Flasher::flash(); ?>

            <p class="text-center text-white"> Un framework hecho en casa, con pasión y mucho cariño.
                Ligero, rápido y personalizable. Úsalo como gustes, en tus proyectos personales o
                profesionales. 

                
                <ul class="text-white">
                    <li>Desarrolado con PHP, Javascript y HTML5</li>
                    <li>Utlizando patrón <b>MVC</b></li>
                    <li><b>100%</b> personalizable y escalable</li>
                </ul>
                <div class="mt-5">
                    <a href="#" class="btn btn-primary btn-lg">Probar</a>
                    <a href="#" class="btn btn-success btn-lg"><i class="fas fa-download"></i> Descargar</a>
                    <a href="#" class="btn btn-info btn-lg"><i class="fab fa-github"></i>Github</a>
                </div>
                <div class="mt-5">
                    <p class="text-white">Desarrollado con <i class="fas fa-heart text-danger"></i> por 
                <a href="http://bit.ly/udemy_joystick" class="text-white">Joystick - Gracias Bobby</a></p>
                </div>
        </div>
    </div>
</div>

<?php require_once INCLUDES.'inc_footer.php'; ?>