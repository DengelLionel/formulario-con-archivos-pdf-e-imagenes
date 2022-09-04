<div class="table-responsive">
          <h5>REPRESENTANTE LEGAL O PERSONA JURIDICA</h5>
        <table class="table table-striped">
        <thead  class="table-dark">
          <tr> 
          <th>N°</th>
          <th>Fecha de creación de registro</th>
          <th>Nombres</th>
          <th>Apellidos</th>
          <th>Numero Documento de Identidad</th>
          <th>Certificado</th>
          <th>Documento de Identidad</th>
          <th>N° Ruc</th>
          <th>Razon Social</th>
          <th>Cargo Representante</th>
          <th>Sexo</th>
          <th>Fecha de Nacimiento</th>
          <th>Nacionalidad</th>
          <th>Teléfonos celular</th>
          <th>Correos</th>
          <th>Provincia</th>
          <th>Ciudad</th>
          <th>Dirección</th>
          <th>Tiempo de Vigencia</th>
          <th>Imagenes</th>  
          <th>PDFs</th> 
          </tr>        
        </thead>
        <tbody>
          
         
          
            
            
            @foreach($legales as $dato)
             
           
              <tr> 
                 
               
                  <td> {{ $dato->id}}</td>
                  <td>{{ $dato->dia_creado}}</td>
                   <td>{{ $dato->nombres}}</td>
                  <td>{{ $dato->apellidos}}</td>
                  <td>{{ $dato->numero_documento}}</td>
                  <td>{{ $dato->tipo_certificado}}</td>
               <td>{{ $dato->documento_identidad}}</td>
                  <td>{{ $dato->numero_ruc}}</td>
                  <td>{{ $dato->razon_social}}</td>
                  <td>{{ $dato->cargo_representante}}</td>
               <td>{{ $dato->sexo}}</td>
                <td>{{ $dato->fecha_nacimiento}}</td>
                 <td>{{ $dato->nacionalidad}}</td>
                  <td><ol><li>{{ $dato->telefono_celular}}</li> <li>{{ $dato->telefono_celular2}}</li></ol> </td>
                  <td><ol><li>{{ $dato->correo}}</li> <li>{{ $dato->correo2}}</li></ol> </td>
                <td>{{ $dato->provincia}}</td>
                  <td>{{ $dato->ciudad}}</td>
                  <td>{{ $dato->direccion}}</td>
                 <td>{{ $dato->vigencia}}</td>
                  <td>
                    <div class="d-flex flex-row mb-3">
                  <a class="btn btn-success m-1" href='representanteLegal/anverso/{{ $dato->imagen_anverso}} ' download alt="">Imagen Anverso</a>
                  <a class="btn btn-info m-1" href='representanteLegal/reverso/{{ $dato->imagen_reverso}} ' download alt="">Imagen Reverso</a>
                  <a class="btn btn-secondary m-1" href='representanteLegal/selfie/{{ $dato->imagen_selfie}} ' download alt="">Imagen Selfie</a>
                  </div>
                  </td>
                 <td>
                 <a class="btn btn-danger" href='representanteLegal/pdf/{{ $dato->pdf}} ' download alt="">PDF RUC</a>
                 <a class="btn btn-danger" href='representanteLegal/constitucionCompañia/{{ $dato->constitucion_compañia}} ' download alt="">Constitución de compañia</a>
                 <a class="btn btn-danger" href='representanteLegal/nombramiento/{{ $dato->nombramiento}} ' download alt="">Nombramiento</a>
                 </td>
                </tr>
                @endforeach
            
              
          
          

        </tbody>
        </table>
        </div>