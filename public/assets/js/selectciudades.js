    const csrfToken=document.head.querySelector("[name~=csrf-token][content]").content;
   let que_ciudad= document.getElementById('provincia')
  
            que_ciudad.addEventListener('change',(ev)=>{
              let valor= ev.target.value
              console.log(ev.target.value)
              fetch('ciudad',{
                method:'POST',
                body:JSON.stringify({texto:ev.target.value}),
                headers:{
                  'Content-Type':'application/json',
                  'X-CSRF-Token':csrfToken
                }
              }).then(response=>{
                return response.json()
              }).then(data=>{
                let opciones="";
                for (let i in data.lista) {
                  opciones+=' <option  value="'+data.lista[i].nombre+'">'+data.lista[i].nombre+'</option> '  
                  
               }
               document.getElementById('ciudad').innerHTML=opciones
              }).catch(err=>console.error(err))
                 
            })
        
              console.log('Muestro:')
           
       