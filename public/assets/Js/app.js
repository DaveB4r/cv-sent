import logout from "./logout.js";
import changeTheme from "./theme.js";


// Logout
const logoutBtn = document.getElementById('logout');
logoutBtn.addEventListener('click', () => logout());

// Theme
const theme = localStorage.getItem("theme") ? localStorage.getItem("theme") : "light";
const themeBtn = document.getElementById('theme-btn');
if(theme == 'dark') themeBtn.checked = true
themeBtn.addEventListener('click', () => {
  themeBtn.checked ? localStorage.setItem("theme", "dark") : localStorage.setItem("theme", "light");
  changeTheme(localStorage.getItem("theme"));
});

changeTheme(theme);