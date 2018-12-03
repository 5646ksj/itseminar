import re
import requests
f = open('output.php','w')
s=requests.Session()
req=s.get('https://okbfex.kbstar.com/quics?page=C015690#loading')
html=req.text
#buf = str(html)
#line = buf.splitlines()
body = re.search('<div id="showTable">.*?</table>',html,re.I|re.S)

#print(line[0:2])
f.write(body.group())
#f.close
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




