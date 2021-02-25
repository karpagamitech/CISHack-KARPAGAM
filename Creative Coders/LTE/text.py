
from gtts import gTTS
import docx2txt
import os 
mytext = 'hello DHINESH' 
language = 'en'
myobj = gTTS(text=mytext, lang=language, slow=False)   
myobj.save("welcome.mp3")  
os.system("start  welcome.mp3")
    
