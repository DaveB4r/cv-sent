export default function changeTheme(theme) {
  const body = document.body;
  const main = document.querySelector('main');
  const icon = document.getElementById('theme-icon');
  const nav = document.querySelector('nav');
  const navItems = document.querySelectorAll('li.nav-item');
  const icons = document.querySelectorAll('i');
  const inputs = document.querySelectorAll('input');
  const sections = document.querySelectorAll('section');
  const tables = document.querySelectorAll('table');
  const ths = document.querySelectorAll('th');
  const tds = document.querySelectorAll('td');
  const cards = document.querySelectorAll('.card');
  const uls = document.querySelectorAll('ul');
  const lis = document.querySelectorAll('li');
  const modals = document.querySelectorAll('.modal-content');
  const selects = document.querySelectorAll('select');
  const ps = document.querySelectorAll('p');
  const as = document.querySelectorAll('a');
  const h1s = document.querySelectorAll('h1');
  const h2s = document.querySelectorAll('h2');
  const h3s = document.querySelectorAll('h3');
  const h4s = document.querySelectorAll('h4');
  const h5s = document.querySelectorAll('h5');
  const h6s = document.querySelectorAll('h6');
  const labels = document.querySelectorAll('label');
  const spans = document.querySelectorAll('span');
  const buttons = document.querySelectorAll('button')
  const structureTags = [body, main, ...inputs, ...sections, ...tables, ...ths, ...tds, ...cards, ...uls, ...lis, ...modals, ...selects, ...buttons];
  const textTags = [...ps, ...icons, ...inputs, ...as, ...h1s, ...h2s, ...h3s, ...h4s, ...h5s, ...h6s, ...ths, ...tds, ...labels, ...spans,...selects, ...buttons];

  if (theme == 'dark') { // dark
    if (icon) icon.className = 'fa-regular fa-moon';
    textTags.forEach(icon => {
      icon.classList.add('text-white');
    });
    structureTags.forEach(tag => {
      if (tag) {
        tag.classList.add("bg-dark");
        tag.classList.remove("bg-light");
        tag.style.borderColor = "#fff"
      }
    });
    if (nav) {
      nav.classList.add("dark-css");
      nav.classList.remove("light-css");
      navItems.forEach(navItem => {
        navItem.classList.add("dark-css");
        navItem.classList.remove("light-css");
        navItem.classList.remove("bg-dark");
        navItem.classList.remove("bg-light");
      })
    }

  } else { // light
    if (icon) icon.className = 'fa-regular fa-sun';
    textTags.forEach(icon => {
      icon.classList.remove('text-white');
    });
    structureTags.forEach(tag => {
      if (tag) {
        tag.classList.remove("bg-dark");
        tag.classList.add("bg-light");
        tag.style.borderColor = "#c7c7c7"
      }
    });
    if (nav) {
      nav.classList.add("light-css");
      nav.classList.remove("dark-css");
      navItems.forEach(navItem => {
        navItem.classList.add("light-css");
        navItem.classList.remove("dark-css");
        navItem.classList.remove("bg-dark");
        navItem.classList.remove("bg-light");
      })
    }
  }

}