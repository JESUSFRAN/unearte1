
        var v=true;
        $("span.help-block").hide();

        function verificar(){

            var v1=0,v2=0;
            v1=validacion('usuario');
            v2=validacion('clave');
            
            if (v1===false || v2===false){
                 $("#exito").hide();
                 $("#error").show();
            return false;
            }else{
                 
                $("#error").hide();
                $("#exito").show();
                return true;

                
            }

            total=v1+v2;
            if (v && total>=1) {
                $("#error").hide();
                $("#exito").show();
                
            return true;
                
            }else{
                 $("#exito").hide();
                 $("#error").show();
                 return false;
            }
            validacion('usuario');
            validacion('clave');
            
            
            if (v) {
                alert("los campos estan validados")
            }
            else{
                alert("los campos no estan validados");
            }

        } 
        


        function validacion(campo){
            var a=0;
            

//usuarioeeeeeeeeeeeeeeeeeeeeeeeeee

  if (campo==='usuario'){
                usuario = document.getElementById(campo).value;
                
                if( usuario == null || usuario.length == 0 || /^\s+$/.test(usuario) ) {
                    
                    $("#glypcn"+campo).remove();
                    $('#'+campo).parent().parent().attr("class", "form-group has-error has-feedback");
                    $('#'+campo).parent().children('span').text("Campo Vacio ").show();
                    $('#'+campo).parent().append("<span id='glypcn"+campo+"' class='glyphicon glyphicon-remove form-control-feedback'></span>");
                    return false;
                    
                    
                }
                else{
                    $("#glypcn"+campo).remove();
                    $('#'+campo).parent().parent().attr("class", "form-group has-success has-feedback");
                    $('#'+campo).parent().children('span').hide();
                    $('#'+campo).parent().append("<span id='glypcn"+campo+"' class='glyphicon glyphicon-ok form-control-feedback'></span>");
                    return true;
                    
                } 
            }

//claveaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa
            if (campo==='clave'){
                clave = document.getElementById(campo).value;
                if( clave == null || clave.length == 0 || /^\s+$/.test(clave) ) {
                    $("#glypcn"+campo).remove();
                    $('#'+campo).parent().parent().attr("class", "form-group has-error has-feedback");
                    $('#'+campo).parent().children('span').text("Campo Vacio").show();
                    $('#'+campo).parent().append("<span id='glypcn"+campo+"' class='glyphicon glyphicon-remove form-control-feedback'></span>");
                    return false;
                   
                }
                else
                {

                    if(isNaN(clave)) {

                        $("#glypcn"+campo).remove();
                        $('#'+campo).parent().parent().attr("class", "form-group has-error has-feedback");
                        $('#'+campo).parent().children('span').text("No Acepta letras").show();
                        $('#'+campo).parent().append("<span id='glypcn"+campo+"' class='glyphicon glyphicon-remove form-control-feedback'></span>");

              
                        return false;
                    }
                    else{

                        $("#glypcn"+campo).remove();
                        $('#'+campo).parent().parent().attr("class", "form-group has-success has-feedback");
                        $('#'+campo).parent().children('span').hide();
                        $('#'+campo).parent().append("<span id='glypcn"+campo+"' class='glyphicon glyphicon-ok form-control-feedback'></span>");
             
                        return true;
                    }
                    
                    
                }
                
            }




  




