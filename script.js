document.getElementById('loginForm').addEventListener('submit', function(event) {
  event.preventDefault();
  const username = document.getElementById('loginUsername').value;
  const password = document.getElementById('loginPassword').value;
  
  // AJAX ile login işlemi
  const xhr = new XMLHttpRequest();
  xhr.open('POST', 'login.php', true);
  xhr.setRequestHeader('Content-Type', 'application/x-www-form-urlencoded');
  xhr.onload = function() {
    if (xhr.status === 200) {
      alert('Giriş başarılı: ' + xhr.responseText);
    } else {
      alert('Giriş başarısız.');
    }
  };
  xhr.send('username=' + encodeURIComponent(username) + '&password=' + encodeURIComponent(password));
});

document.getElementById('registerForm').addEventListener('submit', function(event) {
  event.preventDefault();
  const username = document.getElementById('registerUsername').value;
  const email = document.getElementById('registerEmail').value;
  const password = document.getElementById('registerPassword').value;
  
  // AJAX ile register işlemi
  const xhr = new XMLHttpRequest();
  xhr.open('POST', 'register.php', true);
  xhr.setRequestHeader('Content-Type', 'application/x-www-form-urlencoded');
  xhr.onload = function() {
    if (xhr.status === 200) {
      alert('Kayıt başarılı: ' + xhr.responseText);
    } else {
      alert('Kayıt başarısız.');
    }
  };
  xhr.send('username=' + encodeURIComponent(username) + '&email=' + encodeURIComponent(email) + '&password=' + encodeURIComponent(password));
});
