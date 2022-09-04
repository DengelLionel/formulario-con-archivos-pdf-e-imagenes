<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="csrf-token" content="{{csrf_token()}}">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="/assets/vendor/aos/aos.css" rel="stylesheet">
  <link href="/assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="/assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="/assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="/assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="/assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="/assets/css/style.css" rel="stylesheet">
  <link href="/assets/css/ruc.css" rel="stylesheet">
  <link href="/assets/css/formulario.css" rel="stylesheet">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <title>Formulario firma</title>
</head>
<body class="color_body">
<form method="POST" name="dataprincipal" id="dataprincipal" action="{{route('datos.store')}}" enctype="multipart/form-data">
          @csrf
          <div>
          <h2 class="text-center">SOLICITUD DE FIRMA ELECTRONICA - PARA PERSONAS NATURALES CON O SIN - RUC</h2>
  <h5 class="p-2">1.- INFORMACIÓN DE PERSONA NATURAL</h5>
          </div>
          @if ($errors->any())
      <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
              <li>{{ $error }}</li>
            @endforeach
        </ul>
      </div><br />
@endif
        
 
  <div class="bloque_dos">
    <div class="contenedor_g"> 
    <label for="documento_identidad" aria-label="Floating label select example" class="form-label">Documento de Identidad</label>
    <select  class="form-select" name="documento_identidad" id="documento_identidad">
      <option selected>Seleccione Identidad</option>
      <option value="CEDULA">CEDULA</option>
      <option value="PASAPORTE">PASAPORTE</option>
    </select>
    </div>
    @php
       

    @endphp
    <input type="hidden" name="dia_creado" id="dia_creado" value="{{date('Y-m-d')}}">
    <div class="contenedor_g">
    <label for="numero_documento_identidad" class="form-label">Número de Documento</label>
    <input type="text" value="{{old('numero_documento_identidad')}}" class="form-control"name="numero_documento_identidad"  id="numero_documento_identidad">
    </div>
    <div class="contenedor_g">
    <label for="nacionalidad" class="form-label">Nacionalidad</label>
    <input type="text" class="form-control" value="{{old('nacionalidad')}}" name="nacionalidad" id="nacionalidad">
    </div>
  <div class="contenedor_g">
    <label for="nombres" class="form-label">Nombres</label>
   <input class="form-control"  type="text" value="{{old('nombres')}}" name="nombres" id="nombres">
  </div>
  <div class="contenedor_g">
    <label for="primer_apellido" class="form-label">Apellidos</label>
   <input class="form-control"  type="text" value="{{old('apellidos')}}" name="apellidos" id="primer_apellido">
  </div>
  <div class="contenedor_g">
    <label for="fecha_nacimiento" class="form-label">Fecha de Nacimiento</label>
    <input class="form-control" name="fecha_nacimiento" value="{{old('fecha_nacimiento')}}" id="fecha_nacimiento"  type="date">
  </div>
  <div class="contenedor_g">
    <label for="telefono_celular" class="form-label">Telefono Celular</label>
    <input type="text" class="form-control" value="{{old('telefono_celular')}}" name="telefono_celular"  id="telefono_celular">
    </div>
    <div class="contenedor_g">
    <label for="telefono_celular2" class="form-label">Telefono Celular 2</label>
    <input type="text" class="form-control" value="{{old('telefono_celular2')}}" name="telefono_celular2"  id="telefono_celular2">
    </div>
    <div class="contenedor_g">
    <label for="sexo" class="form-label">Sexo</label>
    <select  class="form-select" name="sexo"  id="sexo">
      <option selected>Seleccione Sexo</option>
      <option value="MASCULINO">MASCULINO</option>
      <option value="FEMENINO">FEMENINO</option>
    </select>
  </div>
  <div class="contenedor_g">
    <label for="correo" class="form-label">Correo</label>
    <input type="email" class="form-control" value="{{old('correo')}}" name="correo" id="correo">
    </div>
    <div class="contenedor_g">
    <label for="correo2" class="form-label">Correo 2</label>
    <input type="email" class="form-control" value="{{old('correo2')}}" name="correo2"  id="correo2">
    </div>
  <div class="contenedor_g">
    <label  class="form-label">Con Ruc</label><br>
    <input class="form-check-input" id="ruc" onclick="activar()" name="con_ruc" type="radio" value="SI">
  <label class="form-check-label"  >
    SI
  </label>
  <input class="form-check-input" id="sin_ruc" onclick="desactivar()" name="con_ruc" type="radio"  value="NO">
  <label class="form-check-label" >
    NO
  </label>
  </div>
      <script>
        function activar(){
        let ruc=document.getElementById("ruc")
          if(ruc){
            let bloque_ruc=document.querySelector(".pdf_container")
            bloque_ruc.classList.add("pdf_container_activo")

          }
        }
        function desactivar(){
        let ruc=document.getElementById("ruc")
        let sin_ruc=document.getElementById("sin_ruc")
          if(sin_ruc){
            let bloque_ruc=document.querySelector(".pdf_container")
            bloque_ruc.classList.remove("pdf_container_activo")

          }
        }
      </script>
  <div class="pdf_container">
    <label  class="form-label"> RUC (.pdf)</label>
   <input class="form-control" type="file" value="{{old('pdf')}}"  name="pdf" id="pdf" >
  </div>

  </div> <!--  =========== -->
  
  <div>
    <h5 class="p-2">2.- FORMATO Y VIGENCIA DE FIRMA</h5>
  </div>
  <div class="bloque_dos">

  
  <div  class="contenedor_g">
    
    <label for="tipo_certificado" aria-label="Floating label select example" class="form-label">Tipo de Certificado</label>
    <select  class="form-select" name="tipo_certificado"   id="tipo_certificado">
      <option selected>Seleccione Certificado</option>
      <option value="ARCHIVO .P12">ARCHIVO P12</option>
      <option value="TOKEN">FIRMA EN TOKEN</option>
      <option value="NUBE">FIRMA EN NUBE</option>
    </select>
  </div>

  <div class="contenedor_g">
    <label for="vigencia" class="form-label">Tiempo de Vigencia</label>
    <select  class="form-select" name="vigencia" id="vigencia">
      <option selected>Seleccione Vigencia</option>
      <option value="1 año">1 año</option>
      <option value="2 años">2 años</option>
      <option value="3 años">3 años</option>
      <option value="4 años">4 años</option>
      <option value="5 años">5 años</option>
      <option value="6 años">6 años</option>
      <option value="7 años">7 días</option>
    </select>
  </div>
  </div>
  <div>
    <h5 class="p-2">3.- DIRECCIÓN DE DOMICILIO</h5>
  </div>
  <div class="bloque_dos">
  <div class="contenedor_g">
    <label for="provincia" class="form-label">Provincia</label>
                            <select id="provincia" name="provincia" class="form-select"  required="">
                                    <option value=""selected>Seleccione Provincia</option>
                                    @foreach($provincias as $item) 
                                    <option value="{{$item->id}}">{{$item->nombre}}</option> 
                                    @endforeach
                                 </select>
  </div>
  <div class="contenedor_g"> 
 <!--  <input type="text" value="{{old('ciudad')}}" class="form-control" name="ciudad" id="ciudad"> -->
    <label for="ciudad" class="form-label">Ciudad</label>
          <select id="ciudad" name="ciudad" class="form-select" >
        <!--     <option value=""></option> -->
          </select>
        
    </div>
    <div class="contenedor_g">
    <label for="direccion" class="form-label">Dirección</label>
    <input type="text" class="form-control" value="{{old('direccion')}}" name="direccion" id="direccion">
    </div>
    </div>

    <div>
      <h5 class="p-2">4.- ADJUNTAR DOCUMENTOS</h5>
    </div>
    <div class="bloque_dos">
  <div class="contenedor_g">
    <label  class="form-label">Cédula o pasaporte - anverso (.jpg - .png - foto celular)</label>
   <input class="form-control" type="file" value="{{old('imagen_anverso')}}"  name="imagen_anverso" id="imagen_anverso">
  </div>

  <div class="contenedor_g">
    <label  class="form-label">Cédula - reverso (.jpg - .png - foto celular)</label>
   <input class="form-control" type="file" value="{{old('imagen_reverso')}}"  name="imagen_reverso" id="imagen_reverso" >
  </div>

  
  <div class="contenedor_g">
    <label  class="form-label">  Foto selfie de su cara con su cédula debajo de la barbilla (.jpg - .png - foto celular)</label>
   <input class="form-control" type="file" value="{{old('imagen_selfie')}}"  name="imagen_selfie" id="imagen_selfie" >
  </div>
  </div>

  <br>
 
  </div>
        
 
  <div  class="d-flex justify-content-center"> 
  <button  id="enviar"  class="boton">Enviar Solicitud de Firma</button>
  <script>
    
         

          $("#enviar").click(function(e){
            
            let route=$("#dataprincipal").data("route");
            let form=$("#dataprincipal").attr("action");
          /* let image_data=cargar_img_documento.prop('files')[0];  */
              let con_ruc= document.querySelector('input[name="con_ruc"]:checked').value;
            let formData=new FormData();
              formData.append("dia_creado",$("#dia_creado").val());
              formData.append("numero_documento_identidad",$("#numero_documento_identidad").val());  
              formData.append("documento_identidad",$("#documento_identidad").val()); 
                formData.append("tipo_certificado",$("#tipo_certificado").val());
                
                formData.append("nombres",$("#nombres").val());
                formData.append("apellidos",$("#apellidos").val());
                formData.append("con_ruc",con_ruc);
                formData.append("sexo",$("#sexo").val());
                formData.append("fecha_nacimiento",$("#fecha_nacimiento").val());
                formData.append("nacionalidad",$("#nacionalidad").val());
                formData.append("telefono_celular",$("#telefono_celular").val());
                formData.append("telefono_celular2",$("#telefono_celular2").val());
                formData.append("correo",$("#correo").val());
                formData.append("correo2",$("#correo2").val());
                formData.append("provincia",$("#provincia").val());
                formData.append("ciudad",$("#ciudad").val());
                formData.append("direccion",$("#direccion").val());
                formData.append("vigencia",$("#vigencia").val());
               
                let imagen_anverso=$("#imagen_anverso")[0].files;
                formData.append("imagen_anverso",imagen_anverso[0]);
                let imagen_reverso=$("#imagen_reverso")[0].files;
                formData.append("imagen_reverso",imagen_reverso[0]);
                let pdf=$("#pdf")[0].files;
                formData.append("pdf",pdf[0]);
                let imagen_selfie=$("#imagen_selfie")[0].files;
                formData.append("imagen_selfie",imagen_selfie[0]);
                

               
      $.ajax({
        url:form,
        type:"POST",
        data:formData,
        contentType:false,
         cache: false,
        processData: false,
         beforeSend:function(){
          
        },
        success:function(response){
          $("#respuesta_exito").html("Exito")
        },
        error:function(error){
          console.log(error)
        } 
      })
      
       
      })
   /*  if ($("#dataprincipal").length>0){
      $("#dataprincipal").validate({
        rules:{
          numero_documento_identidad:{
            required:true,
          },
          documento_identidad:{
            required:true,
          },
          tipo_certificado:{
            required:true,
          },
          nombres:{
            required:true,
          },
          apellidos:{
            required:true,
          },
          con_ruc:{
            required:true,
          },
          sexo:{
            required:true,
          },
          fecha_nacimiento:{
            required:true,
          },
          nacionalidad:{
            required:true,
          },
          telefono_celular:{
            required:true,
          },
          telefono_celular2:{
            required:true,
          },
          correo:{
            required:true,
          },
          correo2:{
            required:true,
          },
          provincia:{
            required:true,
          },
          ciudad:{
            required:true,
          },
          direccion:{
            required:true,
          },
          vigencia:{
            required:true,
          },
          imagen_anverso:{
            required:true,
          },
          imagen_reverso:{
            required:true,
          },
          pdf:{
            required:true,
          },
          imagen_selfie:{
            required:true,
          }
        },
        messages:{
          numero_documento_identidad:{
            required:"Se requiere número de documento de identidad",
          },
          documento_identidad:{
            required:"Se requiere documento de identidad",
          },
          tipo_certificado:{
            required:"Se requiere certificado",
          },
          nombres:{
            required:"Se requiere nombres",
          },
          apellidos:{
            required:"Se requiere apellidos",
          },
          con_ruc:{
            required:"Se requiere RUC",
          },
          sexo:{
            required:"Se requiere el dato sexo",
          },
          fecha_nacimiento:{
            required:"Se requiere fecha de nacimiento",
          },
          nacionalidad:{
            required:"Se requiere el dato de nacionalidad",
          },
          telefono_celular:{
            required:"Se requiere telefono celular",
          },
          telefono_celular2:{
            required:"Se requiere telefono celular",
          },
          correo:{
            required:"Se requiere telefono correo",
          },
          correo2:{
            required:"Se requiere telefono correo",
          },
          provincia:{
            required:"Se requiere dato provincia",
          },
          ciudad:{
            required:"Se requiere dato ciudad",
          },
          direccion:{
            required:"Se requiere dato dirección",
          },
          vigencia:{
            required:"Se requiere dato vigencia",
          },
          imagen_anverso:{
            required:"Se requiere imagen de formato .jpg o .png o .jpeg",
          },
          imagen_reverso:{
            required:"Se requiere imagen de formato .jpg o .png o .jpeg",
          },
          pdf:{
            required:"Se requiere pdf de formato .pdf",
          },
          imagen_selfie:{
            required:"Se requiere imagen de formato .jpg o .png o .jpeg",
          }
        }
      })
    } */
   
   
   

   
  </script>
  </div>
</form>
  <script src="/assets/js/selectciudades.js"></script>       
</body>
</html>
    
    