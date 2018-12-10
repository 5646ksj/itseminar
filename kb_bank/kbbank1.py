import re
import requests
s=requests.Session()
req=s.get('https://okbfex.kbstar.com/quics?page=C015690#loading')
#req.encoding='euc-kr'
html=req.text
body=re.search('<tbody id="AllDsp1".*?</tbody>', html, re.I|re.S)
if(body is None) :
	print("No <body> in html")
	exit()
body=body.group()
bodys=body.split()
text=re.sub('<.+?>','',body,0, re.I|re.S)
list=text.append()
print(list)
f=open('kblist.py','w')
f.write(text)
#print(html)
#line=html.readline()
#print(line)
#result=re.search("('USD')",html).group()
#print(result)
#test=usd.findall(html)
#print(usd)
#startIndex=usd.start()
#endIndex=usd.end()
#result='startIndex: {}, endIndex: {}, find: {}'.format(
#	startIndex,
#	endIndex,
#	usd[startIndex:endIndex]
#)
#print(result)
