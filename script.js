const form = document.getElementById('formIdeia');
const retorno = document.getElementById('retorno');

form.addEventListener('submit', (event) => {
  event.preventDefault();
  const nome = document.getElementById('nome').value.trim();
  const ideia = document.getElementById('ideia').value.trim();

  if (!nome || !ideia) {
    retorno.textContent = 'Preencha os dois campos para enviar.';
    return;
  }

  retorno.textContent = `Obrigado, ${nome}! Sua ideia foi registrada nesta demonstração.`;
  form.reset();
});