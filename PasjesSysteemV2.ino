
#include <SPI.h>
#include <MFRC522.h>

#define SS_PIN 10
#define RST_PIN 9
MFRC522 mfrc522(SS_PIN, RST_PIN);   // Create MFRC522 instance.

int Mode = 0;

void setup()
{
  Serial.begin(9600);   // Initiate a serial communication
  SPI.begin();      // Initiate  SPI bus
  mfrc522.PCD_Init();   // Initiate MFRC522
  Serial.println("Approximate your card to the reader...");
  Serial.println();

  pinMode(2, OUTPUT) ; //Set pin 2 as output
  pinMode(3, OUTPUT) ; //Set pin 3 as output
  pinMode(4, OUTPUT) ; //Set pin 4 as output

}
void loop()
{
  // Look for new cards
  if ( ! mfrc522.PICC_IsNewCardPresent())
  {
    return;
  }
  // Select one of the cards
  if ( ! mfrc522.PICC_ReadCardSerial())
  {
    return;
  }
  //Show UID on serial monitor
  Serial.print("UID tag :");
  String content = "";
  byte letter;
  for (byte i = 0; i < mfrc522.uid.size; i++)
  {
    Serial.print(mfrc522.uid.uidByte[i] < 0x10 ? " 0" : " ");
    Serial.print(mfrc522.uid.uidByte[i], DEC);
    content.concat(String(mfrc522.uid.uidByte[i] < 0x10 ? " 0" : " "));
    content.concat(String(mfrc522.uid.uidByte[i], DEC));
  }
  Serial.println();
  Serial.print("Message : ");
  content.toUpperCase();


  if (content.substring(1) == "98 218 131 99" && Mode == 0) //change here the UID of the card/cards that you want to give access
  {
    Serial.println("Eerste actie voltooid");
    Serial.println();
    digitalWrite(2, 1);
    
    Mode = 1;
    
    delay(1000);
  }
  else if (content.substring(1) == "203 193 219 217") //change here the UID of the card/cards that you want to give access
  {
    Serial.println("Tweede actie voltooid");
    Serial.println();
    digitalWrite(3, 1);
    delay(1000);
  }
  else   {
    Serial.println("Onbekend");
    delay(2000);
  }
  digitalWrite(2, 0);
  digitalWrite(3, 0);
}
