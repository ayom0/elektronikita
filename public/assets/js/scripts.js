document.getElementById('toggleSidebarBtn').addEventListener('click', function() {
    var sidebar = document.getElementById('sidebar');
    var mainContent = document.getElementById('mainContent');
    var toggleBtn = document.getElementById('toggleSidebarBtn');

    sidebar.classList.toggle('closed');
    mainContent.classList.toggle('collapsed');
    toggleBtn.classList.toggle('collapsed');
});

document.getElementById('addUserBtn').addEventListener('click', function() {
    document.getElementById('userModal').style.display = 'flex';
});

document.querySelector('.modal .close').addEventListener('click', function() {
    document.getElementById('userModal').style.display = 'none';
});

// Optional: Add form submission handling
document.getElementById('userForm').addEventListener('submit', function(event) {
    event.preventDefault();
    // Add user to table or perform form submission here
    document.getElementById('userModal').style.display = 'none';
});
