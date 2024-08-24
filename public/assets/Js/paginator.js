export default function paginator(page) {
  const iframe = document.getElementById('iframe-jobs');
  if (iframe) iframe.src = `/jobs-info?page=${page}`
  const btns = document.querySelectorAll('.page-link');
  btns.forEach(btn => {
    btn.classList.remove('page-active');
  });
  document.getElementById(page).classList.add('page-active');
}