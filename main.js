const panels = document.querySelectorAll('.panel');

panels.forEach(panel => {

  // CLICK
  panel.addEventListener('click', () => {
    removeActiveClasses();
    panel.classList.add('active');
  });

  
  panel.addEventListener('mouseleave', () => {
    if (!panel.classList.contains('clicked')) {
      panel.classList.remove('active');
    }
  });

});

function removeActiveClasses() {
  panels.forEach(panel => {
    panel.classList.remove('active');
  });
}