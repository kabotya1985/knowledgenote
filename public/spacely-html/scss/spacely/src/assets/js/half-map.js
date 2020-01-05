$(function() {

    /* half map */


    var map = L.map('mapid_2').setView([51.5, -0.09], 13);

    L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
        attribution: '&copy; <a href="https://www.openstreetmap.org/copyright">OpenStreetMap</a> contributors'
    }).addTo(map);

    var LeafIcon = L.Icon.extend({
        options: {

            iconSize: [62, 75],

        }
    });

    var greenIcon = new LeafIcon({ iconUrl: '../assets/images/map-pin.png' }),
        redIcon = new LeafIcon({ iconUrl: '../assets/images/map-pin.png' }),
        orangeIcon = new LeafIcon({ iconUrl: '../assets/images/map-pin.png' });



    L.marker([51.5, -0.09], { icon: greenIcon }).bindPopup('<div class="tooltip-block"><div class="container"><div class="row no-gutters"><div class="col-5"><div class="tooltip-img"><a href="#"><img src="../assets/images/tooltip-img-1.jpg" alt="" class="img-fluid"></a></div></div><div class="col-7"><div class="tooltip-content"><h3 class="tooltip-content-title"><a href="#" class="title">Heading for OfficeSpace Title</a></h3><p class="tooltip-content-text">Ahmedabad, Gujarat, India</p><div class="review-content-rating"><i class="fas fa-star text-warning"></i><i class="fas fa-star text-warning"></i><i class="fas fa-star text-warning"></i><i class="fas fa-star text-warning"></i><i class="fas fa-star text-warning"></i><a href="#" class="ml-2 badge badge-success">5.0</a></div></div></div></div></div></div>').addTo(map);
    L.marker([51.495, -0.083], { icon: redIcon }).bindPopup('<div class="tooltip-block"><div class="container"><div class="row no-gutters"><div class="col-5"><div class="tooltip-img"><a href="#"><img src="../assets/images/tooltip-img-1.jpg" alt="" class="img-fluid"></a></div></div><div class="col-7"><div class="tooltip-content"><h3 class="tooltip-content-title"><a href="#" class="title">Heading for OfficeSpace Title</a></h3><p class="tooltip-content-text">Ahmedabad, Gujarat, India</p><div class="review-content-rating"><i class="fas fa-star text-warning"></i><i class="fas fa-star text-warning"></i><i class="fas fa-star text-warning"></i><i class="fas fa-star text-warning"></i><i class="fas fa-star text-warning"></i><a href="#" class="ml-2 badge badge-success">5.0</a></div></div></div></div></div></div>').addTo(map);
    L.marker([51.49, -0.1], { icon: orangeIcon }).bindPopup('<div class="tooltip-block"><div class="container"><div class="row no-gutters"><div class="col-5"><div class="tooltip-img"><a href="#"><img src="../assets/images/tooltip-img-1.jpg" alt="" class="img-fluid"></a></div></div><div class="col-7"><div class="tooltip-content"><h3 class="tooltip-content-title"><a href="#" class="title">Heading for OfficeSpace Title</a></h3><p class="tooltip-content-text">Ahmedabad, Gujarat, India</p><div class="review-content-rating"><i class="fas fa-star text-warning"></i><i class="fas fa-star text-warning"></i><i class="fas fa-star text-warning"></i><i class="fas fa-star text-warning"></i><i class="fas fa-star text-warning"></i><a href="#" class="ml-2 badge badge-success">5.0</a></div></div></div></div></div></div>').addTo(map);

    var popup = L.popup();



    


















});