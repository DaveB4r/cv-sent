export function cleanClass(ies, id) {
  ies.forEach(i => {
    if (i.id != id) i.lastChild.className = ''
  })
}

export function orderData(i) {
  if (i) {
    if (i.className == 'text-white' || i.className == '' || i.className == 'fa-solid fa-arrow-down') {
      i.className = 'fa-solid fa-arrow-up';
      return 'ASC';
    } else {
      i.className = 'fa-solid fa-arrow-down';
      return 'DESC';
    }
  }
}