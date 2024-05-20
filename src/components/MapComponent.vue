<template>
  <div id="map" ref="map" style="height: 600px; width: 100%;"></div>
</template>

<script>
import L from 'leaflet';
import 'leaflet/dist/leaflet.css';
import 'mapbox-gl/dist/mapbox-gl.css';
import 'mapbox-gl-leaflet';

export default {
  name: 'MapComponent',
  mounted() {
    this.initializeMap();
  },
  methods: {
    initializeMap() {
      // Initialize the map at the coordinates for Stockholm
      this.map = L.map(this.$refs.map).setView([59.3293, 18.0686], 13);

      // Add the Mapbox GL layer
      L.mapboxGL({
        accessToken: 'pk.eyJ1IjoiZ2Fhc2xsIiwiYSI6ImNsd2VvZ3NldzBnZHkyaXFqbXBoNTB2YjcifQ.c3SAOfBu7zp3YHmwwMREGQ', // Replace with your Mapbox access token
        style: 'mapbox://styles/gaasll/clweomrmr00gk01qs9jycbbqw' // Replace with your Mapbox style URL
      }).addTo(this.map);

      const customIcon = L.icon({
        iconUrl: require('@/assets/one.png'), // Adjust the path here
        iconSize: [50, 50],
      });

      // Add a marker to the map
      const marker = L.marker([59.318506777622744, 18.074349650925534], { icon: customIcon }).addTo(this.map);
      marker.bindPopup("<b>16:00-17:00 ‒ Södra Teatern!</b><br>Kvällen börjar som en AW på mysiga Mosebacketerrassen.").openPopup();

      const customIcon2 = L.icon({
        iconUrl: require('@/assets/two.png'), // Adjust the path here
        iconSize: [50, 50],
      });

      // Add a marker to the map
      const marker2 = L.marker([59.3199451804025, 18.073974255917324], { icon: customIcon2 }).addTo(this.map);
      marker2.bindPopup("<b>17:00-18:00 - Pelago </b><br>Vi beskådar vårt vackra Riddarfjärden från toppen av Katarinahuset på nyligen invigda Pelago till toner av italo disco.").openPopup();

      const customIcon3 = L.icon({
        iconUrl: require('/src/assets/three.png'), 
        iconSize: [50, 50],
      });

      // Add a marker to the map
      const marker3 = L.marker([59.30992578769048, 18.03078418158075], { icon: customIcon3 }).addTo(this.map);
      marker3.bindPopup("<b>18:30-20:00 - Plåtparken Marievik </b><br>Plåtparken är omlokaliserad men sig lik. Natten är lång och vi bör därför äta något. Här finns något för alla! ").openPopup();


      const customIcon4 = L.icon({
        iconUrl: require('/src/assets/four.png'),
        iconSize: [50, 50],
      });

      // Add a marker to the map
      const marker4 = L.marker([59.292330677470645, 18.0779401601208], { icon: customIcon4 }).addTo(this.map);
      marker4.bindPopup("<b>20:30-21:30 SOLEN </b><br>Vi knatar bort till SOLENs patio alt går in till HOSOI i Förbindelsehallen på ett dryckesstopp.").openPopup();

      const customIcon5 = L.icon({
        iconUrl: require('/src/assets/five.png'),
        iconSize: [50, 50],
      });

      // Add a marker to the map
      const marker5 = L.marker([59.270376222695965, 18.05163606439045], { icon: customIcon5}).addTo(this.map);
      marker5.bindPopup("<b>22:00-23:00 - Hemma! </b><br>När vi ändå befinner oss söder om stan tycker vi ändå att tårta och kaffe vore trevligt. (Trollesundsvägen 15E). ").openPopup();
    
      const customIcon6 = L.icon({
        iconUrl: require('/src/assets/six.png'),
        iconSize: [50, 50],
      });

      // Add a marker to the map
      const marker6 = L.marker([59.30098880891115, 18.080095763858044], { icon: customIcon6 }).addTo(this.map);
      marker6.bindPopup("<b>23:30-00:15 - Skanskvarn </b><br>På vår färd mot Trädgården stannar vi potentiellt till på Skanskvarn för en sista skål innan vi promenerar över bron till Trädgården. ").openPopup();

      const customIcon7 = L.icon({
        iconUrl: require('/src/assets/seven.png'),
        iconSize: [50, 50],
      });

      // Add a marker to the map
      const marker7 = L.marker([59.30435138388316, 18.080197571019873], { icon: customIcon7 }).addTo(this.map);
      marker7.bindPopup("<b>00:30-03:00 - Trädgården  </b><br>Vi går i mål på vårt allas favoritställe Trädgården. ").openPopup();
    }
  }
}
</script>

<style scoped>
#map {
  height: 600px;
  width: 100%;
}
</style>