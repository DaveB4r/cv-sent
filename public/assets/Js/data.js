export async function insertData(frm, route,iframeId,name) {
  const formData = new FormData(frm);
  const response = await fetch(route, {
    method: 'POST',
    body: formData
  })
  if (response.ok) {
    const data = await response.json();
    const message = document.getElementById(`div-message-${name}`);
    const text = document.getElementById(`div-text-${name}`);
    if(message) message.classList.add("show")
    if(message) message.classList.remove("d-none")
    text.innerText = `${data[0].name} was created successfully`;
    document.getElementById(iframeId).contentWindow.location.reload();
  }
}