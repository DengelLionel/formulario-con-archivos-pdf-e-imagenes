<table >
        <thead >
          <tr> 
          <th>N°</th>
          <th>Fecha de creación de registro</th>
          <th>Nombres y Apellidos de miembro</th>
          <th>Nombres y Apellidos de representante</th>
          <th>Numero Documento (Miembro E.)</th>
          <th>Numero Documento (Representante L.)</th>
          <th>Certificado</th>
          <th>Documento de I. (Miembro E.)</th>
          <th>Documento de I. (Representante L.)</th>
          <th>N° Ruc</th>
          <th>Razon Social</th>
          <th>Cargo Representante</th>
          <th>Cargo del miembro</th>
          <th>Departamento que labora</th>
          <th>Motivo uso firma</th>
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
          
         
          
            
            
            @foreach($miembro as $dato)
             
           
              <tr> 
                 
               
                  <td> {{ $dato->id}}</td>
                  <td>{{ $dato->dia_creado}}</td>
                   <td>{{ $dato->nombres_miembro }} {{$dato->apellidos_miembro}}</td>
                  <td>{{$dato->nombres_representante_legal}} {{$dato->apellidos_representante_legal }}</td>
                  <td>{{ $dato->numero_documento_miembro_empresa}}</td>
                  <td>{{ $dato->numero_documento_representante_legal}}</td>
                  <td>{{ $dato->tipo_certificado}}</td>
               <td>{{ $dato->documento_identidad_miembro_empresa}}</td>
               <td>{{ $dato->documento_identidad_representante_legal}}</td>
                  <td>{{ $dato->numero_ruc}}</td>
                  <td>{{ $dato->razon_social}}</td>
                  <td>{{ $dato->cargo_representante}}</td>
                  <td>{{ $dato->cargo_del_miembro}}</td>
                  <td>{{ $dato->departamento_que_labora}}</td>
                  <td>{{ $dato->motivo_uso_firma}}</td>
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