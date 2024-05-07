<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>API Magic</title>
</head>

<body>
    <h1>Weather Update</h1>
    <div id="weather"></div>

    <h1>BCRA APIs</h1>
    <div id="datosBcra"></div>

<!-- 1 API -->
    <script>
        // Your API URL
        const apiUrl = 'https://api.weatherapi.com/v1/current.json?key=ACAVALAKEY&q=BuenosAires';

        // Fetch the weather data
        fetch(apiUrl)
            .then(response => response.json())
            .then(data => {
                document.getElementById('weather').innerText = `La temperatura en Buenos Aires es de ${data.current.temp_c}°C`;
            })
            .catch(error => console.error('Error:', error));
    </script>

<!-- 2 API -->
    <div id="weather2"></div>
    <script>
        // Your API URL
        const apiUrl2 = 'https://api.weatherapi.com/v1/current.json?key=ACAVALAKEY&q=Sarajevo';

        // Fetch the weather data
        fetch(apiUrl2)
            .then(response => response.json())
            .then(data => {
                document.getElementById('weather2').innerText = `The current temperature in Sarajevo is ${data.current.temp_c}°C`;
            })
            .catch(error => console.error('Error:', error));
    </script>

<!-- 3 API -->
    <div id="weather3"></div>
    <script>
        // Your API URL
        const apiUrl3 = 'https://api.weatherapi.com/v1/current.json?key=ACAVALAKEY&q=Rome';

        // Fetch the weather data
        fetch(apiUrl3)
            .then(response => response.json())
            .then(data => {
                document.getElementById('weather3').innerText = `The current temperature in Rome is ${data.current.temp_c}°C`;
            })
            .catch(error => console.error('Error:', error));
    </script>

<!-- 3 API BCRA -->
<script>
        fetch("https://api.estadisticasbcra.com/inflacion_mensual_oficial", {
            headers: {
                Authorization: "BEARER ACAVALAKEY",
            },
        })
        .then((response) => response.json()) //metemos acá nuestro responso en un json.
        .then((data) => {
            console.log(data)
        })
</script>


<script type="text/javascript">

    //Capturo la data acá para visualizar en pantalla en el div.
    let datosBcra = document.querySelector("#datosBcra")


    const apiUrl4 = "usd";
    const proxyUrl = "https://bcra-proxy-cors.vercel.app";

fetch(`${proxyUrl}/${apiUrl4}`, {
  headers: {
    Authorization:
      "BEARER ACAVALAKEY",
  },
})
  .then((response) => response.json())
  .then((data) => {console.log(data)

  //Con un FOR recorro la información
  data.forEach((info) =>{
    const content = document.createElement("div")
    content.innerHTML =
    `<h4>Al día: ${info.d} el valor del dólar oficial es de ${info.v}</h4>`
    datosBcra.append(content) //apendeo el contenido de la API
  })
})

</script>
</body>


