import re
import requests
f = open('output.txt','w')
s=requests.Session()
req=s.get('https://okbfex.kbstar.com/quics?page=C015690#loading')
html=req.text
f.write(html)
f.close
#print(html)

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




