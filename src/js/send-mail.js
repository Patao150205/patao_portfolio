const btn = document.getElementById('message-btn');
btn.onclick = sendEmail;

async function sendEmail() {
  btn.setAttribute('disabled', true);
  const form = document.forms[0];
  const data = {
    csrf_token: form.csrf_token.value,
    name: form.name.value,
    email: form.email.value,
    message: form.message.value,
  };

  try {
    const res = await fetch('../php/mail.php', {
      method: 'POST',
      headers: { 'Content-Type': 'application/json' },
      body: JSON.stringify(data),
      credentials: 'same-origin',
    });
    const d = await res.json();

    const nameValidation = document.getElementById('validation1');
    const mailValidation = document.getElementById('validation2');
    const messageValidation = document.getElementById('validation3');

    if (res.ok) {
      const message = d.message;
      alert(message);
      form.name.value = '';
      form.email.value = '';
      form.message.value = '';
      nameValidation.innerHTML = '';
      mailValidation.innerHTML = '';
      messageValidation.innerHTML = '';
    } else {
      const validation = d.validation;

      const html = (message) => `<p>${message}</p>`;
      nameValidation.innerHTML = '';
      mailValidation.innerHTML = '';
      messageValidation.innerHTML = '';
      if (validation.name) {
        nameValidation.insertAdjacentHTML('beforeend', html(validation.name[0]));
      }
      if (validation.email) {
        validation.email?.forEach((ele) => {
          mailValidation.insertAdjacentHTML('beforeend', html(ele));
        });
      }
      if (validation.message) {
        messageValidation.insertAdjacentHTML('beforeend', html(validation.message[0]));
      }
      alert(d.message);
    }
  } catch (error) {
    alert(error.message);
  } finally {
    btn.removeAttribute('disabled', false);
  }
}
