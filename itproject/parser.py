import requests
from bs4 import BeautifulSoup
import json
import os

BASE_DIR=os.path.dirname(os.path.abspath(__file__))

req=requests.get('https://datalab.naver.com/keyword/realtimeList.naver?where=search')

html=req.text
soup=BeautifulSoup(html, 'html.parser')

my_titles=soup.find(
'#content > div > div.keyword_carousel > div > div > div:nth-child(1) > div > div > a > span'
)

print(my_titles)
data ={}

for title in my_titles:
	data[title.text]=title.get('href')
	print(data[title.text])
with open (os.path.join(BASE_DIR, 'result.json'), 'w+') as json_file:
	json.dump(data, json_file)
	

