export default function logout() {
  if (confirm("Are you sure to logout?"))
    return (window.location.href = "/logout");
  return false;
}