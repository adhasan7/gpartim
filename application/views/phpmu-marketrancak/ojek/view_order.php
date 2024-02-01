<div class="ps-page--single">
  <div class="ps-breadcrumb">
    <div class="container">
      <ul class="breadcrumb">
        <li><a href="<?php echo base_url(); ?>">Home</a></li>
        <li><a href="#">Members</a></li>
        <li>Ojek</li>
      </ul>
    </div>
  </div>
</div>
<style>
  .text-error {
    color: red;
  }

  .map {
    height: 300px;
  }
</style>
<div class="ps-vendor-dashboard pro" style='margin-top:10px'>
  <div class="container">
    <div class="ps-section__content">
      <?php $this->load->view('phpmu-marketrancak/reseller/menu-members') ?>
      <div class="row">
        <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12 ">
          <div class="form-group row" style="margin-bottom:5px">
            <label class="col-sm-2 col-form-label" style="margin-bottom:1px">Nama</label>
            <div class="col-sm-10">
              <input type="text" id="name" name="name" class="form-control form-mini" value="<?= $row['nama_lengkap'] ?>">
              <small id="helpId" class=" text-error"></small>
              <div id="map_location" class="map"></div>
            </div>
          </div>

          <div class="form-group row" style="margin-bottom:5px">
            <label class="col-sm-2 col-form-label" style="margin-bottom:1px">Kontak</label>
            <div class="col-sm-10">
              <input type="text" name="contact" id="contact" class="form-control form-mini" value="<?= $row['no_hp'] ?>">
              <small id="helpId" class=" text-error"></small>
            </div>
          </div>
          <div class="form-group row" style="margin-bottom:5px">
            <label class="col-sm-2 col-form-label" style="margin-bottom:1px">Lokasi Penjemputan</label>
            <div class="col-sm-10">
              <input type="text" name="location_pickup" id="location_pickup" class="form-control form-mini" value="">
              <small id="helpId" class=" text-error"></small>
              <div id="map_direction" class="map"></div>
            </div>
          </div>
          <div class="form-group row" style="margin-bottom:5px">
            <label class="col-sm-2 col-form-label" style="margin-bottom:1px">Alamat Tujuan</label>
            <div class="col-sm-10">
              <input type="text" name="destination" id="destination" class="form-control form-mini" value="">
              <small id="helpId" class=" text-error"></small>
            </div>
          </div>
          <div class="form-group row" style="margin-bottom:5px">
            <label class="col-sm-2 col-form-label" style="margin-bottom:1px">Jarak (Km)</label>
            <div class="col-sm-10">
              <input type="text" id="distance" readonly class="form-control form-mini" value="">
              <small id="helpId" class=" text-error"></small>
            </div>
          </div>
          <div class="form-group row" style="margin-bottom:5px">
            <label class="col-sm-2 col-form-label" style="margin-bottom:1px">Tarif</label>
            <div class="col-sm-10">
              <input type="text" name="cost" id="cost" class="form-control form-mini" value="" readonly>
              <small id="helpId" class=" text-error"></small>
            </div>
          </div>
          <div class='form-group row' style='margin-bottom:5px'>
            <label class='col-sm-3 col-form-label' style='margin-bottom:1px'>Pembayaran</b></label>
            <div class='col-sm-9'>
              <input type='radio' value='Saldo' name='payment' checked>Saldo
              <input type='radio' value='Cash' name='payment'> Cash
            </div>
          </div>
          <div class="text-center">
            <button type='button' onclick="make_order()" class='ps-btn btn-block '>
              <center><i class='icon-bag2'></i> Buat Pesanan</center>
            </button>
          </div>
        </div>

      </div>
    </div>
  </div>
