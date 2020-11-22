<header>
    <div class="header_inside">
        <div class="header__city">
            <u id="geo"></u>
        </div>
        <div class="header__logo">
            <div class="header__logo__img">
                LOGO
            </div>
        </div>
        <div class="header__nav">
            <a href="{{ route('home') }}">Главная</a>
            <a href="/ads">Заказать</a>
            <a href="{{ route('items.index') }}">items</a>
            <a href="{{ route('promos.index') }}">promos</a>
            <a href="{{ route('demo_lessor') }}">Кабинет арендодателя</a>
            <a href="#">О сервисе</a>
            <a href="#">Контакты</a>
        </div>
        <div class="header__logIn">
            <div class="logIn__auth">
                <a href="#" target="_blank" rel="noopener noreferrer">Личный кабинет</a>
            </div>
        </div>
    </div>
    <script>
        let endpoint = 'http://ip-api.com/json?lang=ru';
        let city = 'Ваше местоположение';
        let latitude = 0;
        let longitude = 0;
        const geoInfoCookiesName = 'geoInfo';

        var coords = [{
                lat: 40.7127837,
                lon: -74.0059413,
                name: 'New York, NY'
            },
            {
                lat: 34.0522342,
                lon: -118.2436849,
                name: 'Los Angeles, CA'
            },
            {
                lat: 37.3382082,
                lon: -121.8863286,
                name: 'San Jose, CA'
            },
            {
                lat: 41.8781136,
                lon: -87.6297982,
                name: 'Chicago, IL'
            },
            {
                lat: 47.6062095,
                lon: -122.3320708,
                name: 'Seattle, WA'
            },
        ];

        async function getGeoInfo() {
            let geoInfo;
            geoInfo = getGeoInfoFromCookies();

            if (geoInfo === undefined) {    
                await getGeoInfoViaAPI().then((result) => {
                    geoInfo = result;
                });

                return geoInfo;
            } else {
                return geoInfo;
            }
        }

        function getGeoInfoFromCookies() {
            let GeoInfoCookies;
            GeoInfoCookies = getCookie(geoInfoCookiesName);

            if (GeoInfoCookies === undefined) {
                return undefined;
            }

            let geoInfoObj = JSON.parse(GeoInfoCookies);

            return geoInfoObj;
        }

        function getCookie(name) {
            let matches = document.cookie.match(new RegExp(
                "(?:^|; )" + name.replace(/([\.$?*|{}\(\)\[\]\\\/\+^])/g, '\\$1') + "=([^;]*)"
            ));
            return matches ? decodeURIComponent(matches[1]) : undefined;
        }

        async function getGeoInfoViaAPI() {
            let promise = new Promise(function(resolve, reject) {
                let xhr = new XMLHttpRequest();
                xhr.onreadystatechange = function() {
                    if (this.readyState == 4 && this.status == 200) {
                        let response = JSON.parse(this.responseText);
                        if (response.status !== 'success') {
                            reject(new Error('Неудачный запрос: ' + response.message));
                        } else {
                            resolve(response);
                        }
                    }
                };
                xhr.open('GET', endpoint, true);
                xhr.send();
            });

            let response = await promise;

            if (response !== undefined) {
                let geoInfoObj = {
                    city: response.city,
                    longitude: response.lon,
                    latitude: response.lat
                }

                return geoInfoObj;
            }
            return response;
        };

        function getDistanceFromLatLonInKm(lat1, lon1, lat2, lon2) {
            var R = 6371; // Radius of the earth in km
            var dLat = deg2rad(lat2 - lat1); // deg2rad below
            var dLon = deg2rad(lon2 - lon1);
            var a =
                Math.sin(dLat / 2) * Math.sin(dLat / 2) +
                Math.cos(deg2rad(lat1)) * Math.cos(deg2rad(lat2)) *
                Math.sin(dLon / 2) * Math.sin(dLon / 2);
            var c = 2 * Math.atan2(Math.sqrt(a), Math.sqrt(1 - a));
            var d = R * c; // Distance in km
            return d;
        }

        function deg2rad(deg) {
            return deg * (Math.PI / 180)
        }

        getGeoInfo().then((geoInfo) => {
            if (geoInfo !== undefined) {
                city = geoInfo.city;
                latitude = geoInfo.latitude;
                longitude = geoInfo.longitude;

                let geo = document.getElementById('geo');
                geo.innerHTML = city;

                document.cookie = geoInfoCookiesName + "=" + JSON.stringify(geoInfo) + "; expires=86400";
                // for (var i = 0; i < coords.length; i++) {
                //     var diff = getDistanceFromLatLonInKm(coords[i].lat, coords[i].lon, latitude, longitude);
                //     console.log('Расстояние до ' + coords[i].name + ': ' + Math.round(diff) + ' км.');
                // }
            }
        });
    </script>
</header>