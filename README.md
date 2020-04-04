## status46.se 
Monitoring peoples health by broadcasting the question "Hur mår du?" to all mobile phones in a specific area via sms 📲 once per day.

People can answer with just one word like good, bad, cold, fever or give a more detailed response. They can even reply with an emoji. The data that comes in would be collected to properly visualize how people in the area are feeling, and how that's developing over time. And how the course of the disease ("sjukdomsförloppet") is for many people. Anyone who replies they're sick can be asked about how they're feeling multiple times per day to get more relevant data. Depending on what you reply you'd either get a thank you  for reporting (if you're feeling :ok_hand::skin-tone-4:), or if you've mentioned fever (:face_with_thermometer:) then you'd get a few follow up questions; do you have any other symptoms? Is there anything you'd like help with? .. if they reply yes, then send them information about all the existing ways/initiatives where they can ask for help (the solution could be developed to ask a few other people in the same area that replied :ok_hand::skin-tone-4: that day, if they're willing to help someone out who lives nearby and is sick today. People that don't wish to be tracked can simply not reply, or clearly answer "stop asking me", and we wouldn't as again.

**Background:** I would be happy to provide data about how I'm feeling, if it was easy to do. I've been sick myself and I'm guessing it was Corona because of the symptoms, and I lacked an easy way to report this and to keep track of the "course of the disease" (sjukdomsförloppet). 

Option: Automated phone calls. Just like when explosives will be used in an area and you can get an automated phone call informing you of this. "Press 1 to confirm you've received this information, Press 2 if you want to talk to someone". These calls could be: Hej! With the current Corona-crisis we're asking all citizens in this area with many infected if you're willing to start reporting any symptoms, to enable live updates to the situation... 

TODOs:
- [ ] log incoming responses
- [ ] create a video explaining the solution
- [ ] refine demo
  - [ ] show examples of how replies can be agregated and visualized
  - [ ] create conditions for how to interpret replies
- [ ] handle integrity issues
- [ ] mobilanpassa info-sidan

DONE
- [x] landingpage 
- [x] create a demo
  - [x] setup a number
  - [x] setup different flows of what happens next depending on what the reply is

Detail: An option would be that people go to status46.se and fill out their phonenumber to start receiving questions each day, but then that would require lots of work on communicating the existance of this setup.


More notes:
* Hemsida där du kan fylla i ditt telefonnummer för att testa demo’t
* Hur gör jag för att spara något som en “hash”? Du som skickar in svaren, du ser själv vad du har svarat och du vet då vilket ID som är ditt, men ingen annan vet det. Vi använder en algoritm för att..
* Spara alla svar i en log, inte en databas. Det räcker med en drös rader i en fil till ett demo av vad som går att göra.
* Få upp ett cronjob som en gång per minut skapar upp en uppdaterad Json med innehållet i lograderna.
* Alla data som samlas in är öppet tillgänglig på status46.se/data. Det är ett dygns fördröjning, för att du inte ska kunna ha sidan uppe och ha koll på vilket ID som fylls på samtidigt som du observerar att någon annan än du svarar på meddelandet. Det kommer komma ett api.status46.se
* Göra det enkelt för vissa myndigheter att pusha ut en fråga i visst område
* I sociala medier och i andra kanaler -> bidra genom att berätta hur du mår! För den som vill kan du alltid skicka in hur du mår till… {som att #geblod}.
* Få upp en ok visualisering av datan, eller bara visa en tabell med datan.
* Skulle folk svara på dessa meddelanden?
* Om ni fick detta… skulle ni svara på ett sådant sms med hur du mår? Enkel POLL. Svara med {mobilen} om du skulle kunna tänka dig svara på sådana utskick. Du kan läsa mer på https://victoriawagman.se/status46



DemoFHM (kommer vara ifrån FHM!)
—> men sedan kommer sms komma ifrån…

Första meddelandet

+46 … .. .. .. …



Andra meddelandet
Hur mår du?



! Hantera inkommande meddelanden.
Hur mår du?



Vidareutveckling
* Insamling kan ske via fler källor än sms på sikt. Ex. App -> då kan du trycka på stiliga ikoner, tillåta GPS-koordinater, användaren behöver knappt skriva något bara “samma som igår”. Men då kan det bli klurigare hur en ska identifieras men samtidigt kunna vara anonym
* Vi hade varit bättre förberedda om det varit krig än det här?! Helt galet.



Skriva PM till folk när det är redo att samla in ….
Hej!

Kan ni testa att svara?
Jag skulle vilja se vad/hur folk svarar

Du kan se data här ->


Om jag vill ha hjälp med att nå ut till folk… ->




Om jag lanserar den här med en såpass öppen fråga (inte bara svara med din temperatur).

DATA -> hantera den som du vill..

Ett sätt att hantera den på —> emojis!  :D
Lite logik. 



Följd-frågor om det är svårt att förstå vad de menade. Vad det det här du menade?
Extrahera ut datan…
Men mer avancerade saker?  Ramverk… 

Tankar framåt.



Har du fått ett sms ifrån {numret} som frågar dig hur du mår?
Ja, det är folkhälsomyndigheten som undrar.

Har du inte fått något sms men vill hjälpa till ändå? 
Lägg upp numret som det går att SMS:a till på eget initiativ.
Inte fått SMS i ditt område? Du kan själv välja att rapportera in hur du mår genom att skicka ett sms till {  }
Mvh FHM
