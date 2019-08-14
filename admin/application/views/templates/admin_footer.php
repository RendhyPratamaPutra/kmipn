<script type="text/javascript" src="<?php echo base_url(''); ?>vendor/assets/js/jquery/jquery.min.js"></script>
<script type="text/javascript" src="<?php echo base_url(''); ?>vendor/assets/js/jquery-ui/jquery-ui.min.js"></script>
<script type="text/javascript" src="<?php echo base_url(''); ?>vendor/assets/js/popper.js/popper.min.js"></script>
<script type="text/javascript" src="<?php echo base_url(''); ?>vendor/assets/js/bootstrap/js/bootstrap.min.js"></script>
<!-- jquery slimscroll js -->
<script type="text/javascript" src="<?php echo base_url(''); ?>vendor/assets/js/jquery-slimscroll/jquery.slimscroll.js"></script>
<!-- modernizr js -->
<script type="text/javascript" src="<?php echo base_url(''); ?>vendor/assets/js/modernizr/modernizr.js"></script>
<script type="text/javascript" src="<?php echo base_url(''); ?>vendor/assets/js/modernizr/css-scrollbars.js"></script>

<!-- Custom js -->
<script type="text/javascript" src="<?php echo base_url(''); ?>vendor/assets/js/script.js"></script>
<script src="<?php echo base_url(''); ?>vendor/assets/js/pcoded.min.js"></script>
<script src="<?php echo base_url(''); ?>vendor/assets/js/vartical-demo.js"></script>
<script src="<?php echo base_url(''); ?>vendor/assets/js/jquery.mCustomScrollbar.concat.min.js"></script>
<script>
      function initAutocomplete() {
        var map = new google.maps.Map(document.getElementById('map'), {
          center: {lat: -8.2230043, lng: 114.3653102},
          zoom: 13,
          mapTypeId: 'roadmap'
        });

        // Membuat Kotak pencarian terhubung dengan tampilan map
        var input = document.getElementById('pac-input');
        var searchBox = new google.maps.places.SearchBox(input);
     

        var markers = [];
        // Mengaktifkan detail pada suatu tempat ketika pengguna
        // memilih salah satu dari daftar prediksi tempat 
        searchBox.addListener('places_changed', function() {
          var places = searchBox.getPlaces();

          if (places.length == 0) {
            return;
          }

          // menghilangkan marker tempat sebelumnya
          markers.forEach(function(marker) {
            marker.setMap(null);
          });
          markers = [];

          // Untuk setiap tempat, dapatkan icon, nama dan tempat.
          var bounds = new google.maps.LatLngBounds();
          places.forEach(function(place) {
            if (!place.geometry) {
              console.log("Returned place contains no geometry");
              return;
            }
            var icon = {
              url: place.icon,
              size: new google.maps.Size(71, 71),
              origin: new google.maps.Point(0, 0),
              anchor: new google.maps.Point(17, 34),
              scaledSize: new google.maps.Size(25, 25)
            };

            

            // Membuat Marker untuk setiap tempat
            markers.push(new google.maps.Marker({

              map: map,
              icon: icon,
              title: place.name,
              position: place.geometry.location,
              drag:true

            }));
            var lat = place.geometry.location.lat();
            var lng = place.geometry.location.lng();

            if (place.geometry.viewport) {
              bounds.union(place.geometry.viewport);
              document.getElementById("latlong").value = lat+','+lng;      
              //document.getElementById('lng').value=lng; 
            } else {
              bounds.extend(place.geometry.location);
              
            }
          });
          map.fitBounds(bounds);
        });
        google.maps.event.addListener(marker, 'drag', function() {
 // ketika marker di drag, otomatis nilai latitude dan longitude
 //menyesuaikan dengan posisi marker 
        updateMarkerPosition(marker.getPosition());
  });
      }

    </script>
         <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCkE6oJvsyX4sRAw0QTt3R_gJClY0NtIFQ&libraries=places&callback=initAutocomplete"
        async defer></script>
</body>

</html>