</div>
<script src="<?php echo base_url(); ?>template/<?php echo template(); ?>/plugins/jquery-1.12.4.min.js"></script>
<script>
  $(document).ready(function() {
    getLocation();
  });
  const x = document.getElementById("demo");

  function getLocation() {
    if (navigator.geolocation) {
      navigator.geolocation.getCurrentPosition(showPosition);
    } else {
      x.innerHTML = "Geolocation is not supported by this browser.";
    }
  }

  function showPosition(position) {
    sessionStorage.setItem("latitude", position.coords.latitude)
    sessionStorage.setItem("longitude", position.coords.longitude)
  }

  function initMap() {
    // check cost
    check_cost = (distance) => {
      $.ajax({
        type: "POST",
        url: "<?= base_url('Api/ApiUser/costumer_count_price') ?>",
        data: {
          distance: distance,
          id_costumer: 1,
          token: "",
        },
        dataType: "JSON",
        success: function(response) {
          if (response.success == true) {
            $("#cost").val(response.cost);
          }
        },
        error: function(a) {
          Swal.fire({
            icon: "error",
            title: "Oops...",
            text: "Something went wrong!",
          });
        }
      });
    }

    // get address
    getAddress = (latLng, type) => {
      var geocoder = new google.maps.Geocoder();

      geocoder.geocode({
        'location': latLng
      }, function(results, status) {
        if (status === 'OK') {
          if (results[0]) {
            // document.getElementById('address').innerHTML = 'Address: ' + ;
            type == 1 ? $("#location_pickup").val(results[0].formatted_address) : $("#destination").val(results[0].formatted_address);
          } else {
            let text = "Alamat tidak ditemukan";
            type == 1 ? $("#location_pickup").val("Alama") : $("#destination").val(results[0].formatted_address);
            // document.getElementById('address').innerHTML = '';
          }
        } else {
          console.error('Geocoder failed due to: ' + status);
        }
      });
    }
    // count distance
    count_distance = () => {
      var directionsService = new google.maps.DirectionsService();
      let origin = new google.maps.LatLng(JSON.parse(sessionStorage.getItem('location_user')))
      let destination = new google.maps.LatLng(JSON.parse(sessionStorage.getItem('destination')))
      let request = {
        origin: origin,
        destination: destination,
        travelMode: 'DRIVING'
      }
      directionsService.route(request, function(result, status) {
        if (status == 'OK') {
          // directionsRenderer.setDirections(result);

          // Display distance
          var distanceText = result.routes[0].legs[0].distance.text;
          sessionStorage.setItem('ditance_betwen', result.routes[0].legs[0].distance.value);
          $("#distance").val(distanceText);
          check_cost(result.routes[0].legs[0].distance.value);

        } else {
          sessionStorage.setItem('ditance_betwen', 0);
          console.error('Directions request failed:', status);
        }
      });
    }
    let latitude = parseFloat(sessionStorage.getItem('latitude'));
    let longitude = parseFloat(sessionStorage.getItem('longitude'));
    const location_costumers = {
      lat: latitude,
      lng: longitude
    };
    var map1 = new google.maps.Map(document.getElementById('map_location'), {
      center: location_costumers,
      zoom: 15
    });
    // default destination
    sessionStorage.setItem('location_user',
      JSON.stringify(location_costumers));
    sessionStorage.setItem('destination',
      JSON.stringify(location_costumers));
    // end default
    var marker1 = new google.maps.Marker({
      position: location_costumers,
      map: map1,
      title: 'Lokasi Anda',
      draggable: true,
      animation: google.maps.Animation.DROP,
    });
    getAddress(location_costumers, 1);
    var map2 = new google.maps.Map(document.getElementById('map_direction'), {
      center: location_costumers,
      zoom: 15
    });

    var marker2 = new google.maps.Marker({
      position: location_costumers,
      map: map2,
      draggable: true,
      animation: google.maps.Animation.DROP,
      title: 'Tujuan Anda'
    });

    count_distance();
    // drag marker
    google.maps.event.addListener(map1, 'center_changed', function(event) {
      window.setTimeout(function() {
        var center = map1.getCenter();
        marker1.setPosition(center);

      }, 100);
    });

    google.maps.event.addListener(map2, 'center_changed', function() {
      window.setTimeout(function() {
        var center = map2.getCenter();
        marker2.setPosition(center);
      }, 100);
    });
    // event when map is move
    google.maps.event.addListener(map1, 'dragend', function(param) {
      let center = map1.getCenter();
      sessionStorage.setItem('location_user',
        JSON.stringify({
          'lat': center.lat(),
          'lng': center.lng()
        }))
      getAddress(map1.getCenter(), 1);
      count_distance();
    });
    google.maps.event.addListener(map2, 'dragend', function(param) {
      let center = map2.getCenter();
      sessionStorage.setItem('destination',
        JSON.stringify({
          'lat': center.lat(),
          'lng': center.lng()
        }))
      getAddress(map2.getCenter(), 2);
      count_distance()
    });


  }


  window.initMap = initMap;
  make_order = () => {
    let data = {
      name: $("")
    }
    $.ajax({
      type: "",
      url: "url",
      data: "data",
      dataType: "dataType",
      success: function(response) {

      }
    });
  }
</script>
<script src="https://maps.googleapis.com/maps/api/js?key=<?= $this->config->item('google_api') ?>&callback=initMap&v=weekly" defer></script>