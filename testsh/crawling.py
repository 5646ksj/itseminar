import re
import requests
f = open('output.php','w')
s=requests.Session()
req=s.get('http://fx.kebhana.com/FER1101C.web?q=')
html=req.text
#print(html)
body = re.search('<div id="gridPosition">.*?</table>',html,re.I|re.S)
f.write(body.group())
f.write(html)
f.close
