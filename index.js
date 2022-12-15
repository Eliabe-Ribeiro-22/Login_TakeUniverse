let email = document.getElementById('email');
let password = document.getElementById('password');

function toast({ type, isLoggedIn = false }) {
  return Toastify({
    text: isLoggedIn ? 'Logado com sucesso' : `Preencha o campo ${type}`,
    duration: 3000,
    close: true,
    gravity: "top", // `top` or `bottom`
    position: "right", // `left`, `center` or `right`
    stopOnFocus: true, // Prevents dismissing of toast on hover
    style: {
      background: isLoggedIn ? '#84cc16' : "#b91c1c",
      color: "#fff",
      fontSize: "1.5rem",
      fontFamily: "Poppins"
    },
  }).showToast(type)
}

// função que mostra o toast somente quando os campos não estiverem preenchido
function validateForm() {
	
  if (!email.value) {
	//se não existir um email
    alert("O campo email não pode ficar vazio!")
    return false;
  }

  if (!password.value) {
    alert("O campo senha não pode ficar vazio!")
    return false;
  }

 
  return true;

}
