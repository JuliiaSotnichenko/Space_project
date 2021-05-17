Javascript for the globe:

// Grant CesiumJS access to your ion assets
Cesium.Ion.defaultAccessToken = "eyJhbGciOiJIUzI1NiIsInR5cCI6IkpXVCJ9.eyJqdGkiOiJiZTAyZTI2Mi1mZWQyLTQ4MTUtODk4My1iYmU0YjFjZTk2ZTMiLCJpZCI6NTYwODYsImlhdCI6MTYyMTIzOTYxOX0.Uz-VJHVHjLEhJh2I_huG5vBIbAvbc6PvenMGv4zu_eM";

var viewer = new Cesium.Viewer("cesiumContainer", {
  terrainProvider: new Cesium.CesiumTerrainProvider({
    url: Cesium.IonResource.fromAssetId(3956),
  }),
});

html & css:

<style>
  @import url(../templates/bucket.css);
</style>
<div id="cesiumContainer" class="fullSize"></div>
<div id="loadingOverlay">
  <h1>Loading...</h1>
</div>
<div id="toolbar"></div>