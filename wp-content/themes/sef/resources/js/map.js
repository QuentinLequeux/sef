let map;

async function initMap() {
    const positions = [
        {lat: 50.517900, lng: 5.243750, title: "Bric à Brac"},
        {lat: 50.526962, lng: 5.229479, title: "Dépot"},
        {lat: 50.520674, lng: 5.241692, title: "Bouquinerie"}
    ];
    const {Map} = await google.maps.importLibrary("maps");
    const {AdvancedMarkerView} = await google.maps.importLibrary("marker");

    map = new Map(document.getElementById("map"), {
        zoom: 14,
        center: positions[2],
        mapId: "SEF",
    });

    positions.forEach(position => {
        new AdvancedMarkerView({
            map: map,
            position: {lat: position.lat, lng: position.lng},
            title: position.title,
        });
    });
}

initMap();