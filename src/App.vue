<template>
  <div id="app">
    <WelcomePage />



    <button @click="scrollToRSVP" class="rsvp-button ">OSA HÄR</button>
    <div id="map-section">
      <MapComponent />
    </div>

    <div ref="rsvpSection" id="rsvp-section">
      <RSVPPage />
    </div>
  </div>
</template>

<script>
import WelcomePage from './components/WelcomePage.vue';
import MapComponent from './components/MapComponent.vue';
import RSVPPage from './components/RSVPPage.vue';

export default {
  name: 'App',
  components: {
    WelcomePage,
    MapComponent,
    RSVPPage
  },
  methods: {
    scrollToRSVP() {
      const rsvpSection = this.$refs.rsvpSection;
      if (rsvpSection) {
        window.scrollTo({
          top: rsvpSection.offsetTop,
          behavior: 'smooth'
        });
      }
    }
  }
}
</script>

<style>
#app {
  font-family: "Century Gothic", CenturyGothic, Geneva, AppleGothic, sans-serif;
  -webkit-font-smoothing: antialiased;
  -moz-osx-font-smoothing: grayscale;
  text-align: center;
  color: #c5c9ce;
  background-image: url('./assets/back.png');


}



#map-section {
  margin-top: 60px;
 align-self: center;
}

.rsvp-button {
  margin-top: 40px;
  padding: 10px 20px;
  font-size: 16px;
  background-color: transparent;
  border: none;
  border-radius: 5px;
  color: white;
  cursor: pointer;
  
}

.rsvp-button:hover {
  color: rgba(255, 255, 255, 0.592);
}




body {
  background: #415eaf;
}


</style>