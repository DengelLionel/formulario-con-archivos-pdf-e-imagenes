let admin=()=>{
    let res=prompt("Escriba su contraseña")
    if(res==="curiosopuntocom"){
      alert("Contraseña correcta")
      $("#AdexampleModal").modal("show")
    }else{
      alert("Contraseña incorrecta")
    }

  }