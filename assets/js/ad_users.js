$(document).ready(function(){//Indica que si el documento está listo, se ejecuta la función anónima, es jquery

    //Toastr para notificaciones - https://codeseven.github.io/toastr/
    //Agregamos los CDN's en el header el js con <script src="" y el css con <link rel "stylesheet" href=""...
    
    //Waitme https://vadimsva.github.io/waitMe/ descargar - waitme.min .css y .js en assests/pulgins/waitme

//$('body').waitMe(); //Muestra de uso de waitMe
    //Funciones C R U D
    //Create un movimiento
    console.log('Funko?????')

    $('.coatlx_add_movement').on('submit', coatlx_add_movement);
    function coatlx_add_movement(event){

        event.preventDefault();
        //Jquery
        var form    = $('.coatlx_add_movement'),
        hook        = 'coatlx_hook',
        action      = 'add',
        data        = new FormData(form.get(0)),
        type        = $('#type').val(),
        description = $('#description').val(),
        amount      = $('#amount').val();
        data.append('hook', hook); //
        data.append('action', action);
        
        //Validar que esté seleccionada una opción type
        if(type === 'none'){
           toastr.error('Selecciona un tipo de movimiento válido', '¡Upsss!');
           return;     
        }
        //Validar la descripción
        if(description === ''||description.length  < 5){
            toastr.error('Selecciona una descripción válida', '¡Upsss!');
            return;     
         }
         //Validar monto
         if(amount === '' || amount <= 0){
            toastr.error('Selecciona un monto válido', '¡Upsss!');
            return;     
         }

         //Ajax
         $.ajax({

            url        : 'ajax/coatlx_add_movement',
            type       : 'post',
            dataType   : 'json',
            contentType: false,
            processData: false,
            cache      : false,
            data       : data,
            beforeSend: function(){
                form.waitMe();
            }
         }).done(function(res){
            if(res.status===201){
                toastr.success(res.msg, 'Yeah!');
                form.trigger('reset');
                coatlx_get_movements();//Para cargar movimientos en tiempo real
            }else{
                toastr.error(res.msg,'Valió!');
            }
            
         }).fail(function(err) {
            toastr.error('Hubo un error en la petición', 'Valió!')
         }).always(function(){
            form.waitMe('hide');
         })

    }
    //Read un movimiento
   // coatlx_get_ad_users();
   coatlx_get_ad_users();
    function coatlx_get_ad_users(){
        var usersADLoad = $('.users_ad_acd'),//Se crea del bloque que conforma la segunda columna de los movimientos del indexView
        hook        = 'coatlx_hook',
        action      = 'load';

        $.ajax({
            url     : 'ajax/coatlx_get_ad_users',
            type    : 'POST',
            dataType: 'json',
            cache   : false,
            data    : {
                hook, action
            },
            beforeSend: function(){
                usersADLoad.waitMe();
            }
         }).done(function(respuesta){
            if(respuesta.status === 200){
                usersADLoad.html(respuesta.data);
            }else{
                toastr.error(respuesta.msg,'Valió!');
                usersADLoad.html('');
            }
         }).fail(function(err) {
           // toastr.error('Hubo un error en la petición', 'Valiósss!')////////
           usersADLoad.html('');
         }).always(function(){
           usersADLoad.waitMe('hide');
         });
    }
    //Update movimiento
    $('body').on('dblclick','.coatlx_movement', coatlx_update_movement);
    function coatlx_update_movement(event){

        var li   = $(this),
        id       = li.data('id'),
        hook     = 'coatlx_hook',
        action   = 'get',
        add_form = $('.coatlx_add_movement'),
        wrapper_update_form = $('.coatlx_wrapper_update_form');

        $.ajax({
            url     : 'ajax/coatlx_update_movement',
            type    : 'POST',
            dataType: 'json',
            cache   : false,
            data    : {
                hook, action, id
            },
            beforeSend: function(){
                wrapper_update_form.waitMe();
            }
         }).done(function(respuesta){
            if(respuesta.status === 200){
                wrapper_update_form.html(respuesta.data);
                add_form.hide();
            }else{
                toastr.error(respuesta.msg,'Valió!');
            }
         }).fail(function(err) {
            toastr.error('Hubo un error en la petición', 'Valiósss!')
            wrapper_update_form.html('');
         }).always(function(){
            wrapper_update_form.waitMe('hide');
         });

        
    }
    //Delete movimiento
    $('body').on('click','.coatlx_delete_movement', coatlx_delete_movement);
    function coatlx_delete_movement(event){

        var btnBorrar = $(this),
        id = btnBorrar.data('id'),//Se crea del bloque que conforma la segunda columna de los movimientos del indexView
        hook        = 'coatlx_hook',
        action      = 'delete',
        wrapper = $('.coatlx_wrapper_movements');
       /* console.log(id);
        return;*/
        if(!confirm('Seguro quieres borrar??')) return false;

        $.ajax({
            url     : 'ajax/coatlx_delete_movements',
            type    : 'POST',
            dataType: 'json',
            cache   : false,
            data    : {
                hook, action, id
            },
            beforeSend: function(){
                wrapper.waitMe();
            }
         }).done(function(respuesta){
            if(respuesta.status === 201){
                toastr.success('El movimiento se borró con éxito', 'XD');
                coatlx_get_movements();
            }else{
                toastr.error(respuesta.msg,'Valió!');
                wrapper.html('');
            }
         }).fail(function(err) {
            toastr.error('Hubo un error en la petición', 'Valió!')////////
            wrapper.html('');
         }).always(function(){
            wrapper.waitMe('hide');
         }); 
    }
    $('body').on('submit', '.coatlx_save_movement',coatlx_save_movement);
    function coatlx_save_movement(event){

        event.preventDefault();
        //Jquery
        var form    = $('.coatlx_save_movement'),
        hook        = 'coatlx_hook',
        action      = 'update',
        data        = new FormData(form.get(0)),
        type        = $('select[name="type"]', form).val(),
        description = $('input[name="description"]', form).val(),
        amount      = $('input[name="amount"]', form).val(),
        add_form = $('.coatlx_add_movement');
        data.append('hook', hook); //
        data.append('action', action);

       /* console.log(amount);
        return; corta el código*/
        //Validar que esté seleccionada una opción type
        if(type === 'none'){
           toastr.error('Selecciona un tipo de movimiento válido', '¡Upsss!');
           return;     
        }
        //Validar la descripción
        if(description === ''||description.length  < 5){
            toastr.error('Selecciona una descripción válida', '¡Upsss!');
            return;     
         }
         //Validar monto
         if(amount === '' || amount <= 0){
            toastr.error('Selecciona un monto válido', '¡Upsss!');
            return;     
         }

         //Ajax
         $.ajax({

            url        : 'ajax/coatlx_save_movement',
            type       : 'post',
            dataType   : 'json',
            contentType: false,
            processData: false,
            cache      : false,
            data       : data,
            beforeSend: function(){
                form.waitMe();
            }
         }).done(function(res){
            if(res.status===200){
                toastr.success(res.msg, 'Yeah!');
                form.trigger('reset');
                form.remove();
                coatlx_get_movements();
                add_form.show();//Para cargar movimientos en tiempo real
            }else{
                toastr.error(res.msg,'Valió!');
            }
            
         }).fail(function(err) {
            toastr.error('Hubo un error en la petición', 'Valió!')
         }).always(function(){
            form.waitMe('hide');
         })
    }
    
    $('.coatlx_save_options').on('submit', coatlx_save_options);
    function coatlx_save_options(event){
        event.preventDefault();
        //Jquery
        var form    = $('.coatlx_save_options'),
        data = new FormData(form.get(0)),
        hook        = 'coatlx_hook',
        action      = 'add';
        data.append('hook', hook); //
        data.append('action', action);

         //Ajax
         $.ajax({

            url        : 'ajax/coatlx_save_options',
            type       : 'post',
            dataType   : 'json',
            contentType: false,
            processData: false,
            cache      : false,
            data       : data,
            beforeSend: function(){
                form.waitMe();
            }
         }).done(function(res){
            if(res.status===201 || res.status===200){
                toastr.success(res.msg, 'Yeah!');
                coatlx_get_movements();//Para cargar movimientos en tiempo real
            }else{
                toastr.error(res.msg,'Valió!');
            }
         }).fail(function(err) {
            toastr.error('Hubo un error en la petición', 'Valió!')
         }).always(function(){
            form.waitMe('hide');
         })
        }
});