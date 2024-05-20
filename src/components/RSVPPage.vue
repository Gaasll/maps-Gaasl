<template>
  <div class="container">

    <h1 class="title">OSA</h1>
    <p class="description">
      OSA gärna om du kommer och ange i meddelandet hur många ni blir. Du kommer att få en bekräftelse via e-post som
      innehåller en kalenderlänk. Använd länken för att lägga till kvällen i din kalender så att du inte missar detta
      magiska event.
    </p>
    <form @submit.prevent="sendEmail">
      <label for="name"></label>
      <input type="text" v-model="name" id="name" name="name" placeholder="Ditt namn." required>

      <label for="email"></label>
      <input type="email" v-model="email" id="email" name="email" placeholder="Din e-post." required>

      <label for="message"></label>
      <textarea id="message" name="message" v-model="message" placeholder="Ditt meddelande." required></textarea>

      <input type="submit" value="Skicka">
    </form>
  </div>
</template>

<script>
import emailjs from 'emailjs-com';

export default {
  name: 'ContactUs',
  data() {
    return {
      name: '',
      email: '',
      message: ''
    };
  },
  methods: {
    async sendEmail(e) {
      try {
        await emailjs.sendForm('service_u76mnus', 'template_ipdsqen', e.target, 'niG6aeDWD6iTBVFSo', {
          name: this.name,
          email: this.email,
          message: this.message
        });
        alert("Email sent successfully!");
      } catch (err) {
        console.error("Failed to send email:", err);
        alert("Failed to send email. Please try again later.");
      } finally {
        // Reset form fields
        this.name = '';
        this.email = '';
        this.message = '';
      }
    }
  }
};
</script>

<style scoped>
* {
  box-sizing: border-box;
  margin: 0;
  padding: 0;
  font-family: Arial, sans-serif;
  
  
}

.container {
  display: block;
  margin: auto;
  text-align: center;
  border-radius: 5px;
  background-color: #f9f9f9;
  
  padding: 10px;
  max-width: 350px;
  box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
  font-family: "Century Gothic", CenturyGothic, Geneva, AppleGothic, sans-serif;
  margin-top: 60px;
}

.title {
  margin-bottom: 10px;
  color: #333;
  font-size: 1.5em;
  font-family: "Century Gothic", CenturyGothic, Geneva, AppleGothic, sans-serif;
}

.description {
  margin-bottom: 18px;
  color: #555;
  font-size: 1em;
  font-family: "Century Gothic", CenturyGothic, Geneva, AppleGothic, sans-serif;
}

form {
  font-size: 0.8em;
 
  
}

label {
  margin-bottom: 3px;
  font-family: "Century Gothic", CenturyGothic, Geneva, AppleGothic, sans-serif;
}

input[type=text],
input[type=email],
textarea {
  width: 100%;
  padding: 8px;
  border: 1px solid #ddd;
  border-radius: 4px;
  box-sizing: border-box;
}

textarea {
  resize: vertical;
}

input[type=submit] {
  background-color: #415eaf;
  color: white;
  padding: 10px 15px;
  border: none;
  border-radius: 4px;
  cursor: pointer;
  font-family: "Century Gothic", CenturyGothic, Geneva, AppleGothic, sans-serif;
  margin-top: 20px;
}

input[type=submit]:hover {
  background-color: #415eaf;
}
</style>