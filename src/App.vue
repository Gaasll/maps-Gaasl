<template>
  <div id="app">
    <WelcomePage />



    <h1 @click="scrollToRSVP" class="h1 ">OSA HÄR</h1>
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
  background-color: #415eaf;
  background-attachment: fixed;
  background-size: cover;
}

#map-section {
  margin-top: 60px;
}

.h1 {
  font-size: 2rem;
    margin-top: 45vh;
    color: white;
    font-family: "Century Gothic", CenturyGothic, Geneva, AppleGothic, sans-serif;
    animation-name: glow;
    animation-duration: 1s;
    animation-iteration-count: infinite;
    animation-direction: alternate;
}




@keyframes glow {
  from {
    text-shadow: 0px 0px 5px #fff, 0px 0px 5px #415eaf;
  }

  to {
    text-shadow: 0px 0px 20px #fff, 0px 0px 20px #415eaf;
  }
}

body {
  background: #415eaf;
}

/* Add media queries to adjust the background size for smaller screens */
@media (max-width: 768px) {
  #app {
    background-size: contain;
  }
}

@media (max-width: 480px) {
  #app {
    background-size: 100%;
  }
}
</style>