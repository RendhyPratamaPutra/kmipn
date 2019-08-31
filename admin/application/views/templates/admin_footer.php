<script type="text/javascript" src="<?php echo base_url(''); ?>vendor/assets/js/jquery/jquery.min.js"></script>
<script type="text/javascript" src="<?php echo base_url(''); ?>vendor/assets/js/jquery-ui/jquery-ui.min.js"></script>
<script type="text/javascript" src="<?php echo base_url(''); ?>vendor/assets/js/popper.js/popper.min.js"></script>
<script type="text/javascript" src="<?php echo base_url(''); ?>vendor/assets/js/bootstrap/js/bootstrap.min.js"></script>
<!-- jquery slimscroll js -->
<script type="text/javascript" src="<?php echo base_url(''); ?>vendor/assets/js/jquery-slimscroll/jquery.slimscroll.js"></script>
<!-- modernizr js -->
<script type="text/javascript" src="<?php echo base_url(''); ?>vendor/assets/js/modernizr/modernizr.js"></script>
<script type="text/javascript" src="<?php echo base_url(''); ?>vendor/assets/js/modernizr/css-scrollbars.js"></script>

<!-- DataTables JS -->
<script type="text/javascript" src="<?= base_url(''); ?>vendor/assets/DataTables/datatables.js"></script>

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

      // dataTables
      $(document).ready( function () {
        $('#myTable').DataTable();
      } );

    </script>
         <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCkE6oJvsyX4sRAw0QTt3R_gJClY0NtIFQ&libraries=places&callback=initAutocomplete"
        async defer></script>

    <!-- MyTables -->
    <script>
        // mengambil element
        var tables = document.getElementById('id_tables');
        var keyword = document.getElementById('keyword');
        var page = document.getElementById('page');

        // AJAX Filter
        keyword.addEventListener('keyup', function () {

            // buat object ajax
            var xhr = new XMLHttpRequest();

            // cek kesiapan ajax
            xhr.onreadystatechange = function () {
                if (xhr.readyState == 4 && xhr.status == 200) {
                    console.log('ok');
                    tables.innerHTML = xhr.responseText;
                }
            }

            // eksekusi ajax
            // xhr.open('GET', 'ajax/tabel.php?keyword=' + keyword.value, true);
            xhr.open('GET', '<?= base_url('Admin/personal_search/'); ?>' + keyword.value, true);
            xhr.send();
        });

        function toPage() {

            console.log(toPage.arguments);
            // pages();
            // buat object ajax
            var xhr = new XMLHttpRequest();

            // cek kesiapan ajax
            xhr.onreadystatechange = function () {
                if (xhr.readyState == 4 && xhr.status == 200) {
                    console.log('oke');
                    tables.innerHTML = xhr.responseText;
                }
            }

            // eksekusi ajax
            if(keyword.value == ""){
              xhr.open('GET', '<?= base_url('Admin/personal_pagination/'); ?>' + toPage.arguments[0], true);
            } else {
              xhr.open('GET', '<?= base_url('Admin/personal_pagination_keyword/'); ?>' + keyword.value + '/' + toPage.arguments[0], true);
            }
            // xhr.open('GET', 'ajax/tabel.php?keyword=' + keyword.value + '&page=' + toPage.arguments[0], true);
            xhr.send();

        }
    </script>
</body>

</html>