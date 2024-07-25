#include <DHT.h>

#define DHTPIN 2     // what digital pin we're connected to
#define DHTTYPE DHT11  // DHT 11
DHT dht(DHTPIN, DHTTYPE);
const int analogPin = A0;  // Pin where the MQ-6 sensor is connected
int sensorValue = 0;  
int warning_led = 3; 
void setup() {
  Serial.begin(9600);
  dht.begin();
  pinMode(analogPin, INPUT);
  pinMode(warning_led, OUTPUT);
}
float smoke_sensor(){
  sensorValue = analogRead(analogPin);
  //Serial.print("Sensor Value: ");
  //Serial.println(sensorValue);
  float sv = sensorValue;
  delay(1000);
  return sv;
}

void  Warning_led(int Delay){
  digitalWrite(warning_led, HIGH);
  delay(Delay);
  digitalWrite(warning_led,LOW);
  delay(Delay);
}
void loop() {
  float S_sensor = smoke_sensor();
  // Reading temperature or humidity takes about 250 milliseconds!
  float h = dht.readHumidity();
  // Read temperature as Celsius (the default)
  float t = dht.readTemperature();

  // Check if any reads failed and exit early (to try again).
  if (isnan(h) || isnan(t)) {
    Serial.println(F("Failed to read from DHT sensor!"));
    return;
  }
  
  if(S_sensor >= 200){
    Warning_led(1000);
  }
  // Create JSON formatted string
  String jsonData = String("{\"humidity\":") + h + ",\"temperature\":" + t + ",\"Sensor\":" + S_sensor + "}";

  // Send JSON data to serial
  Serial.println(jsonData);

  delay(2000);
}
