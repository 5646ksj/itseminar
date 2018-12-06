import re
import requests
s=requests.Session()
req=s.get('https://bank.shinhan.com/index.jsp#020501010100')
#req.encoding='euc-kr'
html=req.text
print(html)
'''
body=re.search('<div id="grd_list_1+.*?tabinde="0">', html, re.I|re.S)
if(body is None) :
	print("No <body> in html")
	exit()
body=body.group()
print(body)
'''
#bodys=body.split()
#text=re.sub('<.+?>','',body,0, re.I|re.S)
#list=text.append()
#print(list)
#f=open('shlist.py','w')
#f.write(text)
