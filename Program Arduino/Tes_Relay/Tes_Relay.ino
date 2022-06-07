#define relay 5

void setup() {
  Serial.begin(115200);
  pinMode(relay, OUTPUT);
}

void loop() {
  digitalWrite(relay, HIGH);
  Serial.println("Relay ON");
  delay(3000);
  digitalWrite(relay, LOW);
  Serial.println("Relay OFF");
  delay(3000);
}
