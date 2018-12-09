import re
import requests
s=requests.Session()
req=s.get('https://bank.shinhan.com/index.jsp#020501010000')
#req.encoding='euc-kr'
html=req.text
f1=open('shhtml.txt','w')
f1.write(html)
f=open('shhtml.txt','r')
#print(type(f))
#linecount=0
#for line in f.read():
#	linecount+=1
#print(linecount)
#shbanklist
for i in f.read() :
	body=re.search('<table id="grd_list.*+?</nobr>', html, re.I|re.S)
	if(body is None) :
        	print("No <body> in html")
        	exit()
	body=body.group()
	print(body)
#bodys=body.split()
#text=re.sub('<.+?>','',body,0, re.I|re.S)
#list=text.append()
#print(list)
#f=open('shlist.py','w')
#f.write(text)

