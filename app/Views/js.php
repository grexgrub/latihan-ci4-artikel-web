<script>
$(document).ready(function(){
const loading = document.querySelector('.loading');
const box = document.querySelector('.box-loading');

function load(second){
box.style.transform = 'translateX(0%)' 
function berhenti() {
  clearInterval(waktu) 
}
  const masadepan = Date.now() + second * 1000;
  let waktu = setInterval(() => {
    let time = Date.now();
    loading.style.width = 280 - (280/((masadepan - time)/1000)) + 'px';  
    if (((masadepan - time)/1000) < 1 ){
      berhenti();
      hilangkan()
    }
  }, 1);
}


function hilangkan(){
 box.style.transform = 'translateX(200%)' 
}

load(5)
})
</script>
