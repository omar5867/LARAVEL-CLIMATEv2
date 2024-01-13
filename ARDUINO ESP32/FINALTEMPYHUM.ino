#include <WiFi.h> 
#include <HTTPClient.h>
#include <DHT.h> //Library is DHT sensor library by adafruit
// Pines de dht11
DHT dht(15, DHT11);

// Variables definidas
int Temperatura = 10;
float Humedad = 3.14;
int Ubicacion = 1;

// Reemplaza con tus credenciales de red
const char *ssid = "NAME_OF_ROUTER_TO_USE";
const char *password = "PASSWORD_OF_ROUTER_TO_USE";

// URL de la página web a la que deseas acceder
const char *url = "http://IP_OF_SERVE/upload/5867";

void setup() {
  Serial.begin(115200);
  dht.begin();

  // Conéctate a la red Wi-Fi
  WiFi.begin(ssid, password);
  while (WiFi.status() != WL_CONNECTED) {
    delay(1000);
    Serial.println("Conectando a la red WiFi...");
  }
  Serial.println("Conexión exitosa");
}

void loop() {
  // Realiza la solicitud HTTP
  makeHTTPrequest();
  delay(15000);
}

void makeHTTPrequest() {
  float Temperatura = dht.readTemperature();
  float Humedad = dht.readHumidity();
  Serial.println(Temperatura);
  Serial.println(Humedad);
  
  HTTPClient http;

  // Agrega parámetros a la URL si es necesario
  String urlWithParams = String(url) + "?t=" + String(Temperatura) + "&h=" + String(Humedad) + "&u=" + String(Ubicacion);
  Serial.println(urlWithParams);
  // Inicia la solicitud HTTP
  http.begin(urlWithParams);

  // Realiza la solicitud y obtén el código de estado
  int httpCode = http.GET();

  // Si la solicitud fue exitosa, imprime la respuesta
  if (httpCode > 0) {
    String payload = http.getString();
    Serial.println("Respuesta: " + payload);
  } else {
    Serial.println("Error en la solicitud HTTP");
  }

  // Cierra la conexión
  http.end();
}
