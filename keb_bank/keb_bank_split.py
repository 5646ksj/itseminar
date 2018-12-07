import re
import requests
f = open('keb_bank_output.php','w')
s=requests.Session()
req=s.get('http://fx.kebhana.com/FER1101C.web?q=')
html=req.text
body = re.search('<div id="gridPosition">.*?</table>',html,re.I|re.S)
if(body is None) :
	print("No <body> in html")
	exit()
body=body.group()
bodys=body.split()
text=re.sub('<.+?>','',body,0, re.I|re.S)
text=re.sub('&nbsp;| |(\n){2}|\t','',text)
print(text)
f=open('keb_bank_list.py','w')
f.write(text)
f.close
