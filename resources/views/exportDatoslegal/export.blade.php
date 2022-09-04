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
          </tr>        
        </thead>
        <tbody>
          
         
          
            
            
            @foreach($datoslegal as $dato)
             
           
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
                 
                </tr>
                @endforeach
            
              
          
          

        </tbody>
        </table>