import pyttsx3

engine = pyttsx3.init()
def parler(texte):
    engine.say(texte)
    engine.runAndWait()


def getVoix(vo):
    voices = engine.getProperty('voices')
    if vo ==1 :
        engine.setProperty('voice',voices[0].id)
    
    if vo == 2:
        engine.setProperty('voice',voices[1].id)
    
    if vo == 3:
        engine.setProperty('voice',voices[2].id)
    
    if vo == 4:
        engine.setProperty('voice',voices[3].id)


while True :
    id = int(input("tapez le numéro de la voix désirer \n"))
    getVoix(id)
    parler("hello  I'm a voice assistance")


    
    

    
