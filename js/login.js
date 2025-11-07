
// Simulación de usuarios registrados (podés cambiar o agregar más) 
const usuarios = [ 
 
  { username: "admin", password: "12345" }, 
  { username: "adrian", password: "clave2025" }, 
  { username: "usuario", password: "test" } 
]; 
 
// Captura del formulario 
document.getElementById("loginForm").addEventListener("submit", function (event) 
{ 
  event.preventDefault(); 
  const name = document.getElementById("name").value.trim(); 
  const lastname = document.getElementById("lastname").value.trim(); 
  const username = document.getElementById("username").value.trim(); 
  const password = document.getElementById("password").value.trim(); 
  const message = document.getElementById("message"); 
 
  // Verificar usuario 
  const userFound = usuarios.find( 
    (user) => user.username === username && user.password === password 
  ); 
 
  if (userFound) { 
    message.style.color = "lightgreen"; 
    message.textContent = "✅Inicio de sesión exitoso. Redirigiendo..."; 
    // Simular redirección 
    setTimeout(() => { 
      window.location.href = "pagina-principal.html"; // tu página principal 
    }, 1500); 
  } else { 
    message.style.color = "red"; 
    message.textContent = " ❌Usuario o contraseña incorrectos."; 
  } 
})