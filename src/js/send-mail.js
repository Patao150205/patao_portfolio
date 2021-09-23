import axios from 'axios';

const btn = document.getElementById('message-btn');
btn.onclick = sendEmail;

async function sendEmail() {
  btn.setAttribute('disabled', true);

  console.log(window.forms);

  try {
  } catch (error) {
    // axios.post('/', {})
  }
}
