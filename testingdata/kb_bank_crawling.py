import re
import requests
f = open('output.php','w')
s=requests.Session()
req=s.get('https://okbfex.kbstar.com/quics?page=C015690#loading')
html=req.text
body = re.search('<div id="showTable">.*?</table>',html,re.I|re.S)
f.write(body.group())
f.close
