import logout from "./logout.js";
import changeTheme from "./theme.js";
import { insertPlatform } from "./platforms.js";

// Logout
const logoutBtn = document.getElementById('logout');
if (logoutBtn) logoutBtn.addEventListener('click', () => logout());

// Theme
const theme = localStorage.getItem("theme") ? localStorage.getItem("theme") : "light";
const themeBtn = document.getElementById('theme-btn');
if (themeBtn) {
  if (theme == 'dark') themeBtn.checked = true
  themeBtn.addEventListener('click', () => {
    themeBtn.checked ? localStorage.setItem("theme", "dark") : localStorage.setItem("theme", "light");
    changeTheme(localStorage.getItem("theme"));
  });

  changeTheme(theme);
}

// Platforms
const createPlatformForm = document.getElementById('create_platform');
if (createPlatformForm) {
  createPlatformForm.addEventListener('submit', e => {
    e.preventDefault();
    insertPlatform(createPlatformForm);
  })
}