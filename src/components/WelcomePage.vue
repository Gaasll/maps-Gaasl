<template>
  <div class="welcome-page">
    <h1 class="title">Hej gos! 🫰🏻</h1>
    <p class="content">
      Jag blir blotta 31 och vill fira det med er fina såklart???
      <br><br>Välkomnar er därför på en barhopparkväll den 14 juni vi sent lär
      glömma.

      Upplägget talar för sig själv. Vi ses på en bar och färdas till nästa. Ni känner ju mig vid det här laget så vi
      håller inte igen denna kväll heller, ett ambitiöst schema väntar. <br><br>Tåget går från takåsarna på Söder > via
      en
      omplacerad plåtpark för lite mat > ett stopp i hippa Slaktis > ett vattenhålsstopp hemma där det bjuds på kaffe
      och
      tårta > vidare till en väderkvarn > för att sedan tillslut styra seglet mot Trädgården. Man hoppar av och på tåget
      precis som behagar - givna pluspoäng om man orkar hela vägen in i kaklet. 😅

      <br><br>Exakt runda hittar ni i kartan nedan. Inga presenter tack, vem orkar konka runt på sånt genom
      halva
      stan!!!
      Längtar efter detta!<br><br>
      Klem 💖
      Albin
    </p>

    

    <br><br><br><br>
  </div>
</template>

<script>
export default {
  name: 'WelcomePage',
  methods: {
    scrollToMap() {
      const mapElement = document.getElementById('map-section');
      if (mapElement) {
        mapElement.scrollIntoView({ behavior: 'smooth' });
      }
    }
  }
}
</script>

<style scoped>
@keyframes fadeIn {
  from {
    opacity: 0;
  }

  to {
    opacity: 1;
  }
}

.welcome-page {
  display: flex;
  flex-direction: column;
  align-items: center;
  justify-content: center;
  height: 100vh;
  text-align: center;
}

.title {
  color: white;
  font-family: "Century Gothic", CenturyGothic, Geneva, AppleGothic, sans-serif;
  margin-bottom: 20px;
  opacity: 0;
  animation: fadeIn 3s forwards;
}

.content {
  color: white;
  font-family: "Century Gothic", CenturyGothic, Geneva, AppleGothic, sans-serif;
  margin-bottom: 20px;
  opacity: 0;
  animation: fadeIn 5s forwards;
 
  /* Delay for content to fade in after the title */
}



@media (min-width: 300px) {
  .title {
    margin-top: 130px;
    font-size: 25px;
  }

  .content {
    font-size: 13px;
    padding: 0 30px;
  }
}

@media (min-width: 1024px) {
  .welcome-page {
    padding: 0 200px;
  }
}
</style>