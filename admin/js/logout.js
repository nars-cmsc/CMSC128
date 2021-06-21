var modal = document.getElementById('logoutModal');
var closeBtn = document.getElementsByClassName('closeBtn')[0];

closeBtn.addEventListener('click', closeModal);
window.addEventListener('click', clickOutside);

function closeModal(){
	modal.style.display = 'none';
}

function clickOutside(e){
	if(e.target == modal){
		modal.style.display = 'none';
	}
}