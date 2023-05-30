
const alertPlaceholder = document.getElementById('liveAlertPlaceholder')
const appendAlert = (message,type) => {
  const wrapper = document.createElement('div')
  wrapper.innerHTML = [
    `<div class="alert alert-${type} alert-dismissible" role="alert">`,
    `   <div>${message}</div>`,
    '   <button type="submit" id="delete" ><i class="fa-solid fa-trash"></i></button>',
    '</div>'
  ].join('')

  alertPlaceholder.append(wrapper)
}


const alertTrigger = document.getElementsByClassName('btn-danger')
for(let i=0;i<alertTrigger.length;i++){
    alertTrigger[i].addEventListener('click', () =>{
        appendAlert('are you sure?', 'danger')
        
        console.log(i)

    })
}

