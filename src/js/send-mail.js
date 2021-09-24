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
      form.name.value = '';
      form.email.value = '';
      form.message.value = '';
      nameValidation.innerHTML = '';
      mailValidation.innerHTML = '';
      messageValidation.innerHTML = '';
      alert(d.message);
    } else {
      if (res.status === 422 && d.status === 'validationError') {
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
      } else if (res.status === 400 && d.status === 'csrfError') {
        alert(d.message);
      } else {
        alert(
          'メッセージの送信に失敗しました。サーバー側の不具合で何らかのトラブルが、発生しています。管理者までお問い合わせください。\n Twiiter DMまで https://twitter.com/Patao_program'
        );
      }
    }
  } catch (error) {
    console.log(error);
    alert(error.message);
  } finally {
    btn.removeAttribute('disabled', false);
  }
}
