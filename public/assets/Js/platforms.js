export async function insertPlatform(frm) {
  const formData = new FormData(frm);
  const response = await fetch('/insert-platform', {
    method: 'POST',
    body: formData
  })
  if (response.ok) {
    const data = await response.json();
    const message = document.getElementById('platform-message');
    const text = document.getElementById('platform-text');
    message.classList.add("show")
    message.classList.remove("d-none")
    text.innerText = `${data[0].name} platform was created successfully`;
    document.getElementById("iframe-platforms").contentWindow.location.reload();
  }
}