var modalLogout = document.getElementById('logoutModal');

window.addEventListener('click', clickOutside);

function clickOutside(e){
	if(e.target == modalLogout){
		modalLogout.style.display = 'none';
	}
}