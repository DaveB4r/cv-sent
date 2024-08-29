export default function paginator(page, orderBy) {
  const iframe = document.getElementById('iframe-jobs');
  if (iframe) iframe.src = `/jobs-info?page=${page}&order=${orderBy}`
  const btns = document.querySelectorAll('.page-link');
  btns.forEach(btn => {
    btn.classList.remove('page-active');
  });
  if (document.getElementById(page)) document.getElementById(page).classList.add('page-active');
}