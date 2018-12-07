import re
import requests
s=requests.Session()
req=s.get('https://www.busanbank.co.kr/ib20/mnu/FPMFRX206001001#wrap')
#req.encoding='euc-kr'
html=req.text
body=re.search('<tr class="txt-r".*?</tbody>', html, re.I|re.S)
if(body is None) :
        print("No <body> in html")
        exit()
body=body.group()
bodys=body.split()
text=re.sub('<.+?>','',body,0, re.I|re.S)
text=re.sub('&nbsp;| |(\n){2}|\t','',text)
#print(text)
f=open('bnk_list.py','w')
f.write(text)
f.close

