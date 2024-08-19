export async function insertPlatform(frm) {
  const formData = new FormData(frm);
  const response = await fetch('/insert-platform', {
    method: 'POST',
    body: formData
  })
  const data = await response.json();
  console.log(data)
}