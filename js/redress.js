const labelFI = document.querySelector('labelFI');
function onEnter() { labelFI.classList.add('active');
}
function onLeave() { labelFI.classList.remove('active'); }
labelFI.addEventListener('dragenter', onEnter);
labelFI.addEventListener('drop', onLeave);
labelFI.addEventListener('dragleave', onLeave);
labelFI.addEventListener('dragexit', onLeave);
labelFI.addEventListener('dragend', onLeave); 
const input = document.querySelector('input'); 
input.addEventListener('change', event =>{
 if (input.files.length > 0) 
 {
  // A file was selected
 }
})



