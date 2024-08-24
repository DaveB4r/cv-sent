import logout from "./logout.js";
import changeTheme from "./theme.js";
import { insertData } from "./data.js";
import paginator from "./paginator.js";

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

}
changeTheme(theme);

// Platforms
const createPlatformForm = document.getElementById('create_platform');
if (createPlatformForm) {
  createPlatformForm.addEventListener('submit', e => {
    e.preventDefault();
    insertData(createPlatformForm, '/insert-platform', 'iframe-platforms', 'platform');
    createPlatformForm.reset();
  })
}

// Stacks
const createStackForm = document.getElementById('create_stack');
if (createStackForm) {
  createStackForm.addEventListener('submit', e => {
    e.preventDefault();
    insertData(createStackForm, '/insert-stack', 'iframe-stacks', 'stack');
    createStackForm.reset();
  })
};

// Jobs
const createJobForm = document.getElementById('create_job');
if (createJobForm) {
  createJobForm.addEventListener('submit', e => {
    e.preventDefault();
    insertData(createJobForm, '/insert-job', 'iframe-jobs', 'job');
    createJobForm.reset();
    document.getElementById('createJobModal').classList.remove('show');
    document.body.classList.remove('modal-open');
    document.querySelector('.modal-backdrop').classList.remove('show');
  })
}

// Paginator
const paginatorbtns = document.querySelectorAll('.paginator');
let currentPage = 1;
let lastPage = false;
let firstPage = true;
const previousPage = document.getElementById('previous-page');
if (firstPage && previousPage) previousPage.disabled = firstPage;
const nextPage = document.getElementById('next-page');
paginator(currentPage)
paginatorbtns.forEach(btn => {
  btn.addEventListener('click', () => {
    previousPage.disabled = currentPage === 1;
    if (btn.id === 'previous-page') {
      currentPage--
    } else if (btn.id === 'next-page') {
      currentPage++
    } else {
      currentPage = btn.id
    }
    paginator(currentPage);
    firstPage = currentPage == 1;
    lastPage = currentPage == paginatorbtns.length - 2
    if (previousPage) previousPage.disabled = firstPage;
    if (nextPage) nextPage.disabled = lastPage;
  })
})