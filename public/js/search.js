
window.addEventListener('DOMContentLoaded', function() {
document.getElementById('btn-search').addEventListener('click', function() {
    const searchQuery = document.getElementById('search').value.toLowerCase();
    const cards = document.querySelectorAll('#cards');
  
    cards.forEach(card => {
      const courseName = card.getAttribute('data-course-name').toLowerCase();
      const teacherName = card.getAttribute('data-teacher-name').toLowerCase();
      const price = card.getAttribute('data-price');
  
      if (courseName.includes(searchQuery) || teacherName.includes(searchQuery) || price.includes(searchQuery)) {
        card.style.display = 'block';
      } else {
        card.style.display = 'none';
      }
    });

    
  });
  
});