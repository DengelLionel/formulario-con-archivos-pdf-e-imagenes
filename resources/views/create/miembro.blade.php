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
<form method="POST" name="dataprincipal" id="dataprincipal" action="{{route('miembrodeempresa.store')}}" enctype="multipart/form-data">
          @csrf
          <div>
          <h2 class="text-center">SOLICITUD DE FIRMA ELECTRONICA - PARA MIEMBRO DE EMPRESA</h2>
  <h5 class="p-2">1.- DATOS DE LA EMPRESA</h5>
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
    <label for="numero_ruc" class="form-label">Número de RUC</label>
    <input type="text" value="{{old('numero_ruc')}}" class="form-control"name="numero_ruc"  id="numero_ruc">
    </div>

    <div class="contenedor_g">
    <label for="razon_social" class="form-label">Razón Social</label>
    <input type="text" value="{{old('razon_social')}}" class="form-control"name="razon_social"  id="razon_social">
    </div>
    <div class="contenedor_g">
    <label for="cargo_del_miembro" class="form-label">Cargo del Miembro Empresa</label>
    <input type="text" value="{{old('cargo_del_miembro')}}" class="form-control"name="cargo_del_miembro"  id="cargo_del_miembro">
    </div>

  </div> <!--  =========== -->
  

  <!-- _____  2   ______ -->
  <div>
    <h5 class="p-2">2.- INFORMACIÓN DEL MIEMBRO DE EMPRESA</h5>
  </div>
  <div class="bloque_dos">
  <div class="contenedor_g"> 
    <label for="documento_identidad_miembro_empresa" aria-label="Floating label select example" class="form-label">Tipo de Documento</label>
    <select  class="form-select" name="documento_identidad_miembro_empresa" id="documento_identidad_miembro_empresa">
      <option selected>Seleccione Identidad</option>
      <option value="CEDULA">CEDULA</option>
      <option value="PASAPORTE">PASAPORTE</option>
    </select>
    </div>
 
    <input type="hidden" name="dia_creado" id="dia_creado" value="{{date('Y-m-d')}}">
    <div class="contenedor_g">
    <label for="numero_documento_miembro_empresa" class="form-label">No. de Documento</label>
    <input type="text" class="form-control" value="{{old('numero_documento_miembro_empresa')}}" name="numero_documento_miembro_empresa" id="numero_documento_miembro_empresa">
    </div>
    <div class="contenedor_g">
    <label for="nacionalidad" class="form-label">Nacionalidad</label>
    <input type="text" class="form-control" value="{{old('nacionalidad')}}" name="nacionalidad" id="nacionalidad">
    </div>
  <div class="contenedor_g">
    <label for="nombres" class="form-label">Nombres</label>
   <input class="form-control"  type="text" value="{{old('nombres_miembro')}}" name="nombres_miembro" id="nombres_miembro">
  </div>
  <div class="contenedor_g">
    <label for="apellidos" class="form-label">Apellidos</label>
   <input class="form-control"  type="text" value="{{old('apellidos_miembro')}}" name="apellidos_miembro" id="apellidos_miembro">
  </div>
  <div class="contenedor_g">
    <label for="apellidos" class="form-label">Departamento que labora</label>
   <input class="form-control"  type="text" value="{{old('departamento_que_labora')}}" name="departamento_que_labora" id="departamento_que_labora">
  </div>
  <div class="contenedor_g">
    <label for="fecha_nacimiento" class="form-label">Fecha de Nacimiento</label>
    <input class="form-control" name="fecha_nacimiento" value="{{old('fecha_nacimiento')}}" id="fecha_nacimiento"  type="date">
  </div>
  <div class="contenedor_g">
    <label for="telefono_celular" class="form-label">Celular</label>
    <input type="text" class="form-control" value="{{old('telefono_celular')}}" name="telefono_celular"  id="telefono_celular">
    </div>
    <div class="contenedor_g">
    <label for="telefono_celular2" class="form-label">Celular 2</label>
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
  <!-- /////   FINALIZA 2        /////// -->
      
  </div>
  <div>
    <h5 class="p-2">3.- INFORMACIÓN DEL REPRESENTANTE LEGAL </h5>
  </div>
  <div class="bloque_dos">

  <div class="contenedor_g"> 
    <label for="documento_identidad_representante_legal" aria-label="Floating label select example" class="form-label">Tipo de Documento</label>
    <select  class="form-select" name="documento_identidad_representante_legal" id="documento_identidad_representante_legal">
      <option selected>Seleccione Identidad</option>
      <option value="CEDULA">CEDULA</option>
      <option value="PASAPORTE">PASAPORTE</option>
    </select>
    </div>
    <div class="contenedor_g">
    <label for="numero_documento_representante_legal" class="form-label">No. de Documento</label>
    <input type="text" class="form-control" value="{{old('numero_documento_representante_legal')}}" name="numero_documento_representante_legal" id="numero_documento_representante_legal">
    </div>
 
  <div class="contenedor_g">
    <label for="cargo_representante" class="form-label">Cargo del Represente Legal</label>
    <input type="text" value="{{old('cargo_representante')}}" class="form-control"name="cargo_representante"  id="cargo_representante">
    </div>
    <div class="contenedor_g">
    <label for="nombres_representante_legal" class="form-label">Nombres</label>
   <input class="form-control"  type="text" value="{{old('nombres_representante_legal')}}" name="nombres_representante_legal" id="nombres_representante_legal">
  </div>
  <div class="contenedor_g">
    <label for="apellidos_representante_legal" class="form-label">Apellidos</label>
   <input class="form-control"  type="text" value="{{old('apellidos_representante_legal')}}" name="apellidos_representante_legal" id="apellidos_representante_legal">
  </div>
  <div class="contenedor_g">
    <label for="motivo_uso_firma" class="form-label">Motivo / uso de la firma</label>
   <input class="form-control"  type="text" value="{{old('motivo_uso_firma')}}" name="motivo_uso_firma" id="motivo_uso_firma">
  </div>
  


 

  <!-- ////    FINALIZA 3        ////// -->
  </div>


  <div>
    <h5 class="p-2">4.- FORMATO Y VIGENCIA DE FIRMA </h5>
  </div>
  <div class="bloque_dos">
  <div  class="contenedor_g">
     
     <label for="tipo_certificado" aria-label="Floating label select example" class="form-label">Formato</label>
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

    <!-- //////  FINALIZA 4   ///// -->
    <div>
      <h5 class="p-2">5.- DIRECCIÓN COMO CONSTA EN EL RUC DE CIA </h5>
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
    <label for="ciudad" class="form-label">Ciudad</label>
    <select id="ciudad" name="ciudad" class="form-select" >
        <!--     <option value=""></option> -->
          </select>
    </div>
    <div class="contenedor_g">
    <label for="direccion" class="form-label">Dirección /calle/mz./solar</label>
    <input type="text" class="form-control" value="{{old('direccion')}}" name="direccion" id="direccion">
    </div>
  </div>
  <div>
      <h5 class="p-2">6.- ADJUNTAR DOCUMENTOS </h5>
    </div>
  <div class="bloque_dos" >
  <div class="contenedor_g">
    <label  class="form-label">1.-Cédula o pasaporte - anverso (.jpg - .png - foto celular (2Mb)) Representante Legal </label>
   <input class="form-control" type="file" value="{{old('imagen_anverso')}}"  name="imagen_anverso" id="imagen_anverso">
  </div>

  <div class="contenedor_g">
    <label  class="form-label">2.- Cédula - reverso (.jpg - .png - foto celular (2Mb)) Representante Legal</label>
   <input class="form-control" type="file" value="{{old('imagen_reverso')}}"  name="imagen_reverso" id="imagen_reverso" >
  </div>
  <div class="contenedor_g">
    <label  class="form-label">3.- RUC (.pdf) Empresa</label>
   <input class="form-control" type="file" value="{{old('pdf')}}"  name="pdf" id="pdf" >
  </div>
  
  <div class="contenedor_g">
    <label  class="form-label">4.-  Foto selfie de su cara con su cédula debajo de la barbilla (.jpg - .png - foto celular) </label>
   <input class="form-control" type="file" value="{{old('imagen_selfie')}}"  name="imagen_selfie" id="imagen_selfie" >
  </div>
  <div class="contenedor_g">
    <label  class="form-label">5.- constitucion de compañía (.pdf) - Empresa</label>
   <input class="form-control" type="file" value="{{old('constitucion_compañia')}}"  name="constitucion_compañia" id="constitucion_compañia" >
  </div>
  <div class="contenedor_g">
    <label  class="form-label"> 6.- Nombramiento (.pdf) - Representante Legal</label>
   <input class="form-control" type="file" value="{{old('nombramiento')}}"  name="nombramiento" id="nombramiento" >
  </div>
  <div class="contenedor_g">
    <label  class="form-label"> 7.- Carta de autorización del representante legal al miembro de empresa. (.pdf)</label>
   <input class="form-control" type="file" value="{{old('autorizacion_representante')}}"  name="autorizacion_representante" id="autorizacion_representante" >
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
             
            let formData=new FormData();
              formData.append("dia_creado",$("#dia_creado").val());
              formData.append("numero_ruc",$("#numero_ruc").val());
                formData.append("razon_social",$("#razon_social").val());
                formData.append("cargo_del_miembro",$("#cargo_del_miembro").val());
              formData.append("numero_documento_miembro_empresa",$("#numero_documento_miembro_empresa").val());  
              formData.append("documento_identidad_miembro_empresa",$("#documento_identidad_miembro_empresa").val()); 
                formData.append("tipo_certificado",$("#tipo_certificado").val());
                formData.append("departamento_que_labora",$("#departamento_que_labora").val());
                formData.append("cargo_representante",$("#cargo_representante").val());
                formData.append("numero_documento_representante_legal",$("#numero_documento_representante_legal").val());
                formData.append("documento_identidad_representante_legal",$("#documento_identidad_representante_legal").val());
                
                formData.append("nombres_miembro",$("#nombres").val());
                formData.append("apellidos_miembro",$("#apellidos").val());
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
                formData.append("motivo_uso_firma",$("#motivo_uso_firma").val());
                formData.append("apellidos_representante_legal",$("#apellidos_representante_legal").val());
                formData.append("nombres_representante_legal",$("#nombres_representante_legal").val());
                
                let imagen_anverso=$("#imagen_anverso")[0].files;
                formData.append("imagen_anverso",imagen_anverso[0]);
                let imagen_reverso=$("#imagen_reverso")[0].files;
                formData.append("imagen_reverso",imagen_reverso[0]);
                let pdf=$("#pdf")[0].files;
                formData.append("pdf",pdf[0]);
                let imagen_selfie=$("#imagen_selfie")[0].files;
                formData.append("imagen_selfie",imagen_selfie[0]);
                let constitucion_compañia=$("#constitucion_compañia")[0].files;
                formData.append("constitucion_compañia",constitucion_compañia[0]);
                let nombramiento=$("#nombramiento")[0].files;
                formData.append("nombramiento",nombramiento[0]);
                let autorizacion_representante=$("#autorizacion_representante")[0].files;
                formData.append("autorizacion_representante",autorizacion_representante[0]);
                

               
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
    if ($("#dataprincipal").length>0){
      $("#dataprincipal").validate({
        rules:{
            cargo_del_miembro:{
                required:true,
            },
            numero_documento_miembro_empresa:{
            required:true,
          }, 
          numero_ruc:{
            required:true,
          },
          motivo_uso_firma:{
            required:true,
          },
          apellidos_representante_legal:{
            required:true,
          },
          nombres_representante_legal:{
            required:true,
          },
          numero_documento_representante_legal:{
            required:true,
          },
          documento_identidad_representante_legal:{
            required:true,
          },
          razon_social:{
            required:true,
          },
          cargo_representante:{
            required:true,
          },
          documento_identidad_miembro_empresa:{
            required:true,
          },
          departamento_que_labora:{
            required:true,
          },
          tipo_certificado:{
            required:true,
          },
          nombres_miembro:{
            required:true,
          },
          nombres_miembro:{
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
          },
          constitucion_compañia:{
            required:true,
          },
          nombramiento:{
            required:true,  
          },
          autorizacion_representante:{
              required:true,
          },
        },
        messages:{
            numero_ruc:{
            required:"Requiere ruc",
          },
          razon_social:{
            required:"Requiere razon social",
          },
          documento_identidad_miembro_empresa:{
            required:"Requiere documento de identidad",
          },
          departamento_que_labora:{
            required:"Requiere",
          },
          motivo_uso_firma:{
            required:"Requiere",
          },
          cargo_representante:{
            required:"Requiere cargo del representante",
          },
          cargo_del_miembro:{
                required:"Requiere cargo del miembro",
            },
          numero_documento_miembro_empresa:{
            required:"Se requiere número de documento de identidad",
          },
          numero_documento_representante_legal:{
            required:"Se requiere número de documento de identidad",
          },
          documento_identidad_representante_legal:{
            required:"Se requiere documento de identidad",
          },
        
          tipo_certificado:{
            required:"Se requiere certificado",
          },
          nombres_representante_legal:{
            required:"Se requiere nombres",
          },
          apellidos_representante_legal:{
            required:"Se requiere apellidos",
          },
          nombres_miembro:{
            required:"Se requiere nombres",
          },
          apellidos_miembro:{
            required:"Se requiere apellidos",
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
          },
          constitucion_compañia:{
            required:"Se requiere pdf ",
          },
          nombramiento:{
            required:"Se requiere pdf ",  
          },
          autorizacion_representante:{
            required:"Se requiere pdf ",
          },
        }
      })
    }
   
   
   

   
  </script>
  </div>
</form>
<script src="/assets/js/selectciudades.js"></script>    
</body>
</html>
    
    