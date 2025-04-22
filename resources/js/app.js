const dropdownLangButton = document.getElementById('dropdownLangButton');
const dropdownLang = document.getElementById('dropdownLang');
const dropdownMenuButton = document.getElementById('dropdownMenuButton');
const dropdownMenu = document.getElementById('dropdownMenu');

dropdownLangButton.addEventListener('mouseenter', () => {
  dropdownLang.classList.remove('hidden');
});

dropdownLangButton.addEventListener('mouseleave', () => {
  // Añadimos un pequeño retraso para permitir que el cursor se mueva al menú
  setTimeout(() => {
    if (!dropdownLang.matches(':hover') && !dropdownLangButton.matches(':hover')) {
      dropdownLang.classList.add('hidden');
    }
  }, 150); // Ajusta el tiempo del retraso si es necesario
});

dropdownLang.addEventListener('mouseleave', () => {
  dropdownLang.classList.add('hidden');
});






dropdownMenuButton.addEventListener('mouseenter', () => {
    dropdownMenu.classList.remove('hidden');
  });
  
  dropdownMenuButton.addEventListener('mouseleave', () => {
    // Añadimos un pequeño retraso para permitir que el cursor se mueva al menú
    setTimeout(() => {
      if (!dropdownMenu.matches(':hover') && !dropdownMenuButton.matches(':hover')) {
        dropdownMenu.classList.add('hidden');
      }
    }, 150); // Ajusta el tiempo del retraso si es necesario
  });
  
  dropdownMenu.addEventListener('mouseleave', () => {
    dropdownMenu.classList.add('hidden');
  });